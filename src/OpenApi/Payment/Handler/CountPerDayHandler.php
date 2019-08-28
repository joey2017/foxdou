<?php
namespace App\OpenApi\Payment\Handler;

use App\Common\Model\OpenPlatform\App;
use App\OpenApi\ApiContext;
use App\OpenApi\ApiSystemError;
use App\OpenApi\Exception\ApiException;
use App\OpenApi\Payment\AbstractPaymentHandler;

/**
 * 5 按天计次
 * @package App\OpenApi\Payment\Handler
 */
class CountPerDayHandler extends AbstractPaymentHandler
{
    public function init(ApiContext $context) {
        global $T;

        $now = time();
        $sql = "SELECT id FROM {$T(App::table_name())} WHERE id = ? AND end_use_time > ? FOR UPDATE"; // 锁住这行数据，防止别的 API 同时修改
        $stmt = App::query($sql, [$context->app->id, $now]);
        $rowCount = $stmt->rowCount();
        if($rowCount < 1) {
            $errorCode = ApiSystemError::APP_EXPIRED;
            throw new ApiException(ApiSystemError::ERROR_CODES[$errorCode], $errorCode);
        }
    }

    public function handle(ApiContext $context) {
    }
}
