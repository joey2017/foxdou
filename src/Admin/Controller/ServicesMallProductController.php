<?php

namespace App\Admin\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ServicesMallProductController extends AdminBaseController {
    /**   服务列表
     * @Route("/services-mall/products", name="admin_services_mall_products_index")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/ServicesMallProduct/index.twig");
    }

    /**   服务分类
     * @Route("/services-mall/products/categories", name="admin_services_mall_products_categories")
     */
    public function categoriesAction(Request $request) {
        return $this->render("Admin/ServicesMallProduct/categories.twig");
    }

    /**            添加服务
     * @Route("/services-mall/products/add", name="admin_services_mall_products_add")
     */
    public function addAction(Request $request) {
        return $this->render("Admin/ServicesMallProduct/add.twig");
    }


    /**            扣费方式
     * @Route("/services-mall/products/payment-methods", name="admin_services_mall_products_payment_methods")
     */
    public function payment_methodsAction(Request $request) {
        return $this->render("Admin/ServicesMallProduct/payment_methods.twig");
    }
}
