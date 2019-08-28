<?php
namespace App\Common\Controller;

use App\Common\Model\User\User;
use App\Common\Service\SystemSetting;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as SymfonyAbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class BaseController extends SymfonyAbstractController {

    static $pageSize = 25;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public static function getSubscribedServices(): array
    {
        static $services;

        if (null !== $services) {
            return $services;
        }

        $services = \is_callable(array('parent', __FUNCTION__)) ? parent::getSubscribedServices() : array();

        foreach ((new \ReflectionClass(static::class))->getMethods() as $method) {
            if ($method->isStatic() || $method->isAbstract() || $method->isGenerator() || $method->isInternal() || $method->getNumberOfRequiredParameters()) {
                continue;
            }

            // if (static::class === $method->getDeclaringClass()->name && ($returnType = $method->getReturnType()) && !$returnType->isBuiltin()) {
            if (($returnType = $method->getReturnType()) && !$returnType->isBuiltin()) {
                $services[$method->getDeclaringClass()->name.'::'.$method->name] = '?'.$returnType->getName();
            }
        }

        return $services;
    }

    protected function translator(): TranslatorInterface {
        return $this->container->get(__METHOD__);
    }
    protected function session(): SessionInterface {
        return $this->container->get(__METHOD__);
    }
    protected function cache(): CacheInterface {
        return $this->container->get(__METHOD__);
    }
    private function settings(): SystemSetting {
        return $this->container->get(__METHOD__);
    }
    private function parameters(): ParameterBagInterface {
        return $this->container->get(__METHOD__);
    }
    protected function redis(): \Redis {
        return $this->container->get(__METHOD__);
    }

    /**
     * 此方法纯粹是为了方便使用 IDE 代码提示
     * @return User|null
     */
    public function getUser() {
        return parent::getUser();
    }

    public function getUserId(): int {
        return parent::getUser()->id;
    }

    public function flashSuccess($content) {
        $this->addFlash('success', $content);
    }

    public function flashError($content) {
        $this->addFlash('danger', $content);
    }

    public function flashInfo($content) {
        $this->addFlash('info', $content);
    }

    public function flashWarning($content) {
        $this->addFlash('warning', $content);
    }

    protected function isDebug() {
        return $this->getParameter('kernel.debug');
    }
}
