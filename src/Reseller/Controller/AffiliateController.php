<?php

namespace App\Reseller\Controller;

use Symfony\Component\Routing\Annotation\Route;

class AffiliateController extends ResellerBaseController {

    /**
     * @Route("/affiliate", name="reseller_affiliate_index")
     */
    public function indexAction() {
        $response = $this->render("Reseller/Affiliate/index.twig");

        return $response;
    }
}
