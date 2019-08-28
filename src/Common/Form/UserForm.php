<?php
namespace App\Common\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class UserForm extends Form {
    protected function getFields(Request $request) {
        return [
            'nick_name'   => ['min_length[2],regex[/[\x80-\xff\w\-]+/]'],
            'head_img'    => ['max_length[255]'],
            'mobile'      => ['digit,exact_length[11]'],
            'bind_mobile' => ['digit,exact_length[11]'],
            'mail'        => ['email'],
            'bind_mail'   => ['email'],
            'note'        => ['max_length[255]'],
            'avatar_url'  => ['max_length[255]'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'edit_user';
    }
}