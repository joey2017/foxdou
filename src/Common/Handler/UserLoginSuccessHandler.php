<?php
namespace App\Common\Handler;

use App\Admin\Model\AdminUser;
use App\Common\Model\User\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class UserLoginSuccessHandler implements AuthenticationSuccessHandlerInterface{

    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator) {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * This is called when an interactive authentication attempt succeeds. This
     * is called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        /** @var User $user */
        $user = $token->getUser();

        // 登录成功后清空密码错误次数
        if($user instanceof AdminUser || $user instanceof User) {
            $user->password_error_num = 0;
            $user->save();
        }

        $targetPath = null;
        if(!$targetPath) {
            $targetPath = $request->get('_target_path');
        }
        if(!$targetPath) {
            $targetPath = $request->get('target_url');
        }
        if(!$targetPath) {
            $targetPath = $this->urlGenerator->generate('passport_home_index', [], UrlGeneratorInterface::NETWORK_PATH);
        }

        return new RedirectResponse($targetPath);
    }
}
