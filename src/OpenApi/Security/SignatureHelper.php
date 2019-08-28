<?php
namespace App\OpenApi\Security;

use App\Common\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;

class SignatureHelper
{
    public static function calcSignature($parameters, $appKey) {
        //签名步骤一：按字典序排序参数（小->大）
        ksort($parameters);
        $query = '';
        //签名步骤二：拼接参数，“参数名=参数值（值需要url编码）”的格式
        foreach ($parameters as $k => $v) {
            $query .= "{$k}=" . urlencode($v) . "&";
        }
        //签名步骤三：在string后加入KEY
        $signquery = $query . "appkey=" . $appKey;

        //  echo $query;
        //签名步骤四：MD5加密后将所有结果为大写
        $sign = md5($signquery);

        return $sign;
    }

    public static function verifySignature($params, $appSecret) {
        $userSignature = $params['sign'];
        unset($params['sign']);
        $signature = self::calcSignature($params, $appSecret);

        return strtoupper($userSignature) === strtoupper($signature);
    }

}
