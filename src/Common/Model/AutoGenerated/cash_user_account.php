<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 10, raw type: int
 * @property int $user_id  default: (NULL), max length: 10, raw type: int
 * @property string|null $auth_path  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $apply_from  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $account_bank_type  default: (NULL), max length: 4, raw type: tinyint
 * @property string|null $account_bank_name  default: (NULL), max length: 50, raw type: varchar
 * @property int|null $account_bank_id  default: (NULL), max length: 4, raw type: tinyint
 * @property string|null $account_num  default: (NULL), max length: 20, raw type: varchar
 * @property string|null $account_user  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $account_place  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $account_shouxu_id  default: (NULL), max length: 11, raw type: tinyint
 * @property float|null $account_min  default: (0), max length: 10, raw type: decimal
 * @property float|null $account_max  default: (20000), max length: 10, raw type: decimal
 * @property int|null $account_count  default: (3), max length: 6, raw type: smallint
 * @property string|null $mobile  default: (NULL), max length: 15, raw type: varchar
 * @property string|null $shenfenzheng_id  default: (NULL), max length: 19, raw type: varchar
 * @property string|null $info  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $verify_status  default: (0), max length: 4, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 */
class cash_user_account extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_cash_user_account';
    static $primary_key = 'id';
}
