<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.transport' shared service.

include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\SpoolTransport.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Spool.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\ConfigurableSpool.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\FileSpool.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\EventListener.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\SendListener.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Plugins\\ImpersonatePlugin.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Plugins\\Sleeper.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Plugins\\AntiFloodPlugin.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\EventDispatcher.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\SimpleEventDispatcher.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Plugins\\MessageLogger.php';

$this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.mxhichina.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.mxhichina.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_FileSpool(($this->targetDirs[0].'/swiftmailer/spool/mxhichina')));

$instance->registerPlugin(new \Swift_Plugins_ImpersonatePlugin('gxlclizongjun@163.com'));
$instance->registerPlugin(new \Swift_Plugins_AntiFloodPlugin(99, 1));
$instance->registerPlugin(($this->services['swiftmailer.mailer.mxhichina.plugin.messagelogger'] ?? ($this->services['swiftmailer.mailer.mxhichina.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));

return $instance;