<?php
namespace App\Test\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class TestForm extends Form {

    protected function getFields(Request $request) {
        return [
            'nick_name'   => ['required, min_length[2],regex[/[\x80-\xff\w\-]+/]'],
            'mobile'      => ['required, mobile'],
            'mail'        => ['required, email'],
            'note'        => ['max_length[255]'],
            'avatar_url'  => ['max_length[255]'],
        ];
    }
    protected function getCsrfTokenId(Request $request) {
        return 'test';
    }
}