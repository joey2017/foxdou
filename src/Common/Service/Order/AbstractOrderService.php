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

class AbstractOrderService extends BaseService {
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
            'order_cate_id'       => $order->order_cate_id,
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

}