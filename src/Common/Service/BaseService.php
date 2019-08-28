<?php
namespace App\Common\Service;

use App\Common\Model\User\User;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

abstract class BaseService implements ServiceSubscriberInterface
{
    use ServiceSubscriberTrait;

    protected function logger() : LoggerInterface {
        return $this->container->get(__METHOD__);
    }

    /**
     * @var $logger LoggerInterface
     */
    protected $logger = null;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Get a user from the Security Token Storage.
     *
     * @return User|null
     *
     * @throws \LogicException If SecurityBundle is not available
     *
     */
    protected function getUser()
    {
        if (null === $token = $this->tokenStorage()->getToken()) {
            return null;
        }

        if (!\is_object($user = $token->getUser())) {
            // e.g. anonymous authentication
            return null;
        }

        return $user;
    }

    protected function tokenStorage(): TokenStorageInterface {
        return $this->container->get(__METHOD__);
    }

    protected function settings(): SystemSetting {
        return $this->container->get(__METHOD__);
    }

    protected function getService($serviceId) {
        return $this->container->get($serviceId);
    }
    protected function parameters(): ParameterBagInterface {
        return $this->container->get(__METHOD__);
    }
    protected function redis(): \Redis {
        return $this->container->get(__METHOD__);
    }
    protected function requestStack(): ?RequestStack {
        return $this->container->get(__METHOD__);
    }
    protected function request(): ?Request {
        $requestStack = $this->requestStack();
        return $requestStack ? $requestStack->getCurrentRequest() : null;
    }
    protected function getUserIp(): string {
        $request = $this->request();
        return $request ? $request->getClientIp() : '';
    }

    protected function isDebug() {
        return $this->parameters()->get('kernel.debug');
    }
}