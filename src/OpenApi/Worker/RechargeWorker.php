<?php
namespace App\OpenApi\Worker;

use App\Common\ExternalService\Exception\ExternalServiceException;
use App\Common\ExternalService\RechargeService\Exception\RechargeSuspiciousException;
use App\Common\ExternalService\RechargeService\Exception\SubmitSuspiciousException;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderTrait;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\Common\Service\Order\RechargeSupOrderService;
use App\OpenApi\EnqueueCommands;
use App\Common\ExternalService\RechargeService\RechargeServiceContext;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderInterface;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderMap;
use Enqueue\Client\CommandSubscriberInterface;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Interop\Queue\Processor;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class RechargeWorker implements Processor, CommandSubscriberInterface, ServiceSubscriberInterface {
    use ServiceSubscriberTrait, RechargeServiceProviderTrait  {
        RechargeServiceProviderTrait::getSubscribedServices insteadof ServiceSubscriberTrait;
    }

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    protected function supOrderService(): RechargeSupOrderService {
        return $this->container->get(__METHOD__);
    }

    public static function getSubscribedCommand() {
        return [EnqueueCommands::RECHARGE_SUBMIT_ORDER];
    }

    /**
     * @param Message $message
     * @param Context $context
     * @return object|string
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function process(Message $message, Context $context) {
        $body    = $message->getBody();
        $jobInfo = json_decode($body, true); // ['sup_order_id' => 22, 'provider_id' => 'test']

        if(!$jobInfo) {
            $this->logger->warning("Failed to decode job content", ['message_id' => $message->getMessageId(), 'body' => $body]);
            return self::REJECT;
        }

        try {
            $begin = microtime(true);

            OrderRecharge::begin_transaction();

            $succeed = $this->handleJob($jobInfo);

            OrderRecharge::commit();

            $elapsed = (int)((microtime(true) - $begin) * 1000);

            if($succeed) {
                $this->logger->info("向上游充值供应商({provider_id})提交订单成功({$elapsed}ms)：{id}", $jobInfo);
            }

            return self::ACK;
        } catch (\Exception $e) {
            OrderRecharge::rollback();
            $context = ['job' => $jobInfo, 'provider_id' => $jobInfo['provider_id']];
            $this->logger->error("向上游充值供应商({provider_id})提交订单失败", array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            return self::REJECT;
        }
    }

    /**
     * @param $jobInfo
     * @throws \SimpleRecord\Exception\ModelException
     * @throws \SimpleRecord\Exception\SimpleRecordException
     * @throws \Exception
     */
    private function handleJob($jobInfo) {
        $provider = $this->getProvider($jobInfo['provider_id']);

        $supOrder = OrderRechargeSup::first(['id' => $jobInfo['sup_order_id']], ['for' => 'UPDATE']); // 锁住，防止其他进程修改
        if(!$supOrder) {
            throw new \RuntimeException("找不到指定的 Sup 订单({$jobInfo['sup_order_id']})");
        }
        if($supOrder->recharge_status !== OrderRechargeSup::STATUS_PENDING) {
            throw new \RuntimeException("指定的 Sup 订单({$jobInfo['sup_order_id']})状态不是[待提单]");
        }

        $order = OrderRecharge::first(['id' => $supOrder->order_id], ['for' => 'UPDATE']); // for update 锁，防止其他进程修改
        //$order = OrderRecharge::first(['id' => $supOrder->order_id, 'status' => OrderRecharge::STATUS_PROCESSING], ['for' => 'UPDATE']); // for update 锁，防止其他进程修改
        if(!$order) {
            throw new \RuntimeException("找不到指定的订单({$supOrder->order_id})");
        }

        $supOrder->setOrder($order);

        $context = new RechargeServiceContext();
        $context->order = $order;
        $context->supplierOrder = $supOrder;

        $provider->init($context);

        $succeed = false;

        try {
            // TODO: 如何验单？快速上线版没地方可以验单
            $supOrder->recharge_status = OrderRechargeSup::STATUS_FETCHED;
            $supOrder->recharge_status = OrderRechargeSup::STATUS_CHECK_SUCCEED;
            // $supOrder->save();

            $provider->submitOrder($context);

            $supOrder->recharge_status = OrderRechargeSup::STATUS_IN_PROGRESS; // 提交成功，则状态改为充值中
            // $order->status = OrderRecharge::STATUS_PROCESSING;

            $succeed = true;
        } catch (SubmitSuspiciousException $e) {
            $supOrder->recharge_status = OrderRechargeSup::STATUS_SUBMIT_SUSPICIOUS;
            $this->logger->error('向供应商({provider_id})提交订单结果可疑', array_merge($jobInfo, ['error' => $e->getMessage()]));
        } catch (RechargeSuspiciousException $e) {
            $supOrder->recharge_status = OrderRechargeSup::STATUS_RECHARGE_SUSPICIOUS;
            $this->logger->error('向供应商({provider_id})提交订单充值可疑', array_merge($jobInfo, ['error' => $e->getMessage()]));
        } catch (ExternalServiceException $e) {
            $this->supOrderService()->markSupOrderFailed($supOrder, OrderRechargeSup::STATUS_SUBMIT_FAILED, true);
            $this->logger->error('向上游充值供应商({provider_id})提交订单失败', array_merge($jobInfo, ['error' => $e->getMessage()]));
        }

        $supOrder->save();
        $order->save();

        return $succeed;
    }
}
