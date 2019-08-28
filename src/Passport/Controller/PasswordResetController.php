<?php
namespace App\Passport\Controller;

use App\Common\Model\User\User;
use App\Common\Service\RecaptchaService;
use App\Passport\Model\SafeCenter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PasswordResetController extends PassportBaseController {

    /**
     * @Route("/registerpassword-reset", name="passport_user_password_reset_index")
     */
    public function indexAction(Request $request, RecaptchaService $recaptchaService) {
        $type = $request->get('type');

        if ($request->getMethod() === Request::METHOD_GET) {
            return $this->render('Passport/SafeCenter/uesr_not_login_inspect.twig', ['type' => $type, 'operation' => SafeCenter::$operation]);
        }

        $user_name   = $request->request->get('user_name');
        $verify_code = $request->request->get('verify_code');
        if (!$recaptchaService->verifyRecaptcha($verify_code, 'verify_code')) {
            return ['status' => false, 'msg' => '图形验证码错误'];
        }

        $user = User::query('SELECT * FROM ' . User::table_name() . ' WHERE user_name = ? OR mobile = ? OR email = ? LIMIT 1', [$user_name, $user_name, $user_name])->fetch();

        if (empty($user)) {
            return ['status' => false, 'msg' => '用户不存在'];
        }
        $request->getSession()->set('SafeInspect', [
            'user'       => $user,
            'type'       => $type,
            'login'      => $this->getPassportUser()->id == $user['id'] ? true : false,
            'need_login' => false,
            'time'       => time()
        ]);

        return ['status' => true];
    }

}
