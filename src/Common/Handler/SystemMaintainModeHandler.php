<?php
namespace App\Common\Handler;

use App\Common\Model\User\User;
use App\Common\Model\User\UserIdentity;
use App\Common\Service\SystemSetting;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\AccessMap;
use Symfony\Component\Security\Http\AccessMapInterface;

class SystemMaintainModeHandler implements EventSubscriberInterface {

    private $debug = false;

    /**
     * @var SystemSetting
     */
    private $systemSetting;

    const WHITE_LIST_ROUTES = [
        // 'route_name' => true,
    ];

    const WHITE_LIST_ROUTE_PREFIXES = [
        'passport_',
    ];

    public function __construct(SystemSetting $systemSetting, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $urlGenerator, SessionInterface $session, AccessMapInterface $accessMap, bool $debug) {
        $this->systemSetting = $systemSetting;
        $this->debug = $debug;
    }

    public static function getSubscribedEvents() {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 6],
        ];
    }

    public function onKernelRequest(GetResponseEvent $event, $listeners) {
        if(!$event->isMasterRequest()) {
            return;
        }

        // if(!$this->systemSetting->system->maintenance_mode) {
        //     return;
        // }
        //
        // $response = new Response($this->systemSetting->system->maintenance_note);
        // $event->setResponse($response);
        // $event->stopPropagation();
        // return;
    }
}
