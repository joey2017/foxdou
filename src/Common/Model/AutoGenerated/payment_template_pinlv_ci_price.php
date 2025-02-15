<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $p_t_id  default: (0), max length: 11, raw type: int
 * @property int|null $pinlv_id  default: (0), max length: 11, raw type: int
 * @property int|null $pinlv_ci_id  default: (NULL), max length: 11, raw type: int
 * @property int $user_level  default: (NULL), max length: 11, raw type: int
 * @property float $price  default: (NULL), max length: 10, raw type: decimal
 * @property float $chaoprice  default: (NULL), max length: 10, raw type: decimal
 * @property int|null $shifouzhuanshu  default: (NULL), max length: 1, raw type: tinyint
 */
class payment_template_pinlv_ci_price extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_payment_template_pinlv_ci_price';
    static $primary_key = 'id';
}
