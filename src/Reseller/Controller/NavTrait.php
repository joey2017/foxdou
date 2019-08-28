<?php
namespace App\Reseller\Controller;


trait NavTrait {
    /**
     * @return array
     */
    private function getLeftMenu(): array {
        return [
            ['name' => '控制面板', 'route' => 'reseller_dashboard_index', 'icon' => '&#xe62b;',],
            ['name' => '账户信息', 'route' => 'reseller_user_profile', 'icon' => '&#xe61b;',],
            ['name' => '我的财务', 'route' => 'reseller_finance_index', 'icon' => '&#xe643;',],
            ['name' => '打印设置', 'route' => 'reseller_printer_settings_index', 'icon' => '&#xe62c;',],
            ['name' => '操作日志', 'route' => 'reseller_dashboard_operation_logs', 'icon' => '&#xe633;',],
            ['name' => '安全中心', 'route' => 'passport_home_index', 'icon' => '&#xe6c7;', 'target' => '_blank'],
            ['name' => '平台公告', 'route' => 'reseller_dashboard_announcements', 'icon' => '&#xe654;',],
            //            ['name'=>'我的投诉','url'=>'_backend_my-complaint_index','icon'=>'&#xe897;',],
            //            ['name'=>'员工管理','url'=>'_agent_manage_index','icon'=>'&#xe61f;',],
            //            ['name'=>'安全策略','url'=>'_backend_safe-strategy_index','icon'=>'&#xe633;',],
        ];
    }


    /**
     * @return array
     */
    private function getFinanceLeftNavMenus(): array {
        $leftNavMenu = [];

        $leftNavMenu[] = ['name' => '我的财务', 'route' => 'reseller_finance_index', 'icon' => '&#xe643;',];
        $leftNavMenu[] = ['name' => '我要转账', 'route' => 'reseller_finance_transfer', 'icon' => '&#xe8fb;',];
        // ['name'=>'我要提现','url'=>Url::to(['/backend/transfer-cash/index']),'icon'=>'&#xe631;',],

        $user = $this->getUser();
        if ($user->getResellerAccount()->agency_type == 2) {
            $leftNavMenu[] = ['name' => '提取佣金', 'route' => 'reseller_finance_withdraw', 'icon' => '&#xe631;',];
        }

        return $leftNavMenu;
    }

}