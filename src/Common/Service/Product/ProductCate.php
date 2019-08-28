<?php

namespace App\Common\Service\Product;

class ProductCate
{

    public static $table = [
        1   => [//话费
                'product'            => 'yzb_product_mobile',
                'product_level'      => 'yzb_product_mobile_level',
                'product_user'       => 'yzb_product_mobile_user',
                'source'             => 'yzb_product_mobile_source',
                'source_relation'    => 'yzb_product_mobile_source',
                'source_celue_level' => 'yzb_product_mobile_source_celue_level',
                'source_celue_user'  => 'yzb_product_mobile_source_celue_user',
                'order'              => 'yzb_order_mobile',
                'order_cate'         => 100003,
        ],
        3   => [ //腾讯
                 'product'            => 'yzb_product_common',
                 'product_cate'       => 'yzb_product_common_master',
                 'product_level'      => 'yzb_product_common_level',
                 'product_user'       => 'yzb_product_common_user',
                 'source'             => 'yzb_product_common_template_relation',
                 'source_relation'    => 'yzb_product_common_template_relation',
                 'source_celue_level' => 'yzb_product_common_celue_level',
                 'source_celue_user'  => 'yzb_product_common_celue_user',
                 'order'              => 'yzb_order_tencent',
                 'order_cate'         => 100005,
        ],
        4   => [//流量
                'product'            => 'yzb_product_flow',
                'product_level'      => 'yzb_product_flow_level',
                'product_user'       => 'yzb_product_flow_user',
                'source'             => 'yzb_product_flow_source',
                'source_relation'    => 'yzb_product_flow_source',
                'source_celue_level' => 'yzb_product_flow_source_celue_level',
                'source_celue_user'  => 'yzb_product_flow_source_celue_user',
                'order'              => 'yzb_order_flow',
                'order_cate'         => 100004,

        ],
        10  => [//固话宽带充值
                'product'            => 'yzb_product_telephone',
                'product_level'      => 'yzb_product_telephone_level',
                'product_user'       => 'yzb_product_telephone_user',
                'source'             => 'yzb_product_telephone_source',
                'source_relation'    => 'yzb_product_telephone_source',
                'source_celue_level' => 'yzb_product_telephone_source_celue_level',
                'source_celue_user'  => 'yzb_product_telephone_source_celue_user',
                'order'              => 'yzb_order_telephone',
                'order_cate'         => 100007,
        ],

        // 2   => [ //游戏
        //          'product'            => 'yzb_product_common',
        //          'product_cate'       => 'yzb_product_common_master',
        //          'product_level'      => 'yzb_product_common_level',
        //          'product_user'       => 'yzb_product_common_user',
        //          'source'             => 'yzb_product_common_template_relation',
        //          'source_relation'    => 'yzb_product_common_template_relation',
        //          'source_celue_level' => 'yzb_product_common_celue_level',
        //          'source_celue_user'  => 'yzb_product_common_celue_user',
        //          'order'              => 'yzb_order_game',
        //          'order_cate'         => 100006,
        // ],

        // 5   => [//加油卡
        //         'product'            => 'yzb_product_common',
        //         'product_cate'       => 'yzb_product_common_master',
        //         'product_level'      => 'yzb_product_common_level',
        //         'product_user'       => 'yzb_product_common_user',
        //         'source'             => 'yzb_product_common_template_relation',
        //         'source_relation'    => 'yzb_product_common_template_relation',
        //         'source_celue_level' => 'yzb_product_common_celue_level',
        //         'source_celue_user'  => 'yzb_product_common_celue_user',
        //         'order'              => 'yzb_order_jiayou',
        //
        // ],
        // 6   => [//视频卡
        //         'product'            => 'yzb_product_common',
        //         'product_cate'       => 'yzb_product_common_master',
        //         'product_level'      => 'yzb_product_common_level',
        //         'product_user'       => 'yzb_product_common_user',
        //         'source'             => 'yzb_product_common_template_relation',
        //         'source_relation'    => 'yzb_product_common_template_relation',
        //         'source_celue_level' => 'yzb_product_common_celue_level',
        //         'source_celue_user'  => 'yzb_product_common_celue_user',
        //
        // ],
        // 7   => [//票务
        //         'order'          => 'order',
        //         'qudao_relation' => 'sell_source_mobile',
        // ],
        // 8   => [//手机卡号
        //         'order'          => 'order',
        //         'qudao_relation' => 'sell_source_mobile',
        // ],
        // 9   => [//生活激费
        //         'order'          => 'order',
        //         'qudao_relation' => 'sell_source_mobile',
        // ],
        // 100 => [
        //     'order' => 'order_tel'
        // ],
        // 101 => [
        //     'order' => 'order_tel'
        // ],
        // 102 => [
        //     'order' => 'order_tel'
        // ],
        //
    ];


    /**
     * 获取表名
     * @param integer $cate 产品类型
     * @param string $type 获取类型 table或者 model
     * @param string $tabel_type 获取的表名
     */
    public static function get_table($cate, $type, $table_type_name = '')
    {

        if (!$cate) {
            throw new \Exception('业务类型,不能为空');
        }
        if (!array_key_exists($cate, self::$table)) {
            throw new \Exception('错误的业务类型');
        }
        if ($table_type_name) {
            if (array_key_exists($table_type_name, self::$table[$cate])) {
                if ($type == 'table') {
                    return self::$table[$cate][$table_type_name];
                } elseif ($type == 'model') {
                    return 'App\Common\Model\Product\\' . self::tableTransferClass(self::$table[$cate][$table_type_name]);
                } else {
                    throw new \Exception('错误的类型，$type只能传table、model');
                }
            } else {
                throw new \Exception('错误的表格类型');
            }
        }
        return self::$table[$cate];
    }

    public static function get()
    {
        $data = [
            1  => ['id'                   => 1, 'name' => '话费充值', 'charge_status' => 2,
                   'list_url'             => 'product-mobile/list',
                   'open_list_url'        => '/open/mobile/order',
                   'admin_order_list_url' => 'order/mobile',
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'agent_order_list'     => '/backend/order/mobile',
                   'agent_product_list'   => '/backend/product/system-mobile',
                   'child'                =>
                       [
                           1 => ['id' => 1, 'name' => '移动', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           2 => ['id' => 2, 'name' => '联通', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           3 => ['id' => 3, 'name' => '电信', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           4 => ['id' => 4, 'name' => '虚商', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                       ],
            ],
            2  => ['id'                   => 2, 'name' => '游戏充值', 'charge_status' => 2, 'list_url' => 'product-common/index',
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'open_list_url'        => '/open/service/trade-log-game',
                   'admin_order_list_url' => 'order-game/index',
                   'addUrl'               => 'product-common/add',
                   'agent_order_list'     => '/backend/order/game',
                   'agent_product_list'   => '/backend/product/system-game',
                   'sell_source_add_url'  => '/sell/source/apply-second-general',
                   'sup_source_add_url'   => '/sup/source/apply-second-general',
                   'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            3  => ['id'                   => 3, 'name' => '腾讯业务', 'charge_status' => 2,
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'list_url'             => 'product-common/index',
                   'open_list_url'        => '/open/service/trade-log-game',
                   'admin_order_list_url' => 'order-game/index',
                   'addUrl'               => 'product-common/add',
                   'agent_order_list'     => '/backend/order/game',
                   'agent_product_list'   => '/backend/product/system-game',
                   'sell_source_add_url'  => '/sell/source/apply-second-general',
                   'sup_source_add_url'   => '/sup/source/apply-second-general',
                   'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            4  => ['id'                 => 4, 'name' => '流量充值', 'charge_status' => 2, 'list_url' => 'product-mobile/list',
                   'aduit_list_url'     => '/aduit/aduit-source/index',
                   'agent_order_list'   => '/backend/order/mobile',
                   'agent_product_list' => '/backend/product/system-mobile',
                   'open_list_url'      => '/open/mobile/order', 'admin_order_list_url' => 'order/mobile', 'addUrl' => 'product-mobile/add', 'child' =>
                       [
                           1 => ['id' => 1, 'name' => '移动流量', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           2 => ['id' => 2, 'name' => '联通流量', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           3 => ['id' => 3, 'name' => '电信流量', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           4 => ['id' => 4, 'name' => '虚商流量', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                       ],
            ],
            5  => ['id'                   => 5, 'name' => '加油卡', 'charge_status' => 2, 'list_url' => 'product-common/index',
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'agent_order_list'     => '/backend/order/game',
                   'agent_product_list'   => '/backend/product/system-game',
                   'open_list_url'        => '/open/mobile/order', 'admin_order_list_url' => 'order-game/index',
                   'addUrl'               => 'product-common/add',
                   'sell_source_add_url'  => '/sell/source/apply-second-general',
                   'sup_source_add_url'   => '/sup/source/apply-second-general',
                   'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            6  => ['id'                   => 6, 'name' => '视频卡', 'charge_status' => 2, 'list_url' => 'product-common/index',
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'open_list_url'        => '/open/mobile/order', 'admin_order_list_url' => 'order-game/index',
                   'addUrl'               => 'product-common/add',
                   'agent_order_list'     => '/backend/order/game',
                   'agent_product_list'   => '/backend/product/system-game',
                   'sell_source_add_url'  => '/sell/source/apply-second-general',
                   'sup_source_add_url'   => '/sup/source/apply-second-general',
                   'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            7  => ['id'                   => 7, 'name' => '票务', 'charge_status' => 2, 'list_url' => '',
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'open_list_url'        => '/open/mobile/order', 'admin_order_list_url' => 'order-game/index',
                   'addUrl'               => 'product-common/add',
                   'agent_order_list'     => '/backend/order/game',
                   'agent_product_list'   => '/backend/product/system-game',
                   'sell_source_add_url'  => '/sell/source/apply-second-general',
                   'sup_source_add_url'   => '/sup/source/apply-second-general',
                   'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            8  => ['id'                   => 8, 'name' => '手机卡号', 'charge_status' => 2, 'list_url' => '',
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'open_list_url'        => '/open/mobile/order', 'admin_order_list_url' => 'order-game/index',
                   'addUrl'               => 'product-common/add',
                   'agent_order_list'     => '/backend/order/game',
                   'agent_product_list'   => '/backend/product/system-game',
                   'sell_source_add_url'  => '/sell/source/apply-second-general',
                   'sup_source_add_url'   => '/sup/source/apply-second-general',
                   'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            9  => ['id'                   => 9, 'name' => '生活激费', 'charge_status' => 2, 'list_url' => '',
                   'aduit_list_url'       => '/aduit/aduit-source/index',
                   'open_list_url'        => '/open/mobile/order', 'admin_order_list_url' => 'order-game/index',
                   'addUrl'               => 'product-common/add',
                   'agent_order_list'     => '/backend/order/game',
                   'agent_product_list'   => '/backend/product/system-game',
                   'sell_source_add_url'  => '/sell/source/apply-second-general',
                   'sup_source_add_url'   => '/sup/source/apply-second-general',
                   'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            10 => ['id'                 => 10, 'name' => '固话宽带充值', 'charge_status' => 2, 'list_url' => 'product-mobile/list',
                   'aduit_list_url'     => '/aduit/aduit-source/index',
                   'agent_order_list'   => '/backend/order/mobile',
                   'agent_product_list' => '/backend/product/system-mobile',
                   'open_list_url'      => '/open/mobile/order', 'admin_order_list_url' => 'order/mobile', 'addUrl' => 'product-mobile/add', 'child' =>
                       [
                           1 => ['id' => 1, 'name' => '移动', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           2 => ['id' => 2, 'name' => '联通', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           3 => ['id' => 3, 'name' => '电信', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                           4 => ['id' => 4, 'name' => '铁通', 'child' =>
                               [
                                   1 => ['id'                   => 1, 'name' => '快充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                                   2 => ['id'                   => 2, 'name' => '慢充', 'addUrl' => 'product-mobile/add',
                                         'sell_source_add_url'  => '/sell/source/apply-second-mobile',
                                         'sup_source_add_url'   => '/sup/source/apply-second-mobile',
                                         'admin_source_add_url' => '/product/sell-source-mobile/add',
                                   ],
                               ],
                           ],
                       ],
            ],

            100 => ['id'            => 100, 'charge_status' => 3, 'name' => '普通api', 'list_url' => '/',
                    'open_list_url' => '/open/service/trade-log-api', 'admin_order_list_url' => '/',
                    'addUrl'        => '/', 'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            101 => ['id'            => 101, 'charge_status' => 3, 'name' => 'API访问2', 'list_url' => '/',
                    'open_list_url' => '/open/service/trade-log-api', 'admin_order_list_url' => '/',
                    'addUrl'        => '/', 'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
            102 => ['id'            => 102, 'charge_status' => 3, 'name' => 'API访问3', 'list_url' => '/',
                    'open_list_url' => '/open/service/trade-log-api', 'admin_order_list_url' => '/',
                    'addUrl'        => '/', 'admin_source_add_url' => '/product/sell-template/add-general-template',
            ],
        ];
        return $data;
    }


    /**
     * 获取分类信息
     * @param integer $type
     * @return bool|int
     */
    public static function get_cate_type($type)
    {
        if (in_array($type, array_column(self::get(), 'id'))) {
            if (in_array($type, [1, 4, 10])) {//话费
                return 1;
            } elseif (in_array($type, [2, 3, 5, 6, 7, 8, 9])) {//游戏
                return 2;
            } elseif (in_array($type, [100, 101, 102])) {
                return 3;
            }
        }
        return false;
    }

    public static function tableTransferClass($table_name){
        if (!is_string($table_name)) {
            return false;
        }

        $tmp = explode('_',$table_name);
        $table_class = '';
        unset($tmp[0]);

        foreach ($tmp as $v) {
            $table_class .= ucfirst($v);
        }
        return $table_class;
    }
}