<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property int $sex  default: (0), max length: 1, raw type: tinyint
 * @property string $personality_signature  default: (), max length: 255, raw type: varchar
 * @property string $hometown_country  default: (), max length: 255, raw type: varchar
 * @property string $hometown_province  default: (), max length: 255, raw type: varchar
 * @property string $hometown_city  default: (), max length: 255, raw type: varchar
 * @property string $hometown_district  default: (), max length: 255, raw type: varchar
 * @property string $hometown_details  default: (), max length: 255, raw type: varchar
 * @property string $school  default: (), max length: 255, raw type: varchar
 * @property string $company  default: (), max length: 255, raw type: varchar
 * @property string $introduction  default: (), max length: 255, raw type: varchar
 * @property int $occupation  default: (0), max length: 2, raw type: tinyint
 * @property string $birthday  default: (), max length: 20, raw type: char
 * @property string $blood_type  default: (), max length: 2, raw type: char
 * @property int $add_time  default: (0), max length: 11, raw type: int
 * @property int $edit_time  default: (0), max length: 11, raw type: int
 * @property string $location_province  default: (), max length: 255, raw type: varchar
 * @property string $location_city  default: (), max length: 255, raw type: varchar
 * @property string $location_district  default: (), max length: 255, raw type: varchar
 * @property string $location_country  default: (), max length: 255, raw type: varchar
 * @property string $location_details  default: (), max length: 255, raw type: varchar
 */
class users_information extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_users_information';
    static $primary_key = 'user_id';
}
