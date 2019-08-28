<?php

namespace App;

class PaymentConstants {
    const TYPE_MANUAL    = 1;  // 充值方式: 人工充值
    const TYPE_AUTOMATIC = 2;  // 充值方式: 自动充值

    const PAYMENT_METHOD_BALANCE         = 1;
    const PAYMENT_METHOD_ALIPAY_TRANSFER = 2;
    const PAYMENT_METHOD_ALIPAY_PC       = 3;
    const PAYMENT_METHOD_TAOBAO          = 4;
    const PAYMENT_METHOD_WEIXIN          = 5;
    const PAYMENT_METHOD_CASH            = 6;

    const PAYMENT_METHOD_CLASSES = [
        self::PAYMENT_METHOD_BALANCE         => '余额支付',
        self::PAYMENT_METHOD_ALIPAY_TRANSFER => '支付宝转账',
        self::PAYMENT_METHOD_ALIPAY_PC       => '支付宝在线PC付款',
        self::PAYMENT_METHOD_TAOBAO          => '淘宝店铺',
        self::PAYMENT_METHOD_WEIXIN          => '微信',
        self::PAYMENT_METHOD_CASH            => '现金',
    ];

    const PAYMENT_METHOD_CLASS_INFOS = [
        self::PAYMENT_METHOD_BALANCE         => [
            'id'         => 1,
            'name'       => '余额支付',
            'modelsName' => '\common\models\amount\recharge\way\AlipayTransfer',
        ],
        self::PAYMENT_METHOD_ALIPAY_TRANSFER => [
            'id'         => 2,
            'name'       => '支付宝转账',
            'modelsName' => '\common\models\amount\recharge\way\AlipayTransfer',
        ],
        self::PAYMENT_METHOD_ALIPAY_PC       => [
            'id'         => 3,
            'name'       => '支付宝在线PC',
            'modelsName' => '\common\models\amount\recharge\way\AlipayTransfer',
            'poundage'   => ['rate' => 0.006, 'rate_unit' => PaymentConstants::RATE_UNIT_EXTRA_PERCENTAGE],//默认手续费
        ],
        self::PAYMENT_METHOD_TAOBAO          => [
            'id'           => 4,
            'name'         => '淘宝店铺',
            'modelsName'   => '\common\models\amount\recharge\way\AlipayTransfer',
            'pintai_power' => [1, 2, 3],//平台
        ],
        self::PAYMENT_METHOD_WEIXIN          => [
            'id'         => 5,
            'name'       => '微信',
            'modelsName' => '\common\models\amount\recharge\way\AlipayTransfer',
        ],
        self::PAYMENT_METHOD_CASH            => [
            'id'         => 6,
            'name'       => '现金',
            'modelsName' => '\common\models\amount\recharge\way\AlipayTransfer',
        ],
    ];


//    public static $pay_way_status=[0=>'已停用',1=>'已启动',2=>'已暂停'];//绑定类型
    const PAYMENT_METHOD_STATUS_DISABLED  = 0;  // 已停用
    const PAYMENT_METHOD_STATUS_ENABLED   = 1;  // 已启动
    const PAYMENT_METHOD_STATUS_SUSPENDED = 2;  // 已暂停

//    public static $way_type=[1=>'余额',2=>'网银',3=>'快捷',4=>'在线支付',5=>'转账',6=>'现金'];//绑定类型
    const PAYMENT_TYPE_BALANCE     = 1;
    const PAYMENT_TYPE_ONLINE_BANK = 2;
    const PAYMENT_TYPE_QUICK_PAY   = 3;
    const PAYMENT_TYPE_ONLINE_PAY  = 4;
    const PAYMENT_TYPE_TRANSFER    = 5;
    const PAYMENT_TYPE_CASH        = 6;

//    public static $pay_institution_type=[1=>'第三方支付',2=>'储蓄卡',3=>'信用卡',4=>'狐豆钱包'];//支付机构类型
    const INSTITUTION_TYPE_THIRD_PARTH_PAY = 1;
    const INSTITUTION_TYPE_BANK_CARD       = 2;
    const INSTITUTION_TYPE_CREDIT_CARD     = 3;
    const INSTITUTION_TYPE_FOXDOU_WALLET   = 4;


    const SCENE_GROUP_OPEN_PLATFORM = Platform::OPEN_PLATFORM;
    const SCENE_GROUP_ADMIN         = Platform::ADMIN;
    const SCENE_GROUP_MALL          = Platform::MALL;
    const SCENE_GROUP_RESELLER      = Platform::RESELLER;
    const SCENE_GROUP_SUPPLIER      = Platform::SUPPLIER;

    const SCENE_GROUPS = [
        self::SCENE_GROUP_OPEN_PLATFORM => [self::SCENE_OPEN_PLATFORM_RECHARGE],
        self::SCENE_GROUP_RESELLER      => [self::SCENE_RESELLER_RECHARGE, self::SCENE_RESELLER_TRANSFER, self::SCENE_RESELLER_COMMISSION_WITHDRAW],
        self::SCENE_GROUP_SUPPLIER      => [self::SCENE_SUPPLIER_RECHARGE],
        self::SCENE_GROUP_MALL          => [self::SCENE_MALL_RECHARGE, self::SCENE_MALL_VIRTUAL_GOOD_ORDER, self::SCENE_MALL_PHYSICAL_GOOD_ORDER, self::SCENE_MALL_3C_ORDER],
        self::SCENE_GROUP_ADMIN         => [self::SCENE_ADMIN_RECHARGE, self::SCENE_ADMIN_BALANCE_DEBIT, self::SCENE_ADMIN_PHYSICAL_GOOD_ORDER, self::SCENE_ADMIN_3C_ORDER],
    ];

    const SCENE_OPEN_PLATFORM_RECHARGE       = 201; // 开放平台余额充值

    const SCENE_ADMIN_RECHARGE               = 301; // 余额充值
    const SCENE_ADMIN_BALANCE_DEBIT          = 302; // 余额扣款
    const SCENE_ADMIN_PHYSICAL_GOOD_ORDER    = 303; // 余额扣款
    const SCENE_ADMIN_3C_ORDER               = 304; // 3C数码

    const SCENE_MALL_RECHARGE                = 401; // 余额充值
    const SCENE_MALL_VIRTUAL_GOOD_ORDER      = 402; // 虚拟类订单
    const SCENE_MALL_PHYSICAL_GOOD_ORDER     = 403; // 实物类形单
    const SCENE_MALL_3C_ORDER                = 404; // 3C数码

    const SCENE_RESELLER_RECHARGE            = 501; // 余额充值
    const SCENE_RESELLER_TRANSFER            = 502; // 转账
    const SCENE_RESELLER_COMMISSION_WITHDRAW = 502; // 佣金提现

    const SCENE_SUPPLIER_RECHARGE            = 601; // 余额充值

    const SCENES = [
        self::SCENE_OPEN_PLATFORM_RECHARGE       => '余额充值',
        self::SCENE_RESELLER_RECHARGE            => '余额充值',
        self::SCENE_RESELLER_TRANSFER            => '转账',
        self::SCENE_RESELLER_COMMISSION_WITHDRAW => '佣金提现',
        self::SCENE_SUPPLIER_RECHARGE            => '余额充值',
        self::SCENE_MALL_RECHARGE                => '余额充值',
        self::SCENE_MALL_VIRTUAL_GOOD_ORDER      => '虚拟类订单',
        self::SCENE_MALL_PHYSICAL_GOOD_ORDER     => '实物类形单',
        self::SCENE_MALL_3C_ORDER                => '3C数码',
        self::SCENE_ADMIN_RECHARGE               => '余额充值',
        self::SCENE_ADMIN_BALANCE_DEBIT          => '余额扣款',
        self::SCENE_ADMIN_PHYSICAL_GOOD_ORDER    => '余额扣款',
        self::SCENE_ADMIN_3C_ORDER               => '3C数码',
    ];

//    public static $rate_unit=[1=>'百分比',2=>'元',3=>'满扣百分比',4=>'满扣元'];
    const RATE_UNIT_EXTRA_PERCENTAGE     = 1;   //百分比
    const RATE_UNIT_EXTRA_VALUE          = 2;   //元
    const RATE_UNIT_PERCENTAGE_IF_EXCEED = 3;   //满扣百分比
    const RATE_UNIT_VALUE_IF_EXCEED      = 4;   //满扣元

//    public static $if_deduct_poundage=[1=>'扣除',2=>'不扣除'];//是否扣手续费
    const POUNDAGE_DEDUCT_YES   = 1; // 扣除
    const POUNDAGE_DEDUCT_NO    = 2; // 不扣除

//    public static $deduct_poundage_way=[1=>'订单金额',2=>'用户余额'];//扣手续费的方式，如订单价格100元，手续费1元，是收99元还是收101元。$if_deduct_poundage为1时才生效
    const POUNDAGE_DEDUCT_SOURCE_PAYMENT_AMOUNT = 1; // 订单金额，订单价格 100 元，手续费 1 元，实收 101 元
    const POUNDAGE_DEDUCT_SOURCE_USER_FUNDS     = 2; // 用户余额，订单价格 100 元，手续费 1 元从余额扣除，实收 99 元


    public static function getValidPaymentMethodNames($asString = false) {
        $methods = array_keys(self::PAYMENT_METHOD_CLASS_INFOS);
        if($asString) {
            $methods = join("|", $methods);
        }

        return $methods;
    }

    public static function toChoices() {
        $choices = [];
        foreach (self::PAYMENT_METHOD_CLASS_INFOS as $id => $info) {
            $choices[] = ['name' => $info['name'], "value" => $id ];
        }

        return $choices;
    }
}
