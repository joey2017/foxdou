<?php
namespace App\Common\ExternalService\RechargeService;

use App\Common\ExternalService\RechargeService\Provider\FoxdouRechargeServiceProvider;
use App\Common\ExternalService\RechargeService\Provider\NullRechargeServiceProvider;

class RechargeServiceProviderMap {

    const PROVIDERS = [
        'null'   => NullRechargeServiceProvider::class,
        'foxdou' => FoxdouRechargeServiceProvider::class,
    ];

    const PROVIDER_NAMES = [
        'null'   => '调试平台',
        'foxdou' => '狐豆平台',
    ];
}
