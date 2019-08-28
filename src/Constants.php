<?php

namespace App;

class Constants {

    const AUTH_REALM_ADMIN = "ADMIN";
    const AUTH_REALM_USER  = "USER";

    const AUTH_TYPE_ADMIN_LOGIN = 'ADMIN_LOGIN';
    const AUTH_TYPE_USER_LOGIN  = 'USER_LOGIN';
    const AUTH_TYPE_USER_PAY    = 'USER_PAY';

    const CARRIERS = [
        1 => "移动",
        2 => "联通",
        3 => "电信",
        4 => "虚商",
    ];

    const TELEPHONE_CARRIERS = [
        1 => "移动",
        2 => "联通",
        3 => "电信",
        5 => "铁通",
    ];

    const FLOW_CARRIERS = [
        1 => "移动",
        2 => "联通",
        3 => "电信",
    ];

    // 1=>
    const ISP_CARRIERS = [
        // 手机话费
        self::PRODUCT_CATE_MOBILE_PHONE => self::CARRIERS,
        // 手机流量
        self::PRODUCT_CATE_DATA_PACKAGE => self::TELEPHONE_CARRIERS,
        // 固话宽带
        self::PRODUCT_CATE_LINE_PHONE   => self::FLOW_CARRIERS
    ];

    const PRODUCT_CATE_MOBILE_PHONE = 1; //"话费充值",
    const PRODUCT_CATE_DATA_PACKAGE = 4; //"流量充值",
    const PRODUCT_CATE_LINE_PHONE   = 10; //"固话宽带充值",
    const PRODUCT_CATE_TENCENT      = 3; //"腾讯业务",

    // const PRODUCT_CATE_GAME_RECHARGE = 2; //"游戏充值",
    // const PRODUCT_CATE_FUEL          = 5; //"加油卡",
    // const PRODUCT_CATE_VIDEO         = 6; //"视频卡",
    // const PRODUCT_CATE_TICKET        = 7; //"票务",
    // const PRODUCT_CATE_SIM_CARD      = 8; //"手机卡号",
    // const PRODUCT_CATE_HOME_LIFE     = 9; //"生活激费",

    const PRODUCT_CATEGORIES = [
        self::PRODUCT_CATE_MOBILE_PHONE => "话费充值",
        self::PRODUCT_CATE_DATA_PACKAGE => "流量充值",
        self::PRODUCT_CATE_LINE_PHONE   => "固话宽带充值",
        self::PRODUCT_CATE_TENCENT      => "腾讯业务",
        // self::PRODUCT_CATE_GAME_RECHARGE => "游戏充值",
        // self::PRODUCT_CATE_FUEL          => "加油卡",
        // self::PRODUCT_CATE_VIDEO         => "视频卡",
        // self::PRODUCT_CATE_TICKET        => "票务",
        // self::PRODUCT_CATE_SIM_CARD      => "手机卡号",
        // self::PRODUCT_CATE_HOME_LIFE     => "生活激费",
    ];

    const ORDER_RECHARGE_CATE_MOBILE       = '100003'; // => '手机话费充值'
    const ORDER_RECHARGE_CATE_DATA_PACKAGE = '100004'; // => '手机流量充值'
    const ORDER_RECHARGE_CATE_LINE_PHONE   = '100007'; // => '固话宽带充值'
    const ORDER_RECHARGE_CATE_TENCENT      = '100005'; // => '腾讯业务充值'
    const ORDER_RECHARGE_CATE_GAME         = '100006'; // => '游戏点卡充值'

    const ORDER_RECHARGE_CATEGORIES = [
        self::ORDER_RECHARGE_CATE_MOBILE       => '手机话费充值',
        self::ORDER_RECHARGE_CATE_DATA_PACKAGE => '手机流量充值',
        self::ORDER_RECHARGE_CATE_LINE_PHONE   => '固话宽带充值',
        self::ORDER_RECHARGE_CATE_TENCENT      => '腾讯业务充值',
        self::ORDER_RECHARGE_CATE_GAME         => '游戏点卡充值',
    ];

    const RECHARGE_METHODS = [
        1 => '人工充值',
        2 => '接口充值',
        3 => '批量充值',
        4 => '卡密充值',
    ];

    const RECHARGE_SPEED = [
        1 => '快充',
        2 => '慢充',
    ];

}
