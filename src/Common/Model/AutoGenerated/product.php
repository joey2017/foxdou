<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $platform_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $product_type  default: (NULL), max length: 11, raw type: varchar
 * @property int|null $category_id  default: (NULL), max length: 16, raw type: int
 * @property int|null $operator_id  default: (NULL), max length: 1, raw type: int
 * @property string $speed  default: (1), max length: 8, raw type: varchar
 * @property string $name  default: (NULL), max length: 50, raw type: varchar
 * @property int $face_value  default: (NULL), max length: 10, raw type: int
 * @property float|null $official_price  default: (NULL), max length: 10, raw type: decimal
 * @property string $num  default: (1), max length: 100, raw type: varchar
 * @property string $face_value_type  default: (1), max length: 16, raw type: varchar
 * @property string|null $buy_acc  default: (NULL), max length: 50, raw type: varchar
 * @property float|null $price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $profit  default: (NULL), max length: 12, raw type: decimal
 * @property string|null $price_limit  default: (0), max length: 16, raw type: varchar
 * @property string|null $status  default: (1), max length: 16, raw type: varchar
 * @property string|null $sell_status  default: (NULL), max length: 16, raw type: varchar
 * @property int $price_set_status  default: (0), max length: 1, raw type: tinyint
 * @property string|null $strategy  default: (1), max length: 16, raw type: varchar
 * @property string|null $area_priority  default: (NULL), max length: 16, raw type: varchar
 * @property int $province_code  default: (0), max length: 11, raw type: int
 * @property int|null $city_code  default: (0), max length: 11, raw type: int
 * @property int|null $isp_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $operator_name  default: (NULL), max length: 20, raw type: varchar
 * @property int|null $is_mvno  default: (0), max length: 1, raw type: tinyint
 * @property int|null $mvno  default: (0), max length: 11, raw type: int
 * @property int|null $edit_time  default: (0), max length: 11, raw type: int
 * @property int|null $add_time  default: (0), max length: 11, raw type: int
 * @property float|null $rebate  default: (NULL), max length: 12, raw type: decimal
 * @property string|null $auto_refund  default: (NULL), max length: 8, raw type: varchar
 * @property string|null $note  default: (NULL), max length: 100, raw type: varchar
 * @property \SimpleRecord\DateTime|null $created_at  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $updated_at  default: (NULL), max length: 19, raw type: datetime
 * @property int|null $source_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $provider_id  default: (NULL), max length: 16, raw type: varchar
 * @property int|null $max_recharge_num  default: (0), max length: 11, raw type: int
 * @property string|null $duration  default: (NULL), max length: 8, raw type: varchar
 * @property string|null $effective_time  default: (NULL), max length: 16, raw type: varchar
 * @property string|null $cross_month  default: (NULL), max length: 8, raw type: varchar
 */
class product extends \App\Common\Model\BaseModel {
    static $table_name  = 'product';
    static $primary_key = 'id';
}
