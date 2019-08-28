<?php
namespace App\Admin\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class RegionEditForm extends Form {

    protected function getFields(Request $request) {
        return [
            'id'            => ['integer'],
            'province_code' => ['integer'],
            'city_code'     => ['integer'],
            'district_code' => ['integer'],
            'area_code'     => ['required, integer'],
            'area_name'     => ["required"],
            'short_name'    => ["required"],
            'parent_id'     => ["integer"],
            'level'         => ["integer"],
            'sort'          => ['integer', '0'],
            'zipcode'       => ['integer'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'edit_region';
    }
}