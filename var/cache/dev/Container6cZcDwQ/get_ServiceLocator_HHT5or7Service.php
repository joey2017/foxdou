<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HHT5or7' shared service.

return $this->privates['.service_locator.HHT5or7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'form' => array('privates', 'Symfu\\SimpleFormBundle\\Form', 'getFormService.php', true),
    'logManager' => array('privates', 'App\\Admin\\Service\\AdminOperatonLogManager', 'getAdminOperatonLogManagerService.php', true),
));
