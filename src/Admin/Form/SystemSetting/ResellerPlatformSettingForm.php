<?php
namespace App\Admin\Form\SystemSetting;

use App\Admin\Model\AdminUser;
use App\Common\Model\Product\SourceGroup;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;
use Symfony\Component\HttpFoundation\Request;

class ResellerPlatformSettingForm extends Form {

    protected function getFields(Request $request) {
        return [
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