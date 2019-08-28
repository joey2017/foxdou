<?php
namespace App\Admin\Form\SystemSetting;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;

class SupplierPlatformSettingForm extends Form {

    protected function getFields(Request $request) {
        return [
            'deposit_amount'               => ['required, decimal'],
            'min_deposit_amount'           => ['required, decimal'],
            'withdraw_fee_rate_type'       => ['required, integer'],
            'withdraw_fee_rate_percent'    => ['decimal'],
            'withdraw_fee_rate_fixed'      => ['decimal'],
            'max_withdraw_times_per_day'   => ['required, integer'],
            'min_withdraw_amount'          => ['required, decimal'],
            'max_withdraw_amount'          => ['required, decimal'],
            'invite_employee_expires_time' => ['required, integer'],
        ];
    }
    protected function getCsrfTokenId(Request $request) {
        return 'system_settings';
    }
}