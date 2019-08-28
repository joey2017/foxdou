<?php
namespace App\OpenApi\Payment;

use App\Common\Model\OpenPlatform\App;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Service\BaseService;
use App\OpenApi\ApiContext;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

interface PaymentHandlerInterface {
    public function init(ApiContext $context);
    public function preCheck(ApiContext $context);
    public function handle(ApiContext $context);
}
