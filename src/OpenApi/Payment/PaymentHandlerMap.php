<?php
namespace App\OpenApi\Payment;

use App\Common\Model\OpenPlatform\App;
use App\OpenApi\Payment\Handler\CountPackageHandler;
use App\OpenApi\Payment\Handler\CountPerDayHandler;
use App\OpenApi\Payment\Handler\RealTimeCountingHandler;
use App\OpenApi\Payment\Handler\RealTimeDeductionHandler;
use App\OpenApi\Payment\Handler\TimePackageHandler;

class PaymentHandlerMap {
    const HANDLERS = [
        App::PAY_TYPE_REAL_TIME_DEDUCTION => RealTimeDeductionHandler::class,
        App::PAY_TYPE_REAL_TIME_COUNTING  => RealTimeCountingHandler::class,
        App::PAY_TYPE_COUNT_PACKAGE       => CountPackageHandler::class,
        App::PAY_TYPE_TIME_PACKAGE        => TimePackageHandler::class,
        App::PAY_TYPE_COUNT_PER_DAY       => CountPerDayHandler::class,
    ];
}
