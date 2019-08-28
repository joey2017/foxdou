<?php
namespace App\Common\Enqueue\Extension;

use App\Common\Service\BaseService;
use Enqueue\Consumption\Context\ProcessorException;
use Enqueue\Consumption\ProcessorExceptionExtensionInterface;
use Enqueue\Consumption\Result;

class ProcessorExceptionExtension extends BaseService implements ProcessorExceptionExtensionInterface
{
    /**
     * Execute if a processor throws an exception.
     * The result could be set, if result is not set the exception is thrown again.
     */
    public function onProcessorException(ProcessorException $context): void {
        $message = "Enqueue 消息被拒绝，原因：" . $context->getException()->getMessage();
        $this->logger()->warning($message);
        $context->setResult(Result::reject($message));
    }
}
