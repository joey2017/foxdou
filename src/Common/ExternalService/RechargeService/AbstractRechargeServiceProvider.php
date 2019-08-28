<?php
namespace App\Common\ExternalService\RechargeService;

use App\Common\Service\BaseService;

abstract class AbstractRechargeServiceProvider extends BaseService implements RechargeServiceProviderInterface {
    const PROVIDER_NAME = null;

    public function init(RechargeServiceContext $context) {
    }

    public abstract function submitOrder(RechargeServiceContext $context);

    public function queryStatus(RechargeServiceContext $context) {
    }

    public function handleNotify(RechargeServiceContext $context) {
        return 'OK';
    }
}
