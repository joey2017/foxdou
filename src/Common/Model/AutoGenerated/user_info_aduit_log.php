<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $user_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $cause  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $faren_name  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $faren_number  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $cred_name  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $cred_number  default: (NULL), max length: 50, raw type: varchar
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 */
class user_info_aduit_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_user_info_aduit_log';
    static $primary_key = 'id';
}