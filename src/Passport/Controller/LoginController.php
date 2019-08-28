<?php
namespace App\Passport\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends PassportBaseController
{
    /**
     * @Route("/login", name="passport_login")
     */
    public function loginAction(AuthenticationUtils $helper): Response {
        $authenticationException = $helper->getLastAuthenticationError();
        // if($authenticationException->getMessageKey() === 'email_not_verified') {
        //     return $this->redirectToRoute('passport_register_email_activation_result');
        // }

        return $this->render('/Passport/Login/index.twig', [
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $authenticationException,
        ]);
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in config/packages/security.yaml
     *
     * @Route("/logout", name="passport_logout")
     */
    public function logoutAction(): void
    {
        throw new \Exception('This should never be reached!');
    }

}