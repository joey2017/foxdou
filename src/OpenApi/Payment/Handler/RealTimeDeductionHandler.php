<?php
namespace App\OpenApi\Payment\Handler;

use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Service\Order\RechargeOrderService;
use App\OpenApi\ApiContext;
use App\OpenApi\Exception\ApiException;
use App\OpenApi\ApiSystemError;
use App\OpenApi\Payment\AbstractPaymentHandler;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

/**
 * 1 实时扣费
 * @package App\OpenApi\Payment\Handler
 */
class RealTimeDeductionHandler extends AbstractPaymentHandler {
    use ServiceSubscriberTrait;

    protected function orderService(): RechargeOrderService {
        return $this->container->get(__METHOD__);
    }

    public function init(ApiContext $context) {
        global $T;

        $sql = "SELECT balance FROM {$T(OpenPlatformAccount::table_name())} WHERE id = ? AND balance > 0 FOR UPDATE"; // 锁住这行数据，防止别的 API 同时修改
        $stmt = OpenPlatformAccount::query($sql, [$context->account->id]);
        $rowCount = $stmt->rowCount();
        if($rowCount < 1) {
            $errorCode = ApiSystemError::INSUFFICIENT_BALANCE;
            throw new ApiException(ApiSystemError::ERROR_CODES[$errorCode], $errorCode);
        }

        $currentBalance = (float)$stmt->fetchColumn(0);

        $context->account->balance = $currentBalance; // 更新最新的余额信息
    }

    public function preCheck(ApiContext $context) {
        // 不扣费情况直接返回
        $amount =  $context->paymentContext['amount'] ?? 0;
        if($amount <= 0) {
            return;
        }

        if($context->account->balance < $amount) {
            $errorCode = ApiSystemError::INSUFFICIENT_BALANCE;
            throw new ApiException(ApiSystemError::ERROR_CODES[$errorCode], $errorCode);
        }
    }

    /**
     * @param ApiContext $context
     * @throws \App\Common\Exception\OrderException
     * @throws \SimpleRecord\Exception\DatabaseException
     * @throws \Exception
     */
    public function handle(ApiContext $context) {
        // 不扣费情况直接返回
        $amount =  $context->paymentContext['amount'] ?? 0;
        if($amount <= 0) {
            return;
        }

        // 执行扣款，失败会抛出异常
        $context->account->decrBalance($amount, $this->logger, $context);

        // 创建用户交易记录，失败会抛出异常
        $tradeLog = $this->orderService()->createTradeLog($context->order, UserMoneyTradeLog::TYPE_ORDER_PAYMENT);

        //创建资金记录，失败会抛出异常
        $loggingContext = ['user_id' => $context->user->id, 'platform_id' => $context->account->getPlatformId(), 'id' => $context->order->id, 'number' => $context->order->phone_number, 'recharge_amount' => $context->order->recharge_amount];

        UserMoneyLog::createLog($context->account, $context->order->id, $amount, UserMoneyLog::TYPE_ORDER_PAYMENT, $context->order->product_name, $tradeLog->note, $tradeLog->id, $this->logger, $loggingContext);
    }
}
