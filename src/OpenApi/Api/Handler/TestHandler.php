<?php
namespace App\OpenApi\Api\Handler;

use App\OpenApi\Api\AbstractHandler;
use App\OpenApi\ApiContext;
use Enqueue\AsyncCommand\Commands;
use Enqueue\AsyncCommand\RunCommand;
use Enqueue\Client\ProducerInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class TestHandler extends AbstractHandler {
    use ServiceSubscriberTrait;
    protected function producer(): ProducerInterface {
        return $this->container->get(__METHOD__);
    }

    public function handle(ApiContext $context) {
        $producer = $this->producer();
        // $producer->sendCommand(EnqueueCommands::TEST_COMMAND, ['title' => 'just a test command', 'uuid' => (string)Uuid::uuid4()]);
        $producer->sendCommand(Commands::RUN_COMMAND, new RunCommand('order:status:refresh', ['2018110617070625859070762156066']));
        $producer->sendCommand(Commands::RUN_COMMAND, new RunCommand('order:status:refresh', ['2018110617220725859070762156067']));
        $producer->sendCommand(Commands::RUN_COMMAND, new RunCommand('order:status:refresh', ['2018110617273625859070762156068']));
        $result = ['test' => 'OK'];
        return $result;
    }
}
