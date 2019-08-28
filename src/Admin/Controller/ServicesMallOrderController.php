<?php

namespace App\Admin\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ServicesMallOrderController extends AdminBaseController {
    /** 充值订单
     * @Route("/services-mall/orders", name="admin_services_mall_orders_index")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/ServicesMallOrder/index.twig");
    }

    /**      号卡订单
     * @Route("/services-mall/orders/kahao", name="admin_services_mall_orders_kahao")
     */
    public function kahaoAction(Request $request) {
        return $this->render("Admin/ServicesMallOrder/kahao.twig");
    }

    /**      票务订单
     * @Route("/services-mall/orders/tickets", name="admin_services_mall_orders_tickets")
     */
    public function ticketsAction(Request $request) {
        return $this->render("Admin/ServicesMallOrder/tickets.twig");
    }


    /**      商城订单
     * @Route("/services-mall/orders/mall", name="admin_services_mall_orders_mall")
     */
    public function mallAction(Request $request) {
        return $this->render("Admin/ServicesMallOrder/mall.twig");
    }

    /**      提现订单
     * @Route("/services-mall/orders/withdraw", name="admin_services_mall_orders_withdraw")
     */
    public function withdrawAction(Request $request) {
        return $this->render("Admin/ServicesMallOrder/withdraw.twig");
    }

}
