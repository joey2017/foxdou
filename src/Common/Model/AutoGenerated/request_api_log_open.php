<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $app_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $app_status  default: (NULL), max length: 1, raw type: tinyint
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property float $amount  default: (0), max length: 17, raw type: decimal
 * @property int|null $interface_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $status  default: (0), max length: 1, raw type: tinyint
 * @property string|null $code  default: (0), max length: 20, raw type: varchar
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $ip  default: (NULL), max length: 10, raw type: int
 * @property int $pay_type  default: (0), max length: 1, raw type: tinyint
 * @property int|null $request_type  default: (NULL), max length: 1, raw type: tinyint
 * @property string|null $request_id  default: (NULL), max length: 255, raw type: varchar
 */
class request_api_log_open extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_request_api_log_open';
    static $primary_key = 'id';
}