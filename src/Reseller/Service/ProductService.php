<?php

namespace App\Reseller\Service;

use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSetting;
use App\Common\Model\Product\ProductSource;
use App\Common\Model\Product\ProductSourceSetting;
use App\Common\Model\Product\SourceGroup;
use App\Common\Model\User\SubAccount;
use App\Common\Service\BaseService;
use App\Common\Utils\Validator;
use App\ProductConstants;

class ProductService extends BaseService {
    const TEST_PRODUCTS = '{"status":true,"products":[{"product_id":"10269","status":"1","face_value_type":"0","name":"全国移动话费10元快充","sell_price":"9.96000"},{"product_id":"10170","status":"1","face_value_type":"0","name":"广西移动话费10元快充","sell_price":"9.96000"},{"product_id":"10261","status":"1","face_value_type":"1","name":"全国移动话费任意充快充","sell_price":"9.96"},{"product_id":"10162","status":"1","face_value_type":"1","name":"广西移动话费任意充快充","sell_price":"9.96"}],"recharge_amount":"10"}';

    public function getProductInfo(SubAccount $subAccount, $subjectType, $settingId) {
        $subjectId = $subjectType === ProductConstants::SETTING_SUBJECT_TYPE_USER ? $subAccount->user_id : $subAccount->level;
        $params = ['setting_id' => $settingId, 'subject_type' => $subjectType, 'subject_id' => $subjectId];

        global $T;
        $sql = <<<EOF
    SELECT p.id as product_id, p.product_name, p.operator_id, p.face_value_type, p.face_value, p.num, p.province_code, p.city_code, p.mvno, p.is_mvno, p.speed, 
            '{$subjectType}' as product_sub_type, ps.id as setting_id, ps.sell_price as sell_price, ps.price_limit, ps.status, ps.strategy, ps.area_priority
    FROM {$T(Product::table_name())} p
        LEFT JOIN {$T(ProductSetting::table_name())} ps ON(ps.product_id=p.id)
    WHERE  
        ps.id=:setting_id AND ps.subject_type=:subject_type AND ps.subject_id=:subject_id
EOF;

        /** @var \PDOStatement $stmt */
        $stmt = Product::query($sql, $params);
        $productInfo = $stmt->fetch();

        return $productInfo;
    }

    public function findAvailableRechargeProducts(SubAccount $subAccount, $numberInfo, $rechargeAmount, $speed, $limit = 0) {
        $allowEmptySource = $this->settings()->reseller_platform->allow_place_order_with_null_source;
        $allProducts  = $this->queryAllAvailableRechargeProducts($subAccount, $numberInfo, $rechargeAmount, $speed);
        $allProducts = array_filter($allProducts, function ($p) use ($rechargeAmount) { return Validator::checkProductPrice($p, $rechargeAmount); }); // 先过滤掉面值不符合要求的商品

        // 然后过滤掉不满足渠道要求的
        $validProducts = [];
        foreach ($allProducts as $productInfo) {
            $source = $this->assignSource($productInfo, $subAccount, $rechargeAmount, $numberInfo['city_code']);
            if (!$source && !$allowEmptySource) {
                continue;
            }

            $productInfo['source'] = $source;
            $validProducts[]   = $productInfo;
            if($limit > 0 && count($validProducts) >= $limit) {
                // 数量达到要求了，提前退出
                break;
            }
        }

        // 最后对符合要求的商品进行售价处理
        foreach ($validProducts as &$productInfo) {
            $productInfo['sell_price'] = number_format($productInfo['face_value_type'] == 1 ? ($productInfo['sell_price'] * $rechargeAmount) : $productInfo['sell_price'], 5);
            $productInfo['sup_price']  = number_format(isset($productInfo['source']) ? $productInfo['source']['sup_price'] : 0, 5);
        }

        usort($validProducts, function($pl, $pr){ return $pl['sell_price'] <=> $pr['sell_price'];}); //按价格低的排序

        return $validProducts;
    }

    public function assignSource($productInfo, SubAccount $subAccount, $rechargeAmount, $cityCode) {
        if ($productInfo['strategy'] == 1) {
            return self::applySortingStrategy($productInfo, $subAccount, $rechargeAmount, $cityCode);
        } elseif ($productInfo['strategy'] == 2) {
            //return self::ratio_celue($type,$key,$product,$user,$where,$money);
        }

        return false;
    }

    private static function applySortingStrategy($productInfo, SubAccount $subAccount, $amount, $cityId) {
        global $T;

        $sqlTpl = <<<EOF
SELECT  ss.weight, s.id as source_id, s.province_name, s.city_name, s.operator_name, s.num, s.face_value, s.face_value_type, tm.id as template_id, 
        tm.name as template_name, s.source_price as sup_price, s.source_cost as sup_cost, tm.sell_user_id as sup_user_id, s.speed as sup_speed
FROM {$T(ProductSource::table_name())} s
    INNER JOIN {$T(ProductSourceSetting::table_name())} ss ON(ss.source_id = s.id)
        INNER JOIN {$T(SourceGroup::table_name())} tm ON(tm.id = s.template_id)
            INNER JOIN {$T(ProductSetting::table_name())} st ON st.product_id = s.product_id
WHERE   
    (s.status = 1 AND s.sell_status = 1 AND tm.status = 1 AND st.product_id = :product_id) AND (st.subject_type = :subject_type AND st.subject_id = :subject_id) AND (%s)
ORDER BY ss.weight ASC, s.source_price ASC
EOF;

        $subjectId = $productInfo['subject_type'] == ProductConstants::SETTING_SUBJECT_TYPE_USER ? $subAccount->user_id : $subAccount->level;
        $params    = ['product_id' => $productInfo['product_id'], 'subject_type' => $productInfo['subject_type'], 'subject_id' => $subjectId];

        $provinceCode         = $productInfo['province_code'];
        $provinceFirstWhere = "s.province_code IN({$provinceCode}, 1) AND s.city_code=0";  //省份优先条件
        $cityFirstWhere     = "s.province_code={$provinceCode} AND  s.city_code={$cityId}"; //城市优先条件

        $sources = [];
        if ($productInfo['area_priority'] == 1) { //省份优先
            $sql     = sprintf($sqlTpl, $provinceFirstWhere);
            $sources = ProductSource::query($sql, $params)->fetchAll();
            if (!$sources && $provinceCode != 1) { //如果省份优先找不出来，就找城市的,如果省份id=1即为全国商品，$product['province_code']!=1如果该商品在省份中除了 省份货源 还没有全国货源的，那么在城市中不可能有，因此不必要再查一次数据
                $sql     = sprintf($sqlTpl, $cityFirstWhere);
                $sources = ProductSource::query($sql, $params)->fetchAll();
            }
        } else {//城市优先
            if ($productInfo['province_code'] == 1) {//如果是全国的商品不必要去查城市的
                $sql     = sprintf($sqlTpl, $cityFirstWhere);
                $sources = ProductSource::query($sql, $params)->fetchAll();
            }
            if (!$sources) {//如果城市优先找不出来，再去找省份的
                $sql     = sprintf($sqlTpl, $provinceFirstWhere);
                $sources = ProductSource::query($sql, $params)->fetchAll();
            }
        }

        $sources = array_filter($sources, function ($s) use ($amount) { return Validator::checkProductPrice($s, $amount); }); // 先过滤掉面值不符合要求的货源
        $sources = array_filter($sources, function ($s) use ($productInfo) { return ($productInfo['price_limit'] == 1 || $s['sup_price'] <= $productInfo['sell_price']); }); // 再过滤掉不符合限价要求的货源         // $v['price_limit']0为限价状态“是”，/1为商品限价壮态“否”

        // 然后从剩下的符合要求货源里拿出第一条记录做数据处理
        $source = reset($sources);
        if($source) {
            $source['source_product_name'] = $productInfo['name'];
            if ($source['face_value_type'] == ProductConstants::FACE_VALUE_TYPE_ARBITRARILY) {
                $source['buy_num']             = $amount;
                $source['source_price']        = $source['source_price'] * $amount;
            } else {
                $source['buy_num']             = 1;
            }
        }

        return $source;
    }

    private function queryAllAvailableRechargeProducts(SubAccount $subAccount, $numberInfo, $faceValue, $speed, $limit = 0) {
        global $T;

        // 等功能完成后优化一下，看看是否可以改成先查询，然后再在代码里过滤一下，以便尽量利用数据库索引
        $limit = (int)$limit; // 强制转换成数字，防止 SQL 注入
        $limitClause = $limit !== 0 ? "LIMIT 0,{$limit}" : "";

        // SELECT p_o.subject_type, p_o.id as product_sub_id, p.id as product_id, p.num, p.face_value_type, p.operator_id, p.province_code, p.city_code, p.operator_id, p.operator_name, p.speed, p.name as name,
        // SELECT 'LEVEL' as product_sub_type, p_o.id as product_sub_id, p.id as product_id, p.num, p.face_value_type, p.operator_id, p.province_code, p.city_code, p.operator_id, p.operator_name, p.speed, p.name as name,
        //     p_o.product_id, p_o.sell_price as sell_price, p.face_value as face_value, p_o.price_limit, p_o.status, p_o.strategy, p_o.area_priority
        // FROM {$product_mobile} p
        //       LEFT JOIN {$product_mobile_level} p_o ON(p.id=p_o.product_id)
        // WHERE   p_o.user_level=:user_level
        //     AND ((p.province_code =:province_code AND p.city_code=0) OR (p.province_code=:province_code AND p.city_code=:city_code) OR (p.province_code=1 AND p.city_code=0))
        //         AND p.operator_name=:operator_name AND p.is_mvno=:is_mvno AND p.mvno=:mvno AND p.speed=:speed AND p_o.platform_id=:platform_id AND p_o.status=1
        //     AND ((p.face_value_type=1) OR (p.face_value=:face_value))
        //         AND (NOT EXISTS(SELECT * FROM {$product_mobile_user} u_p WHERE u_p.user_id=:user_id AND u_p.product_id=p_o.product_id))

        $sql = <<<EOF
            SELECT  p.id as product_id, p.operator_id, p.face_value_type, p.face_value, p.num,p.province_code, p.city_code, p.operator_id, p.operator_name, p.speed, p.name as name, 
                    ps.subject_type, ps.id as setting_id, ps.product_id, ps.price as sell_price, ps.price_limit, ps.status, ps.strategy, ps.area_priority
            FROM {$T(Product::table_name())} p
                    LEFT JOIN {$T(ProductSetting::table_name())} ps ON(ps.product_id = p.id)
            WHERE   ((ps.subject_type = 'USER' AND ps.subject_id = :user_id) OR (ps.subject_type = 'GROUP' AND ps.subject_id = :user_group_id))
                    AND ((p.province_code = :province_code AND p.city_code = 0) OR (p.province_code = :province_code AND p.city_code = :city_code) OR (p.province_code = 1 AND p.city_code = 0))
                    AND p.operator_id = :operator_id AND p.speed = :speed AND ps.platform_id = :platform_id AND ps.status = 1
                    AND ((p.face_value_type = :face_value_type) OR (p.face_value = :face_value)) 
            
            ORDER BY face_value_type ASC
            
            {$limitClause}
EOF;

        $params['province_code']   = $numberInfo['province_code'];
        $params['city_code']       = $numberInfo['city_code'];
        $params['face_value_type'] = ProductConstants::FACE_VALUE_TYPE_ARBITRARILY;
        $params['face_value']      = $faceValue;
        $params['operator_id']     = $numberInfo['operator_id'];
        $params['speed']           = $speed;
        $params['platform_id']     = $subAccount->getPlatformId();
        $params['user_id']         = $subAccount->user_id;
        $params['user_group_id']   = $subAccount->level;

        /** @var \PDOStatement $stmt */
        $stmt = Product::query($sql, $params);
        $rows = $stmt->fetchAll();

        return $rows;
    }
}