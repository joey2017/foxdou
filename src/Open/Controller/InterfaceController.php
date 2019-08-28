<?php
namespace App\Open\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(defaults={"group": "interface"})
 */
class InterfaceController extends OpenBaseController {

    /**
     * @Route("/interface", name="open_interface_index")
     */
    public function indexAction(Request $request) {
        return $this->render('Open/Interface/index.twig');
    }

    /**
     * @Route("/interface/mobile", name="open_interface_mobile")
     */
    public function mobileAction(Request $request) {
        return $this->render('Open/Interface/mobile.twig');
    }

    /**
     * @Route("/interface/flow", name="open_interface_flow")
     */
    public function flowAction(Request $request) {
        return $this->render('Open/Interface/flow.twig');
    }

    /**
     * @Route("/interface/tencent", name="open_interface_tencent")
     */
    public function tencentAction(Request $request) {
        return $this->render('Open/Interface/tencent.twig');
    }

    /**
     * @Route("/interface/telephone", name="open_interface_telephone")
     */
    public function telephoneAction(Request $request) {
        return $this->render('Open/Interface/telephone.twig');
    }

}
