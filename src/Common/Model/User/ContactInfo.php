<?php
namespace App\Common\Model\User;

use App\Common\Model\BaseModel;
use Symfony\Component\Security\Core\User\UserInterface;

class ContactInfo extends BaseModel {
    static $table_name = 'yzb_users_contact';

    static $belongs_to = [
        ['user', ['class_name' => '\App\Common\Model\User\User']],
    ];
}
