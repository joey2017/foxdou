<?php
namespace App\Common\Handler;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class KernelResponseSubscriber implements EventSubscriberInterface
{
    private $debug = false;
    public function __construct(bool $debug) {
        $this->debug = $debug;
    }

    public static function getSubscribedEvents() {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        if($this->debug) {
            $response = $event->getResponse();
            $elapsed = microtime(true) - $event->getRequest()->server->get('REQUEST_TIME_FLOAT');
            $response->headers->set('X-TIMING', intval($elapsed * 1000));
        }
    }
}
