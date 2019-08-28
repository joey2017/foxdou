<?php
namespace App\Common\Model\Order;

use App\Common\Model\BaseModel;
use App\Constants;

class ServiceOrder extends BaseModel {
    static $table_name  = 'yzb_service_order';
    static $primary_key = 'id';

    //订单类型
    const TYPE_CREATE     = 1;//新建应用
    const TYPE_RENEW      = 2;//为应用续费

    //套餐类型
    const PAY_TYPES = [
        1 => '实时扣费',
        2 => '实时计次',
        3 => '包量计次',
        4 => '包量计时',
        5 => '按天计次'
    ];

    //订单类型
    const ORDER_TYPE = [
        1   =>  '创建应用',
        2   =>  '应用续费',
        3   =>  '应用升级'
    ];

    //支付状态
    const PAY_STATUSES = [
        0   =>  '未支付',
        1   =>  '已支付',
        2   =>  '已取消'
    ];
}
