<?php

namespace App\Reseller\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends ResellerBaseController {
    use NavTrait;

    /**
     * @Route("/user/profile", name="reseller_user_profile")
     */
    public function profileAction() {
        return $this->render("/Reseller/User/profile.twig", ['left_nav' => $this->getLeftMenu()]);
    }

    /**
     * @Route("/user/current-balance", name="reseller_user_current_balance")
     */
    public function currentBalanceAction(Request $request) {
        $resellerAccount = $this->getUser()->getResellerAccount();
        $balance = $resellerAccount ? $resellerAccount->balance : 0;
        return ['status' => true, 'balance' => number_format($balance, 2)];
    }

    /**
     * @Route("/user/shop-info/update", name="reseller_user_shop_info_update")
     */
    public function contact_info_updateAction(Request $request, Form $form) {
        $form->init([
            'shop_name'    => ['min_length[2],regex[/[\x80-\xff\w\-]+/]'],
            'shop_address' => ['max_length[255]'],

        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '数据错误，请检查后重新提交', 'errors' => $form->getErrors()];
        }

        $account = $this->getUser()->getResellerAccount();
        $account->set_attributes($form->all());
        $account->save();

        return ['status' => true, 'msg' => '保存成功'];
    }
}
