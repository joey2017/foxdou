<?php
namespace App\Common\ExternalService\RechargeService\Provider;

use App\Common\ExternalService\Exception\ExternalServiceException;
use App\Common\ExternalService\Exception\ExternalServiceNotifyException;
use App\Common\ExternalService\RechargeService\AbstractRechargeServiceProvider;
use App\Common\ExternalService\RechargeService\RechargeServiceContext;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\Common\Service\Order\RechargeSupOrderService;
use App\OpenApi\Security\SignatureHelper;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Contracts\Service\ServiceSubscriberTrait;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;
use Unirest\Request;

class FoxdouRechargeServiceProvider extends AbstractRechargeServiceProvider {
    use ServiceSubscriberTrait;

    const PROVIDER_NAME = '狐豆平台';

    const MAX_RETIES = 3; // 重试次数
    const APP_ID     = '100144';
    const APP_SECRET = '259a8a81082a1267017eed0e94bc84a9';
    const API_URL    = 'http://api.1zbao.com/gateway.do';

    const ORDER_STATUS_SUCCEED = '2';
    const ORDER_STATUS_FAILED  = '3';

    const RESULT_OK            = 'ok';

    public function form(): Form {
        return $this->container->get(__METHOD__);
    }

    protected function supOrderService(): RechargeSupOrderService {
        return $this->container->get(__METHOD__);
    }

    public function init(RechargeServiceContext $context) {
        // 由于超时等原因出错的，重试几次
        Request::curlOpts([CURLOPT_MAXREDIRS => self::MAX_RETIES]);
    }

    // 'outer_sn'   => ['required'],
    // 'amount'     => ['required, numeric'],
    // 'mobile'     => ['required, mobile'],
    public function submitOrder(RechargeServiceContext $context) {
        $params = [
            'app_id'     => self::APP_ID,
            'method'     => 'foxdou.mobile.recharge',
            'request_id' => Uuid::uuid4()->toString(),
            'timestamp'  => date('Y-m-d H:i:s'),
            'format'     => 'json',
            'version'    => '1.0',
            'mobile'     => $context->order->phone_number,
            'amount'     => $context->order->recharge_amount,
            'outer_sn'   => $context->order->id,
        ];

        $params['sign'] = SignatureHelper::calcSignature($params, self::APP_SECRET);

        $response = Request::get(self::API_URL, [], $params);

        if(!$response) {
            $message = __CLASS__ . ": 向上游充值供应商提交数据请求失败";
            throw new ExternalServiceException($message, null);
        }

        if(!($body = $response->body) || !isset($body->error_code)) {
            $message = __CLASS__ . ": 上游充值供应商没有返回可以解析的数据";
            throw new ExternalServiceException($message, $response->raw_body);
        }

        $this->logger()->debug(__CLASS__.": response=" . $response->raw_body);

        $errorCode = (string)$body->error_code;
        if($errorCode !== '0') {
            $message = __CLASS__ . ": 向上游充值供应商提交订单失败：状态码为 {$errorCode}";
            throw new ExternalServiceException($message, $response->raw_body);
        }

        $result = $body->result;
        $this->logger()->info(__CLASS__ . ": 向上游充值供应商提交订单成功", ['order_id' => $result->order_sn]);
    }

    // 狐豆平台查询 API：返回数据格式
    // 'order_sn'    => $order->id, // 订单编号
    // 'status'      => $order->status, // 充值状态(1:充值中,2:充值成功,3:充值失败。除3外若返回其他代码切勿退款)
    // 'outer_sn'    => $order->outer_sn, // 外部订单号
    // 'official_sn' => '', // 官方流水（可空）
    // 'status_msg'  => OrderRecharge::STATUSES[$order->status] ?? '充值中', // 充值中订单状态说明，如果状态不在范围内则直接返回 '充值中'
    public function queryStatus(RechargeServiceContext $context) {
        $params = [
            'app_id'     => self::APP_ID,
            'method'     => 'foxdou.mobile.queryOrder',
            'request_id' => Uuid::uuid4()->toString(),
            'timestamp'  => date('Y-m-d H:i:s'),
            'format'     => 'json',
            'version'    => '1.0',
            'order_sn'   => $context->order->id,
        ];

        $params['sign'] = SignatureHelper::calcSignature($params, self::APP_SECRET);

        $response = Request::get(self::API_URL, [], $params);

        if(!$response) {
            $message = __CLASS__ . ": 向上游充值供应商查询充值结果失败";
            throw new ExternalServiceException($message, null);
        }

        if(!($body = $response->body) || !isset($body->error_code)) {
            $message = __CLASS__ . ": 上游充值供应商没有返回可以解析的数据";
            throw new ExternalServiceException($message, $response->raw_body);
        }

        $this->logger()->debug(__CLASS__.": response=" . $response->raw_body);

        $errorCode = (string)$body->error_code;
        if($errorCode !== '0') {
            $message = __CLASS__ . ": 向上游充值供应商提交订单失败：状态码为 {$errorCode}";
            throw new ExternalServiceException($message, $response->raw_body);
        }

        $result = $body->result;
        $this->logger()->info(__CLASS__ . ": 向上游充值供应商提交订单成功", ['order_id' => $result->order_sn]);
    }

    // order_sn=2016012417460031550&outer_sn=123456&order_status=2&sign=927d1c5d76a982fee552b16387ec357f
    // order_status: 订单状态(2成功,3失败)
    /**
     * @param RechargeServiceContext $context
     * @return string|array|Response
     * @throws \Exception
     */
    public function handleNotify(RechargeServiceContext $context) {
        $params = $context->request->isMethod(\Symfony\Component\HttpFoundation\Request::METHOD_GET) ? $context->request->query : $context->request->request;
        $form = $this->verifyNotifyRequest($params);

        try {
            return $this->doHandleNotify($form);
        } catch (ExternalServiceNotifyException | \InvalidArgumentException $e) {
            throw $e;
        } catch (\Exception $e) {
            $context = $form->all();
            unset($context['sign']);
            $this->logger->error('回调通知处理错误', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            throw $e;
        }
    }

    private function verifyNotifyRequest(\Symfony\Component\HttpFoundation\ParameterBag $params): Form {
        // 有调试标志时跳过签名验证
        if(!$this->isDebug() || !$params->get('debug')) {
            if(!SignatureHelper::verifySignature($params->all(), self::APP_SECRET)) {
                throw new BadRequestHttpException('签名错误');
            }
        }

        $form = $this->form();
        $form->init([
            'order_sn'     => ['required'],
            'outer_sn'     => ['required'],
            'order_status' => ['required, enum[2|3]'],
            'sign'         => ['required'],
        ]);

        if(!$form->validate($params)) {
            $errorMsg = '表单验证错误。';
            $idx = 1;
            $validationErrors = [];
            foreach ($form->getErrors() as $fieldName => $error) {
                $validationErrors[] = "{$fieldName}: {$error->getMessage()}";
                $idx++;
            }

            $errorMsg .= join(', ', $validationErrors);

            throw new BadRequestHttpException($errorMsg);
        }
        if(!$form->order_sn && !$form->outer_sn) {
            throw new BadRequestHttpException('表单验证错误：order_sn 和 outer_sn 必须要填一个');
        }

        return $form;
    }

    /**
     * @param $form
     * @return OrderRechargeSup
     */
    private function loadOrder(Form $form) {
        $params = $form->except('sign');

        $order = OrderRecharge::first(['id' => $form->order_sn], ['for' => 'UPDATE']);
        if(!$order) {
            $error = sprintf('找不到指定的订单: %s', $form->order_sn);
            $this->logger()->error($error, $params);
            throw new ExternalServiceNotifyException($error);
        }

        if($order->status !== OrderRecharge::STATUS_PROCESSING) {
            $error = sprintf('订单状态错误。回调通知只能处理状态为 [%s] 的订单', OrderRecharge::STATUS_PROCESSING);
            $this->logger()->error($error, ['order.id' => $order->id, 'order.status' => $order->status, 'notify_order_status' => $form->order_status]);
            throw new ExternalServiceNotifyException($error);
        }

        $supOrder = OrderRechargeSup::first(['id' => $order->current_sup_order_id], ['for' => 'UPDATE']);
        if(!$supOrder) {
            $error = sprintf('回调通知处理错误：找不到相应的 SUP 订单', OrderRecharge::STATUS_PROCESSING);
            $this->logger()->error($error, ['order.id' => $order->id, 'order.current_sup_order_id' => $order->current_sup_order_id]);
            throw new ExternalServiceNotifyException($error);
        }
        if($supOrder->recharge_status !== OrderRechargeSup::STATUS_IN_PROGRESS) {
            $error = sprintf('SUP订单状态错误。回调通知只能处理状态为 [%s] 的订单', OrderRechargeSup::STATUS_IN_PROGRESS);
            $this->logger()->error($error, ['order.id' => $order->id, 'order.status' => $order->status, 'notify_order_status' => $form->order_status]);
            throw new ExternalServiceNotifyException($error);
        }

        $supOrder->setOrder($order);

        return $supOrder;
    }

    /**
     * @param Form $form
     * @throws \App\Common\Exception\OrderException
     * @throws \SimpleRecord\Exception\DatabaseException
     * @throws \Exception
     */
    private function doHandleNotify(Form $form) {
        try {
            OrderRecharge::begin_transaction();

            /** @var $supOrder OrderRechargeSup */
            $supOrder = $this->loadOrder($form);

            if($form->order_status === self::ORDER_STATUS_SUCCEED) {
                $this->supOrderService()->markSupOrderSucceed($supOrder, OrderRechargeSup::STATUS_SUCCEED_SYS, true);
            } elseif($form->order_status === self::ORDER_STATUS_FAILED) {
                $this->supOrderService()->markSupOrderFailed($supOrder, OrderRechargeSup::STATUS_FAILED_SYS, true);
            } else {
                throw new \RuntimeException('参数 order_status 不合法');
            }

            OrderRecharge::commit();

            return self::RESULT_OK;
        } catch (\Exception $e) {
            OrderRecharge::rollback();
            throw $e;
        }
    }
}
