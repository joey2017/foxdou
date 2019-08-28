<?php

namespace App\Common\Controller;

use App\Common\Service\RecaptchaService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class RecaptchaController extends BaseController {
    /**
     * @Route("/recaptcha", name="common_recaptcha_index")
     */
    public function indexAction(Request $request, RecaptchaService $recaptchaService) {
        $id = $request->query->get('id', '_default');
        list($recaptcha, $image) = $recaptchaService->newRecaptcha($id);
        $response = new Response($image);
        $response->headers->set('Content-Type','image/png');
        return $response;
    }
}
