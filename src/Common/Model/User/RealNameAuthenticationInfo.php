<?php

namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

class RealNameAuthenticationInfo extends BaseModel
{
    static $table_name = 'yzb_users_real_name_authentication_info';

    static $belongs_to = [
        ['user', ['class_name' => 'User']]
    ];

    // 实名身份认证状态
    const IDENTITY_STATUS_NEW        = "NEW"; // 资料不全、没提交审核
    const IDENTITY_STATUS_VERIFIED   = "VERIFIED"; // 已认证
    const IDENTITY_STATUS_PENDING    = "PENDING"; // 待审核
    const IDENTITY_STATUS_REVIEW     = "REVIEW"; // 审核中
    const IDENTITY_STATUS_FAILED     = "FAILED"; // 认证失败，未通过

    const STATUSES = [
        self::IDENTITY_STATUS_NEW        => '新建',
        self::IDENTITY_STATUS_VERIFIED   => '已认证',
        self::IDENTITY_STATUS_PENDING    => '待审核',
        self::IDENTITY_STATUS_REVIEW     => '审核中',
        self::IDENTITY_STATUS_FAILED     => '未通过审核',
    ];

    public function isIdentityVerified()
    {
        return $this->status === self::IDENTITY_STATUS_VERIFIED;
    }

}
