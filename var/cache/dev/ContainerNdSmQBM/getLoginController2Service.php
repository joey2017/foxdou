<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Passport\Controller\LoginController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Common\\Controller\\BaseController.php';
include_once $this->targetDirs[3].'\\src\\Passport\\Controller\\PassportBaseController.php';
include_once $this->targetDirs[3].'\\src\\Passport\\Controller\\LoginController.php';

$this->services['App\Passport\Controller\LoginController'] = $instance = new \App\Passport\Controller\LoginController(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setContainer(($this->privates['.service_locator.0ACZ0gT'] ?? $this->load('get_ServiceLocator_0ACZ0gTService.php'))->withContext('App\\Passport\\Controller\\LoginController', $this));

return $instance;