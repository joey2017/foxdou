<?php
namespace App\Common\Form;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;

class IndividualUserRegisterForm extends Form {

    protected function getFields(Request $request) {
        return [
            'real_name'            => ['required'],
            'id_type'              => ['required, enum[1|2]'],
            'id_num'               => ['required, id_card'],
            'mobile'               => ['required, mobile'],
            'recaptcha'            => ['required, recaptcha'],
            'verify_code'          => ['required, verify_code'],
            'nick_name'            => ['required'],
            'password'             => ['required'],
            'password_confirm'     => ['required'],
            'pay_password'         => ['required'],
            'pay_password_confirm' => ['required'],
            'type'                 => ['enum[I|B]'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'user_register';
    }
}