<?php

namespace App;

interface ProductConstants {

    const SETTING_SUBJECT_TYPE_DEFAULT = 'DEFAULT';
    const SETTING_SUBJECT_TYPE_USER    = 'USER';
    const SETTING_SUBJECT_TYPE_GROUP   = 'GROUP';

    const SETTING_SUBJECT_TYPES = [
        self::SETTING_SUBJECT_TYPE_DEFAULT => '所有用户',
        self::SETTING_SUBJECT_TYPE_GROUP   => '定价分组',
        self::SETTING_SUBJECT_TYPE_USER    => '特殊用户',
    ];

    const PRODUCT_TYPE_MOBILE    = 'MOBILE';
    const PRODUCT_TYPE_FLOW      = 'FLOW';
    const PRODUCT_TYPE_TELEPHONE = 'TELEPHONE';
    const PRODUCT_TYPE_TENCENT   = 'TENCENT';

    const PRODUCT_TYPES = [
        self::PRODUCT_TYPE_MOBILE    => '手机话费',
        self::PRODUCT_TYPE_FLOW      => '手机流量',
        self::PRODUCT_TYPE_TELEPHONE => '固话宽带',
        self::PRODUCT_TYPE_TENCENT   => '腾讯商品',
    ];

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE   = 1;

    const STATUSES = [
        self::STATUS_INACTIVE => '停售',
        self::STATUS_ACTIVE   => '在售',
    ];

    const SETTING_ENABLED  = 1;
    const SETTING_DISABLED = 0;

    const SETTING_ENABLE_STATUSES = [
        self::SETTING_ENABLED  => '启用',
        self::SETTING_DISABLED => '禁用',
    ];

    const SELL_STATUS_SELL    = 'SELL';
    const SELL_STATUS_NO_SELL = 'NO_SELL';
    const SELL_STATUS_HIDDEN  = 'HIDDEN';

    const SELL_STATUSES = [
        self::SELL_STATUS_SELL    => '上架',
        self::SELL_STATUS_NO_SELL => '下架并可见',
        self::SELL_STATUS_HIDDEN  => '下架不可见',
    ];

    const REFUND_TYPE_AUTO_REFUND   = 'AUTO';
    const REFUND_TYPE_MANUAL_REFUND = 'MANUAL';

    const REFUND_TYPES = [
        self::REFUND_TYPE_AUTO_REFUND   => '自动退款',
        self::REFUND_TYPE_MANUAL_REFUND => '不自动退款',
    ];

    const PRICE_LIMIT_TYPE_UNLIMITED    = 'UNLIMITED';
    const PRICE_LIMIT_TYPE_SAME_AS_COST = 'SAME_AS_COST';
    const PRICE_LIMIT_TYPE_LIMITED      = 'LIMITED';

    const PRICE_LIMIT_TYPES = [
        self::PRICE_LIMIT_TYPE_UNLIMITED    => '不限价',
        self::PRICE_LIMIT_TYPE_SAME_AS_COST => '平本',
        self::PRICE_LIMIT_TYPE_LIMITED      => '限价',
    ];

    const STRATEGY_SORTING                  = 'SORTING';
    const STRATEGY_RATIO                    = 'RATIO';
    const STRATEGY_LOWEST_COST_IN_SAME_AREA = 'LCSA';
    const STRATEGY_LOWEST_COST_IN_ALL_AREA  = 'LCAA';

    const STRATEGIES = [
        self::STRATEGY_SORTING                  => '排序',
        self::STRATEGY_RATIO                    => '比例分流',
        self::STRATEGY_LOWEST_COST_IN_SAME_AREA => '同地区成本',
        self::STRATEGY_LOWEST_COST_IN_ALL_AREA  => '混合地区成本',
    ];

    const SALE_REGION_COUNTRY  = 'COUNTRY';
    const SALE_REGION_PROVINCE = 'PROVINCE';
    const SALE_REGION_CITY     = 'CITY';

    const PRODUCT_SALE_REGIONS = [
        self::SALE_REGION_COUNTRY  => '全国',
        self::SALE_REGION_PROVINCE => '省级',
        self::SALE_REGION_CITY     => '市级',
    ];

    const AREA_PRIORITY_COUNTRY  = 'COUNTRY';
    const AREA_PRIORITY_PROVINCE = 'PROVINCE';
    const AREA_PRIORITY_CITY     = 'CITY';

    const AREA_PRIORITIES = [
        self::AREA_PRIORITY_COUNTRY  => '全国',
        self::AREA_PRIORITY_PROVINCE => '省级',
        self::AREA_PRIORITY_CITY     => '市级',
    ];

    const RECHARGE_SPEED_FAST = 'FAST';
    const RECHARGE_SPEED_SLOW = 'SLOW';

    const RECHARGE_SPEED_TYPES = [
        self::RECHARGE_SPEED_FAST => '快充',
        self::RECHARGE_SPEED_SLOW => '慢充',
    ];

    // 面值类型
    const FACE_VALUE_TYPE_FIXED       = 'FIXED';
    const FACE_VALUE_TYPE_ARBITRARILY = 'ARBIT';
    const FACE_VALUE_TYPE_OTHER       = 'OTHER';

    const FACE_VALUE_TYPES = [
        self::FACE_VALUE_TYPE_FIXED       => '固定面值',
        self::FACE_VALUE_TYPE_ARBITRARILY => '任意充',
        self::FACE_VALUE_TYPE_OTHER       => '其他面值'
    ];

    // 货源审核状态
    const REVIEW_STATUS_PENDING  = 'PENDING';
    const REVIEW_STATUS_APPROVED = 'APPROVED';
    const REVIEW_STATUS_REJECTED = 'REJECTED';

    const REVIEW_STATUSES = [
        self::REVIEW_STATUS_PENDING  => '待审核',
        self::REVIEW_STATUS_APPROVED => '审核通过',
        self::REVIEW_STATUS_REJECTED => '审核不通过',
    ];

    const DURATION_TODAY      = '1D';
    const DURATION_THREE_DAYS = '3D';
    const DURATION_ONE_WEEK   = '1W';
    const DURATION_THIS_MONTH = '1M';
    const DURATION_OTHER      = 'OTHER';

    const DURATIONS = [
        self::DURATION_TODAY      => '当日有效',
        self::DURATION_THREE_DAYS => '三天内有效',
        self::DURATION_ONE_WEEK   => '七日内有效',
        self::DURATION_THIS_MONTH => '当月有效',
        self::DURATION_OTHER      => '空值',
    ];

    const EFFECTIVE_TIME_NOW        = 'NOW';
    const EFFECTIVE_TIME_NEXT_DAY   = 'NEXT_DAY';
    const EFFECTIVE_TIME_NEXT_MONTH = 'NEXT_MONTH';
    const EFFECTIVE_TIME_OTHER      = 'OTHER';

    const EFFECTIVE_TIMES = [
        self::EFFECTIVE_TIME_NOW        => '立即生效',
        self::EFFECTIVE_TIME_NEXT_DAY   => '次日生效',
        self::EFFECTIVE_TIME_NEXT_MONTH => '下月有效',
        self::EFFECTIVE_TIME_OTHER      => '空值',
    ];

    const FLOW_FACE_VALUES = [
        '10'    => '10M', '20' => '20M', '30' => '30M', '50' => '50M', '70' => '70M', '100' => '100M',
        '150'   => '150M', '200' => '200M', '300' => '300M', '500' => '500M', '1024' => '1G', '2048' => '2G',
        '3072'  => '3G', '4096' => '4G', '5120' => '5G', '6114' => '6G', '7189' => '7G', '8192' => '8G',
        '10240' => '10G', '12288' => '12G', '15360' => '15G', '20480' => '20G', '30720' => '30G', '51200' => '50G'
    ];

    const CROSS_MONTH_YES  = 'Y';
    const CROSS_MONTH_NO   = 'N';
    const CROSS_MONTH_NULL = 'U';

    const CROSS_MONTH_TYPES = [
        self::CROSS_MONTH_YES  => '跨月',
        self::CROSS_MONTH_NO   => '当月有效',
        self::CROSS_MONTH_NULL => '空值',
    ];

    const PRODUCTS_ID_TO_TYPE = [
        Constants::PRODUCT_CATE_MOBILE_PHONE => self::PRODUCT_TYPE_MOBILE,
        Constants::PRODUCT_CATE_DATA_PACKAGE => self::PRODUCT_TYPE_FLOW,
        Constants::PRODUCT_CATE_LINE_PHONE   => self::PRODUCT_TYPE_TELEPHONE,
        Constants::PRODUCT_CATE_TENCENT      => self::PRODUCT_TYPE_TENCENT,
    ];

}
