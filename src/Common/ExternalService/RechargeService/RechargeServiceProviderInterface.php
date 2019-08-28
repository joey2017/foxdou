<?php
namespace App\Common\ExternalService\RechargeService;

interface RechargeServiceProviderInterface {
    public function init(RechargeServiceContext $context);
    public function submitOrder(RechargeServiceContext $context);

    /**
     * 通过第三方接口查询sup订单的状态，查询成功时返回的状态必须是 \App\Common\Model\Order\OrderRechargeSup::RECHARGE_STATUS 中的值。
     * 如果查询失败时返回 false
     * @param RechargeServiceContext $context
     * @return mixed 查询到的sup订单状态，查询失败时返回 false
     */
    public function queryStatus(RechargeServiceContext $context);
    public function handleNotify(RechargeServiceContext $context);
}
