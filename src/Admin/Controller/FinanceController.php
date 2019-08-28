<?php

namespace App\Admin\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FinanceController extends AdminBaseController {
    /**
     * 资金明细
     * @Route("/finance", name="admin_finance_index")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/Finance/index.twig");
    }

    /**         交易记录
     * @Route("/finance/trace_logs", name="admin_finance_trace_logs")
     */
    public function trace_logsAction(Request $request) {
        return $this->render("Admin/Finance/trace_logs.twig");
    }

    /**         支付记录
     * @Route("/finance/billing-history", name="admin_finance_billing_history")
     */
    public function billing_historyAction(Request $request) {
        return $this->render("Admin/Finance/billing_history.twig");
    }


    /**         充值扣款
     * @Route("/finance/payments/recharge", name="admin_finance_payments_recharge")
     */
    public function payments_rechargeAction(Request $request) {
        return $this->render("Admin/Finance/billing/payments_recharge.twig");
    }

    /**         充值记录
     * @Route("/finance/funding-logs", name="admin_finance_funding_logs")
     */
    public function funding_logsAction(Request $request) {
        return $this->render("Admin/Finance/funding_logs.twig");
    }
}
