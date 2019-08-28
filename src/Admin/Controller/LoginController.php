<?php
namespace App\Admin\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AdminBaseController {

    /**
     * @Route("/login", name="admin_login")
     */
    public function login(AuthenticationUtils $helper): Response {
        $authenticationException = $helper->getLastAuthenticationError();
        return $this->render('Admin/Login/login.html.twig', [
            // 'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $authenticationException ? $authenticationException->getMessage() : '',
        ]);
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in config/packages/security.yaml
     *
     * @Route("/logout", name="admin_logout")
     */
    public function logoutAction(): void {
        throw new \Exception('This should never be reached!');
    }

}