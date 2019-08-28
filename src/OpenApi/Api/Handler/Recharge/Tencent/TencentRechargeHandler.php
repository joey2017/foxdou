<?php
namespace App\OpenApi\Api\Handler\Recharge\Tencent;

use App\Common\Exception\OrderException;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Product\Product;
use App\Common\Service\IspManager;
use App\Common\Service\Order\OrderService;
use App\OpenApi\Api\AbstractHandler;
use App\OpenApi\ApiContext;
use App\OpenApi\EnqueueCommands;
use App\OpenApi\Form\Recharge\Tencent\RechargeForm;
use App\OpenApi\Service\RechargeProductService;
use App\ProductConstants;
use Enqueue\Client\ProducerInterface;
use Ramsey\Uuid\Uuid;
use Symfony\Contracts\Service\ServiceSubscriberTrait;
use Symfu\SimpleFormBundle\Form;

/**
 * 手机充值接口
 * 参数：
 *   amount       必填，充值金额
 *   mobile       必填，手机号码
 *   outer_sn     必填，外部订单号，可用作检测订单状态，需保证唯一性
 *   product_id   选填，商品编号,不传将按商品的优先级：最低价格>城市级>省份>任意充分配商品
 */
class TencentRechargeHandler extends AbstractHandler {
    use ServiceSubscriberTrait;

    protected function handlerForm(): RechargeForm {
        return $this->container->get(__METHOD__);
    }

    protected function rechargeProductService(): RechargeProductService {
        return $this->container->get(__METHOD__);
    }

    protected function ispManager(): IspManager {
        return $this->container->get(__METHOD__);
    }

    protected function orderService(): OrderService {
        return $this->container->get(__METHOD__);
    }

    protected function producer(): ProducerInterface {
        return $this->container->get(__METHOD__);
    }

    public function init(ApiContext $context) {
        $form = $context->form;

        if($this->isDebug()) {
            $form->set('outer_sn', Uuid::uuid4()->toString());
        }

        if (OrderRecharge::exists(['user_id' => $context->user->id, 'outer_sn' => $form->outer_sn])) {
            ApiError::throwException(ApiError::ERROR_DUPLICATED_OUTER_SN);
        }

        if (!($numberInfo = $this->ispManager()->getNumberLocationInfo($form->mobile))) {
            ApiError::throwException(ApiError::ERROR_NO_LOCATION_INFO);
        } elseif (!$this->ispManager()->checkAvailability($form->mobile)) {
            ApiError::throwException(ApiError::ERROR_OPERATOR_IN_MAINTENANCE);
        }

        $product = $this->findMostMatchingProduct($context, $form, $numberInfo);

        if (!$product) {
            ApiError::throwException(ApiError::ERROR_NO_PRODUCT);
        }

        $context->paymentContext['amount']      = $product['price'];
        $context->handlerContext['product']     = $product;
        $context->handlerContext['number_info'] = $numberInfo;
    }

    /**
     * @param ApiContext $context
     * @throws OrderException
     * @return array API 执行结果，格式如下：
     * [
     *   'order_sn'   => '2016012417460031550', //下单成功后返回的系统订单号
     *   'product'    => '广西联通话费10元快充',   //商品名称
     *   'mobile'     => '13000000000手',       // 机号码
     *   'amount'     => '10',                  // 充值金额
     *   'status'     => '4',                   // 充值状态
     *   'speed'      => '1',                   // 1：快充，2：慢充
     *   'product_id' => '10458',               // 商品编号
     * ]
     */
    public function handle(ApiContext $context) {
        $product    = $context->handlerContext['product'];
        $numberInfo = $context->handlerContext['number_info'];
        $amount     = (int)$context->form->amount;

        // 创建订单，失败会抛出异常
        $order = $this->orderService()->createMobileRechargeOrder($context->account, $product, null, $numberInfo, $amount, 0, $context->form->outer_sn, OrderRecharge::STATUS_PROCESSING, '');

        $result = [
            'order_sn'   => $order->id,             //下单成功后返回的系统订单号
            'product'    => $product['name'],       //商品名称
            'mobile'     => $order->phone_number,   // 手机号码
            'amount'     => $amount,                // 充值金额
            'status'     => $order->status,         // 充值状态
            'speed'      => $order->speed,          // 1：快充，2：慢充
            'product_id' => $order->product_id,     // 商品编号
            'sell_price' => $order->sell_price,     // 售价
        ];

        $context->order     = $order;
        $context->message   = '提交成功';

        return $result;
    }

    public function finish(ApiContext $context) {
        $producer = $this->producer();
        $producer->sendCommand(EnqueueCommands::RECHARGE_SUBMIT_ORDER, $context->order->to_array());
    }

    private function findMostMatchingProduct(ApiContext $context, Form $form, $numberInfo) {
        $amount   = (int)$form->amount;
        $products = $this->rechargeProductService()->findProducts($context->account, $numberInfo, $amount, 0, (int)$form->product_id);
        $products = array_filter($products, function ($p) use ($amount) { return Product::checkProductPrice($p, $amount); }); // 先过滤掉面值不符合要求的商品

        // 最后对符合要求的商品进行售价处理
        foreach ($products as &$p) {
            $p['price'] = number_format($p['face_value_type'] == ProductConstants::FACE_VALUE_TYPE_ARBITRARILY ? ($p['price'] * $amount) : $p['price'], 5);
        }

        usort($products, function ($pl, $pr) { return $pl['price'] <=> $pr['price']; }); //按价格低的排序

        return reset($products);
    }
}
