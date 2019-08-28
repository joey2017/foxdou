<?php
namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

class SubAccountLevel extends BaseModel {
    static $table_name = 'yzb_platform_user_level';

    static $has_one = [
//        ['real_name_info', 'class_name' => '\App\Common\Model\UsersRealNameAuthenticationInfo'],
    ];
}
