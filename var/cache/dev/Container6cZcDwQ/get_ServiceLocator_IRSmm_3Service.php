<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.iRSmm.3' shared service.

return $this->privates['.service_locator.iRSmm.3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'chainCache' => array('privates', 'App\\Common\\Service\\Cache\\ChainCache', 'getChainCacheService', false),
    'settings' => array('privates', 'App\\Common\\Service\\SystemSetting', 'getSystemSettingService', false),
    'simpleCache' => array('privates', 'cache.app.simple', 'getCache_App_SimpleService.php', true),
));