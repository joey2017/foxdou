<?php
namespace App\Admin\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class VirtualNetworkOperatorEditForm extends Form {

    protected function getFields(Request $request) {
        return [
            'id'              => ['integer'],
            'name'            => ['required, max_length[25]'],
            'top_operator_id' => ['required, integer'],
            'enabled'         => ['integer'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'edit_vno';
    }
}