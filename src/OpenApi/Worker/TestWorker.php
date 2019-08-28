<?php
namespace App\OpenApi\Worker;

use App\OpenApi\EnqueueCommands;
use Enqueue\Client\CommandSubscriberInterface;
use Enqueue\Client\TopicSubscriberInterface;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Interop\Queue\Processor;

class TestWorker implements Processor, CommandSubscriberInterface {
    public function process(Message $message, Context $context) {
        $time = rand(1, 10);

        echo __CLASS__ . ": Begin, ETA: {$time}: ";
        while($time > 0) {
            echo '.';
            sleep(1);
            $time--;
        }
        echo " DONE\n";

        return self::ACK;
    }

    public static function getSubscribedCommand() {
        return [EnqueueCommands::TEST_COMMAND];
    }
}
