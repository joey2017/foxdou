<?php
namespace App\OpenApi\Service;

use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSetting;
use App\Common\Model\User\SubAccount;
use App\ProductConstants;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class RechargeProductService implements ServiceSubscriberInterface {
    use ServiceSubscriberTrait;

    public function findProducts(SubAccount $subAccount, $numberInfo, $productType, int $faceValue, $speed = null, int $productId = 0, int $limit = 100) {
        global $T;

        if($speed !== null && !isset(ProductConstants::RECHARGE_SPEED_TYPES[$speed])) {
            throw new \InvalidArgumentException('speed 参数不在允许范围内');
        }

        // 本函数的参数类型声明保证了 $limit、$productId 等参一定是数字，所以不会有 SQL 注入问题
        $productIdCond = $productId !== 0    ? "p.id = {$productId} AND" : '';
        $speedCond     = $speed     !== null ? "p.speed = '{$speed}' AND" : '';
        $limitClause   = $limit     >= 0  ? "LIMIT 0,{$limit}" : "";

        // unit_price 是单位价格，目的是让单价最便宜的排前面
        // face_value_type_int 是面值类型，目的是在其他条件一样的情况下，按固定面值、其他面值、任意冲的顺序排序
        // 几个 COALESCE 的含义是：按照特殊用户、售价组、一般用户的优先顺序读取各项设置值
        $sql = "
            SELECT  p.id, p.name, p.face_value, p.speed, p.num, p.face_value_type, p.product_type, 

                    COALESCE(psu.id,            psg.id,             psd.id)            AS setting_id,
                    COALESCE(psu.price,         psg.price,          psd.price)         AS price,
                    COALESCE(psu.price_limit,   psg.price_limit,    psd.price_limit)   AS price_limit,
                    COALESCE(psu.strategy,      psg.strategy,       psd.strategy)      AS strategy,
                    COALESCE(psu.area_priority, psg.area_priority,  psd.area_priority) AS area_priority,
                    COALESCE(psu.provider_id,   psg.provider_id,    psd.provider_id)   AS provider_id,
                    COALESCE(psu.sell_status,   psg.sell_status,    psd.sell_status)   AS sell_status,
                    COALESCE(psu.subject_type,  psg.subject_type,   psd.subject_type)  AS subject_type,
                    
                    COALESCE(psu.price, psg.price, psd.price) / p.face_value           AS unit_price,
                    
                    CASE p.face_value_type  WHEN 'FIXED' THEN 0 WHEN 'OTHER' THEN 1 WHEN 'ARBIT' THEN 2 END AS  face_value_type_int,

                    psu.id as psu_id, psg.id as psg_id, psd.id as psd_id, 
                    psu.sell_status as psu_sell_status, psg.sell_status as psg_sell_status, psd.sell_status as psd_sell_status
                     
            FROM {$T(Product::table_name())} p
                    LEFT JOIN {$T(ProductSetting::table_name())}       psu ON (psu.product_id = p.id AND psu.subject_type = 'USER'    AND psu.subject_id = :user_id)
                        LEFT JOIN {$T(ProductSetting::table_name())}   psg ON (psg.product_id = p.id AND psg.subject_type = 'GROUP'   AND psg.subject_id = :group_id)
                          LEFT JOIN {$T(ProductSetting::table_name())} psd ON (psd.product_id = p.id AND psd.subject_type = 'DEFAULT' AND psd.subject_id = 0)

            WHERE   {$productIdCond} {$speedCond}
                    p.operator_id = :operator_id AND p.product_type = :product_type
                    AND ((p.province_code = :province_code AND p.city_code = 0) OR (p.province_code = :province_code AND p.city_code = :city_code) OR (p.province_code = 1 AND p.city_code = 0))
                    AND ((p.face_value = :face_value) OR (p.face_value_type = :face_value_type)) 
            
            HAVING sell_status IN(:statuses)
            
            ORDER BY unit_price ASC, p.speed ASC, face_value_type_int ASC, p.city_code DESC, p.province_code DESC
            
            {$limitClause}
        ";

        $params['user_id']         = $subAccount->user_id;  // 特殊用户 ID
        $params['group_id']        = $subAccount->group_id; // 售价组 ID

        $params['operator_id']     = $numberInfo['operator_id'];
        $params['product_type']    = $productType;
        $params['statuses']        = [ProductConstants::SELL_STATUS_SELL, ProductConstants::SELL_STATUS_NO_SELL];
        $params['province_code']   = $numberInfo['province_code'];
        $params['city_code']       = $numberInfo['city_code'];
        $params['face_value']      = $faceValue;
        $params['face_value_type'] = ProductConstants::FACE_VALUE_TYPE_ARBITRARILY;

        /** @var \PDOStatement $stmt */
        $stmt = Product::query($sql, $params);
        $rows = $stmt->fetchAll();

        return $rows;
    }

    public function findProductsById(SubAccount $subAccount, $productId, $numberInfo, $faceValue) {
        global $T;

        $sql = <<<EOF
            SELECT  p.id, p.name, p.face_value, p.speed, p.num, p.face_value_type,

                    COALESCE(psu.price,         psg.price,          p.price)         AS price,
                    COALESCE(psu.price_limit,   psg.price_limit,    p.price_limit)   AS price_limit,
                    COALESCE(psu.strategy,      psg.strategy,       p.strategy)      AS strategy,
                    COALESCE(psu.area_priority, psg.area_priority,  p.area_priority) AS area_priority,
                    COALESCE(psu.subject_type,  psg.subject_type,   null)            AS setting_subject_type,
                    COALESCE(psu.id,            psg.id,             null)            AS setting_id,
                    
                    psu.id as psu_id, psg.id as psg_id
                    
            FROM {$T(Product::table_name())} p
                    LEFT JOIN {$T(ProductSetting::table_name())}     psu ON (psu.product_id = p.id AND psu.subject_type = 'USER'  AND psu.subject_id = :psu_subject_id)
                        LEFT JOIN {$T(ProductSetting::table_name())} psg ON (psg.product_id = p.id AND psg.subject_type = 'GROUP' AND psg.subject_id = :psg_subject_id)
            WHERE
                    p.id = :product_id AND p.platform_id = :platform_id AND p.operator_id = :operator_id AND p.product_type = :product_type AND p.status = 1
                    AND ((p.province_code = :province_code AND p.city_code = 0) OR (p.province_code = :province_code AND p.city_code = :city_code) OR (p.province_code = 1 AND p.city_code = 0))
                    AND ((p.face_value = :face_value) OR (p.face_value_type = :face_value_type)) 
            
            ORDER BY face_value_type ASC, price ASC, p.city_code DESC, p.province_code DESC
EOF;

        $params['psu_subject_id']  = $subAccount->user_id;
        $params['psg_subject_id']  = $subAccount->group_id;

        $params['product_id']      = $productId;
        $params['platform_id']     = $subAccount->getPlatformId();
        $params['operator_id']     = $numberInfo['operator_id'];
        $params['product_type']    = $numberInfo['number_type'];
        $params['province_code']   = $numberInfo['province_code'];
        $params['city_code']       = $numberInfo['city_code'];
        $params['face_value']      = $faceValue;
        $params['face_value_type'] = ProductConstants::FACE_VALUE_TYPE_ARBITRARILY;

        /** @var \PDOStatement $stmt */
        $stmt = Product::query($sql, $params);
        $rows = $stmt->fetchAll();

        return $rows;
    }

}