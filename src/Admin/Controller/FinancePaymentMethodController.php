<?php

namespace App\Admin\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FinancePaymentMethodController extends AdminBaseController {
    /** 支付方式
     * @Route("/finance/payment-methods", name="admin_finance_payment_method_index")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/FinancePaymentMethod/index.twig");
    }

    /** 手续费管理
     * @Route("/finance/payment-methods/tx-fees", name="admin_finance_payment_method_tx-fees")
     */
    public function tx_feesAction(Request $request) {
        return $this->render("Admin/FinancePaymentMethod/tx_fees.twig");
    }

    /**    用户支付方式
     * @Route("/finance/payment-methods/user", name="admin_finance_payment_method_user")
     */
    public function userAction(Request $request) {
        return $this->render("Admin/FinancePaymentMethod/user.twig");
    }


    /**   支付机构管理
     * @Route("/finance/payment-methods/institutions", name="admin_finance_payment_method_payments_institutions")
     */
    public function institutionsAction(Request $request) {
        return $this->render("Admin/FinancePaymentMethod/institutions.twig");
    }
}
