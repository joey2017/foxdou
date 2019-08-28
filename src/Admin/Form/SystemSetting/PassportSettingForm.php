<?php
namespace App\Admin\Form\SystemSetting;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;

class PassportSettingForm extends Form {

    protected function getFields(Request $request) {
        return [
            'individual_requires_identity'                       => ['required, integer'],
            'individual_activation_method'                       => ['required, integer'],
            'individual_identity_verify_method'                  => ['required, integer'],
            'individual_open_platform_create_account_method'     => ['required, integer'],
            'individual_reseller_platform_create_account_method' => ['required, integer'],
            'individual_supplier_platform_create_account_method' => ['required, integer'],

            'business_activation_method'                       => ['required, integer'],
            'business_identity_verify_method'                  => ['required, integer'],
            'business_open_platform_create_account_method'     => ['required, integer'],
            'business_reseller_platform_create_account_method' => ['required, integer'],
            'business_supplier_platform_create_account_method' => ['required, integer'],

            'max_password_errors_per_day' => ['required, integer'],
            'suspend_period'              => ['required, integer'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'system_settings';
    }
}