<?php

namespace App\Common\Model\Order;

use App\Common\Model\BaseModel;

class OrderRechargeSupOperationLog extends BaseModel {

    static $table_name = 'yzb_order_recharge_sup_status_operation_log';

    // operation_way 操作方式0未知1接口2手动
    const OPERATION_UNKNOWN = 0;
    const OPERATION_API     = 1;
    const OPERATION_MANUAL  = 2;

    const OPERATION_TYPES = [
        self::OPERATION_UNKNOWN => '接口',
        self::OPERATION_API     => '接口',
        self::OPERATION_MANUAL  => '手动',
    ];

    // 管理员操作 0非管理员1管理员
    const NOT_ADMIN = 0;
    const IS_ADMIN  = 1;

}
