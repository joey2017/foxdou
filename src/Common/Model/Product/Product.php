<?php
namespace App\Common\Model\Product;

use App\Common\Model\User\SubAccount;
use App\ProductConstants;

class Product extends \App\Common\Model\AutoGenerated\product {

    static $table_name = 'product';

    public function __toString() {
        return sprintf('[(%d)%s]', $this->id, $this->name);
    }

    public static function checkProductPrice($productInfo, $rechargeAmount) {
        $num       = $productInfo['num'];
        $faceValue = $productInfo['face_value'];

        // 是固定面值商品的，只需判断面值是否等于充值面值
        if ($productInfo['face_value_type'] != ProductConstants::FACE_VALUE_TYPE_ARBITRARILY) {
            return $faceValue == $rechargeAmount;
        }

        // 任意冲类型的，需要额外判断

        $num    = strtr($num, ['-' => '~']); // 同时兼容 - ~ 分隔符
        $limits = explode(',', $num);
        foreach ($limits as $limit) {
            if (is_numeric($limit)) {
                if ($rechargeAmount == ($limit * $faceValue)) {
                    return true;
                }
            } else {
                $limit = explode('~', $limit);
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

    public function loadUserSettings(SubAccount $subAccount) {
        global $T;

        $sql = "
            SELECT  COALESCE(psu.id,            psg.id,             psd.id)            AS setting_id,
                    COALESCE(psu.price,         psg.price,          psd.price)         AS price,
                    COALESCE(psu.price_limit,   psg.price_limit,    psd.price_limit)   AS price_limit,
                    COALESCE(psu.strategy,      psg.strategy,       psd.strategy)      AS strategy,
                    COALESCE(psu.area_priority, psg.area_priority,  psd.area_priority) AS area_priority,
                    COALESCE(psu.provider_id,   psg.provider_id,    psd.provider_id)   AS provider_id,
                    COALESCE(psu.sell_status,   psg.sell_status,    psd.sell_status)   AS sell_status,
                    COALESCE(psu.subject_type,  psg.subject_type,   psd.subject_type)  AS subject_type,
                    
                    psu.id as psu_id, psg.id as psg_id, psd.id as psd_id, 
                    psu.sell_status as psu_sell_status, psg.sell_status as psg_sell_status, psd.sell_status as psd_sell_status
                     
            FROM {$T(Product::table_name())} p
                    LEFT JOIN {$T(ProductSetting::table_name())}       psu ON (psu.product_id = p.id AND psu.subject_type = 'USER'    AND psu.subject_id = :user_id)
                        LEFT JOIN {$T(ProductSetting::table_name())}   psg ON (psg.product_id = p.id AND psg.subject_type = 'GROUP'   AND psg.subject_id = :group_id)
                          LEFT JOIN {$T(ProductSetting::table_name())} psd ON (psd.product_id = p.id AND psd.subject_type = 'DEFAULT' AND psd.subject_id = 0)

            WHERE   p.id = :product_id
        ";

        $params['user_id']         = $subAccount->user_id;  // 特殊用户 ID
        $params['group_id']        = $subAccount->group_id; // 售价组 ID
        $params['product_id']      = $this->id;

        /** @var \PDOStatement $stmt */
        $stmt = Product::query($sql, $params);
        $settings = $stmt->fetchObject();
        return $settings;
    }

}
