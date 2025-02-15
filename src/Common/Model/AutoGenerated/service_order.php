<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string|null $sn  default: (NULL), max length: 50, raw type: varchar
 * @property string $trade_sn  default: (NULL), max length: 50, raw type: varchar
 * @property int $order_type  default: (1), max length: 1, raw type: tinyint
 * @property float|null $money  default: (NULL), max length: 10, raw type: decimal
 * @property int|null $pay_type  default: (NULL), max length: 1, raw type: tinyint
 * @property string|null $pay_template  default: (NULL), raw type: text
 * @property int|null $user_id  default: (0), max length: 11, raw type: int
 * @property int|null $app_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $service_id  default: (0), max length: 11, raw type: int
 * @property int|null $pay_time  default: (0), max length: 11, raw type: int
 * @property int $pay_status  default: (0), max length: 1, raw type: tinyint
 * @property int|null $add_time  default: (0), max length: 11, raw type: int
 */
class service_order extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_service_order';
    static $primary_key = 'id';
}
