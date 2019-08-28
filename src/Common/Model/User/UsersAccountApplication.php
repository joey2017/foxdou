<?php

namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

class UsersAccountApplication extends BaseModel
{
    static $table_name = 'yzb_users_account_application';
    // 审核状态
    const REVIEW_PENDING          = 'PENDING';  //待审核
    const REVIEW_REVIEWED_SUCCESS = 'SUCCESS';  //审核通过
    const REVIEW_REVIEWED_FAIL    = 'FAIL';     //审核不通过

    const REVIEW_STATUSES = [
        self::REVIEW_PENDING          => '待审核',
        self::REVIEW_REVIEWED_SUCCESS => '审核通过',
        self::REVIEW_REVIEWED_FAIL    => '审核不通过',
    ];
}
