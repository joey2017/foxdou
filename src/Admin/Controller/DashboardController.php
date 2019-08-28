<?php

namespace App\Admin\Controller;

use App\Common\Utils\SystemInfo;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "dashboard"})
 */
class DashboardController extends AdminBaseController {
    /**
     * @Route("/dashboard", name="admin_dashboard_index")
     */
    public function indexAction(Request $request) {
//        $data = ['left_nav' => $this->getLeftNav(), 'main_panel_route' => 'admin_dashboard_stats'];

        return $this->render("/Admin/Dashboard/index.twig");
    }

    /**
     * @Route("/dashboard/system-info", name="admin_dashboard_system_info")
     */
    public function system_infoAction(Request $request) {
        $diskUsage = SystemInfo::getDiskUsage();
        return $this->render("Admin/Dashboard/system_info.twig", ['disk_usage' => $diskUsage]);
    }

    /**
     * @Route("/dashboard/user-info", name="admin_dashboard_user_info")
     */
    public function userInfoAction(Request $request) {
        $data = ['left_nav' => $this->getLeftNav()];

        return $this->render("Admin/Dashboard/userInfo.twig", $data);
    }

    private function getLeftNav(): array {
        return [
            ['name' => '控制面板', 'route' => 'admin_dashboard_index', 'icon' => '&#xe62b;',],
        ];
    }

    private function getTopNav(): array {
        return [
            ['name' => '控制面板', 'route' => 'admin_dashboard_index', 'icon' => '&#xe62b;',],
        ];
    }


    public static function zz() {
        /*
         * 后台首页菜单，id='控制器'，name='名称'，url='链接地址'，icon='左侧边栏图标'，item='左侧边栏子菜单'
         * icon 可以从web/static/h/css/font-awesome.min93e3.css?v=4.4.0中找到对应图标，可以更换图标
         */
        $menu = [
            '首页' => ['name' => '首页', 'url' => '', 'item' => [
                ['name' => '控制面板', 'url' => '', 'icon' => 'fa-user'],
            ]],
            
            '用户' => ['name' => '用户', 'url' => '', 'item' => [
                ['name' => '用户列表', 'url' => '', 'icon' => 'fa-user'],
                ['name' => '级别管理', 'url' => '', 'icon' => 'fa-exchange'],
                ['name' => '用户分析', 'url' => '', 'icon' => 'fa-user-md'],
                ['name' => '潜在客户', 'url' => '', 'icon' => 'fa-user-plus'],
                ['name' => '号码池', 'url' => '', 'icon' => 'fa-object-group'],
            ]],
            
            '订单' => ['name' => '订单', 'url' => '', 'item' => [
                ['name' => '公共订单', 'icon' => 'fa-creative-commons', 'item' => [

                    ['name' => '新充值订单', 'url' => '', 'icon' => 'fa-reorder'],
                    ['name' => 'SUP充值订单', 'url' => '', 'icon' => 'fa-reorder'],
                    ['name' => '话费余额查询记录', 'url' => '', 'icon' => 'fa-reorder'],
                    ['name' => '旧充值订单', 'url' => '', 'icon' => 'fa-reorder'],
                    ['name' => '号卡订单', 'url' => '', 'icon' => 'fa-sort-numeric-asc'],
                    ['name' => '票务订单', 'url' => '', 'icon' => 'fa-bank'],
                    ['name' => '提现订单', 'url' => '', 'icon' => 'fa-dollar'],
                ],],
                ['name' => '服务市场', 'icon' => 'fa-creative-commons', 'item' => [
                    ['name' => '应用列表', 'url' => '', 'icon' => 'fa-reorder'],
                    ['name' => '应用订单', 'url' => '', 'icon' => 'fa-reorder'],
                    ['name' => '请求记录', 'url' => '', 'icon' => 'fa-reorder'],
                ],],
                ['name' => '商城订单', 'icon' => 'fa-creative-commons', 'item' => [
                    ['name' => '充值订单', 'url' => '', 'icon' => 'fa-reorder'],
                    ['name' => '卡密订单', 'url' => '', 'icon' => 'fa-cart-plus'],
                    ['name' => '号卡订单', 'url' => '', 'icon' => 'fa-sort-numeric-asc'],
                    ['name' => '票务订单', 'url' => '', 'icon' => 'fa-bank'],
                    ['name' => '商城订单', 'url' => '', 'icon' => 'fa-shopping-cart'],
                    ['name' => '提现订单', 'url' => '', 'icon' => 'fa-dollar'],
                ],],
            ]],
            
            '商品' => ['name' => '商品', 'url' => '', 'item' => [
                ['name' => '公共商品', 'icon' => 'fa-creative-commons', 'item' => [
                    ['name' => '商品列表', 'url' => '', 'icon' => 'fa-list-ul'],
                    ['name' => '添加商品', 'url' => '', 'icon' => 'fa-plus-circle'],
                    ['name' => '归属地管理', 'url' => '', 'icon' => 'fa-area-chart'],
                    ['name' => '供应商管理', 'url' => '', 'icon' => 'fa-pinterest-square'],
                    ['name' => '主商品管理', 'url' => '', 'icon' => 'fa-certificate'],
                ],],
                ['name' => '服务市场', 'icon' => 'fa-shopping-cart', 'item' => [
                    ['name' => '服务列表', 'url' => '', 'icon' => 'fa-list-ol'],
                    ['name' => '服务分类', 'url' => '', 'icon' => 'fa-certificate'],
                    ['name' => '添加服务', 'url' => '', 'icon' => 'fa-plus-square'],
                    ['name' => '扣费方式', 'url' => '', 'icon' => 'fa-subway'],
                ],],
                ['name' => '活动商品', 'icon' => 'fa-shopping-cart', 'item' => [
                    ['name' => '秒杀商品', 'url' => '', 'icon' => 'fa-list-ol'],
                    ['name' => '抢红包', 'url' => '', 'icon' => 'fa-certificate'],
                    ['name' => '用户记录', 'url' => '', 'icon' => 'fa-certificate'],
                    ['name' => '脚本检测', 'url' => '', 'icon' => 'fa-certificate'],
                ],],
            ]],
            '财务' => ['name' => '财务', 'url' => '', 'item' => [
                ['name' => '资金明细', 'url' => '', 'icon' => 'fa-th-list'],
                ['name' => '交易记录', 'url' => '', 'icon' => 'fa-line-chart'],
                ['name' => '支付记录', 'url' => '', 'icon' => 'fa-line-chart'],
                ['name' => '充值扣款', 'url' => '', 'icon' => 'fa-recycle'],
                ['name' => '充值记录', 'url' => '', 'icon' => 'fa-credit-card'],

                ['name' => '支付方式', 'url' => '', 'icon' => 'fa-rmb', 'item' => [
                    ['name' => '支付方式', 'url' => '', 'icon' => 'fa-bank'],
                    ['name' => '手续费管理', 'url' => '', 'icon' => 'fa-hand-rock-o'],
                    ['name' => '用户支付方式', 'url' => '', 'icon' => 'fa-user-md'],
                    ['name' => '支付机构管理', 'url' => '', 'icon' => 'fa-user-md'],
                ]],

                ['name' => '提现管理', 'url' => '', 'icon' => 'fa-amount', 'item' => [
                    ['name' => '提现银行', 'url' => '', 'icon' => 'fa-bank'],
                    ['name' => '手续费管理', 'url' => '', 'icon' => 'fa-hand-rock-o'],
                    ['name' => '用户账户', 'url' => '', 'icon' => 'fa-user-md'],
                ]],
            ]],
            '统计' => ['name' => '统计', 'url' => '/statistics', 'item' => [

            ]],

            '营销' => ['name' => '营销', 'url' => '', 'item' => []],

            '站点' => ['name' => '站点', 'url' => '', 'item' => [
                ['name' => '服务市场', 'url' => '', 'icon' => 'fa-shopping-cart', 'item' => [
                    ['name' => '文章管理', 'url' => '', 'icon' => 'fa-file-word-o'],],
                ],
                ['name' => '供货平台', 'url' => '', 'icon' => 'fa-support', 'item' => [
                    ['name' => '文章管理', 'url' => '', 'icon' => 'fa-file-word-o'],],
                ],
                ['name' => '公共站点', 'url' => '', 'icon' => 'fa-sitemap', 'item' => [
                    ['name' => '文章管理', 'url' => '', 'icon' => 'fa-wordpress'],],
                ],
                ['name' => '代理商平台', 'url' => '', 'icon' => 'fa-sitemap', 'item' => [
                    ['name' => '文章管理', 'url' => '', 'icon' => 'fa-wordpress'],],
                ],
            ]],
            '审核' => ['name' => '审核', 'url' => '', 'item' => [
                ['name' => '新用户审核', 'url' => '', 'icon' => 'fa-user-plus'],
                ['name' => '公共审核', 'url' => '', 'icon' => 'fa-search', 'item' => [
                    ['name' => '用户提现帐号审核', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => '用户提现审核', 'url' => '', 'icon' => 'fa-yen'],
                ]],
                ['name' => '实名认证', 'url' => '', 'icon' => 'fa-check-square'],
                ['name' => '自助找回密码', 'url' => '', 'icon' => 'fa-question-circle'],
                ['name' => '平台审核', 'url' => '', 'icon' => 'fa-check-circle'],
                ['name' => '货源审核', 'url' => '/aduit/aduit-source/index', 'icon' => 'fa-check-circle'],
            ]],
            //        'auth'=>['id'=>'auth-admin','name'=>'权限','url'=>'','item'=>array(
            //            ['name'=>'客户权限','url'=>'','icon'=>'fa-user-plus'],
            //        )],

            '系统' => ['name' => '系统', 'url' => '', 'item' => [
                ['name' => '管理员', 'url' => '', 'icon' => 'fa-search', 'item' => [
                    ['name' => '用户', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => '角色', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => '权限', 'url' => '', 'icon' => 'fa-yen'],
                ]],
                [
                    'name' => '缓存', 'url' => '', 'icon' => 'fa-search', 'item' => [
                    ['name' => '后台缓存', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => '其他应用缓存', 'url' => '', 'icon' => 'fa-refresh'],
                ]],
                [
                    'name' => 'redis管理', 'url' => '', 'icon' => 'fa-search', 'item' => [
                    ['name' => 'redis数据库', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => 'Session', 'url' => '', 'icon' => 'fa-refresh'],
                    ['name' => 'Cache', 'url' => '', 'icon' => 'fa-refresh'],
                ]],
                ['name' => '网站性能信息', 'url' => '', 'icon' => 'fa-user-plus', 'item' => [
                    ['name' => 'php信息', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => 'ocache缓存', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => 'php探针', 'url' => '', 'icon' => 'fa-yen'],
                ]],
                ['name' => '日志', 'url' => '', 'icon' => 'fa-user-plus', 'item' => [
                    ['name' => '管理员日志', 'url' => '', 'icon' => 'fa-yen'],
                    ['name' => 'Yii日志', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => 'Nginx日志', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => 'Php日志', 'url' => '', 'icon' => 'fa-user'],
                ]],
            ]],

            '挂机'      => ['name' => '挂机', 'url' => '', 'item' => [
                ['name' => '充值业务', 'url' => '', 'icon' => 'fa-search', 'item' => [
                    ['name' => '接口信息', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => '订单信息', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => '错误日志', 'url' => '', 'icon' => 'fa-user'],
                ]],
            ]],
            'api文档管理' => ['name' => 'api文档管理', 'url' => '', 'item' => [
                ['name' => '代理商', 'url' => '', 'icon' => 'fa-search', 'item' => [
                    ['name' => 'api文档', 'url' => '', 'icon' => 'fa-user'],
                    ['name' => 'api测试', 'url' => '', 'icon' => 'fa-user'],
                ]],
            ]],
        ];

        //检查权限

        return $menu;
    }
}
