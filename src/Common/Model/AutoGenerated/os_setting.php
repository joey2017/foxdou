<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string|null $section  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $name  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $value  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $type  default: (NULL), max length: 255, raw type: varchar
 * @property \SimpleRecord\DateTime|null $edit_time  default: (NULL), max length: 19, raw type: datetime
 * @property string|null $note  default: (NULL), max length: 50, raw type: varchar
 */
class os_setting extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_os_setting';
    static $primary_key = 'id';
}
