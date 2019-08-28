<?php
namespace App\Supplier\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class BusinessIdentitySubmitForm extends Form {

    protected function getFields(Request $request) {
        return [
            // 实体信息部分
            'entity_name'                                   => ['required, min_length[2], max_length[50], regex[/[\x80-\xff\w\-]+/]'],
            'entity_license_no'                             => ['required'],
            'entity_license_address'                        => ['required, max_length[100]'],
            'entity_license_valid_from'                     => ['date'],
            'entity_license_valid_to'                       => ['date'],
            'entity_license_valid_long_term'                => ['integer', 0],
            'entity_license_front_image_id'                 => ['required, integer'],
            'entity_license_business_scopes'                => ['required, min_length[2], max_length[100]'],

            // 公司法人部分
            'biz_legal_representative_name'                 => ['required'],
            'biz_legal_representative_id_no'                => ['required, id_card'],
            'biz_legal_representative_id_valid_from'        => ['date'],
            'biz_legal_representative_id_valid_to'          => ['date'],
            'biz_legal_representative_id_valid_long_term'   => ['integer', 0],
            'biz_legal_representative_id_front_image_id'    => ['required, integer'],
            'biz_legal_representative_id_back_image_id'     => ['required, integer'],
            'biz_legal_representative_id_handheld_image_id' => ['required, integer'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'identity';
    }
}