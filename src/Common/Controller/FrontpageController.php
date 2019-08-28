<?php
namespace App\Common\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class FrontpageController extends BaseController
{
    public function indexAction(AuthenticationUtils $helper)
    {
        $user = $this->getUser();
        return $this->render('/Common/frontpage.twig');
    }

}
