<?php
namespace App\OpenApi\Api\Handler\Recharge;

use App\OpenApi\ApiErrorTrait;

class ApiError {

    use ApiErrorTrait;

    const GENERIC_ERROR = '200000'; // 其他系统错误

    const ERROR_OPERATOR_IN_MAINTENANCE      = '200001'; // 该手机号码所属运营商正在维护中，暂时无法充值
    const ERROR_INVALID_NUMBER               = '200002'; // 手机号码不合法
    const ERROR_NO_LOCATION_INFO             = '200003'; // 无法获取归属地
    const ERROR_PAYMENT_FAILED               = '200004'; // 付款失败
    const ERROR_PLACE_ORDER_FAILED           = '200005'; // 生成订单时发生错误
    const ERROR_DUPLICATED_OUTER_SN          = '200006'; // 外部订单号重复
    const ERROR_INVALID_ORDER_SN_OR_OUTER_SN = '200051'; // 系统订单号和外部订单号不能同时为空
    const ERROR_ORDER_NOT_FOUND              = '200052'; // 订单不存在
    const ERROR_NO_PRODUCT                   = '200101'; // 系统找不到合适的商品

    const ERROR_CODES = [
        self::GENERIC_ERROR => '系统错误',

        self::ERROR_OPERATOR_IN_MAINTENANCE      => '该手机号码所属运营商正在维护中，暂时无法充值',
        self::ERROR_INVALID_NUMBER               => '手机号码不合法',
        self::ERROR_NO_LOCATION_INFO             => '无法获取归属地',
        self::ERROR_PAYMENT_FAILED               => '付款失败',
        self::ERROR_PLACE_ORDER_FAILED           => '生成订单时发生错误',
        self::ERROR_DUPLICATED_OUTER_SN          => '外部订单号重复',
        self::ERROR_INVALID_ORDER_SN_OR_OUTER_SN => '系统订单号和外部订单号不能同时为空',
        self::ERROR_ORDER_NOT_FOUND              => '订单不存在',
        self::ERROR_NO_PRODUCT                   => '系统找不到合适的商品',
    ];
}
