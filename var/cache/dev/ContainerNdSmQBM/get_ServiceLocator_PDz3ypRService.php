<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PDz3ypR' shared service.

return $this->privates['.service_locator.PDz3ypR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'form' => array('privates', 'Symfu\\SimpleFormBundle\\Form', 'getFormService.php', true),
    'userManager' => array('privates', 'App\\Common\\Service\\UserManager', 'getUserManagerService.php', true),
    'uuidGenerator' => array('privates', 'App\\Common\\Service\\UuidGenerator', 'getUuidGeneratorService.php', true),
));