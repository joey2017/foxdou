<?php
namespace App\Admin\Form;

use App\MobileNetworkOperator;
use App\Common\Model\Product\ProductTencentCategory;
use App\Common\Model\ResellerPriceGroup;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

class ProductSearchForm extends Form {

    protected function getFields(Request $request) {
        $categories = ProductTencentCategory::getCategories();

        return [
            // 以下四个为流量专有过滤选项
            'duration'         => [to_enum(ProductConstants::DURATIONS)],
            'effective_time'   => [to_enum(ProductConstants::EFFECTIVE_TIMES)],
            'cross_month'      => [to_enum(ProductConstants::CROSS_MONTH_TYPES)],
            'max_recharge_num' => ['integer'],

            // 腾讯业务类型专有过滤选项
            'category_id'      => [to_enum($categories)],

            // 以下为手机、流量、固话都有的过滤选项
            'face_value_type'  => [to_enum(ProductConstants::FACE_VALUE_TYPES)],
            'sale_region'      => [to_enum(ProductConstants::PRODUCT_SALE_REGIONS)],
            'operator_id'      => [to_enum(MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL))],
            'speed'            => [to_enum(ProductConstants::RECHARGE_SPEED_TYPES)],

            // 以下为所有商品共有
            'search_product'   => ['max_length[50]'],
            'from'             => ['date'],
            'to'               => ['date'],

            'face_value_min'   => ['numeric'],
            'face_value_max'   => ['numeric'],

            'subject_type'     => [to_enum(ProductConstants::SETTING_SUBJECT_TYPES)],
            'group_id'         => [to_enum(ResellerPriceGroup::allGroups())],
            'criteria'         => ['max_length[50]'],

            'sell_status'      => [to_enum(ProductConstants::SELL_STATUSES)],
            'auto_refund'      => [to_enum(ProductConstants::REFUND_TYPES)],
            'price_limit'      => [to_enum(ProductConstants::PRICE_LIMIT_TYPES)],
            'strategy'         => [to_enum(ProductConstants::STRATEGIES)],
            'area_priority'    => [to_enum(ProductConstants::AREA_PRIORITIES)],

            'subject_price_min'  => ['numeric'],
            'subject_price_max'  => ['numeric'],
        ];
    }
}