<?php

namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;
use App\Common\Model\Payment\PaymentMethodSettings;
use App\PaymentConstants;

class AgentUsersRebateLog extends BaseModel
{
    static $table_name = 'yzb_agent_users_rebate_log';


    // rebate_type 返利类型
    const REBATE_OTHER            = 0; // 其他
    const REBATE_ORDER_SETTLEMENT = 1; // 订单成功结算
    const REBATE_ORDER_REFUND     = 2; // 订单退款结算
    const REBATE_PROMOTION        = 3; // 推广佣金
    const REBATE_DRAW             = 4; // 提取佣金

    const TRADE_STATUSES = [
        self::REBATE_OTHER            => '其他',
        self::REBATE_ORDER_SETTLEMENT => '订单成功结算',
        self::REBATE_ORDER_REFUND     => '订单退款结算',
        self::REBATE_PROMOTION        => '推广佣金',
        self::REBATE_DRAW             => '提取佣金'
    ];

}
