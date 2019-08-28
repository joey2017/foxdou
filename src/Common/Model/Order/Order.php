<?php
namespace App\Common\Model\Order;

use App\Common\Model\BaseModel;

class Order extends BaseModel {
    static $primary_key = 'order_id';

    //订单状态
//    const STATUS_NEW             = 0;   //新建  （原来是未知）
    const STATUS_IN_PROGRESS     = 1;//充值中
    const STATUS_SUCCEED         = 2;//充值成功
    const STATUS_FAILED          = 3;//充值失败
    const STATUS_PENDING_PAYMENT = 4;//待付款
    const STATUS_CANCELED        = 5;//已取消

    const ORDER_STATUS = [
        //        self::STATUS_NEW             => '新建',
        self::STATUS_IN_PROGRESS     => '充值中',
        self::STATUS_SUCCEED         => '充值成功',
        self::STATUS_FAILED          => '充值失败',
        self::STATUS_PENDING_PAYMENT => '待付款',
        self::STATUS_CANCELED        => '已取消',
    ];
}
