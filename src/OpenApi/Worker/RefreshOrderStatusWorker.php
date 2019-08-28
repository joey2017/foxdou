<?php
namespace App\OpenApi\Worker;

use App\Common\ExternalService\Exception\ExternalServiceException;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderTrait;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\OpenApi\EnqueueCommands;
use App\Common\ExternalService\RechargeService\RechargeServiceContext;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderInterface;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderMap;
use Enqueue\Client\CommandSubscriberInterface;
use Enqueue\Consumption\Result;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Interop\Queue\Processor;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class RefreshOrderStatusWorker implements Processor, CommandSubscriberInterface, ServiceSubscriberInterface {
    use RechargeServiceProviderTrait;

    /**
     * @var LoggerInterface
     */
    private $logger;
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public static function getSubscribedCommand() {
        return [EnqueueCommands::RECHARGE_REFRESH_ORDER_STATUS];
    }

    /**
     * @param Message $message
     * @param Context $context
     * @return object|string
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function process(Message $message, Context $context) {
        $body    = $message->getBody();
        $jobInfo = json_decode($body, true);

        if(!$jobInfo) {
            $this->logger->warning("Failed to decode job content", ['message_id' => $message->getMessageId(), 'body' => $body]);
            return self::REJECT;
        }

        try {
            OrderRecharge::begin_transaction();

            $this->handleJob($context, $jobInfo);

            OrderRecharge::commit();

            return self::ACK;
        } catch (ExternalServiceException $e) {
            $context = ['job' => $jobInfo, 'response' => $e->getResponse()];
            $this->logger->error('刷新订单的上游充值供应商充值状态失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            OrderRecharge::rollback();

            return self::REQUEUE;
        } catch (\Exception $e) {
            $context = ['job' => $jobInfo];
            $this->logger->error('刷新订单的上游充值供应商充值状态失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            OrderRecharge::rollback();

            return self::REQUEUE;
        }
    }

    /**
     * @param $jobInfo
     * @throws \SimpleRecord\Exception\ModelException
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function handleJob(Context $context, $jobInfo) {
        $provider = $this->getProvider($jobInfo['provider_id']);

        $supOrderId = $jobInfo['sup_order_id'];
        $supOrder = OrderRechargeSup::first(['order_id' => $supOrderId], ['for' => 'UPDATE']); // 锁住，防止其他进程修改
        if(!$supOrder) {
            throw new \RuntimeException("找不到充值供应商订单：{$supOrderId}");
        }
        if($supOrder->recharge_status !== OrderRechargeSup::STATUS_FETCHED) {
            throw new \RuntimeException("充值供应商订单({$supOrderId})应为已提交状态，当前状态为：{$supOrder->recharge_status}");
        }

        $orderId = $jobInfo['order_id'];
        $order   = OrderRecharge::first(['id' => $orderId], ['for' => 'UPDATE']); // 锁住，防止其他进程修改
        if(!$order) {
            throw new \RuntimeException("找不到 ID 为 {$orderId} 的充值订单");
        }
        if($order->status !== OrderRecharge::STATUS_PROCESSING) {
            throw new \RuntimeException("充值订单({$orderId})的充值订单状态应为处理中状态，当前状态为 [{$order->status}]，放弃刷新");
        }

        $rechargeContext = new RechargeServiceContext();
        $rechargeContext->order = $order;
        $rechargeContext->supplierOrder = $supOrder;

        $provider->init($rechargeContext);
        $newRechargeStatus = $provider->queryStatus($rechargeContext);
        if($newRechargeStatus !== false && $newRechargeStatus !== $supOrder->recharge_status) {
            $supOrder->recharge_status = $newRechargeStatus;
            $supOrder->save();

            $this->syncOrderStatus($order, $supOrder);
        }

        return Result::reply(null);
    }

    /** 把sup订单状态映射到充值订单
     * @param OrderRecharge    $order
     * @param OrderRechargeSup $supOrder
     * @throws \SimpleRecord\Exception\ModelException
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function syncOrderStatus(OrderRecharge $order, OrderRechargeSup $supOrder) {
        $RECHARGE_STATUS_MAP = [
            OrderRechargeSup::STATUS_FETCHED             => OrderRecharge::STATUS_PROCESSING,
            OrderRechargeSup::STATUS_CHECKED             => OrderRecharge::STATUS_PROCESSING,
            OrderRechargeSup::STATUS_SUBMIT_SUSPICIOUS   => OrderRecharge::STATUS_PROCESSING,
            OrderRechargeSup::STATUS_SUBMIT_FAILED       => OrderRecharge::STATUS_PROCESSING,
            OrderRechargeSup::STATUS_IN_PROGRESS         => OrderRecharge::STATUS_PROCESSING,
            OrderRechargeSup::STATUS_RECHARGE_SUSPICIOUS => OrderRecharge::STATUS_PROCESSING,
            OrderRechargeSup::STATUS_SUCCEED_SYS         => OrderRecharge::STATUS_SUCCEED_SYS,
            OrderRechargeSup::STATUS_SUCCEED_SUP         => OrderRecharge::STATUS_SUCCEED_MAN,
            OrderRechargeSup::STATUS_SUCCEED_ADMIN       => OrderRecharge::STATUS_SUCCEED_MAN,
            OrderRechargeSup::STATUS_FAILED_SYS          => OrderRecharge::STATUS_FAILED_SYS,
            OrderRechargeSup::STATUS_FAILED_SUP          => OrderRecharge::STATUS_FAILED_MAN,
            OrderRechargeSup::STATUS_FAILED_ADMIN        => OrderRecharge::STATUS_FAILED_MAN,
            OrderRechargeSup::STATUS_REFUNDED            => OrderRecharge::STATUS_REFUNDED,
            OrderRechargeSup::STATUS_CANCELED            => OrderRecharge::STATUS_CANCELED,
        ];

        if(isset($RECHARGE_STATUS_MAP[$supOrder->recharge_status])) {
            $order->status = $RECHARGE_STATUS_MAP[$supOrder->recharge_status];
            $order->save();
        }

    }
}
