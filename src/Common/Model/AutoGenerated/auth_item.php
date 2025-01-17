<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property string $name  default: (NULL), max length: 64, raw type: varchar
 * @property int $type  default: (NULL), max length: 6, raw type: smallint
 * @property string|null $description  default: (NULL), raw type: text
 * @property string|null $rule_name  default: (NULL), max length: 64, raw type: varchar
 * @property string|null $data  default: (NULL), raw type: blob
 * @property int|null $created_at  default: (NULL), max length: 11, raw type: int
 * @property int|null $updated_at  default: (NULL), max length: 11, raw type: int
 */
class auth_item extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_auth_item';
    static $primary_key = 'name';
}
