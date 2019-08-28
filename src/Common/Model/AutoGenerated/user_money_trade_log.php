<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property string $id  default: (NULL), max length: 36, raw type: varchar
 * @property string|null $order_id  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $outer_sn  default: (NULL), max length: 50, raw type: varchar
 * @property int $order_cate_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $produc_cate_id  default: (NULL), max length: 11, raw type: int
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $other_party_user_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $other_party_user_pintai  default: (NULL), max length: 4, raw type: tinyint
 * @property int $trade_status  default: (NULL), max length: 2, raw type: tinyint
 * @property int $trade_log_type  default: (NULL), max length: 11, raw type: int
 * @property string $name  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $note  default: (NULL), max length: 255, raw type: varchar
 * @property float $amount  default: (NULL), max length: 17, raw type: decimal
 * @property int|null $payment_class_id  default: (0), max length: 10, raw type: int
 * @property int|null $platform_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $scene_id  default: (NULL), max length: 2, raw type: int
 * @property int $trade_time  default: (0), max length: 11, raw type: int
 * @property int $pay_time  default: (0), max length: 11, raw type: int
 * @property int $end_time  default: (0), max length: 11, raw type: int
 * @property int $add_time  default: (0), max length: 11, raw type: int
 * @property float|null $trade_poundage  default: (0), max length: 17, raw type: decimal
 */
class user_money_trade_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_user_money_trade_log';
    static $primary_key = 'id';
}