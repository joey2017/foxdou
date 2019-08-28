<?php

namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

class UsersOpenAccountLog extends BaseModel {

    static $table_name = 'yzb_users_open_account_log';
    // 开通方式
    const METHODS_ACTIVED_AUTO    = 1;  // 激活通行证自动开户
    const METHODS_REVIEWED_AUTO   = 2;  // 身份信息过审自动开户
    const METHODS_REVIEWED        = 3;  // 开户申请审核通过
    const METHODS_ADMIN_OPERATION = 4;  // 后台人工主动开户

    const METHODS = [
        self::METHODS_ACTIVED_AUTO    => '激活通行证自动开户',
        self::METHODS_REVIEWED_AUTO   => '身份信息过审自动开户',
        self::METHODS_REVIEWED        => '开户申请审核通过',
        self::METHODS_ADMIN_OPERATION => '后台人工主动开户'
    ];

    const STATUS_PENDING   = 0;
    const STATUS_REVIEWING = 1;
    const STATUS_SUCCESS   = 2;
    const STATUS_FAILED    = 3;

    const STATUSES = [
        self::STATUS_PENDING   => '待审核',
        self::STATUS_REVIEWING => '审核中',
        self::STATUS_SUCCESS   => '审核通过',
        self::STATUS_FAILED    => '审核不通过'
    ];
}
