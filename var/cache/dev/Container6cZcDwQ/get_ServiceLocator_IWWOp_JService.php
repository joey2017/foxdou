<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.IWWOp.J' shared service.

return $this->privates['.service_locator.IWWOp.J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'alipayService' => array('privates', 'App\\Common\\Bundle\\SimplePay\\Service\\AlipayService', 'getAlipayServiceService.php', true),
    'urlGenerator' => array('services', 'router', 'getRouterService', false),
));
