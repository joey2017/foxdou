<?php

namespace App\Common\Utils;

use App\Common\Model\Isp;
use App\Common\Model\IspTelephone;
use App\MobileNetworkOperator;
use App\Common\Model\Region;
use App\ProductConstants;

class MobileNumberChecker {
    public static function isValidNumber($mobileNumber) {
        return (bool)preg_match('/^1\d{10}$/', $mobileNumber);
    }

    public static function getLocationInfo($number, $type = ''): ?array {
        if (preg_match('/^(010|02\d{1}|0[3-9]\d{2})\d{7,9}$/', $number) || $type == 'telephone') {//固话
            $info = self::getTelephoneLocationInfo($number);
        } else {
            $info = self::getMobileLocationInfo($number);
        }

        if ($info) {
            if ($info['operator_name'] == '移动') {
                $info['operator_id'] = 1;
            } elseif ($info['operator_name'] == '联通') {
                $info['operator_id'] = 2;
            } elseif ($info['operator_name'] == '电信') {
                $info['operator_id'] = 3;
            } else {
                $info['operator_id'] = -1;
            }
        }

        return $info;
    }

    public static function getTelephoneLocationInfo($number) {
        $data = IspTelephone::first(['prefix' => $number], ['hydrate' => false]);
        if (!$data) {
            $data = Isp::first(['id' => 1], ['hydrate' => false]);
            if (!$data) {
                return null;
            }
        }

        $location = $data['province_name'] . $data['city_name'] . $data['isp'];

        return [
            'number'        => $number,
            'number_type'   => ProductConstants::PRODUCT_TYPE_TELEPHONE,
            'location'      => $location,
            'province_code' => $data['province_code'],
            'province_name' => $data['province_name'],
            'city_code'     => $data['area_code'],
            'city_name'     => $data['city_name'],
            'status'    => $data['status'],
            'operator_name'      => $data['name'],
            'is_mvno'       => $data['is_mvno'],
            'mvno'          => $data['mvno'],
            'mvno_icp'      => $data['mvno_isp']];
    }

    public static function getMobileLocationInfo($number) {
        if (strlen($number) != 11) {
            return null;
        }

        $locationPart = substr($number, 0, 7);

        $isp = Isp::first(['number_prefix' => $locationPart]);
        if (!$isp) {
            $info = self::getMobileLocationInfoFromBaidu($number);
            if (!$info) {
                return null;
            }

            $isp = $info ? self::saveBaiduIspData($info, $number) : null;
        }

        $location = $isp->province_name . $isp->city_name . $isp->name;

        // 虚商
        if ($isp->is_mvno) {
            // if ($isp->mvno) {
            //     $mvno     = MobileNetworkOperator::getMvnoNameByKey($isp->mvno);
            //     $location .= $mvno ? "({$mvno})" : '';
            // }
        }

        return [
            'number'          => $number,
            'number_type'     => ProductConstants::PRODUCT_TYPE_MOBILE,
            'location'        => $location,
            'province_code'   => $isp->province_code,
            'province_name'   => $isp->province_name,
            'city_code'       => $isp->city_code,
            'city_name'       => $isp->city_name,
            'status'          => $isp->status,
            'operator_id'     => $isp->operator_id,
            'operator_name'   => $isp->name,
            'is_mvno'         => $isp->is_mvno,
            // 'top_operator_id' => $isp->mvno_isp
        ];
    }

    // 返回数据结构
    // {"status":"0","t":"1525759523765","set_cache_time":"","data":[
    //  {"StdStg":6004,"StdStl":8,"_update_time":"1540978209","cambrian_appid":"0","city":"杭州","key":"1701234","prov":"浙江","showurl":"http:\/\/haoma.baidu.com","title":"XXX","type":"小米移动","url":"http:\/\/haoma.baidu.com","loc":"https:\/\/ss1.baidu.com\/8aQDcnSm2Q5IlBGlnYG\/q?r=2002696&k=1701234","SiteId":2002696,"_version":26782,"_select_time":1540977783,"querytype":"手机号码","phoneinfo":"手机号码&quot;17012345678&quot;","phoneno":"17012345678","origphoneno":"17012345678","titlecont":"手机号码归属地查询","showlamp":"1","clickneed":"0","ExtendedLocation":"","OriginQuery":"17012345678","tplt":"mobilephone","resourceid":"6004","fetchkey":"6004_1701234","appinfo":"","role_id":1,"disp_type":0}
    //]}
    public static function getMobileLocationInfoFromBaidu($number) {
        $url     = "https://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php?query={$number}&co=&resource_id=6004&t=1525759523765&ie=utf8&oe=utf8&format=json&tn=baidu";
        $headers = [
            'Accept'                    => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'Accept-Encoding'           => 'gzip, deflate, br',
            'Accept-Language'           => 'zh-CN,zh;q=0.9',
            'Cache-Control'             => 'max-age=0',
            'Connection'                => 'keep-alive',
            'Host'                      => 'sp0.baidu.com',
            'Upgrade-Insecure-Requests' => '1',
            'User-Agent'                => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36',
            'Cookie'                    => '3E336440385DD80EE5723D68C531188B:FG=1; BIDUPSID=3E336440385DD80EE5723D68C531188B; PSTM=1519708347; __cfduid=d3990dbcac08f706d3180565cd359f2001521254211; BDORZ=B490B5EBF6F3CD402E515D22BCDA1598; H_PS_PSSID=1422_18195_21086_20927; PSINO=7',
        ];

        $context = ['number' => $number];
        try {
            $response = \Unirest\Request::get($url, $headers);
            if ($response->code != 200) {
                return null;
            }

            $body = $response->body;
            $info = $body->data[0] ?? null;

            return $info;
        } catch (\Exception $e) {
            return null;
        }
    }

    private static function saveBaiduIspData($info, $number) {
        $carrierPart  = substr($number, 0, 3);
        $locationPart = substr($number, 0, 7);

        $data                    = [];
        $operatorName            = $info['type'];
        $data['name']            = $operatorName;
        $data['province_name']   = $info['prov'];
        $data['province_code']   = Region::PROVINCES_REVERSED[$info['prov']] ?? '000000';
        $data['city_name']       = $info['city_name'];
        $data['city_code']       = Region::CITIES_REVERSED[$info['city_name']] ?? '000000';
        $data['is_mvno']         = 0;
        $data['types']           = $operatorName;
        $data['operator_prefix'] = $carrierPart;
        $data['number_prefix']   = $locationPart;


        if ($operatorName === '中国移动') {
            $data['operator_id'] = 1;
        } elseif ($operatorName === '中国联通') {
            $data['operator_id'] = 2;
        } elseif ($operatorName === '中国电信') {
            $data['operator_id'] = 3;
        } else {
            $data['is_mvno'] = 1;
        }

        $isp = new Isp($data);

        try {
            $isp->save();
        } catch (\Exception $e) {
            // $this->logger->error('Error', array_merge($data, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
        }

        return $isp;

    }
}
