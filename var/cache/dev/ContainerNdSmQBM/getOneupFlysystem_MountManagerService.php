<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'oneup_flysystem.mount_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\league\\flysystem\\src\\Plugin\\PluggableTrait.php';
include_once $this->targetDirs[3].'\\vendor\\league\\flysystem\\src\\MountManager.php';

return $this->services['oneup_flysystem.mount_manager'] = new \League\Flysystem\MountManager();
