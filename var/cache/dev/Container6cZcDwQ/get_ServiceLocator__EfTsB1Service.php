<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator..efTsB1' shared service.

return $this->privates['.service_locator..efTsB1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'form' => array('privates', 'Symfu\\SimpleFormBundle\\Form', 'getFormService.php', true),
    'testForm' => array('privates', 'App\\Test\\Form\\TestForm', 'getTestFormService.php', true),
));