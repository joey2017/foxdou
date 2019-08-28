<?php
namespace App\Reseller\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "safe"})
 */
class SafeController extends ResellerBaseController {

    /**
     * @Route("/safe", name="reseller_safe_index")
     */
    public function indexAction() {
        return $this->render("Reseller/Safe/index.twig");
    }

}
