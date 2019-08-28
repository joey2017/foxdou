<?php

namespace App\Admin\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserApplicationController extends AdminBaseController {
    /**
     * @Route("/user-apps", name="admin_user_apps_index")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/UserApplication/index.twig");
    }

    /**    订单
     * @Route("/user-apps/orders", name="admin_user_apps_orders")
     */
    public function ordersAction(Request $request) {
        return $this->render("Admin/UserApplication/orders.twig");
    }

    /**   请求记录
     * @Route("/user-apps/request-logs", name="admin_user_apps_request_logs")
     */
    public function request_logsAction(Request $request) {
        return $this->render("Admin/UserApplication/request_logs.twig");
    }
}
