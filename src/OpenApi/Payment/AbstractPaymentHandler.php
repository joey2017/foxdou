<?php
namespace App\OpenApi\Payment;

use App\Common\Service\BaseService;
use App\OpenApi\ApiContext;

abstract class AbstractPaymentHandler extends BaseService implements PaymentHandlerInterface {
    public function init(ApiContext $context) {
        return;
    }

    public function preCheck(ApiContext $context) {
        return;
    }

    public abstract function handle(ApiContext $context);

    public function postCheck(ApiContext $context) {
        return;
    }
}
