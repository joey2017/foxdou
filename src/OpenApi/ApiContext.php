<?php
namespace App\OpenApi;

use App\Common\Model\OpenPlatform\App;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Payment\RechargeOrder;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\User\SubAccount;
use App\Common\Model\User\User;
use App\OpenApi\Api\NotifyHandlerInterface;
use App\OpenApi\Payment\PaymentHandlerInterface;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class ApiContext {
    /** @var User */
    public $user;
    /** @var SubAccount */
    public $account;
    /** @var App */
    public $app;
    /** @var Request */
    public $request;
    /** @var ParameterBag */
    public $parameters;

    /** @var Form */
    public $form;

    /** @var string */
    public $message = null;

    /** @var NotifyHandlerInterface */
    public $apiHandler = null;
    public $handlerContext = [];

    /** @var PaymentHandlerInterface */
    public $paymentHandler = null;
    public $paymentContext = [];

    // /** @var UserMoneyTradeLog */
    // public $tradeLog = null;
    /** @var OrderRecharge */
    public $order    = null;
}
