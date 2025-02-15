<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $taobao_order_sn  default: (NULL), max length: 255, raw type: varchar
 * @property string $taobao_order_status  default: (NULL), max length: 255, raw type: varchar
 * @property float|null $amount  default: (NULL), max length: 11, raw type: decimal
 * @property \SimpleRecord\DateTime|null $taobao_consign_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $taobao_created_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $taobao_pay_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $taobao_modified_time  default: (NULL), max length: 19, raw type: datetime
 * @property string|null $taobao_buyer_nick  default: (NULL), max length: 255, raw type: varchar
 * @property float|null $taobao_received_payment  default: (NULL), max length: 11, raw type: decimal
 * @property float|null $taobao_payment  default: (NULL), max length: 11, raw type: decimal
 * @property \SimpleRecord\DateTime|null $add_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $taobao_end_time  default: (NULL), max length: 19, raw type: datetime
 */
class user_money_taobao_buy_recharge_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_user_money_taobao_buy_recharge_log';
    static $primary_key = 'id';
}
