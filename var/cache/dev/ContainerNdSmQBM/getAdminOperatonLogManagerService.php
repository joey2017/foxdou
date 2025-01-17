<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Admin\Service\AdminOperatonLogManager' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceSubscriberTrait.php';
include_once $this->targetDirs[3].'\\src\\Common\\Service\\BaseService.php';
include_once $this->targetDirs[3].'\\src\\Admin\\Service\\AdminOperatonLogManager.php';

$this->privates['App\Admin\Service\AdminOperatonLogManager'] = $instance = new \App\Admin\Service\AdminOperatonLogManager(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setContainer(($this->privates['.service_locator.fleq5MM'] ?? $this->load('get_ServiceLocator_Fleq5MMService.php'))->withContext('App\\Admin\\Service\\AdminOperatonLogManager', $this));

return $instance;
