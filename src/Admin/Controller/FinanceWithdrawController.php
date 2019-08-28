<?php

namespace App\Admin\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FinanceWithdrawController extends AdminBaseController {
    /**
     *    提现银行
     * @Route("/finance_withdraw", name="admin_finance_withdraw_index")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/FinanceWithdraw/index.twig");
    }

    /** 手续费管理
     * @Route("/finance_withdraw/fees", name="admin_finance_withdraw_fees")
     */
    public function feesAction(Request $request) {
        return $this->render("Admin/FinanceWithdraw/fees.twig");
    }

    /** 用户提现账户
     * @Route("/finance_withdraw/user-bank-accounts", name="admin_finance_withdraw_user_bank_accounts")
     */
    public function user_bank_accountsAction(Request $request) {
        return $this->render("Admin/FinanceWithdraw/user_bank_accounts.twig");
    }
}
