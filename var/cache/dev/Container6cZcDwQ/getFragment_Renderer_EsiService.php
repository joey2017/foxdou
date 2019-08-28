<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.esi' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentRendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\RoutableFragmentRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\AbstractSurrogateFragmentRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\EsiFragmentRenderer.php';

$this->privates['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(($this->privates['esi'] ?? ($this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())), ($this->privates['fragment.renderer.inline'] ?? $this->load('getFragment_Renderer_InlineService.php')), ($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET')))));

$instance->setFragmentPath('/_fragment');

return $instance;