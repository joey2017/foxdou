<?php
namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;

class RechargeOrder extends BaseModel {
    static $table_name = 'yzb_user_balance_recharge_orders';

    const STATUS_UNPAID       = 'UNPAID'; //等待付款
    const STATUS_PROCESSING   = 'PROCESSING'; //处理中
    const STATUS_SUCCEED      = 'SUCCEED'; //充值成功
    const STATUS_FAILED       = 'FAILED'; //充值失败
    const STATUS_CANCELED     = 'CANCELED'; //已取消
    const STATUS_USER_UNKNOWN = 'USER_UNKNOWN'; //用户未知

    const STATUSES = [
        self::STATUS_UNPAID       => '等待付款',
        self::STATUS_PROCESSING   => '系统处理中',
        self::STATUS_SUCCEED      => '充值成功',
        self::STATUS_FAILED       => '充值失败',
        self::STATUS_CANCELED     => '已取消',
        self::STATUS_USER_UNKNOWN => '用户未知',
    ];

    const ORDER_CATE_SERVICE             = 100001; // 服务订单
    const ORDER_CATE_ADD_BALANCE         = 100002; // 余额充值
    const ORDER_CATE_MOBILE_PHONE        = 100003; // 话费充值
    const ORDER_CATE_DATA_PACKAGE        = 100004; // 流量充值
    const ORDER_CATE_TENCENT             = 100005; // 腾讯充值
    const ORDER_CATE_GAME                = 100006; // 游戏充值
    const ORDER_CATE_LINE_PHONE          = 100007; // 固话充值
    const ORDER_CATE_RESELLER_COMMISSION = 100008; // 代理商返佣明细

    const ORDER_CATEGORIES = [
        self::ORDER_CATE_SERVICE             => '服务订单',
        self::ORDER_CATE_ADD_BALANCE         => '余额充值',
        self::ORDER_CATE_MOBILE_PHONE        => '话费充值',
        self::ORDER_CATE_DATA_PACKAGE        => '流量充值',
        self::ORDER_CATE_TENCENT             => '腾讯充值',
        self::ORDER_CATE_GAME                => '游戏充值',
        self::ORDER_CATE_LINE_PHONE          => '固话充值',
        self::ORDER_CATE_RESELLER_COMMISSION => '代理商返佣明细',
    ];
}
