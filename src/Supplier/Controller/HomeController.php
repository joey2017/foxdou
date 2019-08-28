<?php
namespace App\Supplier\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends SupplierBaseController {

    /**
     * @Route("/", name="supplier_home_index")
     */
    public function indexAction(Request $request, AuthenticationUtils $helper) {
        $data = ['error' => $helper->getLastAuthenticationError(), 'last_username' => $helper->getLastUsername()];

        return $this->render("/Supplier/Home/index.twig", $data);
    }
}
