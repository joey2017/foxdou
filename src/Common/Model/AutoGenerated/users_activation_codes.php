<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property string $id  default: (NULL), max length: 100, raw type: varchar
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property int $expires_at  default: (NULL), max length: 11, raw type: int
 */
class users_activation_codes extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_users_activation_codes';
    static $primary_key = 'id';
}
