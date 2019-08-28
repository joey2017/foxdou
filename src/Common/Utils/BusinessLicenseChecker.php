<?php
namespace App\Common\Utils;

/**
 * 营业执照号
 * 主要验证格式
 * 15位编码的校验依据GS15—2006 《工商行政管理市场主体注册号编制规则》，
 * 18位编码的校验依据GB 32100-2015 《法人和其他组织统一社会信用代码编码规则》，
 *
 * 1、15位的
 * 8位顺序码中的第一位（自左至右）采用以下分配规则；
 * 第7位
 *  内资各类企业使用 0,1,2,3
 *  外资企业使用 4,5
 *  个体工商户使用 6,7,8,9
 * 第8位
 *  “1”表示具有法人资格（含个人独资企业、合伙企业），
 *  “2”表示营业单位或分支机构（分公司）。
 * Class BusinessLicense
 * @package common\models\user\register
 */
class BusinessLicenseChecker {
    // const error_code = [
    //     0 => '营业号格式正确',
    //     1 => '营业号长度错误',
    //     2 => '营业号校验错误',
    //     3 => '营业号包含非法字符',
    // ];

    const match15 = '/^[1-9][\d]{14}$/';
    const match18 = '/^([0-9ABCDEFGHJKLMNPQRTUWXY]{2})([0-9]{6})([0-9ABCDEFGHJKLMNPQRTUWXY]{9})([0-9ABCDEFGHJKLMNPQRTUWXY])$/';

    const register_uper_manager = [
        1 => '机构编制', 2 => '外交', 3 => '教育', 4 => '公安', 5 => '民政', 6 => '司法', 7 => '交通运输', 8 => '文化', 9 => '工商',
        'A' => '旅游局', 'B' => '宗教事物管理', 'C' => '全国总工会', 'D' => '人民解放军总后勤部', 'E' => '省级人民政府', 'F' => '地、市（设区）级人民政府', 'G' => '区、县级人民政府', 'Y' => '其他',
    ];

    /**
     * 校验号码
     * @return bool
     */
    public static function isValid($licenseNo) {
        $licenseNoLength = strlen($licenseNo);
        $pattern         = $licenseNoLength === 15 ? self::match15 : self::match18;
        if (!(preg_match($pattern, $licenseNo))) {
            return false;
        }

        if ($licenseNoLength == 15) {
            for ($i = 0, $pj = 10; $i < 14; $i++) {
                $sj = $pj + $licenseNo[$i];
                $sj = $sj > 10 ? ($sj - 10) : $sj;
                $pj = ($sj * 2) % 11;
            }

            $isValid = (($pj + $licenseNo[14]) % 10) === 1;
        } elseif ($licenseNoLength == 18) {
            $str = ['0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9,
                    'A' => 10, 'B' => 11, 'C' => 12, 'D' => 13, 'E' => 14, 'F' => 15, 'G' => 16, 'H' => 17, 'J' => 18, 'K' => 19, 'L' => 20, 'M' => 21, 'N' => 22,
                    'P' => 23, 'Q' => 24, 'R' => 25, 'T' => 26, 'U' => 27, 'W' => 28, 'X' => 29, 'Y' => 30,];
            $ws  = [1, 3, 9, 27, 19, 26, 16, 17, 20, 29, 25, 13, 8, 24, 10, 30, 28];
            $sum = 0;
            for ($i = 0; $i < 17; $i++) {
                $sum += $str[$licenseNo[$i]] * $ws[$i];
            }
            $c18 = 31 - ($sum % 31);
            if ($c18 == 31) {
                $c18 = '0';
            } else {
                $c18 = (string)array_flip($str)[$c18];
            }

            $isValid = $c18 === $licenseNo[17];
        } else {
            $isValid = false;
        }

        return $isValid;
    }

    public static function parseLicenseNoInfo($licenseNo) {
        $info = [];
        if (strlen($licenseNo) == 15) {
            $info['area']        = substr($licenseNo, 0, 6);
            $info['orgnization'] = substr($licenseNo, 6, 13);
            $info['verify']      = $licenseNo[14];
        } elseif (strlen($licenseNo) == 18) {
            $info['register_uper_manager']       = $licenseNo[1];
            $info['register_uper_manager_name '] = self::register_uper_manager[$licenseNo[1]];
            $info['register_direct_manager']     = $licenseNo[2];
            $info['area']                        = substr($licenseNo, 2, 6);
            $info['orgnization']                 = substr($licenseNo, 7, 9);
            $info['verify']                      = $licenseNo[17];
        }
        return $info;
    }
}