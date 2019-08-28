<?php
namespace App\Common\Service;

use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Core\Profile\DefaultProfile;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SmsService extends BaseService {
    /**
     * @var SessionInterface
     */
    private $session;

    const SIGN_NAME    = '你行我动';
    const PRODUCT_NAME = '狐豆';

    const TEMPLATE_REGISTER            = 'SMS_37595179'; // 注册成为狐豆用户
    const TEMPLATE_UPDATE_PASSWORD     = 'SMS_37595173'; // 修改登录密码
    const TEMPLATE_RESET_PASSWORD      = 'SMS_37595179'; // 找回登录密码
    const TEMPLATE_UPDATE_PAY_PASSWORD = 'SMS_38800061'; // 修改支付密码
    const TEMPLATE_RESET_PAY_PASSWORD  = 'SMS_37595179'; // 找回支付密码
    const TEMPLATE_MISC                = 'SMS_37595172'; // 执行其他重要操作

    const SALT = '67F1A7DA-2B75-4043-96CD-4BDEEE83F1C6';

    public function __construct(SessionInterface $session, LoggerInterface $logger) {
        parent::__construct($logger);
        $this->session = $session;
    }

    public function sendVerifySms($recipient, $templateId) {
        $now        = time();
        $lastSentAt = (int)$this->session->get("sms:last_sent_at");
        if ($lastSentAt > 0 && ($now - $lastSentAt) < 60) {
            // 限制一分钟内只能发一条
            return [false, '您的操作过于频繁，请稍后再尝试'];
        }

        $this->session->set("sms:last_sent_at", $now);

        $verifyCode = rand(111111, 999999);

        $result = $this->sendSms($recipient, $templateId, $verifyCode);
        if($result[0]) {
            $this->session->set("sms:verify_info", ['code' => md5(self::SALT . $verifyCode), 'expires_at' => $now + 60 * 5]); // 有效期 5 分钟
        }

        return $result;
    }

    public function verifySmsCode($code, &$msg = null, $clear = false) {
        $verifyInfo = $this->session->get("sms:verify_info");
        if($clear) {
            $this->session->remove("sms:verify_info");
        }

        if(!$verifyInfo || $verifyInfo['expires_at'] < time()) {
            $msg = '验证码过期，请重新验证';
            return false;
        }

        if($verifyInfo['code'] !== md5(self::SALT . $code)) {
            $msg = '验证码错误，请重新验证';
            return false;
        } else {
            $msg = '验证成功';
            return true;
        }
    }

    public function clear() {
        $this->session->remove("sms:verify_info");
    }

    public function sendSms($recipient, $templateId, $code) {

        $params["PhoneNumbers"] =$recipient;
        $params["SignName"] =self::SIGN_NAME;
        $params["TemplateCode"] =$templateId;
        $params['TemplateParam'] = json_encode(["code" => $code, "product" => self::PRODUCT_NAME]);
        $params['Action'] = "SendSms";

        try {
            $result = AliyunSmsSender::request($params);
            if (!$result) {
                $this->logger->error('发送短信失败，请求无响应或发生错误');
                return [false, '发送短信失败，请重试'];
            }

            if ($result['Code'] !== 'OK') {
                $this->logger->error('发送短信失败，返回状态码不对', $result);
                return [false, '发送短信失败，请重试'];
            }

            return [true, ''];
        } catch (\Exception $e) {
            $this->logger->error('发送短信失败，请检查', ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            return [false, '发送短信失败，请重试'];
        }
    }
}

class AliyunSmsSender {

    public static $accessKeyId='LTAIKRK5OpZBTCYi';
    public static $accessKeySecret='1me9251Q7cUkGIEJWQcayCP4k16bOa';
    public static $domain='dysmsapi.aliyuncs.com';
    /**
     * 生成签名并发起请求
     *
     */
    public static function request($params, $security=true) {
        $apiParams = array_merge(array (
            "RegionId" => "cn-hangzhou",
            "Version" => "2017-05-25",
            "SignatureMethod" => "HMAC-SHA1",
            "SignatureNonce" => uniqid(mt_rand(0,0xffff), true),
            "SignatureVersion" => "1.0",
            "AccessKeyId" => self::$accessKeyId,
            "Timestamp" => gmdate('Y-m-d\TH:i:s\Z'),
            "Format" => "JSON",
        ), $params);
        ksort($apiParams);

        $sortedQueryStringTmp = "";
        foreach ($apiParams as $key => $value) {
            $sortedQueryStringTmp .= "&" . self::encode($key) . "=" . self::encode($value);
        }

        $stringToSign = "GET&%2F&" . self::encode(substr($sortedQueryStringTmp, 1));

        $sign = base64_encode(hash_hmac("sha1", $stringToSign, self::$accessKeySecret . "&",true));

        $signature = self::encode($sign);

        $url = ($security ? 'https' : 'http')."://".self::$domain."/?Signature={$signature}{$sortedQueryStringTmp}";

        try {
            $content = self::fetchContent($url);
            return json_decode($content,true);
        } catch( \Exception $e) {
            return false;
        }
    }

    private static function encode($str)
    {
        $res = urlencode($str);
        $res = preg_replace("/\+/", "%20", $res);
        $res = preg_replace("/\*/", "%2A", $res);
        $res = preg_replace("/%7E/", "~", $res);
        return $res;
    }

    private static function fetchContent($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "x-sdk-client" => "php/2.0.0"
        ));

        if(substr($url, 0,5) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        $rtn = curl_exec($ch);
        if($rtn === false) {
            throw new \Exception("[CURL_" . curl_errno($ch) . "]: " . curl_error($ch));
        }
        curl_close($ch);
        return $rtn;
    }
}
