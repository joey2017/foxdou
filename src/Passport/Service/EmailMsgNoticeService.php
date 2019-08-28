<?php

namespace App\Passport\Service;

use App\Common\Service\BaseService;
use App\Passport\Model\SafeCenter;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class EmailMsgNoticeService extends BaseService {

    private $session;
    private $mailer;

    public function __construct(SessionInterface $session, \Swift_Mailer $mailer) {
        $this->session = $session;
        $this->mailer  = $mailer;
    }

    public function sendEmailVerifyCode($verify_code_type, $email, $img_verify_code = '', $check_img_verify_code = true, $recaptchaService) {
        if (!$email) {
            return ['status' => false, 'msg' => '邮箱帐号不能为空'];
        }
        if (empty(SafeCenter::$verify_code_type[$verify_code_type])) {
            return ['status' => false, 'msg' => '非法的邮件类型'];
        }
        if ($check_img_verify_code) {
            if (!$img_verify_code) {
                return ['status' => false, 'msg' => '图形验证码不能为空'];
            }

            if (!$recaptchaService->verifyRecaptcha($img_verify_code, 'verify_code')) {//参数二 后面要优化
                return ['status' => false, 'msg' => '图形验证码错误'];
            }
        }
        $verify_code  = rand(111111, 999999);
        $session_key  = md5($email . $verify_code_type . 'email_verify_code');
        $session_code = $this->session->get($session_key);
        $send_time    = time();
        $expire_time  = $send_time + 5 * 60;
        if ($session_code && isset($session_code['expire_time']) && $session_code['expire_time'] > $send_time && $send_time - ($session_code['expire_time'] - 5 * 60) <= 60) {
            return ['status' => false, 'msg' => '您的操作频率过于频繁，请稍候再试'];
        }
        $this->session->set($session_key, ['verify_code' => $verify_code, 'expire_time' => $expire_time]);
        $this->session->remove($session_key . 'email_err');
        $send_status = $this->sendEmailMsg($email, '您正在' . SafeCenter::$verify_code_type[$verify_code_type]['email_msg'], '您的验证码是：' . $verify_code . '。验证码将在5分钟后失效，请尽快完成操作，感谢您的支持！');
        if (!$send_status) {
            return ['status' => false, 'msg' => '发送失败'];
        }
        return ['status' => true, 'msg' => '发送成功'];
    }

    /**
     *  检测验证码
     * @param      $verify_code_type
     * @param      $email
     * @param      $verify_code
     * @param bool $un
     * @return array
     */
    public function checkEmailVerifyCode($verify_code_type, $email, $email_verify_code, $un = true) {
        $session_key  = md5($email . $verify_code_type . 'email_verify_code');
        $session_code = $this->session->get($session_key);
        if ($session_code['expire_time'] < time()) {
            return ['status' => false, 'msg' => '请填写正确的邮箱验证码'];//验证码已经过期，请重新发送
        }
        if (!$session_code || !isset($session_code['verify_code']) || $email_verify_code != $session_code['verify_code']) {
            $session_key_err = $session_key . 'email_err';
            $this->session->set($session_key_err, $this->session->get($session_key_err) + 1);
            $err_num = $this->session->get($session_key_err);

            if ($err_num > 3) {
                return ['status' => false, 'msg' => '邮箱验证码使用次数过多，请重新发送'];
            }

            return ['status' => false, 'msg' => '邮箱验证码错误'];
        }

        if ($un == true) {
            $this->session->remove($session_key);
        }

        return ['status' => true];
    }

    public function sendEmailMsg($email, $title, $content) {
        $context = ['email' => $email, 'title' => $title];
        //$plainContents = $this->twigEngine->render('/Passport/EmailTemplates/registration_confirm_email.text.twig', $data);

        try {
            $message = (new \Swift_Message())
                ->setTo($email)
                ->setFrom('safe@foxdou.com')
                ->setSubject($title)
                ->setBody($content, 'text/html');
                //->addPart($plainContents, 'text/plain');

            $number = $this->mailer->send($message);
        } catch (\Exception $e) {
            $this->logger->error('发送激活邮件失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw $e;
        }
        return $number;
    }

}