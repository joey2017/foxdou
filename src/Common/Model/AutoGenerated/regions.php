<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 10, raw type: int
 * @property string $area_name  default: (NULL), max length: 50, raw type: varchar
 * @property int $parent_id  default: (NULL), max length: 10, raw type: int
 * @property string|null $short_name  default: (NULL), max length: 50, raw type: varchar
 * @property int|null $zipcode  default: (NULL), max length: 10, raw type: int
 * @property string|null $pinyin  default: (NULL), max length: 100, raw type: varchar
 * @property string|null $lng  default: (NULL), max length: 20, raw type: varchar
 * @property string|null $lat  default: (NULL), max length: 20, raw type: varchar
 * @property int $level  default: (NULL), max length: 1, raw type: tinyint
 * @property string|null $position  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $sort  default: (50), max length: 3, raw type: tinyint
 */
class regions extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_regions';
    static $primary_key = 'id';
}
