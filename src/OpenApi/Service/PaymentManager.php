<?php
namespace App\OpenApi\Service;

use App\Common\Model\OpenPlatform\App;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Service\BaseService;
use App\OpenApi\ApiSystemError;
use Symfony\Component\HttpFoundation\Request;

class PaymentManager extends BaseService
{
    public function charge(OpenPlatformAccount $openAccount, App $app, $amount, Request $request) {
        switch($app->pay_type) {
        case App::PAY_TYPE_REAL_TIME_DEDUCTION:
            $this->charge_payAsYouGo($openAccount, $app, $amount, $request);
            break;
        case App::PAY_TYPE_REAL_TIME_COUNTING:
            $this->charge_payAsYouGo($openAccount, $app, $amount, $request);
            break;
        case App::PAY_TYPE_COUNT_PACKAGE:
            $this->charge_payAsYouGo($openAccount, $app, $amount, $request);
            break;
        case App::PAY_TYPE_TIME_PACKAGE:
            $this->charge_payAsYouGo($openAccount, $app, $amount, $request);
            break;
        case App::PAY_TYPE_COUNT_PER_DAY:
            $this->charge_payAsYouGo($openAccount, $app, $amount, $request);
            break;
        default:
            throw new \RuntimeException(sprintf("无效的扣费方式：%s, app_id=%s"));
            break;
        }
    }

    private function charge_payAsYouGo(OpenPlatformAccount $openAccount, App $app, $amount, Request $request) {

    }

}
