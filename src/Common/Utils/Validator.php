<?php
namespace App\Common\Utils;

use App\ProductConstants;

class Validator
{
    public static function checkProductPrice($productInfo, $rechargeAmount) {
        $num    = $productInfo['num'];
        $faceValue = $productInfo['face_value'];

        // 是固定面值商品的，只需判断面值是否等于充值面值
        if ($productInfo['face_value_type'] != ProductConstants::FACE_VALUE_TYPE_ARBITRARILY) {
            return $faceValue == $rechargeAmount;
        }

        // 任意冲类型的，需要额外判断
        $limits = explode(',', $num);
        foreach ($limits as $v) {
            if (is_numeric($v)) {
                if ($rechargeAmount == ($v * $faceValue)) {
                    return true;
                }
            } else {
                $limit = explode('~', $v);
                if (count($limit) == 1) {
                    if (is_numeric($limit[0]) && $rechargeAmount == ($limit[0] * $faceValue)) {
                        return true;
                    }
                } elseif (count($limit) == 2) {
                    asort($limit);
                    if (is_numeric($limit[0]) && is_numeric($limit[1])) {
                        if ($rechargeAmount >= ($limit[0] * $faceValue) && $rechargeAmount <= ($limit[1] * $faceValue)) {
                            return true;
                        }
                    }
                }
            }
        }

        return false;
    }
}
