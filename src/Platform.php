<?php
namespace App;

class Platform
{
    const FOXDOU_WEB    = 'WEB';
    const OPEN_PLATFORM = 'OPEN';
    const SUPPLIER      = 'SUPPLIER';
    const MALL          = 'MALL';
    const RESELLER      = 'RESELLER';
    const ADMIN         = 'ADMIN';
    const PASSPORT      = 'PASSPORT';

    const PLATFORMS = [
        self::FOXDOU_WEB    => '狐豆官网',
        self::OPEN_PLATFORM => '开放平台',
        self::SUPPLIER      => '供货商平台',
        self::MALL          => '狐豆商城',
        self::RESELLER      => '代理商平台',
        self::ADMIN         => '后台管理',
        self::PASSPORT      => '狐豆通行证',
    ];
}
