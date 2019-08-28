<?php
namespace App\Passport\Controller;

use App\Common\Model\File;
use App\Common\Model\User\RealNameAuthenticationInfo;
use App\Common\Model\User\User;
use App\Common\Model\User\UserIdentity;
use App\Passport\Form\BusinessIdentitySubmitForm;
use App\Passport\Form\IndividualIdentitySubmitForm;
use SimpleRecord\DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IdentityManagementController extends PassportBaseController
{
    /**
     * @Route("/identity", name="passport_identity_management_index")
     */
    public function indexAction() {
        $currentUser = $this->getUser();

        $data = [
            'read_only' => in_array($currentUser->real_name_status, [UserIdentity::STATUS_PENDING, UserIdentity::STATUS_REVIEW, UserIdentity::STATUS_VERIFIED]),
            'identity'  => $currentUser->getIdentity(true),
        ];

        if($currentUser->real_name_status === UserIdentity::STATUS_VERIFIED) {
            return $this->render("/Passport/IdentityManagement/verified.twig", $data);
        } elseif($currentUser->type === User::TYPE_INDIVIDUAL) {
            return $this->render("/Passport/IdentityManagement/individualIdentityInfo.twig", $data);
        } elseif($currentUser->type === User::TYPE_BUSINESS) {
            return $this->render("/Passport/IdentityManagement/businessIdentityInfo.twig", $data);
        } else {
            throw new \RuntimeException('系统异常');
        }
    }

    /**
     * @Route("/identity/individual/submit", name="passport_identity_management_individual_submit")
     */
    public function individualSubmitAction(Request $request, IndividualIdentitySubmitForm $form) {
        $user = $this->getUser();
        if($user->real_name_status === UserIdentity::STATUS_VERIFIED) {
            return ['status' => false, 'msg' => '您的账号已经通过实名认证，请勿重复提交'];
        }

        if(!$form->validate($request->request)) {
            return ['status' => false, 'errors' => $form->getErrors()];
        }

        if(!$form->entity_license_valid_long_term) {
            if(!$form->entity_license_valid_from || !$form->entity_license_valid_to || strtotime($form->entity_license_valid_from) >= strtotime($form->entity_license_valid_to)) {
                return ['status' => false, 'errors' => ['entity_license_valid_from' => '请正确填写身份证有效期']];
            }
        }

        $disallowedStatuses = [UserIdentity::STATUS_PENDING, UserIdentity::STATUS_REVIEW];
        if(in_array($user->real_name_status, $disallowedStatuses)) {
            return ['status' => false, 'msg' => '您的实名认证信息正在审核中，不能重复提交'];
        }

        try {
            $submitNow = $request->query->getBoolean('submit', 0);
            $context = ['user_id' => $user->id];
            $conditions = ['entity_license_no' => $form->entity_license_no, 'user_id' => ['<>' => $user->id], 'entity_type' => User::TYPE_INDIVIDUAL];
            if(UserIdentity::exists($conditions)) {
                return ['status' => false, 'errors' => ['entity_license_no' => '您的身份证已被其他账户注册']];
            }

            $identity = $user->getIdentity() ?: new UserIdentity();

            // 上传新照片后才做额外的图片检查，如果是以前上传的照片，则不做额外检查，可以减少几次数据库请求
            $frontImage = $backImage = $handheldImage = null;
            if($identity->entity_license_front_image_id != $form->entity_license_front_image_id && !($frontImage = File::find($form->entity_license_front_image_id))) {
                return ['status' => false, 'errors' => ['entity_license_front_image_id' => '请上传身份证正面照片后再提交']];
            }
            if($identity->entity_license_back_image_id != $form->entity_license_back_image_id && !($backImage = File::find($form->entity_license_back_image_id))) {
                return ['status' => false, 'errors' => ['entity_license_back_image_id' => '请上传身份证反面照片后再提交']];
            }
            if($identity->entity_license_handheld_image_id != $form->entity_license_handheld_image_id && !($handheldImage = File::find($form->entity_license_handheld_image_id))) {
                return ['status' => false, 'errors' => ['entity_license_handheld_image_id' => '请上传手持身份证照片后再提交']];
            }

            $identity->set_attributes($form->all());

            $identity->entity_license_front_image_url    = $frontImage    ? $frontImage->url    : $identity->entity_license_front_image_url;
            $identity->entity_license_back_image_url     = $backImage     ? $backImage->url     : $identity->entity_license_back_image_url;
            $identity->entity_license_handheld_image_url = $handheldImage ? $handheldImage->url : $identity->entity_license_handheld_image_url;

            $identity->entity_license_front_image_review_result    = $frontImage    ? UserIdentity::IMAGE_STATUS_UPLOADED : $identity->entity_license_front_image_review_result;
            $identity->entity_license_back_image_review_result     = $backImage     ? UserIdentity::IMAGE_STATUS_UPLOADED : $identity->entity_license_back_image_review_result;
            $identity->entity_license_handheld_image_review_result = $handheldImage ? UserIdentity::IMAGE_STATUS_UPLOADED : $identity->entity_license_handheld_image_review_result;

            $identity->status = UserIdentity::STATUS_PENDING;
            $identity->submitted_at = new DateTime();
            $identity->submission_ip = $request->getClientIp();


            $user->real_name_status = UserIdentity::STATUS_NEW;
            $identity->status = UserIdentity::STATUS_NEW;
            if($submitNow) {
                $user->real_name_status = UserIdentity::STATUS_PENDING;

                $identity->status = UserIdentity::STATUS_PENDING;
                $identity->submitted_at = new DateTime();
                $identity->submission_ip = $request->getClientIp();
            }

            $context = ['user_id' => $user->id, 'entity_license_id' => $identity->id, 'status' => $identity->status];

            User::transaction(function () use($identity, $user) {
                $user->save(true, true);
                $identity->save(true, true);

                return true;
            });

            return ['status' => true, 'msg' => '提交实名认证信息成功，请耐心等待管理员的审核'];
        } catch (\Exception $e) {
            $this->logger->error('保存用户实名认证信息失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ['status' => false, 'msg' => '保存实名认证信息失败，请重新提交'];
        }
    }

    /**
     * @Route("/identity/business/submit", name="passport_identity_management_business_submit")
     */
    public function businessSubmitAction(Request $request, BusinessIdentitySubmitForm $form) {
        $user = $this->getUser();
        if($user->real_name_status === UserIdentity::STATUS_VERIFIED) {
            return ['status' => false, 'msg' => '您的账号已经通过实名认证，请勿重复提交'];
        }

        if(!$form->validate($request->request)) {
            return ['status' => false, 'errors' => $form->getErrors()];
        }

        if(!$form->entity_license_valid_long_term) {
            if(!$form->entity_license_valid_from || !$form->entity_license_valid_to || strtotime($form->entity_license_valid_from) >= strtotime($form->entity_license_valid_to)) {
                return ['status' => false, 'errors' => ['entity_license_valid_from' => '请正确填写营业执照有效期']];
            }
        }

        $disallowedStatuses = [UserIdentity::STATUS_PENDING, UserIdentity::STATUS_REVIEW];
        if(in_array($user->real_name_status, $disallowedStatuses)) {
            return ['status' => false, 'msg' => '您的实名认证信息正在审核中，不能重复提交'];
        }

        try {
            $submitNow = $request->query->getBoolean('submit', 0);
            $context = ['user_id' => $user->id];

            $conditions = ['entity_license_no' => $form->entity_license_no, 'user_id' => ['<>' => $user->id], 'entity_type' => User::TYPE_BUSINESS];
            if(UserIdentity::exists($conditions)) {
                return ['status' => false, 'errors' => ['entity_license_no' => '此营业执照已被注册过账号']];
            }

            $identity = $user->getIdentity() ?: new UserIdentity();

            // 上传新照片后才做额外的图片检查，如果是以前上传的照片，则不做额外检查，可以减少几次数据库请求
            $frontImage = $legalRepresentativeFrontImage = $legalRepresentativeBackImage = $legalRepresentativeHandheldImage = null;
            if($identity->entity_license_front_image_id != $form->entity_license_front_image_id && !($frontImage = File::find($form->entity_license_front_image_id))) {
                return ['status' => false, 'errors' => ['entity_license_front_image_id' => '请上传营业执照照片后再提交']];
            }
            if($identity->biz_legal_representative_id_front_image_id != $form->biz_legal_representative_id_front_image_id && !($legalRepresentativeFrontImage = File::find($form->biz_legal_representative_id_front_image_id))) {
                return ['status' => false, 'errors' => ['biz_legal_representative_id_front_image_id' => '请上传法人身份证正面照片后再提交']];
            }
            if($identity->biz_legal_representative_id_back_image_id != $form->biz_legal_representative_id_back_image_id && !($legalRepresentativeBackImage = File::find($form->biz_legal_representative_id_back_image_id))) {
                return ['status' => false, 'errors' => ['biz_legal_representative_id_back_image_id' => '请上传法人身份证反面照片后再提交']];
            }
            if($identity->biz_legal_representative_id_handheld_image_id != $form->biz_legal_representative_id_handheld_image_id && !($legalRepresentativeHandheldImage = File::find($form->biz_legal_representative_id_handheld_image_id))) {
                return ['status' => false, 'errors' => ['biz_legal_representative_id_handheld_image_id' => '请上传法人手持身份证照片后再提交']];
            }

            $identity->set_attributes($form->all());

            $identity->entity_license_front_image_url    = $frontImage                       ? $frontImage->url    : $identity->entity_license_front_image_url;
            $identity->entity_license_back_image_url     = $legalRepresentativeFrontImage    ? $legalRepresentativeFrontImage->url     : $identity->entity_license_back_image_url;
            $identity->entity_license_back_image_url     = $legalRepresentativeBackImage     ? $legalRepresentativeBackImage->url      : $identity->entity_license_back_image_url;
            $identity->entity_license_back_image_url     = $legalRepresentativeHandheldImage ? $legalRepresentativeHandheldImage->url  : $identity->entity_license_back_image_url;

            $identity->entity_license_front_image_review_result                       = $frontImage                       ? UserIdentity::IMAGE_STATUS_UPLOADED : $identity->entity_license_front_image_review_result;
            $identity->biz_legal_representative_id_front_image_review_result    = $legalRepresentativeFrontImage    ? UserIdentity::IMAGE_STATUS_UPLOADED : $identity->biz_legal_representative_id_front_image_review_result;
            $identity->biz_legal_representative_id_back_image_review_result     = $legalRepresentativeBackImage     ? UserIdentity::IMAGE_STATUS_UPLOADED : $identity->biz_legal_representative_id_back_image_review_result;
            $identity->biz_legal_representative_id_handheld_image_review_result = $legalRepresentativeHandheldImage ? UserIdentity::IMAGE_STATUS_UPLOADED : $identity->biz_legal_representative_id_handheld_image_review_result;

            $user->real_name_status = UserIdentity::STATUS_NEW;
            $identity->status = UserIdentity::STATUS_NEW;
            if($submitNow) {
                $user->real_name_status = UserIdentity::STATUS_PENDING;

                $identity->status = UserIdentity::STATUS_PENDING;
                $identity->submitted_at = new DateTime();
                $identity->submission_ip = $request->getClientIp();
            }

            $context = ['user_id' => $user->id, 'entity_license_id' => $identity->id, 'status' => $identity->status];

            User::transaction(function () use($identity, $user) {
                $user->save(true, true);
                $identity->save(true, true);

                return true;
            });

            return ['status' => true, 'msg' => '提交实名认证信息成功，请耐心等待管理员的审核'];
        } catch (\Exception $e) {
            $this->logger->error('保存用户实名认证信息失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ['status' => false, 'msg' => '保存实名认证信息失败，请重新提交'];
        }
    }
}
