<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Reseller\Form\PrintSettingForm' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\ParameterBag.php';
include_once $this->targetDirs[3].'\\vendor\\symfu\\simple-form-bundle\\src\\FormBag.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceSubscriberTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfu\\simple-form-bundle\\src\\Form.php';
include_once $this->targetDirs[3].'\\src\\Reseller\\Form\\PrintSettingForm.php';

$this->privates['App\Reseller\Form\PrintSettingForm'] = $instance = new \App\Reseller\Form\PrintSettingForm();

$instance->setContainer(($this->privates['.service_locator.qFNxiTm'] ?? $this->load('get_ServiceLocator_QFNxiTmService.php'))->withContext('App\\Reseller\\Form\\PrintSettingForm', $this));

return $instance;