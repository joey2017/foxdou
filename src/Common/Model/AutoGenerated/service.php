<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $name  default: (NULL), max length: 255, raw type: varchar
 * @property string $title  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $index_tuijian  default: (0), max length: 1, raw type: tinyint
 * @property int|null $product_type  default: (NULL), max length: 11, raw type: int
 * @property int|null $cate_id  default: (NULL), max length: 11, raw type: int
 * @property string $keywords  default: (NULL), max length: 255, raw type: varchar
 * @property string $description  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $intro  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $yinxiao_price  default: (NULL), max length: 50, raw type: varchar
 * @property string $thumb  default: (NULL), max length: 255, raw type: varchar
 * @property int $user_type  default: (NULL), max length: 11, raw type: int
 * @property int $service_status  default: (1), max length: 1, raw type: tinyint
 * @property int $buy_status  default: (NULL), max length: 1, raw type: tinyint
 * @property int $audit  default: (0), max length: 1, raw type: tinyint
 * @property int $default_app_num  default: (NULL), max length: 11, raw type: int
 * @property string $default_app_name  default: (NULL), max length: 20, raw type: varchar
 * @property string $default_app_flow  default: (NULL), max length: 255, raw type: varchar
 * @property string $default_app_status  default: (NULL), max length: 255, raw type: varchar
 * @property int $must_bing_ip  default: (0), max length: 255, raw type: tinyint
 * @property string $app_ico  default: (NULL), max length: 255, raw type: varchar
 * @property int $add_time  default: (0), max length: 11, raw type: int
 * @property int $edit_time  default: (0), max length: 11, raw type: int
 */
class service extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_service';
    static $primary_key = 'id';
}
