<?php
namespace App\Common\Model;

class UsersMessage extends BaseModel {

    static $table_name = 'yzb_users_message';

    // 消息状态
    const STATUS_UNREAD = 1;
    const STATUS_READ   = 2;

    const STATUSES = [
        self::STATUS_UNREAD => '未阅读',
        self::STATUS_READ   => '已阅读'
    ];
}
