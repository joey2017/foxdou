<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.zfGyZlZ' shared service.

return $this->privates['.service_locator.zfGyZlZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'emailMsgNoticeService' => array('privates', 'App\\Passport\\Service\\EmailMsgNoticeService', 'getEmailMsgNoticeServiceService.php', true),
    'recaptchaService' => array('privates', 'App\\Common\\Service\\RecaptchaService', 'getRecaptchaServiceService.php', true),
));
