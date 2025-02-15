<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Passport\Service\EmailMsgNoticeService' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceSubscriberTrait.php';
include_once $this->targetDirs[3].'\\src\\Common\\Service\\BaseService.php';
include_once $this->targetDirs[3].'\\src\\Passport\\Service\\EmailMsgNoticeService.php';

$this->privates['App\Passport\Service\EmailMsgNoticeService'] = $instance = new \App\Passport\Service\EmailMsgNoticeService(($this->services['session'] ?? $this->getSessionService()), ($this->services['swiftmailer.mailer.mxhichina'] ?? $this->load('getSwiftmailer_Mailer_MxhichinaService.php')));

$instance->setContainer(($this->privates['.service_locator.fleq5MM'] ?? $this->load('get_ServiceLocator_Fleq5MMService.php'))->withContext('App\\Passport\\Service\\EmailMsgNoticeService', $this));

return $instance;
