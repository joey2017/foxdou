<?php

namespace App\Common\Model\Payment;

use App\Common\Model\AutoGenerated\user_money_trade_log;
use App\PaymentConstants;

class UserMoneyTradeLog extends user_money_trade_log {
    // // trade_log_type
    // const TYPE_UNKNOWN         = 0; // 未知
    // const TYPE_API             = 1; // api接口
    // const TYPE_CREATE_APP      = 2; // 创建应用
    // const TYPE_WITHDRAW        = 3; // 提现
    // const TYPE_ADD_BALANCE     = 4; // 充值余额
    // const TYPE_RENEW           = 5; // 应用续费
    // const TYPE_CHANGE_APP_PLAN = 6; // 更改应用套餐


    // Trade status
//    const STATUS_UNKNOWN     = 0; // 未知
    const STATUS_PENDING     = 1; // 待付款
    const STATUS_IN_PROGRESS = 2; // 交易中
    const STATUS_COMPLETED   = 3; // 交易完成
    const STATUS_FAILED      = 4; // 交易失败
    const STATUS_CANCELED    = 5; // 交易取消

    const TRADE_STATUSES = [
//        self::STATUS_UNKNOWN     => '未知',
        self::STATUS_PENDING     => '待付款',
        self::STATUS_IN_PROGRESS => '交易中',
        self::STATUS_COMPLETED   => '交易完成',
        self::STATUS_FAILED      => '交易失败',
        self::STATUS_CANCELED    => '交易取消',
    ];

    // 交易记录类型
    const TYPE_ORDER_PAYMENT    = 1; //订单支付
    const TYPE_WITHDRAW         = 2; //提现
    const TYPE_ADD_BALANCE      = 3; //余额充值
    const TYPE_REFUND           = 4; //退款
    const TYPE_ORDER_SETTLEMENT = 5; //订单结算
    const TYPE_TRANSFER         = 6; //转账'
    const TYPE_PROFIT_WITHDRAW  = 7; //佣金提取'

    // 交易记录类型映射表
    const TRADE_TYPES = [
        self::TYPE_ORDER_PAYMENT    => '订单支付',
        self::TYPE_WITHDRAW         => '提现',
        self::TYPE_ADD_BALANCE      => '余额充值',
        self::TYPE_REFUND           => '退款',
        self::TYPE_ORDER_SETTLEMENT => '订单结算',
        self::TYPE_TRANSFER         => '转账',
        self::TYPE_PROFIT_WITHDRAW  => '佣金提取',
    ];


    public function export($charset = 'GB18030') {
        $curEncoding = mb_internal_encoding();
        $formatedAttrs = $this->to_array();
        foreach ($formatedAttrs as $field => &$value) {
            if($field === 'trade_log_type') {
                $value = self::TRADE_TYPES[$value] ?? "未知 ({$value})";
            } elseif($field === 'trade_id' || $field == 'order_id') {
                $value = "=\"{$value}\"";
            } elseif($field === 'trade_status') {
                $value = self::TRADE_STATUSES[$value] ?? "未知 ({$value})";
            } elseif($field === 'amount') {
                $value = number_format($value, 2);
            } elseif($field === 'add_time') {
                $value = date('Y-m-d H:i:s', $value);
            }

            if($curEncoding !== $charset) {
                $value = mb_convert_encoding($value, $charset);
            }
        }

        return $formatedAttrs;
    }

    public function getStatusText() {
        return self::TRADE_STATUSES[$this->trade_status] ?? "未知 ({$this->trade_status})";
    }

    public function getTradeTypeText() {
        return self::TRADE_TYPES[$this->trade_log_type] ?? "未知 ({$this->trade_log_type})";
    }

    public function getPaymentMethodText() {
        return PaymentConstants::PAYMENT_METHOD_CLASSES[$this->payment_class_id] ?? "未知 ({$this->payment_class_id})";
    }
}
