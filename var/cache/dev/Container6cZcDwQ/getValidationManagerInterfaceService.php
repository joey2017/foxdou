<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Symfu\SimpleValidation\ValidationManagerInterface' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfu\\simple-validation\\src\\ValidationManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfu\\simple-validation\\src\\ValidationManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfu\\simple-form-bundle\\src\\ValidationManager.php';

return $this->services['Symfu\SimpleValidation\ValidationManagerInterface'] = new \Symfu\SimpleFormBundle\ValidationManager($this);