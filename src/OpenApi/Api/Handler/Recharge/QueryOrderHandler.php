<?php
namespace App\OpenApi\Api\Handler\Recharge;

use App\Common\Model\Order\OrderRecharge;
use App\OpenApi\Api\AbstractHandler;
use App\OpenApi\ApiContext;
use App\OpenApi\Form\GenericApiForm;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class QueryOrderHandler extends AbstractHandler {
    use ServiceSubscriberTrait;

    // 充值状态(1:充值中,2:充值成功,3:充值失败。除3外若返回其他代码切勿退款)
    const STATUS_MAP = [
        OrderRecharge::STATUS_PROCESSING  => 1, // 充值中
        OrderRecharge::STATUS_SUCCEED_SYS => 2, // 充值成功
        OrderRecharge::STATUS_SUCCEED_MAN => 2, // 充值成功
        OrderRecharge::STATUS_FAILED_SYS  => 3, // 充值失败
        OrderRecharge::STATUS_FAILED_MAN  => 3, // 充值失败
    ];

    protected function handlerForm(): GenericApiForm {
        /** @var GenericApiForm $form */
        $form = $this->container->get(__METHOD__);

        $form->addField('order_sn');
        $form->addField('outer_sn');

        return $form;
    }

    // order_sn
    // outer_sn
    // 订单编号,order_sn 与 outer_sn 不能同时为空，都不为空时以 order_sn 为准
    public function handle(ApiContext $context) {
        $form = $context->form;

        $conditions = [];
        if($form->order_sn) {
            $conditions = ['id' => $form->order_sn, 'user_id' => $context->user->id];
        } elseif($form->outer_sn) {
            $conditions = ['user_id' => $context->user->id, 'outer_sn' => $form->outer_sn];
        } else {
            ApiError::throwException(ApiError::ERROR_INVALID_ORDER_SN_OR_OUTER_SN);
        }

        /** @var OrderRecharge $order */
        $order = OrderRecharge::first($conditions);
        if(!$order) {
            ApiError::throwException(ApiError::ERROR_ORDER_NOT_FOUND);
        }

        // $supOrder = $order->getCurrentSupOrder(); // TODO: 增加字段保存官方流水
        $result = [
            'order_sn'    => $order->id, // 订单编号
            'outer_sn'    => $order->outer_sn, // 外部订单号
            'official_sn' => '', // 官方流水（可空）
            'status'      => $this->mapStatus($order->status),
            'status_msg'  => OrderRecharge::STATUSES[$order->status] ?? '充值中', // 充值中订单状态说明，如果状态不在范围内则直接返回 '充值中'
        ];

        $context->message = '查询成功';
        return $result;
    }

    /** 把充值订单状态转换成 API 接口中的充值状态，所有 self::STATUS_MAP 外的状态都会给客户返回“充值中”
     * @param $status string 订单状态
     * @return mixed
     */
    private function mapStatus($status) {
        return self::STATUS_MAP[$status] ?? self::STATUS_MAP[OrderRecharge::STATUS_PROCESSING];
    }

}
