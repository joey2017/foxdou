<?php
namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;

class AlipayTransferRechargeLog extends BaseModel {
    static $table_name = 'yzb_user_money_alipay_transfer_recharge_log';

    const STATUS_PENDING_PAYMENT = 1; //等待充值',
    const STATUS_SUCCEED         = 2; //充值成功',
    const STATUS_FAILED          = 3; //充值失败',
    const STATUS_CANCELED        = 4; //已取消'
    const STATUS_USER_UNKNOWN    = 5; //用户未知

    const STATUSES = [
        self::STATUS_PENDING_PAYMENT => '等待充值',
        self::STATUS_SUCCEED         => '充值成功',
        self::STATUS_FAILED          => '充值失败',
        self::STATUS_CANCELED        => '已取消',
        self::STATUS_USER_UNKNOWN    => '用户未知',
    ];
}
