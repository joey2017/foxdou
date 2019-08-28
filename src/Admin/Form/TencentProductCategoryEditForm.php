<?php
namespace App\Admin\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class TencentProductCategoryEditForm extends Form {

    protected function getFields(Request $request) {
        return [
            'id'              => ['integer'],
            'name'            => ['required, max_length[25]'],
            'enabled'         => ['integer'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'edit_vno';
    }
}