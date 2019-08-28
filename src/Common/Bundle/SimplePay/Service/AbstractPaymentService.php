<?php
namespace App\Common\Bundle\SimplePay\Service;

use Yansongda\Pay\Gateways\Alipay;

abstract class AbstractPaymentService  {
    abstract public function getName();
}