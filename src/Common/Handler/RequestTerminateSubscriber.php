<?php
namespace App\Common\Handler;

use SimpleRecord\Connection\ConnectionManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class RequestTerminateSubscriber implements EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents() {
        return [
            KernelEvents::TERMINATE => [
                ['onKernelTerminate', -99999], // 确保最后运行
            ],
        ];
    }

    /**
     * Terminates a request/response cycle.
     *
     * Should be called after sending the response and before shutting down the kernel.
     */
    public function onKernelTerminate(PostResponseEvent $event) {
//        ConnectionManager::drop_all_connections(); // 在每个请求结束后，清理 SimpleRecord 的数据库连接，防止长期放置后连接超时导致出错
    }

}
