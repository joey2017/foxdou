<?php
namespace App\OpenApi\Command;

use App\Common\ExternalService\RechargeService\RechargeServiceContext;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderTrait;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Product\Product;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderInterface;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderMap;
use SimpleRecord\Exception\DatabaseException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class RefreshOrderStatusCommand extends Command implements ServiceSubscriberInterface {
    use ServiceSubscriberTrait, RechargeServiceProviderTrait;

    protected static $defaultName = 'order:status:refresh';

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function getSubscribedServices(): array
    {
        static $services;

        if (null !== $services) {
            return $services;
        }

        $services = \is_callable(array('parent', __FUNCTION__)) ? parent::getSubscribedServices() : array();

        foreach ((new \ReflectionClass(static::class))->getMethods() as $method) {
            if ($method->isStatic() || $method->isAbstract() || $method->isGenerator() || $method->isInternal() || $method->getNumberOfRequiredParameters()) {
                continue;
            }

            // if (static::class === $method->getDeclaringClass()->name && ($returnType = $method->getReturnType()) && !$returnType->isBuiltin()) {
            if (($returnType = $method->getReturnType()) && !$returnType->isBuiltin()) {
                $services[$method->getDeclaringClass()->name.'::'.$method->name] = '?'.$returnType->getName();
            }
        }

        foreach (RechargeServiceProviderMap::PROVIDERS as $id => $handlerClass) {
            $services[$handlerClass] = '?' . $handlerClass;
        }

        return $services;
    }

    /** @var SymfonyStyle */
    private $io;

    protected function configure() {
        $this
            ->setDescription('定期刷新订单状态任务')
            ->addOption('wait', 's', InputOption::VALUE_OPTIONAL, '每批任务处理完毕后的间隔等待时间（秒），最短为 0.001 秒，即 1 毫秒', 1)
            ->addOption('max-requests', 'm', InputOption::VALUE_OPTIONAL, '每次最多处理的订单数，处理完毕后自动退出，如果设置为 0 则永远不会退出', 100)
            ->addArgument('order-ids', InputArgument::OPTIONAL | InputArgument::IS_ARRAY, '指定要刷新的订单 ID，如果不指定则刷新所有订单')
            ->setHelp(<<<HELP
语法：
      bin/console %command.name% [options]
HELP
            );
    }

    protected function initialize(InputInterface $input, OutputInterface $output) {
        // See https://symfony.com/doc/current/console/style.html
        $this->io = new SymfonyStyle($input, $output);
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     * @return int|null|void
     * @throws DatabaseException
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $wait        = min((int)$input->getOption('wait') * 1000, 1); // 保证最少要 sleep 一毫秒，防止死循环卡死
        $maxRequests = (int)$input->getOption('max-requests');
        $orderIds    = $input->getArgument('order-ids');

        $begin = microtime(true);
        $this->io->write("开始刷新订单状态...");

        while(true) {
            try {
                $processedNum = 0;
                $processedOrderIds = [];

                /** @var OrderRecharge[] $orders */
                if($orderIds) {
                    $orders = OrderRecharge::all(['id' => $orderIds], ['hydrate' => true]);
                    $total  = count($orders);

                    $wait        = 0;
                    $maxRequests = 1;
                } else {
                    list($orders, $total) = $this->getProcessingOrders();
                }

                $this->io->text("总共有 {$total} 个处于 [充值中] 的订单需要处理");
                $this->io->write("处理中: ");


                foreach ($orders as $order) {
                    $context = new RechargeServiceContext();
                    $context->order = $order;

                    $this->refreshOrderStatus($context);
                    $processedOrderIds[] = $order->id;

                    $this->io->write(".");
                    $processedNum++;
                }
                $this->io->write("\n\n");

                $elapsed = (int)(microtime(true) - $begin);

                if($maxRequests !== 0 && !$orders) {
                    $this->io->text("所有处于 充值中 状态的订单已经处理完毕，程序自动退出。\n本此运行共处理 {$processedNum} 个订单，耗时：{$elapsed}s");
                    $this->io->text("本此运行处理的订单 ID 列表：" . json_encode($processedOrderIds));
                    return;
                }
                if($maxRequests !== 0 && $processedNum >= $maxRequests) {
                    $this->io->text("已经达到最多处理订单数量，程序自动退出。\n本此运行共处理 {$processedNum} 个订单，耗时：{$elapsed}s");
                    $this->io->text("本此运行处理的订单 ID 列表：" . json_encode($processedOrderIds));
                    return;
                }
            } catch (\Exception $e) {
                $this->io->error("刷新订单任务出错：{$e->getMessage()}");
            }

            if($wait) {
                usleep($wait);
            }
        }
    }

    private function getProcessingOrders() {
        return OrderRecharge::paginate(['status' => OrderRecharge::STATUS_PROCESSING], ['hydrate' => true, 'for' => 'UPDATE'], 0, 1);
    }

    /**
     * @param OrderRecharge $order
     * @throws DatabaseException
     */
    private function refreshOrderStatus(RechargeServiceContext $context) {
        $order    = $context->order;
        $provider = $this->getProvider($order->provider_id);

        try {
            OrderRecharge::begin_transaction();

            // 锁住这条记录，防止其他人操作
            if(!$order->lock()) {
                throw new \RuntimeException(sprintf('锁定订单记录[id=%d]失败', $order->id));
            }

            // sleep(rand(3, 10));

            $order->reload(); // 重新加载一下，确认状态
            if($order->status !== OrderRecharge::STATUS_PROCESSING) {
                throw new \RuntimeException(sprintf('订单[id=%d]状态已被修改为[%s]，本此刷新失败', $order->id, $order->status));
            }

            $provider->init($context);
            $newStatus = $provider->queryStatus($context);
            if($newStatus !== $order->status) {
                $order->status = $newStatus;
                $order->save();
            }

            OrderRecharge::commit();

        } catch (\Exception $e) {

            OrderRecharge::rollback();
            $this->io->writeln($e->getMessage());
            // $this->io->writeln($e->getTraceAsString());
        }
    }
}
