<?php
namespace App\Admin\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class PhoneNumberAttributionEditForm extends Form {

    protected function getFields(Request $request) {
        return [
            'id'              => ['integer'],
            'operator_id'     => ['required, digit'], // 运营商
            'operator_prefix' => ['required, digit, max_length[7]'], // 网络识别号，手机号前三位，即运营商
            'number_prefix'   => ['required, max_length[7]'], // 手机号后4到11位
            'province_code'   => ['required, digit'], // 省级行政单位编号
            'city_code'       => ['required, digit'], // 市级行政单位编号
            'note'            => ['max_length[100]'], // 备注
            'status'          => ['enum[0|1]'], // 号码状态, 1正常,0维护
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'edit_phone_number_attribution';
    }
}