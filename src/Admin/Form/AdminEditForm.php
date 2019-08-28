<?php
namespace App\Admin\Form;

use App\Admin\Model\AdminUser;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;
use Symfony\Component\HttpFoundation\Request;

class AdminEditForm extends Form {

    protected function getFields(Request $request) {
        $rolesEnum  = to_enum(AdminUser::ADMIN_ROLES);
        $statusEnum = to_enum(AdminUser::STATUSES);

        return [
            'id'        => ['integer'],
            'status'    => ["required, {$statusEnum}"],
            'roles'     => ["required, {$rolesEnum}"],
            'user_name' => ['required, min_length[2], regex[/[\x80-\xff\w\-]+/]'],
            'password'  => ['min_length[5]'], // 不是必须的，如果不提供则不修改
            'name'      => ['required, max_length[255]'],
            'title'     => ['max_length[20]'],
            'mobile'    => ['mobile'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'edit_admin';
    }
}