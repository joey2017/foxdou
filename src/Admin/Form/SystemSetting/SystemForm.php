<?php
namespace App\Admin\Form\SystemSetting;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class SystemForm extends Form {

    protected function getFields(Request $request) {
        return [
            'site_name'        => ['required, min_length[1], max_length[20]'],
            'beian_info'       => ['required'],
            'maintenance_mode' => ['required, integer'],
            'maintenance_note' => ['required, min_length[1], max_length[1000]'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'system_settings';
    }
}