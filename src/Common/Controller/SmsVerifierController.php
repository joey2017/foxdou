<?php

namespace App\Common\Controller;

use App\Common\Service\RecaptchaService;
use App\Common\Service\SmsService;
use App\Common\Utils\MobileNumberChecker;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SmsVerifierController extends BaseController {
    /**
     * @Route("/sms-verifier/send-sms", name="common_sms_verifier_send_sms")
     */
    public function sendSmsAction(Request $request, SmsService $smsService, RecaptchaService $recaptchaService) {
        $recipient = $request->request->get('mobile');
        $recaptcha = $request->request->get('recaptcha');
        if(!MobileNumberChecker::isValidNumber($recipient)) {
            return ['status' => false, 'msg' => '手机号码不正确'];
        }

        if(!$recaptchaService->verifyRecaptcha($recaptcha)) {
            return ['status' => false, 'msg' => '验证码错误'];
        }

        list($succeed, $msg) = $smsService->sendVerifySms($recipient, SmsService::TEMPLATE_REGISTER);

        return ['status' => $succeed, 'msg' => $msg];
    }

    /**
     * @Route("/sms-verifier/send-verify-code-by-email", name="common_sms_verifier_send_verify_code_by_email")
     */
    public function sendVerifyCodeByEmailAction(Request $request, \Swift_Mailer $mailer, RecaptchaService $recaptchaService, SessionInterface $session) {
        $email = $request->request->get('email');
        $recaptcha = $request->request->get('recaptcha');
        if(!$email) {
            return ['status' => false, 'msg' => '邮件地址不正确'];
        }

        if(!$recaptchaService->verifyRecaptcha($recaptcha)) {
            return ['status' => false, 'msg' => '验证码错误'];
        }
        $verify_code  = rand(111111, 999999);
        $session_key  = md5($email . 'register_email_verify_code');
        $session_code = $session->get($session_key);
        $send_time    = time();
        $expire_time  = $send_time + 5 * 60;

        if ($session_code && isset($session_code['expire_time']) && $session_code['expire_time'] > $send_time && $send_time - ($session_code['expire_time'] - 5 * 60) <= 60) {
            return ['status' => false, 'msg' => '您的操作频率过于频繁，请稍候再试'];
        }

        $session->set($session_key, ['verify_code' => $verify_code, 'expire_time' => $expire_time]);
        $context = ['email' => $email, 'title' => '您正在狐豆科技进行企业注册, 本次注册验证码是：' . $verify_code . '。验证码将在5分钟后失效，请尽快完成操作，感谢您的支持！'];

        try {
            $message = (new \Swift_Message())
                ->setTo($email)
                ->setFrom('safe@foxdou.com')
                ->setSubject($context['title'])
                ->setBody($verify_code, 'text/html');

            $number = $mailer->send($message);
        } catch (\Exception $e) {
            $this->logger->error('发送激活邮件失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw $e;
        }

        return ['status' => (boolean)$number, 'msg' => '发送'.($number ? '成功' : '失败')];
    }


}
