<?php
namespace App\Open\Controller;

use App\Open\Model\Service;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
/**
 * @Route(defaults={"group": "default"})
 */
class FrontpageController extends OpenBaseController {
    /**
     * @Route("/", name="open_frontpage_index")
     */
    public function indexAction(AuthenticationUtils $helper) {
        $data = [
            'error'         => $helper->getLastAuthenticationError(),
            'last_username' => $helper->getLastUsername(),
            'services'      => Service::all(['index_tuijian' => 1, 'buy_status' => 1]),
        ];

        $response = $this->render("Open/Frontpage/index.twig", $data);

        return $response;
    }

}
