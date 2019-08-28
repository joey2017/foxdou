<?php
namespace App\Common\Handler;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

class UserLogoutSuccessHandler implements LogoutSuccessHandlerInterface {
    public function onLogoutSuccess(Request $request) {
        $targetUrl = $request->query->get('target_url', '/');

        return new RedirectResponse($targetUrl);
    }
}
