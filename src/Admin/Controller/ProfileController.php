<?php
namespace App\Admin\Controller;

use App\Admin\Model\AdminOperationLog;
use App\Admin\Service\AdminOperatonLogManager;
use App\Admin\Service\AdminUserManager;
use App\Common\Model\User\User;
use Symfu\SimpleFormBundle\Form;
use SimpleRecord\Exception\ModelException;
use SimpleRecord\Exception\SimpleRecordException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;

class ProfileController extends AdminBaseController {

    /**
     * @Route("/profile/change-password", name="admin_profile_change_password")
     */
    public function changePasswordAction(Request $request, AdminUserManager $adminUserManager, AdminOperatonLogManager $adminOperatonLogManager, TranslatorInterface $translator, Form $form) {
        $form->init([
            'old_password'         => ['required, min_length[5], max_length[50]'],
            'new_password'         => ['required, min_length[5], max_length[50]'],
            'new_password_confirm' => ['required, min_length[5], max_length[50], matches[new_password]'],
        ]);
        if (!$form->validate($request->request)) {
            $errors = [];
            foreach ($form->getErrors() as $key => $msgKey) {
                $errors[$key] = $translator->trans($msgKey);
            }
            return ['status' => false, 'msg' => '参数错误', 'errors' => $errors];
        }

        $user    = $this->getAdminUser();
        $context = ['user_id' => $user->id];

        list($valid, $error) = $adminUserManager->verifyPassword($user, $form->old_password);
        if (!$valid) {
            $message            = "用户 {$user} 修改密码失败，错误信息：{$error}";
            $context['message'] = $error;
            $adminOperatonLogManager->createLog($user, AdminOperationLog::OPERATION_EDIT, AdminOperationLog::SUBJECT_ADMIN_USER, $message, $request->getClientIp(), $context);

            return ['status' => false, 'msg' => $error, 'errors' => ['old_password' => $error]];
        }

        $user->password = $form->new_password;
        try {
            $user->save(true, true);
            return ['status' => true, 'msg' => "修改密码成功"];
        } catch (\Exception $e) {
            $this->logger->error("用户 {$user} 修改密码失败", ['user_id' => $user->id, 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            return ['status' => false, 'msg' => "修改密码失败，请稍后重试"];
        }
    }

}
