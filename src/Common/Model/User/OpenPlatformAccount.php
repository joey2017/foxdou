<?php
namespace App\Common\Model\User;

use App\Platform;

class OpenPlatformAccount extends SubAccount
{
    static $table_name = 'yzb_open_users';

    const STATUS_INACTIVE  = 'INACTIVE';    // 未激活
    const STATUS_ACTIVE    = 'ACTIVE';      // 正常
    const STATUS_REVIEWING = 'REVIEWING';   // 待审核
    const STATUS_SUSPENDED = 'SUSPENDED';   // 被冻结
    const STATUS_BANNED    = 'BANNED';      // 被清退
    const STATUS_REJECTED  = 'REJECTED';      // 审核失败


    const STATUSES = [
        self::STATUS_INACTIVE  => '未激活',
        self::STATUS_ACTIVE    => '正常',
        self::STATUS_REVIEWING => '待审核',
        self::STATUS_SUSPENDED => '被冻结',
        self::STATUS_BANNED    => '被清退',
        self::STATUS_REJECTED  => '审核失败'
    ];

//    public function __toString() {
//        return sprintf("[%s(%s)]", $this->shop_name, $this->id);
//    }


    public function getPlatformId() {
        return Platform::OPEN_PLATFORM;
    }

    public function getPlatformName()
    {
        return Platform::PLATFORMS[Platform::OPEN_PLATFORM];
    }

}
