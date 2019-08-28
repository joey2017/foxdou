<?php

namespace App\Common\Service\Order;

use App\Common\Exception\OrderException;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\Common\Model\Order\OrderRechargeSupOperationLog;
use App\Common\Model\Order\OrderRechargeSupQueue;
use App\Common\Model\Payment\RechargeOrder;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSource;
use App\Common\Model\User\SubAccount;
use App\Common\Service\BaseService;
use App\Constants;
use App\PaymentConstants;
use App\Platform;
use SimpleRecord\DateTime;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class RechargeOrderService extends AbstractOrderService {
    use ServiceSubscriberTrait;

    protected function supOrderService(): RechargeSupOrderService {
        return $this->container->get(__METHOD__);
    }


    /**
     * @param SubAccount               $subAccount
     * @param                          $product
     * @param ProductSource|null       $source
     * @param array                    $numberInfo
     * @param                          $amount
     * @param                          $realSellPrice
     * @param                          $note
     * @param string                   $clientIp
     * @return OrderRecharge|null
     * @throws OrderException
     */
    public function createRechargeOrder(SubAccount $subAccount, $product, ?ProductSource $source, array $numberInfo, $amount, $realSellPrice, $outerSN, $status = OrderRecharge::STATUS_PROCESSING, $note = '') {
        $platformId = $subAccount->getPlatformId();
        $sourceId   = $source ? $source->id : null;
        $context    = ['user_id'   => $subAccount->user_id, 'platform_id' => $platformId, 'product_id' => $product['id'], 'product_type' => $product['product_type'],
                       'source_id' => $sourceId, 'number' => $numberInfo['number'], 'recharge_amount' => $amount];

        $dateTime = new DateTime();

        $order = new OrderRecharge([
            'id'                 => OrderRecharge::newId(),
            'outer_sn'           => $outerSN,
            'user_id'            => $subAccount->user_id,
            'platform_id'        => $subAccount->getPlatformId(),
            'product_id'         => $product['id'],
            'product_type'       => $product['product_type'],
            'product_face_value' => $product['face_value'],
            'product_name'       => $product['name'],
            'speed'              => $product['speed'],
            'paid_amount'        => $product['price'], // 从用户账户余额中实际扣除的款项金额
            'sell_price'         => $product['price'],
            'buy_num'            => $product['face_value_type'] == 1 ? $amount : 1,
            'recharge_amount'    => $amount,
            'real_sell_price'    => $realSellPrice ?: $amount,
            // 'order_cate_id'      => Constants::ORDER_RECHARGE_CATE_MOBILE,
            'payment_class_id'   => PaymentConstants::PAYMENT_METHOD_BALANCE,
            'supplier_id'        => $source ? $source->sell_user_id : null,
            'source_id'          => $sourceId,
            'on_before_info'     => '',
            'on_after_info'      => '',
            'on_other'           => '',
            'add_time'           => $dateTime,
            'phone_number'       => $numberInfo['number'],
            'province_name'      => $numberInfo['province_name'],
            'city_name'          => $numberInfo['city_name'],
            'admin_info'         => '',
            'status'             => $status,
            'settlement_status'  => OrderRecharge::SETTLEMENT_PAID,
            'pay_time'           => $dateTime,
            'recharge_sequence'  => 1,
            'note'               => $note,
            'provider_id'        => $product['provider_id'],
            'user_ip'            => $this->getUserIp(),
        ]);

        try {
            $supOrder = $this->supOrderService()->createSupplierOrder($order, $source, $numberInfo, $context);
            $user     = $subAccount ? $subAccount->getUser() : null;
            $this->supOrderService()->createSupplierOperationLog($user, $supOrder, OrderRechargeSupOperationLog::OPERATION_API, $context);

            $order->setCurrentSupOrder($supOrder);
            $order->save();


            $subAccount->decrBalance($order->paid_amount, $this->logger, $context);

            return $order;
        } catch (\Exception $e) {
            $this->logger->error('手机充值下单：创建手机充值订单失败', array_merge($context, ['order.attrs' => $order->to_array()]));
            throw new OrderException('创建用户交易记录失败', 0, $e);
        }
    }

    /**
     * @param $order
     * @param $context
     * @return UserMoneyTradeLog|null
     * @throws OrderException
     */
    public function createTradeLog($order, $logType = UserMoneyTradeLog::TYPE_ORDER_PAYMENT, $context = []): ?UserMoneyTradeLog {
        $now      = time();
        $tradeLog = new UserMoneyTradeLog([
            'id'                  => UserMoneyTradeLog::newId(),
            'order_id'            => $order->id,
            'platform_id'         => $order->platform_id,
            'amount'              => -1 * abs($order->sell_price),
            'name'                => $order->product_name,
            'user_id'             => $order->user_id,
            'note'                => "支付订单号[{$order->id}]",
            'trade_log_type'      => $logType,
            'trade_status'        => UserMoneyTradeLog::STATUS_COMPLETED, //交易完成
            'other_party_user_id' => $order->supplier_id,
            // 'order_cate_id'       => $order->order_cate_id,
            'payment_class_id'    => $order->payment_class_id,
            'scene_id'            => 0,
            'trade_poundage'      => 0,
            'add_time'            => $now,
            'pay_time'            => $now,
            'end_time'            => $now,
            'trade_time'          => $now,
        ]);

        try {
            $tradeLog->save();

            return $tradeLog;
        } catch (\Exception $e) {
            $this->logger->error('手机充值下单：保存用户交易记录失败', array_merge($context, ['tradeLog.attrs' => $tradeLog->to_array()]));
            throw new OrderException('创建用户交易记录失败', 0, $e);
        }
    }

    // /**
    //  * @param OrderRecharge $order
    //  * @param               $newStatus
    //  * @throws OrderException
    //  * @throws \SimpleRecord\Exception\DatabaseException
    //  */
    // public function updateOrderStatus(SubAccount $subAccount, OrderRecharge $order, $newStatus) {
    //     $oldStatus     = $order->status;
    //     if($oldStatus === $newStatus) {
    //         return;
    //     }
    //
    //     try {
    //         OrderRecharge::begin_transaction();
    //
    //         switch ($newStatus) {
    //         case OrderRecharge::STATUS_COMPLETED_SYS:
    //         case OrderRecharge::STATUS_COMPLETED_MAN:
    //             $this->settleOrder($subAccount, $order);
    //             break;
    //         case OrderRecharge::STATUS_FAILED_SYS:
    //         case OrderRecharge::STATUS_FAILED_MAN:
    //             $this->refundOrder($subAccount, $order);
    //             break;
    //         default:
    //             throw new \InvalidArgumentException('不能支持修改订单状态为 ' . $newStatus);
    //         }
    //
    //         OrderRecharge::commit();
    //     } catch (\Exception $e) {
    //         OrderRecharge::rollback();
    //         $context = [];
    //         $this->logger->error('Error', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
    //     }
    // }



    /**
     * @param OrderRecharge $order
     * @param               $newStatus
     * @throws \SimpleRecord\Exception\DatabaseException
     * @throws \Exception
     */
    public function markOrderSucceed(OrderRecharge $order, $newStatus) {
        $oldStatus     = $order->status;
        $context = ['user_id' => $order->user_id, 'order_id' => $order->id, 'old_status' => $oldStatus, 'new_status' => $newStatus];

        try {
            if($order->platform_id !== Platform::OPEN_PLATFORM) {
                throw new \RuntimeException('目前只支持开放平台的订单处理');
            }

            if($oldStatus === $newStatus) {
                throw new \InvalidArgumentException('新状态不能与旧状态一样：newStatus=' . $newStatus);
            }

            OrderRecharge::begin_transaction();

            $order->status = $newStatus;
            $order->settlement_status = OrderRecharge::SETTLEMENT_PAID;
            $order->save();

            OrderRecharge::commit();
        } catch (\Exception $e) {
            OrderRecharge::rollback();
            $this->logger->error('结算订单出错', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw $e;
        }

    }

    /**
     * @param SubAccount    $subAccount
     * @param OrderRecharge $order
     * @param               $newStatus
     * @throws \SimpleRecord\Exception\DatabaseException
     * @throws \Exception
     */
    public function markOrderFailed(OrderRecharge $order, $newStatus) {
        $oldStatus     = $order->status;
        $context = ['user_id' => $order->user_id, 'order_id' => $order->id, 'old_status' => $oldStatus, 'new_status' => $newStatus];

        try {
            if($order->platform_id !== Platform::OPEN_PLATFORM) {
                throw new \RuntimeException('目前只支持开放平台的订单处理');
            }

            if($oldStatus === $newStatus) {
                throw new \InvalidArgumentException('新状态不能与旧状态一样：newStatus=' . $newStatus);
            }
            if($order->settlement_status !== OrderRecharge::SETTLEMENT_PAID) {
                $error = "订单{$order->id}结算状态不是[已扣款]状态，不能再进行其他操作";
                throw new \RuntimeException($error);
            }

            if($order->isRefunded()) {
                $error = "订单{$order->id}已经存在退款记录，不能再次退款";
                throw new \RuntimeException($error);
            }

            OrderRecharge::begin_transaction();


            if($this->shouldRefundOrder($order, $newStatus)) {
                $tradeLog = $this->createTradeLog($order, UserMoneyTradeLog::TYPE_REFUND); // FIXME: 退款应该使用旧的交易记录还是创建一条新的退款交易记录？

                $subAccount = $order->getPlatformAccount();
                $subAccount->incrBalance($order->paid_amount); // 增加余额
                UserMoneyLog::createLog($subAccount, $tradeLog->order_id, $order->paid_amount, UserMoneyLog::TYPE_REFUND, $order->product_name, $tradeLog->note, $tradeLog->id, $this->logger, $context);
            }

            $order->status = $newStatus;
            $order->settlement_status = OrderRecharge::SETTLEMENT_REFUND;
            $order->save();

            // TODO: 从代理商用户上级经销商账户扣除分佣金额

            OrderRecharge::commit();
        } catch (\Exception $e) {
            OrderRecharge::rollback();
            $this->logger->error('结算订单出错: {error}', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw $e;
        }
    }

    private function shouldRefundOrder(OrderRecharge $order, $newStatus) {
        if($order->sell_price <= 0) {
            return false;
        }


        return true;
    }
}