<?php
namespace App\Passport\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class IndividualIdentitySubmitForm extends Form {

    protected function getFields(Request $request) {
        return [
            'entity_name'                      => ['required, min_length[2], max_length[10], regex[/[\x80-\xff\w\-]+/]'],
            'entity_license_no'                => ['required, id_card'],
            'entity_license_address'           => ['required, max_length[100]'],
            'entity_license_valid_from'        => ['date'],
            'entity_license_valid_to'          => ['date'],
            'entity_license_valid_long_term'   => ['integer', 0],
            'entity_license_front_image_id'    => ['required, integer'],
            'entity_license_back_image_id'     => ['required, integer'],
            'entity_license_handheld_image_id' => ['required, integer'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'passport_identity_management_individual_submit';
    }
}