<?php
namespace App\OpenApi;

use App\OpenApi\Exception\ApiException;

trait ApiErrorTrait {
    public static function throwException($errorCode) {
        $errorMsg = static::ERROR_CODES[$errorCode] ?? self::GENERIC_ERROR;
        throw new ApiException($errorMsg, $errorCode);
    }
}
