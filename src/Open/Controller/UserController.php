<?php

namespace App\Open\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends OpenBaseController {
    /**
     * @Route("/user/profile", name="open_user_profile")
     */
    public function profileAction() {
        return $this->render("Open/User/profile.twig");
    }

    /**
     * @Route("/user/current-balance", name="open_user_current_balance")
     */
    public function currentBalanceAction(Request $request) {
        $openAccount = $this->getUser()->getOpenPlatformAccount();
        $balance = $openAccount ? $openAccount->balance : 0;
        return ['status' => true, 'balance' => number_format($balance, 2)];
    }
}
