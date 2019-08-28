<?php

namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;

class SellCashUserLog extends BaseModel
{
    static $table_name = 'yzb_sell_cash_user_log';

    const TRADE_STATUS_PENDING       = 0; //待审核
    const TRADE_STATUS_REVIEW_FAIL   = 1; //审核未通过
    const TRADE_STATUS_PROCESS       = 2; //提现处理中
    const TRADE_STATUS_SUCCESS       = 3; //已提现
    const TRADE_STATUS_WITHDRAW_FAIL = 4; //提现失败


    const TRADE_STATUSES = [
        self::TRADE_STATUS_PENDING       => '待审核',
        self::TRADE_STATUS_REVIEW_FAIL   => '审核未通过',
        self::TRADE_STATUS_PROCESS       => '提现处理中',
        self::TRADE_STATUS_SUCCESS       => '已提现',
        self::TRADE_STATUS_WITHDRAW_FAIL => '提现失败',
    ];

}
