<?php
namespace App\OpenApi\Service;

use App\Common\Model\OpenPlatform\App;
use App\Common\Service\BaseService;
use App\OpenApi\ApiSystemError;

class AppManager extends BaseService
{

    public function getApp($appId) {
        if(!($app = App::first(['id' => $appId, 'status' => [App::APP_STATUS_ONLINE, App::APP_STATUS_DEBUGGING]]))) {
            // 此 App 不存在或者状态不可用
            return [false, ApiSystemError::INVALID_APP];
        }

        // if((in_array($app->pay_type, [App::PAY_TYPE_TIME_PACKAGE, App::PAY_TYPE_COUNT_PER_DAY]) && time()> $app->end_use_time)
        //     || ($app->pay_type === App::PAY_TYPE_COUNT_PACKAGE && $app->balance <= 0)){
        //
        //     // 包量计时或者按天计次的 App 已经过期
        //     // 或者包量计次的 App 已经用完次数
        //     return [false, ErrorCodes::APP_EXPIRED];
        // }

        return [$app, null];
    }
}
