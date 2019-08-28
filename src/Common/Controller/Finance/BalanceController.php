<?php

namespace App\Common\Controller\Finance;

use App\Common\Bundle\SimplePay\Service\AlipayService;
use App\Common\Controller\BaseController;
use App\Common\Model\Payment\PaymentMethod;
use App\Common\Model\Payment\RechargeOrder;
use App\PaymentConstants;
use App\Platform;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BalanceController extends BaseController {

    //    /**
    //     * @Route("/finance/balance/add-balance", name="reseller_finance_add_balance")
    //     */
    //    public function addBalanceAction(Request $request) {
    //        $platformId = $request->query->getInt('pid', 0);
    //        if(!$platformId || !isset(Platform::PLATFORMS[$platformId])) {
    //            throw new BadRequestHttpException('非法请求');
    //        }
    //
    //        $user = $this->getUser();
    //        $subAccount = null;
    //        if($platformId === Platform::OPEN_PLATFORM) {
    //            $subAccount = $user->getOpenPlatformAccount();
    //        } elseif($platformId === Platform::RESELLER) {
    //            $subAccount = $user->getResellerAccount();
    //        } elseif($platformId === Platform::SUPPLIER) {
    //            $subAccount = $user->getSupplierAccount();
    //        } else {
    //            throw new BadRequestHttpException('非法请求');
    //        }
    //
    //        return $this->render("/Common/Finance/Balance/add_balance.twig", ['sub_account' => $subAccount]);
    //    }

    /**
     * @Route("/finance/balance/add-balance/via-alipay-transfer", name="common_finance_balance_add_balance_via_alipay_transfer", methods={"POST"})
     */
    public function addBalanceViaAlipayTransferAction(Request $request, AlipayService $alipayService, Form $form) {
        $platforms = join('|', array_keys(Platform::PLATFORMS));
        $sceneIds  = join('|', array_keys(PaymentConstants::SCENES));
        $form      ->init([
            'alipay_trade_no' => ['required, digit'],
            'platform_id'     => ["required, enum[{$platforms}]"],
            'scene_id'        => ["required, enum[{$sceneIds}]"],
        ]);
        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();
            return ['status' => false, 'msg' => '参数错误'];
        }
        $platformId = $form->get('platform_id');
        $sceneId    = $form->getInt('scene_id');
        if (!isset(PaymentConstants::SCENE_GROUPS[$platformId]) || !in_array($sceneId, PaymentConstants::SCENE_GROUPS[$platformId])) {
            return ['status' => false, 'msg' => '支付场景不正确'];
        }
        $subAccount = $this->getUser()->getSubAccount($form->get('platform_id'), false);
        if (!$subAccount) {
            return ['status' => false, 'msg' => '平台参数无效'];
        }

        $conditions = ['class_id'    => PaymentConstants::PAYMENT_METHOD_ALIPAY_TRANSFER,
                       'platform_id' => $platformId, 'scene_id' => $sceneId, 'status' => PaymentMethod::STATUS_ENABLED];
        /** @var PaymentMethod $paymentMethod */
        if (!($paymentMethod = PaymentMethod::first($conditions))) {
            return ['status' => false, 'msg' => '选择的付款方式不存在或者已经停用'];
        }

        $tradeNo = $form->get('alipay_trade_no');
        list($succeed, $msg) = $alipayService->rechargeByTradeNo($subAccount, $paymentMethod, $tradeNo, '支付宝转账加款');

        return ['status' => $succeed, 'msg' => $msg];
    }

    /**
     * @Route("/finance/balance/add-balance/via-alipay-online-payment", name="common_finance_balance_add_balance_via_alipay_online_payment", methods={"POST"})
     */
    public function addBalanceViaAlipayOnlinePaymentAction(Request $request, AlipayService $alipayService, UrlGeneratorInterface $urlGenerator, Form $form) {
        $platforms      = join('|', array_keys(Platform::PLATFORMS));
        $paySceneGroups = join('|', array_keys(PaymentConstants::SCENE_GROUPS));
        $sceneIds       = join('|', array_keys(PaymentConstants::SCENES));
        $form           ->init([
            'amount'      => ['required, decimal, min[0.01], max[99999]'],
            'platform_id' => ["required, enum[{$platforms}]"],
            'scene_id'    => ["required, enum[{$sceneIds}]"],
        ]);
        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();

            return ['status' => false, 'msg' => '参数错误'];
        }
        $platformId = $form->get('platform_id');
        $sceneId    = $form->getInt('scene_id');
        if (!isset(PaymentConstants::SCENE_GROUPS[$platformId]) || !in_array($sceneId, PaymentConstants::SCENE_GROUPS[$platformId])) {
            return ['status' => false, 'msg' => '支付场景不正确'];
        }
        $subAccount = $this->getUser()->getSubAccount($form->get('platform_id'), false);
        if (!$subAccount) {
            return ['status' => false, 'msg' => '平台参数无效'];
        }

        $conditions = ['class_id'    => PaymentConstants::PAYMENT_METHOD_ALIPAY_PC,
                       'platform_id' => $platformId, 'scene_id' => $sceneId, 'status' => PaymentMethod::STATUS_ENABLED];
        /** @var PaymentMethod $paymentMethod */
        if (!($paymentMethod = PaymentMethod::first($conditions))) {
            return ['status' => false, 'msg' => '选择的付款方式不存在或者已经停用'];
        }

        $now        = time();
        $conditions = [
            'user_id'         => $this->getUserId(),
            'status' => 0,
            'recharge_way'    => PaymentConstants::TYPE_AUTOMATIC,
            'add_time'        => ['between' => [$now - 1800, $now]],
        ];

        if (RechargeOrder::count($conditions) > 10) {
            return ['status' => false, 'msg' => '未付款订单过多，请移步至充值记录付款'];
        }

        $amount = $form->get('amount');
        list($orderId, $message) = $alipayService->createRechargeOrder($subAccount, $paymentMethod, $amount, '支付宝在线充值余额');
        if ($orderId === false) {
            return ['status' => false, 'msg' => $message];
        }

        $url = $urlGenerator->generate('common_finance_balance_add_balance_alipay_goto_cashier', ['order_id' => $orderId], UrlGeneratorInterface::ABSOLUTE_URL);

        return ['status' => true, 'url' => $url];
    }


    /**
     * @Route("/finance/balance/add-balance/alipay/goto-cashier", name="common_finance_balance_add_balance_alipay_goto_cashier", methods={"GET"})
     */
    public function submitAlipayOrderAndGotoCashierAction(Request $request, AlipayService $alipayService, UrlGeneratorInterface $urlGenerator, Form $form) {
        $form->init(['order_id' => ['required, digit'],]);

        if (!$form->validate($request->query)) {
            throw new BadRequestHttpException('非法请求');
        }

        $orderId = $request->query->get('order_id');
        $params  = ['id' => $orderId, 'user_id' => $this->getUserId()];
        if (!$orderId || !($order = RechargeOrder::first($params))) {
            throw new NotFoundHttpException('找不到相关订单信息', $params);
        }

        $totalAmount     = $order->amount + $order->poundage;
        $alipayOrderInfo = [
            'out_trade_no'    => $order->id, //唯一订单号
            'total_amount'    => number_format($totalAmount, 2), //金额，转换成两位小数点
            'subject'         => $order->product_name, //商品名称
            'body'            => $order->note, //订单描述
            'timeout_express' => '15m', //该笔订单允许的最晚付款时间，逾期将关闭交易。取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。 该参数数值不接受小数点， 如 1.5h，可转换为 90m。
        ];

        // $request->setReturnUrl('https://alipay.foxdou.com/trade/pay-result/alipay');//get页面跳转
        // $request->setNotifyUrl('https://alipay.foxdou.com/trade/pay-notify/alipay');//post通知
        $returnUrl = $urlGenerator->generate('common_finance_balance_add_balance_alipay_return', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $notifyUrl = $urlGenerator->generate('common_finance_balance_add_balance_alipay_notify', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $alipayResponse = $alipayService->submitAlipayOrder($alipayOrderInfo, $returnUrl, $notifyUrl);

        return $alipayResponse;
    }

    /**
     * @Route("/finance/balance/add-balance/alipay/return", name="common_finance_balance_add_balance_alipay_return", methods={"GET"})
     */
    public function addBalanceViaAlipayReturnAction(Request $request, AlipayService $alipayService) {
        $rechargeOrder = $alipayService->verifyQueryAndFindOrder($request->query, false);
        if (!$rechargeOrder) {
            throw new BadRequestHttpException("非法请求");
        } elseif ($rechargeOrder->status !== RechargeOrder::STATUS_SUCCEED) {
            $this->logger->error("支付宝在线充值：订单状态还没有处理完成，请耐心等待", ['order_id' => $rechargeOrder->id, 'status' => $rechargeOrder->status]);
            return 'failure';
        } else {
            return $this->render('/Common/Finance/Balance/add_balance_success.twig', ['recharge_order' => $rechargeOrder]);
        }
    }

    /**
     * 此方法的调用环境是匿名用户环境
     * @Route("/finance/balance/add-balance/alipay/notify", name="common_finance_balance_add_balance_alipay_notify", methods={"POST"})
     */
    public function addBalanceViaAlipayNotifyAction(Request $request, AlipayService $alipayService) {
        // 用 try catch 包住，即使出现异常也只给支付宝返回 success 或者 failure，不展示普通的异常页面
        try {
            //校验是否支付成功
            $rechargeOrder = $alipayService->verifyQueryAndFindOrder($request->request, false);
            if (!$rechargeOrder) {
                return 'failure';
            }

            $alipayTradeNo = $request->request->get('trade_no');     // 支付宝生成的订单号
            list($succeed, $message) = $alipayService->processRechargeOrder($rechargeOrder, $alipayTradeNo);

            return $succeed ? 'success' : $message;
        } catch (\Exception $e) {
            $this->logger->error("支付宝在线充值：处理订单过程出错", ['order_id' => $rechargeOrder->id, 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            return 'failure';
        }
    }

}
