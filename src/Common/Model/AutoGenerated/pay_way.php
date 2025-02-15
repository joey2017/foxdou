<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $way_type  default: (1), max length: 1, raw type: tinyint
 * @property int $pay_scene_id  default: (NULL), max length: 11, raw type: int
 * @property int $pay_scene  default: (NULL), max length: 11, raw type: int
 * @property string|null $picture  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $collection_account  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $pay_key  default: (NULL), max length: 255, raw type: varchar
 * @property int $status  default: (1), max length: 1, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 */
class pay_way extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_pay_way';
    static $primary_key = 'id';
}
