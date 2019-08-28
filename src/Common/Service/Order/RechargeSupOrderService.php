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
use App\Common\Model\User\User;
use App\Common\Service\BaseService;
use App\Constants;
use App\PaymentConstants;
use App\Platform;
use SimpleRecord\DateTime;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class RechargeSupOrderService extends AbstractOrderService {
    use ServiceSubscriberTrait;

    protected function rechargeOrderService(): RechargeOrderService {
        return $this->container->get(__METHOD__);
    }

    /**
     * @param OrderRecharge $order
     * @param ProductSource $source
     * @param               $numberInfo
     * @param               $context
     * @return OrderRechargeSup
     * @throws OrderException
     */
    public function createSupplierOrder(OrderRecharge $order, ?ProductSource $source, $numberInfo, $context)
    {
        $sellCost = $source->source_cost ?? 0;
        $supOrder = new OrderRechargeSup([
            'id'                       => OrderRechargeSup::newId(),
            'order_id'                 => $order->id,
            'official_sn'              => '',
            'sup_order_cate_id'        => $order->order_cate_id,
            'template_id'              => $source->template_id ?? null,
            'sup_user_id'              => $source->sell_user_id ?? null,
            'source_id'                => $source->id ?? null,
            'source_face_value'        => $source->face_value ?? null,
            'source_buy_num'           => $order->buy_num,
            'sup_cost'                 => $sellCost,
            'sup_price'                => $source->source_price ?? 0,
            'sup_profit'               => $source ? ($source->source_price - $sellCost) : 0, // NOTE: 需要确认这个利润计算是否有问题
            'phone_number'             => $numberInfo['number'],
            'on_before_info'           => '',
            'on_after_info'            => '',
            'on_other'                 => '',
            'recharge_status'          => OrderRechargeSup::STATUS_PENDING,//等待提单
            'recharge_sequence'        => $order->recharge_sequence, //充值次数
            'settle_status'            => OrderRechargeSup::SETTLE_STATUS_PENDING,//未结算
            'can_recharge'             => 1,//是否可以充值
            'sup_admin_info'           => '',
            'add_time'                 => new DateTime(),
            'end_time'                 => null,
            'sup_info'                 => '',
            'careful_status'           => 0,
            'sup_speed'                => $order->speed,
            'source_product_name'      => null,
            'source_product_cate_id'   => $order->product_cate_id,
            'source_product_unit'      => OrderRechargeSup::UNIT_RMB_YUAN,
            'province_code'            => $numberInfo['province_code'],
            'city_code'                => $numberInfo['city_code'],
            'is_mvno'                  => $numberInfo['is_mvno'],
            'operator_id'              => $numberInfo['operator_id'],
            'provider_id'              => $order->provider_id,
            'recharge_ip'              => $this->getUserIp(),
        ]);

        try {
            // OrderRechargeSup::update_all(['can_recharge' => 0, 'recharge_status' => OrderRechargeSup::STATUS_FAILED_SYS], ['order_id' => $order->id]); // 把所有旧sup订单作废

            $supOrder->save();

            $supOrder->setOrder($order);

            return $supOrder;
        } catch (\Exception $e) {
            $this->logger->error('手机充值下单：创建供应商订单失败', array_merge($context, ['sup_order' => $supOrder->to_array(), 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            throw new OrderException('创建供应商订单失败');
        }
    }

    /**
     * @param $supOrder
     * @param $rechargeOrder
     * @param $clientIp
     * @param $context
     * @return OrderRechargeSupOperationLog
     * @throws OrderException
     */
    public function createSupplierOperationLog(?User $user, OrderRechargeSup $supOrder, $operationType = OrderRechargeSupOperationLog::OPERATION_API, $context = [])
    {
        $operationLog = new OrderRechargeSupOperationLog([
            'sup_order_id'      => $supOrder->id,
            'recharge_status'   => $supOrder->recharge_status,//本次更新的充值状态
            'settle_status'     => $supOrder->settle_status,//本次更新的结算状态
            'order_id'          => $supOrder->order_id,
            'order_status'      => $supOrder->getOrder()->status,//对应的主订单的状态
            'operation_user_id' => $user->id ?? 0,//本次操作的用户当if_admin为1时，此operation_user_id为管理员id
            'if_admin'          => $user ? $user->isAdmin() : 0, //是否为后台管理员操作0否1是
            'operation_type'    => $operationType,//操作方式0未知1接口2手动
            'operator_ip'       => $this->getUserIp(),
            'add_time'          => date('Y-m-d H:i:s'),
        ]);

        try {
            $operationLog->save();
            return $operationLog;
        } catch (\Exception $e) {
            $this->logger->error('手机充值下单：创建供应商订单记录失败', array_merge($context, ['operation_log' => $operationLog->to_array(), 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw new OrderException('创建供应商订单记录失败');
        }
    }

    /**
     * @param OrderRechargeSup $supOrder
     * @param                  $context
     * @throws OrderException
     * @throws \SimpleRecord\Exception\ModelException
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function enqueueSupOrder(OrderRechargeSup $supOrder, $context)
    {
        $redis_data = [];
        if (in_array($supOrder->source_product_cate_id, [Constants::PRODUCT_CATE_MOBILE_PHONE, Constants::PRODUCT_CATE_DATA_PACKAGE, Constants::PRODUCT_CATE_LINE_PHONE])) {
            $redis_data = [
                'province_name' => $supOrder->province_name,
                'city_name'     => $supOrder->city_name,
                'isp_id'        => $supOrder->isp_id,
                'mvno'          => $supOrder->mvno,
            ];
        } elseif ($supOrder->source_product_cate_id == Constants::PRODUCT_CATE_TENCENT) {
            $redis_data = [
                'product_type' => $supOrder->source_product_master_id,
            ];
        } elseif ($supOrder->source_product_cate_id == Constants::PRODUCT_CATE_GAME_RECHARGE) {
            $redis_data = [
                'recharge_account_other' => json_decode($supOrder->on_other, true),
                'product_type'           => $supOrder->source_product_master_id,
            ];
        }

        $response = array_merge([
            'template_id'       => $supOrder->template_id,//模版编号
            'id'                => $supOrder->id,//sup订单编号
            'recharge_account'  => $supOrder->phone_number,
            'source_id'         => $supOrder->source_id,
            'source_face_value' => $supOrder->source_mianzi,
            'buy_num'           => $supOrder->source_buy_num,
            'source_price'      => $supOrder->sup_price,
            'product_name'      => $supOrder->source_product_name,
            'recharge_ip'       => $supOrder->recharge_ip,
            'order_time'        => $supOrder->add_time,
        ], $redis_data);

        $data['sup_order_id'] = $supOrder->id;
        $data['order_id']     = $supOrder->order_id;//***注意redis不需要这个字段
        $data['template_id']  = $supOrder->template_id;
        $data['add_time']     = date('Y-m-d H:i:s');//***注意redis不需要这个字段
        $data['sup_user_id']  = $supOrder->sup_user_id;//***注意redis不需要这个字段
        $data['response']     = json_encode($response, JSON_UNESCAPED_UNICODE);//***注意redis不需要这个字段


        if (!$data['template_id'] || !$data['order_id'] || !$data['sup_order_id'] || !$data['response']) {
            $this->logger->error('手机充值下单：创建供应商订单队列失败：数据不齐全', array_merge($context, ['queue_item' => $data]));
            throw new OrderException('创建供应商订单队列失败');
        }

        $queueItem = new OrderRechargeSupQueue($data);

        if (!$queueItem->save()) {
            $this->logger->error('手机充值下单：创建供应商订单队列失败', array_merge($context, ['queue_item' => $data]));
            throw new OrderException('创建供应商订单队列失败');
        }
    }

    /**
     * @param SubAccount       $supplierAccount
     * @param OrderRechargeSup $supOrder
     * @param                  $newStatus
     * @param bool             $settleOrder 是否同时对SUP订单进行结算操作，默认进行结算
     * @throws OrderException
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function markSupOrderSucceed(OrderRechargeSup $supOrder, $newStatus, $settleOrder = true) {
        $oldRechargeStatus = $supOrder->recharge_status;
        $oldSettleStatus   = $supOrder->settle_status;
        $supplierAccount   = $supOrder->getSupplierAccount(); // 可能返回 null（在快速上线版中不存在供应商账号的情况下）
        $supplierUser      = $supplierAccount ? $supplierAccount->getUser() : null;
        $order             = $supOrder->getOrder();

        $context   = ['sup_user_id' => $supOrder->sup_user_id, 'sup_order_id' => $supOrder->id, 'settle_status' => $supOrder->settle_status, 'old_recharge_status' => $oldRechargeStatus, 'new_recharge_status' => $newStatus];

        try {
            if($order->platform_id !== Platform::OPEN_PLATFORM) {
                throw new \RuntimeException('目前只支持开放平台的订单处理');
            }
            if($oldRechargeStatus === $newStatus) {
                throw new \InvalidArgumentException("Sup订单新状态（{$newStatus}）不能与旧状态一样");
            }
            if(!in_array($newStatus, OrderRechargeSup::RECHARGE_SUCCEED_STATUSES)) {
                throw new \InvalidArgumentException('新状态必须是充值成功状态（系统、供应商人工、总后台）');
            }
            if($supOrder->sup_user_id && $supOrder->isSettled()) {
                throw new \RuntimeException("该Sup订单($supOrder->id)已经付款给供应商($supOrder->sup_user_id), 不能再次结算");
            }
            if(!$supOrder->isLatestSupOrder()) {
                throw new \RuntimeException("该Sup订单($supOrder->id)已经不是最新SUP订单，无法进行充值成功操作");
            }

            $order = $supOrder->getOrder();
            $supOrder->recharge_status = $newStatus;

            // 根据结算参数 $settleOrder 决定是否对 Sup 订单进行结算
            $settleSupOrder = function(OrderRechargeSup $supOrder, $settleOrder, ?User $operateUser, $operationType) use ($order, $context) {
                if(!$settleOrder) {
                    // 参数指定不进行结算
                    return;
                }

                $supOrder->settle_status = OrderRechargeSup::SETTLE_STATUS_PAID;

                $this->createSupplierOperationLog($operateUser, $supOrder, $operationType, $context);

                // 如果该笔SUP订单有对应的上游供应商，并且价格大于 0，才需要给供应商付款
                if($supOrder->sup_user_id && $supOrder->sup_price > 0) {
                    $supplierAccount = $supOrder->getSupplierAccount();
                    $supplierAccount->incrBalance($supOrder->sup_price, $this->logger, $context);
                    UserMoneyLog::createLog($supplierAccount, $supOrder->id, $supOrder->sup_price, UserMoneyLog::TYPE_REFUND, $order->product_name, 'Sup订单结算', null, $this->logger, $context);
                }
            };

            OrderRecharge::begin_transaction();

            if($newStatus === OrderRechargeSup::STATUS_SUCCEED_SYS && $oldSettleStatus === OrderRechargeSup::SETTLE_STATUS_PENDING &&
                in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_IN_PROGRESS, OrderRechargeSup::STATUS_CHECK_SUCCEED])) {

                // 充值状态变为充值成功（系统）发生的成功结算
                $user = null; // 系统自动结算时，无操作人，故传 null 进去
                $settleSupOrder($supOrder, $settleOrder, $user, OrderRechargeSupOperationLog::OPERATION_API);

                // 自动对主订单进行成功结算
                $this->rechargeOrderService()->markOrderSucceed($order, OrderRecharge::STATUS_SUCCEED_SYS);

            } elseif($newStatus === OrderRechargeSup::STATUS_SUCCEED_SUP && $oldSettleStatus === OrderRechargeSup::SETTLE_STATUS_PENDING &&
                !in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_SUCCEED_SYS, OrderRechargeSup::STATUS_SUCCEED_SUP, OrderRechargeSup::STATUS_SUCCEED_ADMIN])) {

                // 充值状态变为充值成功（供应商人工）发生的成功结算
                $settleSupOrder($supOrder, $settleOrder, $supplierUser, OrderRechargeSupOperationLog::OPERATION_MANUAL);

                // 自动对主订单进行成功结算
                // 3.最新一笔SUP订单充值状态=充值成功（供应商人工） and 主订单当前状态=充值中
                $this->rechargeOrderService()->markOrderSucceed($order, OrderRecharge::STATUS_SUCCEED_SYS);

            } elseif($newStatus === OrderRechargeSup::STATUS_SUCCEED_ADMIN &&
                !in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_SUCCEED_SYS, OrderRechargeSup::STATUS_SUCCEED_SUP, OrderRechargeSup::STATUS_SUCCEED_ADMIN])) {

                // 充值状态变为充值成功（总后台人工）发生的成功结算 (这里肯定做结算处理，至于文档里写的"或暂不结算"，那是上层调用者的职责，需要在调用者那里做判断)
                // 该SUP订单是否满足以下场景：
                //   1.该笔SUP订单原充值状态不为：充值成功（系统）/充值成功（供应商人工）/充值成功（总后台人工

                // FIXME: 在回调通知中，会不存在 $user 对象
                $user = $this->getUser();
                $settleSupOrder($supOrder, $settleOrder, $user, OrderRechargeSupOperationLog::OPERATION_MANUAL);

                // 自动对主订单进行成功结算
                $this->rechargeOrderService()->markOrderSucceed($order, OrderRecharge::STATUS_SUCCEED_MAN);
            } else {
                throw new \RuntimeException(sprintf('当前SUP订单状态(%s，%s)不能进行成功结算', $oldRechargeStatus, $oldSettleStatus));
            }

            $supOrder->save();

            OrderRecharge::commit();
        } catch (\Exception $e) {
            OrderRecharge::rollback();
            $error = "对SUP订单({$supOrder->id})进行成功结算时失败";
            $this->logger->error($error, array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw new OrderException($error, 0, $e);
        }

    }

    /**
     * @param SubAccount       $supplierAccount
     * @param OrderRechargeSup $supOrder
     * @param                  $newRechargeStatus
     * @param bool             $settleOrder
     * @throws OrderException
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function markSupOrderFailed(OrderRechargeSup $supOrder, $newRechargeStatus, $settleOrder = true) {
        $oldRechargeStatus = $supOrder->recharge_status;
        $oldSettleStatus   = $supOrder->settle_status;
        $supplierAccount   = $supOrder->getSupplierAccount(); // 可能返回 null（在快速上线版中不存在供应商账号的情况下）
        $supplierUser      = $supplierAccount ? $supplierAccount->getUser() : null;
        $order             = $supOrder->getOrder();

        $context   = ['sup_user_id' => $supOrder->sup_user_id, 'sup_order_id' => $supOrder->id, 'settle_status' => $supOrder->settle_status, 'old_recharge_status' => $oldRechargeStatus, 'new_recharge_status' => $newRechargeStatus];

        try {
            if($order->platform_id !== Platform::OPEN_PLATFORM) {
                throw new \RuntimeException('目前只支持开放平台的订单处理');
            }

            if($oldRechargeStatus === $newRechargeStatus) {
                throw new \InvalidArgumentException("Sup订单新状态（{$newRechargeStatus}）不能与旧状态一样");
            }
            if(!in_array($newRechargeStatus, OrderRechargeSup::RECHARGE_FAILED_STATUSES)) {
                throw new \InvalidArgumentException('新状态必须是充值失败状态');
            }

            if($supOrder->sup_user_id && $supOrder->isRefunded()) {
                throw new \RuntimeException("该Sup订单($supOrder->id)已经从供应商($supOrder->sup_user_id)退款, 不能再次退款");
            }
            if($newRechargeStatus !== OrderRechargeSup::STATUS_CHECK_FAILED && !$supOrder->isLatestSupOrder()) {
                throw new \RuntimeException("该Sup订单($supOrder->id)已经不是最新SUP订单，只允许设置为验单失败状态，无法进行其他操作");
            }

            $order = $supOrder->getOrder();

            $settleSupOrder = function(OrderRechargeSup $supOrder, $settleStatus) use ($settleOrder, $order, $context) {
                if(!$settleOrder) {
                    // 参数指定不进行结算，不对结算状态做修改
                    return;
                }

                // 该笔 SUP 订单已经结算过，并且有对应的上游供应商，才需要给供应商进行付款、退款操作
                if($supOrder->settle_status === OrderRechargeSup::SETTLE_STATUS_PAID && $supOrder->sup_user_id && $supOrder->sup_price > 0) {
                    $supplierAccount = $supOrder->getSupplierAccount();
                    $supplierAccount->incrBalance($supOrder->sup_price, $this->logger, $context);
                    UserMoneyLog::createLog($supplierAccount, $supOrder->id, $supOrder->sup_price, UserMoneyLog::TYPE_REFUND, $order->product_name, 'Sup订单结算', null, $this->logger, $context);
                }

                $supOrder->settle_status   = $settleStatus;
            };

            $markOrderFailed = function (OrderRecharge $order, $auto = false) {
                if(!$auto) {
                    $this->rechargeOrderService()->markOrderFailed($order, OrderRecharge::STATUS_FAILED_SYS);
                    return;
                }

                // 货源模板设置为失败自动结算 and 商品设置失败自动结算
                // 因为快速上线版还没有货源模板，所以货源模板的失败自动结算设置默认为 true
                $templateAutoRefund = true;
                $product = $order->getProduct();
                $productSettings = $product->loadUserSettings($order->getPlatformAccount());
                if($templateAutoRefund && $productSettings->auto_refund) {
                    $this->rechargeOrderService()->markOrderFailed($order, OrderRecharge::STATUS_FAILED_SYS);
                }
            };

            OrderRecharge::begin_transaction();

            if($newRechargeStatus === OrderRechargeSup::STATUS_CHECK_FAILED && $oldSettleStatus === OrderRechargeSup::SETTLE_STATUS_PENDING &&
                in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_FETCHED])) {

                // 充值状态变为已验单，不可充值时发生的不付款结算
                $supOrder->recharge_status = OrderRechargeSup::STATUS_CHECK_FAILED;
                $settleSupOrder($supOrder, OrderRechargeSup::SETTLE_STATUS_UNPAID);
                $this->createSupplierOperationLog($supplierUser, $supOrder, OrderRechargeSupOperationLog::OPERATION_API, $context);

            } elseif($newRechargeStatus === OrderRechargeSup::STATUS_SUBMIT_FAILED && $oldSettleStatus === OrderRechargeSup::SETTLE_STATUS_PENDING &&
                in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_FETCHED, OrderRechargeSup::STATUS_CHECK_SUCCEED])) {

                // 充值状态变为提交失败发生的失败不付款结算
                $supOrder->recharge_status = OrderRechargeSup::STATUS_SUBMIT_FAILED;
                $settleSupOrder($supOrder, OrderRechargeSup::SETTLE_STATUS_UNPAID);
                $this->createSupplierOperationLog($supplierUser, $supOrder, OrderRechargeSupOperationLog::OPERATION_API, $context);

                // 自动对主订单设置失败状态
                $markOrderFailed($order, false);

            } elseif($newRechargeStatus === OrderRechargeSup::STATUS_FAILED_SYS && $oldSettleStatus === OrderRechargeSup::SETTLE_STATUS_PENDING &&
                in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_IN_PROGRESS])) {

                // 充值状态变为充值失败（系统）发生的失败不付款结算
                $supOrder->recharge_status = OrderRechargeSup::STATUS_FAILED_SYS;
                $settleSupOrder($supOrder, OrderRechargeSup::SETTLE_STATUS_UNPAID);
                $this->createSupplierOperationLog(null, $supOrder, OrderRechargeSupOperationLog::OPERATION_API, $context); // 系统自动结算时，无操作人，故传 null 进去

                // 自动对主订单设置失败状态
                $markOrderFailed($order, false);

            } elseif($newRechargeStatus === OrderRechargeSup::STATUS_FAILED_SUP && in_array($oldSettleStatus,[OrderRechargeSup::SETTLE_STATUS_PENDING, OrderRechargeSup::SETTLE_STATUS_PAID]) &&
                !in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN])) {

                // 供应商对SUP订单人工置失败的操作结果，变为本状态时发生失败退款结算

                $supOrder->recharge_status = OrderRechargeSup::STATUS_FAILED_SUP;
                $settleSupOrder($supOrder, OrderRechargeSup::SETTLE_STATUS_REFUNDED);
                $this->createSupplierOperationLog($supplierUser, $supOrder, OrderRechargeSupOperationLog::OPERATION_MANUAL, $context);

                // 自动对主订单设置失败状态
                $markOrderFailed($order, true);

            } elseif($newRechargeStatus === OrderRechargeSup::STATUS_FAILED_ADMIN &&
                !in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN])) {

                // 注意：总后台人工操作的时候，不需要考虑前结算状态，变为本状态时发生失败退款结算

                $supOrder->recharge_status = OrderRechargeSup::STATUS_FAILED_SUP;
                $settleSupOrder($supOrder, OrderRechargeSup::SETTLE_STATUS_REFUNDED);
                $this->createSupplierOperationLog($this->getUser(), $supOrder, OrderRechargeSupOperationLog::OPERATION_MANUAL, $context);

                // 自动对主订单设置失败状态
                $markOrderFailed($order, true);

            } else {
                throw new \RuntimeException(sprintf('当前SUP订单状态(%s，%s)不能进行失败结算', $oldRechargeStatus, $oldSettleStatus));
            }

            OrderRecharge::commit();
        } catch (\Exception $e) {
            OrderRecharge::rollback();
            $error = "对SUP订单({$supOrder->id})进行失败结算时失败";
            $this->logger->error($error, array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw new OrderException($error, 0, $e);
        }

    }


    /**
     * @param SubAccount       $supplierAccount
     * @param OrderRechargeSup $supOrder
     * @param                  $newStatus
     * @throws OrderException
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function markSupOrderSuspicious(SubAccount $supplierAccount, OrderRechargeSup $supOrder, $suspiciousStatus) {
        $oldRechargeStatus = $supOrder->recharge_status;
        $context           = ['user_id' => $supplierAccount->user_id, 'sup_order_id' => $supOrder->id, 'settle_status' => $supOrder->settle_status, 'old_recharge_status' => $oldRechargeStatus, 'new_recharge_status' => $suspiciousStatus];

        try {
            if($supplierAccount->getPlatformId() !== Platform::OPEN_PLATFORM) {
                throw new \RuntimeException('目前只支持开放平台的订单处理');
            }
            if($oldRechargeStatus === $suspiciousStatus) {
                throw new \InvalidArgumentException("Sup订单新状态（{$suspiciousStatus}）不能与旧状态一样");
            }
            if(!in_array($oldRechargeStatus, [OrderRechargeSup::STATUS_IN_PROGRESS, OrderRechargeSup::STATUS_CHECK_SUCCEED])) {
                throw new \InvalidArgumentException('旧SUP订单充值状态必须在[充值中]、[已验单，可充值]时才能设置新状态为可疑');
            }
            if(!in_array($suspiciousStatus, [OrderRechargeSup::STATUS_SUBMIT_SUSPICIOUS, OrderRechargeSup::STATUS_RECHARGE_SUSPICIOUS])) {
                throw new \InvalidArgumentException('新订单可疑状态只能是[提交可疑]、[充值可疑]');
            }

            $supOrder->recharge_status = $suspiciousStatus;
            $supOrder->careful_status = 1;
            $supOrder->save();

        } catch (\Exception $e) {
            $error = "对SUP订单({$supOrder->id})进行标志可疑时失败";
            $this->logger->error($error, array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw new OrderException($error, 0, $e);
        }

    }

}