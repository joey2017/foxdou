<?php

namespace App\Reseller\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class PrintSettingForm extends Form {

    protected function getFields(Request $request) {
        return [
            'add_time'               => ['enum[0|1]'], // 时间
            'cashier'                => ['enum[0|1]'], // 收银员
            'contact_mobile'         => ['enum[0|1]'],
            'contact_mobile_content' => ['min_length[2], max_length[15]'], //联系电话
            'foot'                   => ['enum[0|1]'],
            'foot_content'           => ['min_length[2], max_length[20]'], //页脚内容
            'on'                     => ['enum[0|1]'], // 充值号码
            'on_before_info'         => ['enum[0|1]'], // 充值前帐号信息 ??
            'order_id'               => ['enum[0|1]'], // 订单号
            'pay_money'              => ['enum[0|1]'], // 付款金额
            'product_name'           => ['enum[0|1]'], // 商品名称
            'recharge_amount'        => ['enum[0|1]'], // 充值金额
            'shop_address'           => ['enum[0|1]'],
            'shop_address_content'   => ['min_length[2], max_length[50]'], //地址
            'shop_name'              => ['enum[0|1]'],
            'shop_name_content'      => ['min_length[2], max_length[20]'], //地址
            'title'                  => ['enum[0|1]'],
            'title_content'          => ['min_length[2], max_length[20]'], //标题
            'product_type_content'   => ['min_length[2], max_length[20]'], //标题
            'print_info_content'     => ['min_length[2], max_length[20]'], //标题
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'printer_settings';
    }
}
