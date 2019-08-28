<?php

namespace App\Common\Model\User;

use App\Platform;

class ResellerAccount extends SubAccount
{
    static $table_name = 'yzb_agent_users';

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

    //代理商类型
    const TYPE_NORMAL    = '1';
    const TYPE_DEALER    = '2';
    const TYPE_UNDERLING = '3';

    const TYPES = [
        self::TYPE_NORMAL    => '普通代理商',
        self::TYPE_DEALER    => '平台指定经销商',
        self::TYPE_UNDERLING => '经销商下属代理商'
    ];


    public function __toString()
    {
        return sprintf("[%s(%s)]", $this->shop_name, $this->id);
    }

    public function getPlatformId()
    {
        return Platform::RESELLER;
    }

    public function getPlatformName()
    {
        return Platform::PLATFORMS[Platform::RESELLER];
    }
}
