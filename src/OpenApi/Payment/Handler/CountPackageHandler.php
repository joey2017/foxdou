<?php
namespace App\OpenApi\Payment\Handler;

use App\Common\Model\OpenPlatform\App;
use App\OpenApi\ApiContext;
use App\OpenApi\ApiSystemError;
use App\OpenApi\Exception\ApiException;
use App\OpenApi\Payment\AbstractPaymentHandler;

/**
 * 3 包量计次处理器
 * @package App\OpenApi\Payment\Handler
 */
class CountPackageHandler extends AbstractPaymentHandler
{
    public function init(ApiContext $context) {
        global $T;

        $sql = "SELECT id FROM {$T(App::table_name())} WHERE id = ? AND balance > 0 FOR UPDATE"; // 锁住这行数据，防止别的 API 同时修改
        $stmt = App::query($sql, [$context->app->id]);
        $rowCount = $stmt->rowCount();
        if($rowCount < 1) {
            $errorCode = ApiSystemError::INSUFFICIENT_BALANCE;
            throw new ApiException(ApiSystemError::ERROR_CODES[$errorCode], $errorCode);
        }
    }

    public function handle(ApiContext $context) {
        global $T;

        $sql = "UPDATE {$T(App::table_name())} SET balance = balance - 1 WHERE id = ?"; // 锁住这行数据，防止别的 API 同时修改
        App::query($sql, [$context->app->id]);
    }
}
