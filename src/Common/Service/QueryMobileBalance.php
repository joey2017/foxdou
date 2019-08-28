<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-16
 * Time: 23:05
 */
namespace App\Common\Service;

use App\Common\Model\MobileBalanceQuery;
use Symfony\Component\HttpFoundation\Request;

class QueryMobileBalance extends BaseService {

    public static $other = [];

    public static function getResult($mobile, $platform_int_code, $user_id, $repeat_num = 0, $other = [], Request $request) {
        self::$other = $other;
        $query_num   = 0;
        do {
            $query_num++;
            $query = self::query($mobile, $other);
        } while (!$query['status'] && $query_num < $repeat_num);

        MobileBalanceQuery::create([
            'ip'          => $request->getClientIp(),
            'request'     => $request->getRequestUri(),
            'params'      => json_encode($request->request->all(), JSON_UNESCAPED_UNICODE),
            'response'    => json_encode($query, JSON_UNESCAPED_UNICODE),
            'mobile'      => $mobile,
            'user_id'     => $user_id,
            'platform_id' => $platform_int_code,
            'status'      => $query['status'] ? 1 : 0,
            'query_num'   => $query_num,
            'add_time'    => time()
        ]);
        if (!$query['status']) {
            return ['status' => false, 'msg' => '查询失败'];
        }
        return ['status' => true, 'name' => $query['name'], 'balance' => $query['balance'], 'info' => $query['info']];
    }

    public static function query($mobile, array $other, $type = 'mobile') {
        $quhao            = $type == 'mobile' ? '0' : '0';//待完善
        $third_response[] = $mingyang = self::mingyang($mobile, $quhao);
        if ($mingyang['status']) {
            return $mingyang;
        }
        if (isset($other['province']) && $other['province'] == '河南') {
            $third_response[] = $mingyang = self::mingyang($mobile, $quhao);
            if ($mingyang['status']) {
                return $mingyang;
            }
        } else {
            $third_response[] = $xunda = self::xunda($mobile);
            if ($xunda['status']) {
                return $xunda;
            }
            $third_response[] = $xiangjiaofei = self::xiangjiaofei($mobile);
            if ($xiangjiaofei['status']) {
                return $xiangjiaofei;
            }
        }
        return ['status' => false, 'name' => '', 'balance' => '', 'info' => '', 'mark' => __FUNCTION__, 'third_response' => $third_response];
    }

    //明洋商务
    public static function mingyang($mobile, $quhao = '0') {
        $key    = '90D0E4CD3C27812BF5E111111';
        $usr    = iconv('UTF-8', 'GBK', '15678527068');
        $mob    = iconv('UTF-8', 'GBK', $mobile);
        $yysid  = '0';
        $qh     = $quhao;
        $sgn    = strtoupper(md5($usr . $mob . $key));
        $url    = "http://116.255.241.199:8085/webInface/GetCusInfo.asp?usr={$usr}&mob={$mob}&yysid={$yysid}&qh={$qh}&sgn={$sgn}";
        $result = explode('|', iconv('GBK', 'UTF-8', http::http_str_post($url, null)));
        if (strpos($result[1], '签名错误') !== false || strpos($result[1], '查询权限') !== false || strpos($result[1], '只能查询一次') !== false || (!$result[1] && $result[2] == 0) || preg_match('/\\d+/', $result[1])) {
            return ['status' => false, 'name' => '', 'third_response' => $result, 'mark' => __FUNCTION__];
        }
        return ['status' => true, 'name' => $result[1], 'balance' => $result[2], 'info' => isset($result[3]) ? $result[3] : '', 'mark' => __FUNCTION__];
    }

    //迅达
    public static function xunda($mobile) {
        $data             = [];
        $data['mobile']   = $mobile;
        $key              = 'guangxi2017019chairmanbowefwdfe';
        $data['user']     = $user = '251651698';
        $data['mac']      = $mac = '';
        $data['sp']       = $sp = '';
        $data['province'] = $province = '';
        $data['city']     = $city = '';
        $data['sign']     = $sign = md5($mac . $user . $mobile . $key);
        //广西联通欠费查询地址：https://upay.10010.com/npfweb/NpfWeb/Mustpayment/getMustpayment?number=15509964010&province=059&GET
        $url    = 'http://121.41.28.195:64000/Query?';
        $url    = $url . http_build_query($data);
        $result = file_get_contents($url);
        $encode = mb_detect_encoding($result, ["ASCII", 'UTF-8', "GB2312", "GBK", 'BIG5', 'EUC-CN']);
        $result = mb_convert_encoding($result, 'UTF-8', $encode);

        if ((strpos($result, '姓') === false && strpos($result, '额') === false) || strpos($result, '余额:,') !== false || strpos($result, '续费') !== false) {
            return ['status' => false, 'name' => '', 'third_response' => $result];
        }
        $result = str_replace('：', ':', $result);
        $result = str_replace('，', ',', $result);
        if (strpos($result, '姓名:') !== false && strpos($result, ',余额:') !== false && preg_match('/姓名:(.*?),余额:(.*)/', $result, $match) && count($match) >= 3) {
            $name    = $match[1];
            $balance = $match[2];
        } else {
            if (strpos($result, '姓名:') !== false && strpos($result, ',欠费:') !== false && preg_match('/姓名:(.*?),欠费:(.*)/', $result, $match) && count($match) >= 3) {
                $name    = $match[1];
                $balance = '欠费' . $match[2];
            } else {
                if (strpos($result, '姓名:') !== false && strpos($result, ',应缴:') !== false && preg_match('/姓名:(.*?),应缴:(.*)/', $result, $match) && count($match) >= 3) {
                    $name    = $match[1];
                    $balance = '应缴' . $match[2];
                    //  姓名:,应缴:0.00;
                } else {
                    $result  = str_replace('姓名:', '', $result);
                    $name    = $result;
                    $balance = '';
                }
            }
        }
        return ['status' => true, 'name' => $name, 'balance' => $balance, 'info' => '', 'mark' => __FUNCTION__, 'result' => $result];
    }

    //享缴费
    public static function xiangjiaofei($mobile, $id = '', $num = 0) {
        $url    = "http://xiangjiaofei.net:8081/api/Orders/GetUserInfo?";
        $userid = 'x800845';
        $key    = '6f31a466841e74be40057d7411fffd5b';
        // $id =$id;
        $telephone = $mobile;
        $type      = '';
        $string    = "userid={$userid}&id={$id}&telephone={$telephone}&type={$type}";
        $sign      = md5("{$string}{$key}");
        $data      = "{$string}&sign={$sign}";
        $re        = http::http_str_post($url, $data);
        $result    = explode('&', $re);
        if (count($result) != 7) {
            return ['status' => false, 'name' => '', 'third_response' => $re, 'mark' => __FUNCTION__, 'msg' => '第三方响应错误'];
        }
        if ($result[1] == 1 && $num <= 2) {
            // sleep(1);
            return self::xiangjiaofei($mobile, $result[0], $num + 1);
        }
        if ($result[1] != 8) {
            return ['status' => false, 'name' => '', 'third_response' => $re, 'mark' => __FUNCTION__, 'msg' => '第三方查询失败'];
        }
        return ['status' => true, 'name' => $result[2], 'balance' => $result[3], 'info' => $result[5], 'mark' => __FUNCTION__];
    }

    //家门口
    public static function jiamenkou($mobile, $type, $id = '', $num = 0) {
        $url    = "http://hnzzbm.miracletec.cn:8080/query_info/phoneinfo.do?";
        $userid = '15678527068';
        $key    = 'laK7In0nvXPh3bcVLLls0BkVJg075rpakfEql1j6E9IqQ46gBwHRAlcBmW7H7ES4';
        // $id =$id;
        $telephone = $mobile;

        //  $type = '2';

        $string = "userid={$userid}&id={$id}&telephone={$telephone}&type={$type}";
        $sign   = md5("{$string}{$key}");
        $data   = "{$string}&sign={$sign}";
        $re     = http::http_str_post($url, $data);
        $result = explode('&', $re);
        if (count($result) != 7) {
            return ['status' => false, 'name' => '', 'third_response' => $re, 'mark' => __FUNCTION__, 'msg' => '第三方响应错误'];
        }
        if (($result[1] == 1 || $result[3] = '查询失败' || $result[3] = '') && $num <= 2) {
            //sleep(1);
            return self::jiamenkou($mobile, $type, $result[0], $num + 1);
        }
        if ($result[1] != 8 || $result[3] = '查询失败') {
            return ['status' => false, 'name' => '', 'third_response' => $re, 'mark' => __FUNCTION__, 'msg' => '第三方查询失败'];
        }
        return ['status' => true, 'name' => $result[2], 'balance' => $result[3], 'info' => $result[5], 'mark' => __FUNCTION__];
    }

}