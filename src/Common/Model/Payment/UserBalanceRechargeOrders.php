<?php

namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;

class UserBalanceRechargeOrders extends BaseModel
{
    public static $table_name = 'yzb_user_balance_recharge_orders';

    // 充值状态
    const STATUS_PENDING_PAYMENT = 'PENDING_PAYMENT';   //等待付款
    const STATUS_PROCESSING      = 'PROCESSING';        //处理
    const STATUS_SUCCEED         = 'SUCCEED';           //成功
    const STATUS_FAILED          = 'FAILED';            //失败
    const STATUS_CANCELED        = 'CANCELED';          //取消
    const STATUS_USER_UNKNOWN    = 'USER_UNKNOWN';      //用户未知

    const STATUSES               = [
        self::STATUS_PENDING_PAYMENT => '等待付款',
        self::STATUS_PROCESSING      => '处理',
        self::STATUS_SUCCEED         => '成功',
        self::STATUS_FAILED          => '失败',
        self::STATUS_CANCELED        => '取消',
        self::STATUS_USER_UNKNOWN    => '用户未知',
    ];
}
