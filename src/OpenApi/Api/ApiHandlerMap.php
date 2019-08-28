<?php
namespace App\OpenApi\Api;

use App\OpenApi\Api\Handler\Recharge\Flow\FlowQueryProductHandler;
use App\OpenApi\Api\Handler\Recharge\Flow\FlowRechargeHandler;
use App\OpenApi\Api\Handler\Recharge\QueryOrderHandler;
use App\OpenApi\Api\Handler\Recharge\Mobile\MobileBalanceQueryHandler;
use App\OpenApi\Api\Handler\Recharge\Mobile\MobileQueryProductHandler;
use App\OpenApi\Api\Handler\Recharge\Mobile\MobileRechargeHandler;

use App\OpenApi\Api\Handler\Recharge\Telephone\TelephoneQueryProductHandler;
use App\OpenApi\Api\Handler\Recharge\Telephone\TelephoneRechargeHandler;
use App\OpenApi\Api\Handler\TestHandler;

class ApiHandlerMap {

    const HANDLERS = [
        'foxdou.test'                   => TestHandler::class,      // 测试用

        'foxdou.mobile.queryOrder'      => QueryOrderHandler::class,       // 查询手机充值订单
        'foxdou.mobile.queryProduct'    => MobileQueryProductHandler::class,       // 查询手机充值商品
        'foxdou.mobile.recharge'        => MobileRechargeHandler::class,       // 手机话费充值
        'foxdou.mobileBalance.Query'    => MobileBalanceQueryHandler::class,      // 手机话费查询

        'foxdou.flow.queryOrder'        => QueryOrderHandler::class,       // 查询流量充值订单
        'foxdou.flow.queryProduct'      => FlowQueryProductHandler::class,       // 查询流量充值商品
        'foxdou.flow.recharge'          => FlowRechargeHandler::class,       // 流量话费充值

        'foxdou.telephone.queryOrder'   => QueryOrderHandler::class,       // 查询固话充值订单
        'foxdou.telephone.queryProduct' => TelephoneQueryProductHandler::class,       // 查询固话充值商品
        'foxdou.telephone.recharge'     => TelephoneRechargeHandler::class,       // 固话话费充值
    ];
}
