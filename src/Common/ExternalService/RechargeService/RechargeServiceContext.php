<?php
namespace App\Common\ExternalService\RechargeService;

use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use Symfony\Component\HttpFoundation\Request;

class RechargeServiceContext {
    /** @var OrderRecharge */
    public $order = null;
    /** @var OrderRechargeSup */
    public $supplierOrder = null;
    public $orderContext = [];

    /** @var Request */
    public $request;

    /** @var string */
    public $message = null;
}
