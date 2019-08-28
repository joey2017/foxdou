<?php

namespace App\Admin\Controller\UserDetail;

use App\Admin\Controller\AdminBaseController;
use App\Common\Model\User\User;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

Trait MenuTraits {
    public function getMenu($group = '') {
        $menu =
            [
                'main'     => [
                    'name' => '基本管理', 'url' => '/admin/user-details/main/details-main', 'left_menu' => [
                        ['name' => '用户信息', 'url' => '/admin/user-details/main/basic-info'],
                        ['name' => '实名认证', 'url' => '/admin/user-details/main/real-name-info'],
                        ['name' => '安全中心', 'url' => '/admin/user-details/main/account-safety'],
                        ['name' => '操作日志', 'url' => '/admin/user-details/main/operation-logs'],
                    ],
                ],
                'open'     => [
                    'name' => '开放平台', 'url' => '/admin/user-details/open-platform/details-main', 'left_menu' => [
                        ['name' => '用户信息', 'url' => '/admin/user-details/open-platform/basic-info'],
                        ['name' => 'ta的服务', 'url' => '/admin/user-details/open-platform/services'],
                        ['name' => 'ta的应用', 'url' => '/admin/user-details/open-platform/apps'],
                        ['name' => 'ta的财务', 'url' => '/admin/user-details/open-platform/finance'],
                        ['name' => 'ta的订单', 'url' => '/admin/user-details/open-platform/orders'],
                        ['name' => '请求日志', 'url' => '/admin/user-details/open-platform/request-logs'],
                        ['name' => '操作日志', 'url' => '/admin/user-details/open-platform/operation-logs'],
                    ],
                ],
                'reseller' => [
                    'name' => '代理商', 'url' => '/admin/user-details/reseller-platform/details-main', 'left_menu' => [
                        ['name' => '用户信息', 'url' => '/admin/user-details/reseller-platform/basic-info'],
                        ['name' => 'ta的推广', 'url' => '/admin/user-details/reseller-platform/extension'],
                        ['name' => 'ta的财务', 'url' => '/admin/user-details/reseller-platform/finance'],
                        ['name' => 'ta的订单', 'url' => '/admin/user-details/reseller-platform/orders'],
                        //                    ['name'=>'请求日志','url'=>'/user/user-details/basic-autonym-info'],
                        ['name' => '操作日志', 'url' => '/admin/user-details/reseller-platform/operation-logs'],
                    ],
                ],
                'supplier' => [
                    'name' => '供应商', 'url' => '/admin/user-details/supplier-platform/details-main', 'left_menu' => [
                        ['name' => '用户信息', 'url' => '/admin/user-details/supplier-platform/basic-info'],
                        ['name' => 'ta的财务', 'url' => '/admin/user-details/supplier-platform/finance'],
                        ['name' => 'ta的订单', 'url' => '/admin/user-details/supplier-platform/orders'],
                        ['name' => '操作日志', 'url' => '/admin/user-details/supplier-platform/operation-logs'],
                    ],
                ],
            ];

        return $group ? $menu[$group]['left_menu'] : $menu;
    }

}
