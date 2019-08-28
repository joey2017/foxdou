<?php
namespace App\Reseller\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

/**
 * Class OrderRechargeForm
 * @package App\Reseller\Form
 * @property $mobile
 * @property $product_id
 * @property $q_id
 * @property $mianzi
 * @property $sell_price
 * @property $product_name
 * @property $real_sell_price
 * @property $note
 */
class OrderRechargeForm extends Form {
    protected function getFields(Request $request) {
        return [
            'mobile'          => ['digit'],
            'product_info'    => ['regex[/^[U|L]\d+S\d+$/]'],
            'source_id'       => ['digit'],
            'recharge_amount' => ['digit'],
            'sell_price'      => ['decimal'],
            'product_name'    => ['max_length[100]'],
            'real_sell_price' => ['decimal'],
            'note'            => ['max_length[100]'],
        ];
    }
}