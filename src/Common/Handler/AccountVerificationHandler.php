<?php
namespace App\Common\Handler;

use App\Common\Model\User\User;
use App\Common\Model\User\UserIdentity;
use App\Common\Service\SystemSetting;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\AccessMap;
use Symfony\Component\Security\Http\AccessMapInterface;

class AccountVerificationHandler implements EventSubscriberInterface {

    private $debug = false;

    /**
     * @var SystemSetting
     */
    private $systemSetting;
    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;
    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    const WHITE_LIST_ROUTES = [
        // 'route_name' => true,
        '_uploader_upload_identity_image' => true,
        'common_file_upload_delete'       => true,
    ];

    const WHITE_LIST_ROUTE_PREFIXES = [
        'passport_',
    ];

    /**
     * @var Session
     */
    private $session;
    /**
     * @var AccessMapInterface
     */
    private $accessMap;

    public function __construct(SystemSetting $systemSetting, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $urlGenerator, SessionInterface $session, AccessMapInterface $accessMap, bool $debug) {
        $this->systemSetting = $systemSetting;
        $this->tokenStorage  = $tokenStorage;
        $this->urlGenerator  = $urlGenerator;
        $this->session       = $session;
        $this->accessMap     = $accessMap;
        $this->debug         = $debug;
    }

    public static function getSubscribedEvents() {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 7], // just right after Firewall Listener
        ];
    }

    public function onKernelRequest(GetResponseEvent $event, $listeners) {
        if (!$event->isMasterRequest()) {
            return;
        }

        $request = $event->getRequest();
        $route   = $request->attributes->get('_route');

        // 所有允许匿名访问的页面都可以访问
        list($roles, $_) = $this->accessMap->getPatterns($request);
        if (in_array('IS_AUTHENTICATED_ANONYMOUSLY', $roles)) {
            return;
        }

        // 白名单里面的统统允许
        if (self::WHITE_LIST_ROUTES[$route] ?? false) {
            return;
        }

        // 匿名用户不需要做这个拦截，让框架的安全系统拦截就好了
        // 非平台用户（比如后台用户）不需要做这个拦截，让框架的安全系统拦截就好了
        if (!($token = $this->tokenStorage->getToken()) || !(($user = $token->getUser()) instanceof User)) {
            return;
        }

        // 公司用户，并且没有验证邮箱的，强制重定向到邮箱验证页面
        // 这个验证要放到 WHITE_LIST_ROUTE_PREFIXES 之前，防止没验证也能访问那部分地址
        if ($user->type === User::TYPE_BUSINESS && !$user->email_verified) {
            $params   = ['target_url' => $request->getUri()];
            $redirTo  = $this->urlGenerator->generate('passport_register_email_activation_result', $params, UrlGeneratorInterface::ABSOLUTE_URL);
            $response = new RedirectResponse($redirTo);
            $event->setResponse($response);
            $event->stopPropagation();
            return;
        }

        foreach (self::WHITE_LIST_ROUTE_PREFIXES as $prefix) {
            if (strpos($route, $prefix) === 0) {
                return;
            }
        }

        // 没有完成实名验证的强制重定向到实名验证页面
        if ($user->real_name_status !== UserIdentity::STATUS_VERIFIED
            && ($user->type === User::TYPE_BUSINESS || ($user->type === User::TYPE_INDIVIDUAL && $this->systemSetting->passport->individual_requires_identity))) {
            $message = '由于您的账号还没完成实名认证，需要认证后才能进行下一步操作';
            // $params = ['error' => $message];
            $this->session->getFlashBag()->add('info', $message);

            $params   = [];
            $redirTo  = $this->urlGenerator->generate('passport_identity_management_index', $params, UrlGeneratorInterface::ABSOLUTE_URL);
            $response = new RedirectResponse($redirTo);
            $event->setResponse($response);
            $event->stopPropagation();
            return;
        }
    }
}
