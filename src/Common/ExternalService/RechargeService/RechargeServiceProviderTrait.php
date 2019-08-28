<?php
namespace App\Common\ExternalService\RechargeService;

trait RechargeServiceProviderTrait {
    /**
     * @return array
     * @throws \ReflectionException
     */
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

        foreach (RechargeServiceProviderMap::PROVIDERS as $id => $handlerClass) {
            $services[$handlerClass] = '?' . $handlerClass;
        }

        return $services;
    }

    private function getProvider($providerId): RechargeServiceProviderInterface {
        $providerServiceId = RechargeServiceProviderMap::PROVIDERS[$providerId] ?? null;
        if(!$providerServiceId || !$this->container->has($providerServiceId)) {
            throw new \RuntimeException("供应商 [{$providerId}] 不存在");
        }

        return $this->container->get($providerServiceId);
    }
}
