<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $name  default: (NULL), max length: 20, raw type: varchar
 * @property string|null $short_name  default: (NULL), max length: 20, raw type: varchar
 * @property int|null $is_mvno  default: (NULL), max length: 4, raw type: tinyint
 * @property int|null $top_operator_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $enabled  default: (NULL), max length: 11, raw type: int
 * @property \SimpleRecord\DateTime|null $created_at  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $updated_at  default: (NULL), max length: 19, raw type: datetime
 */
class icp_mvno extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_icp_mvno';
    static $primary_key = 'id';
}