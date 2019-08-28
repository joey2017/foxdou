<?php

namespace App\Passport\Service;

use App\Common\Service\SmsService;
use App\Common\Service\BaseService;
use App\Passport\Model\SafeCenter;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class MobileMsgNoticeService extends BaseService {

    private $session;
    private $smsService;

    public function __construct(SessionInterface $session, SmsService $smsService) {
        $this->session    = $session;
        $this->smsService = $smsService;
    }

    //发送手机验证码
    public function sendMobileVerifyCode($verify_code_type, $mobile, $img_verify_code = '', $check_img_verify_code = true, $recaptchaService) {
        if (empty(SafeCenter::$verify_code_type[$verify_code_type])) {
            return ['status' => false, 'msg' => '非法的手机验证码类型'];
        }
        if (!$mobile) {
            return ['status' => false, 'msg' => '手机号码不能为空'];
        }
        if (!preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile)) {
            return ['status' => false, 'msg' => '手机号码格式不正确'];
        }
        if ($check_img_verify_code) {
            if (!$img_verify_code) {
                return ['status' => false, 'msg' => '图形验证码不能为空'];
            }

            if (!$recaptchaService->verifyRecaptcha($img_verify_code, 'verify_code')) {//参数二 后面要优化
                return ['status' => false, 'msg' => '图形验证码错误'];
            }
        }
        $session_key  = md5($mobile . $verify_code_type . 'mobile_verify_code');
        $session_code = $this->session->get($session_key);
        $send_time    = time();
        $expire_time  = $send_time + 5 * 60;
        if ($session_code && $session_code['expire_time'] > $send_time && $send_time - ($session_code['expire_time'] - 5 * 60) <= 60) {
            return ['status' => false, 'msg' => '您的操作过于频繁，请稍后再尝试'];
        }

        $verify_code = rand(111111, 999999);
        //将发送的验证码保存在session中，等待最终验证
        $this->session->set($session_key, ['verify_code' => $verify_code, 'expire_time' => $expire_time]);
        //删除发生错误的session
        $this->session->remove($session_key . '_err');
        $send = $this->sendMobileMsg($mobile, SafeCenter::$verify_code_type[$verify_code_type]['tid'], $verify_code);
        if (!$send[0]) {
            return ['status' => false, 'msg' => $send[1]];
        }
        return ['status' => true, 'msg' => '发送成功'];
    }

    public function checkMobileVerifyCode($verify_code_type, $mobile, $verify_code, $un = true) {
        if (!$verify_code) {
            return ['status' => false, 'msg' => '手机验证码不能为空'];
        }

        if (!$mobile) {
            return ['status' => false, 'msg' => '验证手机号码发生错误'];
        }

        if (empty(SafeCenter::$verify_code_type[$verify_code_type])) {
            return ['status' => false, 'msg' => '错误的手机验证码类型'];
        }

        $session_key = md5($mobile . $verify_code_type . 'mobile_verify_code');

        $session_key_err = $session_key . '_err';

        $session_code = $this->session->get($session_key);

        if (!$session_code || $session_code['expire_time'] < time()) {
            $this->session->remove($session_key);
            return ['status' => false, 'msg' => '手机验证码已经过期，请重新发送'];//手机验证码已经过期，请重新发送
        }

        if (!$session_code['verify_code'] || $verify_code != $session_code['verify_code']) {
            $this->session->set($session_key_err, $this->session->get($session_key_err) + 1);
            $err_num = $this->session->get($session_key_err);
            if ($err_num > 3) {
                return ['status' => false, 'msg' => '验证次数过多，请重新发送'];
            }
            return ['status' => false, 'msg' => '手机验证码错误'];
        }

        if ($un) {
            $this->session->remove($session_key);
        }
        return ['status' => true, 'msg' => '验证通过'];
    }

    public function sendMobileMsg($mobile, $tmp, $content) {
        return $this->smsService->sendSms($mobile, $tmp, $content);
    }

}