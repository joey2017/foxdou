<?php
namespace App\Common\Handler;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * 当 controller 返回的不是 Response 对象时，根据情况自动把返回的内容转换成 Response：
 *  - 如果返回的是数组，则生成一个 JsonResponse 对象。
 *  - 否则生成一个普通 Response 对象，内容是返回对象的字符串表达方式。
 * @package App\Common\EventSubscriber
 */
class KernelViewSubscriber implements EventSubscriberInterface
{
    private $debug = false;
    public function __construct($debug) {
        $this->debug = $debug;
    }

    public static function getSubscribedEvents() {
        return [
            KernelEvents::VIEW => 'onKernelView',
        ];
    }

    public function onKernelView(GetResponseForControllerResultEvent $event)
    {
        $value = $event->getControllerResult();
        if(is_array($value)) {
            if($this->debug) {
                $value = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
                $response = new Response($value, 200, ['Content-Type' => 'application/json']);
            } else {
                $response = new JsonResponse($value);
            }
        } else {
            $response = new Response((string)$value);
        }

        $event->setResponse($response);
    }
}
