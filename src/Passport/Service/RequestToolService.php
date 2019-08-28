<?php

namespace App\Passport\Service;

use App\Common\Service\BaseService;

class RequestToolService extends BaseService {

    /**
     * 字符串参数型 http请求
     * @param $url
     * @param $data //字符串参数
     * @return bool|mixed //请求错误返回false|正确返回数据
     */
    public static function http_str_post($url, $data, $user_ip = '') {
        $user_ip = $user_ip ? $user_ip : \Yii::$app->request->userIP;
        //curl初始化
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-FORWARDED-FOR:' . $user_ip, 'CLIENT-IP:' . $user_ip]);//IP
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        $return = curl_exec($ch);
        //出错检测
        if (curl_errno($ch)) {
            echo "CURL错误代码为" . curl_errno($ch);
            return false;
        } else {
            return $return;
        }
        curl_close($ch);
    }

    public static function http_str_cookie($url, $data, $cookie) {
        //curl初始化
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5." . rand(0, 100) . " (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        $return = curl_exec($ch);
    }

    public static function http_get($url, $header = []) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPGET, 1);
        if ($header) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
        // curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($ch, CURLOPT_HEADER, 1);

        // CURLOPT_HEADER=>1,//是否返回响应头
        //https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        $re = curl_exec($ch);
        curl_close($ch);
        return $re;
    }

    public static function send_request($url, $data = '', $cookie = '', $header = [], $method = 'POST') {
        $ch      = curl_init();
        $options = [
            // CURLOPT_POST=>1,//post请求
            CURLOPT_CUSTOMREQUEST  => $method,//请求类型必须大写
            // CURLOPT_HEADER=>1,//是否返回响应头
            CURLOPT_POSTFIELDS     => $data,//请求参数
            CURLOPT_URL            => $url,//请求地址
            CURLOPT_COOKIE         => $cookie,//请求cookie
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_RETURNTRANSFER => 1,
            // CURLOPT_USERAGENT=>"Mozilla/5.".rand(0,100)." (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0",
            // CURLOPT_COOKIEJAR=>'cookie.txt',
            // CURLOPT_COOKIEFILE=>'cookie.txt',
        ];
        if ($header) {
            $options[CURLOPT_HTTPHEADER] = $header;
        }
        //https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            $options[CURLOPT_SSL_VERIFYPEER] = false;
            $options[CURLOPT_SSL_VERIFYHOST] = false;
        }
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        //出错检测
        $error = curl_errno($ch);
        if ($error) {
            echo "请求发生错误，CURL错误代码为" . $error;
            return false;
        }
        curl_close($ch);
        return $result;
    }
}