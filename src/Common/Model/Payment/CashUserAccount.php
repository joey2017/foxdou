<?php

namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;

class CashUserAccount extends BaseModel
{
    static $table_name = 'yzb_cash_user_account';

    const VERIFY_STATUS_PENDING = 0; //待审核
    const VERIFY_STATUS_SUCCESS = 1; //审核通过
    const VERIFY_STATUS_FAIL    = 2; //审核不通过

    const VERIFY_STATUSES = [
        self::VERIFY_STATUS_PENDING => '待审核',
        self::VERIFY_STATUS_SUCCESS => '审核通过',
        self::VERIFY_STATUS_FAIL    => '审核不通过',
    ];
}
