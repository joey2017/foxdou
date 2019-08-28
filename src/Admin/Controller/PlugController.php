<?php

namespace App\Admin\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PlugController extends AdminBaseController {
    /**
     * @Route("/plug/api-info", name="admin_plug_api_info")
     */
    public function api_infoAction(Request $request) {
        return $this->render("Admin/Plug/api_info.twig");
    }

    /**
     * @Route("/plug/orders", name="admin_plug_orders")
     */
    public function ordersAction(Request $request) {
        return $this->render("Admin/Plug/orders.twig");
    }

    /**
     * @Route("/plug/error-logs", name="admin_plug_error_logs")
     */
    public function error_logsAction(Request $request) {
        return $this->render("Admin/Plug/error_logs.twig");
    }

}
