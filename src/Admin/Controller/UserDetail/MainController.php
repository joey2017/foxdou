<?php

namespace App\Admin\Controller\UserDetail;

use App\Admin\Controller\AdminBaseController;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\RealNameAuthenticationInfo;
use App\Common\Model\User\User;
use App\Platform;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;

class MainController extends AdminBaseController {
    use MenuTraits;

    /**
     * @Route("/user-details/main/details-main", name="admin_user_details_main_details_main")
     *
     */
    public function detailsMainAction(Request $request) {
        return $this->render('Admin/UserDetail/details_main.twig',
            [
                'id'               => $request->query->get('id'),
                'left_route_path'  => 'admin_user_details_main_left_main',
                'right_route_path' => 'admin_user_details_main_basic_info'
            ]);
    }

    /**
     * @Route("/user-details/main/left-main", name="admin_user_details_main_left_main")
     *
     */
    public function leftMainAction(Request $request) {
        return $this->render('Admin/UserDetail/left_main.twig', ['left_menu' => $this->getMenu('main'), 'id' => $request->query->get('id')]);
    }

    /**
     * @Route("/user-details/main/basic-info", name="admin_user_details_main_basic_info")
     */
    public function basicInfoAction(Request $request) {
        $userId = $request->query->get('id', '0');
        $user   = User::find($userId);
        if (empty($user)) {
            return ['status' => false, 'msg' => '未找到指定用户'];
        }
        $data = [
            'ROLE_OPEN_PLATFORM' => 'OpenPlatformAccount',
            'ROLE_RESELLER'      => 'ResellerAccount',
            'ROLE_SUPPLIER'      => 'SupplierAccount',
            'ROLE_ADMIN'         => 'all'
        ];

        $array              = explode(',', $user->roles);
        $userattr           = $user->attributes();
        $userattr['opened'] = [];

        if (!empty($array)) {
            foreach ($array as $role) {
                if (empty($data[$role])) {
                    continue;
                }
                switch ($data[$role]) {
                case 'OpenPlatformAccount':
                    // 开放平台
                    $userattr['opened'][Platform::OPEN_PLATFORM] = $user->getOpenPlatformAccount();
                    break;
                case 'ResellerAccount':
                    // 代理商
                    $userattr['opened'][Platform::RESELLER] = $user->getResellerAccount();
                    break;
                case 'SupplierAccount':
                    // 供应商
                    $userattr['opened'][Platform::SUPPLIER] = $user->getSupplierAccount();
                    break;
                default:
                    $userattr['opened'][Platform::OPEN_PLATFORM] = $user->getOpenPlatformAccount();
                    $userattr['opened'][Platform::RESELLER] = $user->getResellerAccount();
                    $userattr['opened'][Platform::SUPPLIER] = $user->getSupplierAccount();
                    break;
                }
            }
        }

        return $this->render("Admin/UserDetail/Main/basic_info.twig",
            [
                'left_menu' => $this->getMenu('main'),
                'user'      => $userattr,
                'platform'  => Platform::PLATFORMS
            ]
        );
    }

    /**
     * @Route("/user-details/main/real-name-info", name="admin_user_details_main_real_name_info")
     */
    // 实名认证
    public function realNameInfoAction(Request $request) {
        $user_id = $request->query->getInt('id');
        $user    = RealNameAuthenticationInfo::first(
            ['user_id' => $user_id],
            ['select' => 'user_id,legal_person_name as name,legal_person_identity_card_no as card_id,user_type,legal_person_address as address']
        );

        if (empty($user)) {
            return ['status' => false, 'msg' => '暂无相关数据'];
        }

        return $this->render("Admin/UserDetail/Main/real_name_info.twig", ['user' => $user]);
    }

    /**
     * @Route("/user-details/main/real-name-info-pic", name="admin_user_details_main_real_name_info_pic")
     * 认证证件照片
     */
    public function realNameInfoPicAction(Request $request) {
        $user_id = $request->query->getInt('id');
        $user    = RealNameAuthenticationInfo::first(
            ['user_id' => $user_id],
            [
                'select' => 'user_id,user_type,positive_photo_of_legal_person_identity_card as positive,
                negative_photo_of_legal_person_identity_card as negative,hand_photo_of_legal_person_identity_card as hand_photo,
                business_license_photo as business_license'
            ]
        );
        //$user_type=$data['user_type'];
        //$data = SiminVerify::get_verify_img($user_id,$data['user_type']);
        return $this->render('Admin/UserDetail/Main/real_name_info_pic.twig', ['user' => $user]);
    }

    /**
     * @Route("/user-details/main/real-name-info-history", name="admin_user_details_main_real_name_info_history")
     * 历史认证
     */
    public function realNameInfoHistoryAction(Request $request, Form $form) {
        $user_id = $request->query->getInt('id');

        if ($request->query->count() < 1) {
            $user['user_id'] = $user_id;
            return $this->render('Admin/UserDetail/Main/real_name_info_history.twig', ['user' => $user]);
        }

        $form->init([
            'id'    => ['integer'],
        ]);

        list($history, $total) = RealNameAuthenticationInfo::paginate(
            ['user_id' => $user_id],
            ['select' => 'business_name,user_type,business_license_no,legal_person_name,legal_person_identity_card_no as card_id,legal_person_address as address,submission_of_authentication_time as sub_time,real_name_authentication_finish_time as complete_time'],
            (int)$form->page,
            (int)$form->limit
        );

        return ['status' => true, 'msg' => '获取成功', 'total' => $total, 'data' => $history];

    }


    /**
     * @Route("/user-details/main/account-safety", name="admin_user_details_main_account_safety")
     */
    public function accountSafetyAction(Request $request) {
        $user_id = $request->query->getInt('id');
        $user    = User::first(['id' => $user_id]);
        return $this->render("Admin/UserDetail/Main/account_safety.twig", ['user' => $user]);
    }

    /**
     * @Route("/user-details/main/edit-info", name="admin_user_details_main_edit-info")
     */
    public function editInfoAction(Request $request) {
        $password = $request->request->get('password');
        $obj      = $request->request->get('obj');
        $val      = $request->request->get('val');
        $setLogin = $request->request->get('setLogin');

        //$admins_status=\Yii::$app->getSecurity()->validatePassword($password,$this->admins['password']);
        /*if(!$admins_status){
            return ['status'=>false,'msg'=>'安全密码错误'];
        }*/
        if (!$val || !$obj) {
            return ['status' => false, 'msg' => '请填写正确的信息'];
        }
        $upval = [$obj => $val];
        switch ($obj) {
        case 'bind_mobile':
            if ($setLogin == 'yes') {
                if (!User::first(['mobile' => $val])) {
                    $upval = [$obj => $val, 'mobile' => $val];
                } else {
                    return ['status' => false, 'msg' => '该手机已被他人用作登陆账号'];
                }
            }
            break;
        case 'bind_email':
            if ($setLogin == 'yes') {
                if (!User::first(['email' => $val])) {
                    $upval = [$obj => $val, 'email' => $val];
                } else {
                    return ['status' => false, 'msg' => '该邮箱已被他人用作登陆账号'];
                }
            }
            break;
        case 'password':
            $setPassword = UserPassword::setUserPassword('login', $val);
            if (!$setPassword['status']) {
                return $setPassword;
            }
            $upval = [$obj => $setPassword['data']];
            break;
        case 'pay_password':
            $setPassword = UserPassword::setUserPassword('pay', $val);
            if (!$setPassword['status']) {
                return $setPassword;
            }
            $upval = [$obj => $setPassword['data']];
            break;
        default:
            return ['status' => false, 'msg' => '非法操作'];
        }
        if (!User::updateAll($upval, ['id' => $this->user['id']])) {
            return ['status' => false, 'msg' => '修改失败'];
        }
        return ['status' => true, 'msg' => '修改成功'];
    }

    /**
     * @Route("/user-details/main/operation-logs", name="admin_user_details_main_operation_logs")
     */
    public function operationLogsAction(Request $request, Form $form) {
        if ($request->query->count() < 2) {
            return $this->render("Admin/UserDetail/Main/operation_logs.twig", ['id' => $request->query->get('id')]);
        }

        $form->init([
            'id'         => ['integer'],
            // 'ip'         => ['regex[/^([0-9]+\.){3}[0-9]$/]'],
            'user_name'  => ['alpha_numeric'],
            'start_time' => ['date'],
            'end_time'   => ['date'],
        ]);

        if (!$form->validate($request->query)) {
            $error = $form->getErrors();
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        if (($end_time - $start_time) > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        list($data, $total) = OperationLog::paginate(['l.user_id' => $form->id, 'l.add_time' => ['BETWEEN' => [$start_time, $end_time]], 'u.user_name' => $form->username], [
            'select' => 'l.add_time,l.info,l.ip,u.user_name',
            'from'   => User::table_name().' u',
            'joins'  => 'left join '.OperationLog::table_name().' as l on u.id=l.user_id',
            'order'  => 'l.id desc',
        ], $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }
}
