<?php
namespace App\Common\Bundle\SimplePay\Service;

use SimpleRecord\DateTime;
use Alipay\AopClient;
use Alipay\Request\AlipayTradePagePayRequest;
use Alipay\Request\AlipayTradeQueryRequest;
use App\Common\Bundle\SimplePay\AdapterInterface\PaymentAdapterInterface;
use App\Common\Exception\TransferFailedException;
use App\Common\Model\Payment\AlipayCookie;
use App\Common\Model\Payment\AlipayTransferRechargeLog;
use App\Common\Model\Payment\PaymentMethod;
use App\Common\Model\Payment\RechargeOrder;
use App\Common\Model\Payment\ThirdPartyPayLog;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\User\SubAccount;
use App\Common\Model\User\User;
use App\PaymentConstants;
use GuzzleHttp\Psr7\Request;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\HttpClient;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\ParameterBag;
use Yansongda\Pay\Gateways\Alipay as BaseAlipay;
use Yansongda\Supports\Config;

class AlipayService extends BaseAlipay implements PaymentAdapterInterface {
    const DEFAULT_ALIPAY_USER_ID = '2088011914494085';
    /** @var LoggerInterface */
    protected $logger;

    /**
     * AlipayService constructor.
     * @param HttpClient $client
     * @param Config     $config
     */
    public function __construct(LoggerInterface $logger, Config $config) {
        parent::__construct($config);
        $this->logger     = $logger;
    }

    public function getName() {
        return "ALIPAY";
    }

    public function rechargeByTradeNo(SubAccount $userSubAccount, PaymentMethod $paymentMethod, $tradeNo, $note = '') {
        if (!$tradeNo) {
            return [false, 'tradeNo 参数不正确'];
        }

        /** @var AlipayCookie $alipayInfo */
        $alipayInfo = AlipayCookie::first();
        if (!$alipayInfo) {
            $this->logger->critical("收款支付宝账号信息尚未配置！");

            return [false, '系统错误，请联系客服解决'];
        }

        $processed = AlipayTransferRechargeLog::exists(['alipay_sn' => $tradeNo]);
        if ($processed) {
            return [false, '该笔交易已被处理，如有疑问请联系客服'];
        }

        $params = [
            'tradeNo' => $tradeNo,
            //            'from' => '',
            //            'to'   => '',
        ];

        if (!($tradeDetails = $this->verifyTrade($alipayInfo, $params))) {
            return [false, '查询不到该订单号，请检查后重新提交'];
        }

        try {
            User::transaction(function () use ($userSubAccount, $alipayInfo, $tradeDetails, $paymentMethod, $note) {
                $this->doRechargeViaTransfer($userSubAccount, $paymentMethod, $tradeDetails, $note);

                return true; //  return false 会 rollback
            });

            return [true, '充值成功'];
        } catch (\Exception $e) {
            $this->logger->critical(sprintf("通过支付宝充值失败，error=%s, stack=%s", $e->getMessage(), $e->getTraceAsString()));

            return [false, '系统错误，请联系客服解决'];
        }

    }

    private function doRechargeViaTransfer(SubAccount $userSubAccount, PaymentMethod $paymentMethod, $details, $note) {
        $now         = time();
        $userId      = $userSubAccount->user_id;
        $platformId  = $userSubAccount->getPlatformId();
        $context     = ['user_id' => $userId, 'platform_id' => $platformId, 'alipay_trade_no' => $details['tradeNo']];

        $tradeAmount = $details['tradeAmount'];
        $poundage    = $paymentMethod->calcPoundage($tradeAmount);
        if ($poundage === false) {
            return [false, '计算手续费失败，请联系管理员解决'];
        }

        // 用户自己的充值订单
        $rechargeOrder = RechargeOrder::create([
            'id'                   => RechargeOrder::newId(),
            'collection_account'   => $paymentMethod->collection_account,
            'outer_sn'             => $details['tradeNo'],
            'amount'               => $tradeAmount,
            'platform_id'          => $platformId,
            'note'                 => $note,
            'payment_class_id'     => $paymentMethod->class_id,  //用户付款方式
            'payment_auxiliary_id' => 0,  //付款方式子类
            'recharge_way'         => PaymentConstants::TYPE_AUTOMATIC, //充值方式
            'status'               => 2, //不传默认为0等待付款[0=>'等待付款',1=>'等待充值',2=>'充值成功',3=>'取消充值'];
            'user_id'              => $userId,
            'add_time'             => $now, // ???
        ]);
        if(!$rechargeOrder) {
            $this->logger->error('支付宝转账充值：生成充值订单失败', $context);
            return false;
        }

        // 系统记录的支付宝充值记录
        $alipayRechargeLog = AlipayTransferRechargeLog::create([
            'foxdou_user_name'    => $userSubAccount->user->user_name,
            'user_id'             => $userId,
            'status'              => AlipayTransferRechargeLog::STATUS_SUCCEED,
            'platform_id'         => $platformId,//***********************************,
            'add_time'            => time(),
            'alipay_sn'           => $details['tradeNo'],
            'alipay_time'         => DateTime::createfromformat('Y-m-d H:i:s T', $details['tradeTime']),
            'alipay_user_account' => $details['otherAccountEmail'],
            'alipay_user_name'    => $details['otherAccountFullname'],
            'amount'              => $tradeAmount,
            'collection_account'  => $paymentMethod->collection_account,
            'alipay_trans_memo'   => $details['transMemo'] ?? $details['goodsTitle'], //留言备注,
            'alipay_user_id'      => rtrim($details['otherAccount'], "0156"), // WTF: 为什么要 rtrim 呢？
        ]);
        if(!$alipayRechargeLog) {
            $this->logger->error('支付宝转账充值：保存支付宝转账充值订单记录失败', $context);
            return false;
        }

        // 用户资金记录
        /** @var UserMoneyTradeLog $tradeLog */
        $tradeLog = UserMoneyTradeLog::create([
            'id'               => UserMoneyTradeLog::newId(),
            'order_id'         => $rechargeOrder->id,
            'platform_id'      => $platformId,
            'amount'           => $tradeAmount,
            'name'             => '余额充值',
            'user_id'          => $userId,
            'note'             => $note,
            'trade_log_type'   => UserMoneyTradeLog::TYPE_ADD_BALANCE,
            'trade_status'     => UserMoneyTradeLog::STATUS_COMPLETED, //交易完成
            'order_cate_id'       => 100002,
            'payment_class_id' => $paymentMethod->class_id,
            'scene_id'         => $paymentMethod->scene_id,
            'trade_poundage'   => $poundage,
            'add_time'         => $now,
            'pay_time'         => $now,
            'end_time'         => $now,
            'trade_time'       => $now,
        ]);
        if(!$tradeLog) {
            $this->logger->error('支付宝转账充值：保存用户资金记录失败', $context);
            return false;
        }

        if (!$userSubAccount->incrBalance($tradeAmount)) {
            $this->logger->error('支付宝转账充值：给账户增加金额失败', $context);
            return false;
        }

        $this->createMoneyLog($userSubAccount, $tradeLog, $tradeAmount, "余额充值", $note, UserMoneyLog::TYPE_ADD_BALANCE);

        return [true, ''];
    }

    private function createMoneyLog(SubAccount $userSubAccount, UserMoneyTradeLog $tradeLog, $amount, $name, $note, $logType) {
        $attrs = [
            'platform_id'            => $tradeLog->platform_id,
            'user_id'                => $userSubAccount->user_id,
            'amount'                 => $amount,
            'name'                   => $name,
            'log_type'               => $logType,
            'note'                   => $note,
            'trade_id'               => $tradeLog->id,
            'order_id'               => $tradeLog->order_id,
            'current_balance'        => $userSubAccount->balance,
            'platform_total_balance' => $userSubAccount::sum('balance'), // WTF: 每笔订单都要计算一次所有用户余额总额，可能会影响性能，是否可以去掉？
            'add_time'               => time(),
        ];

        $log = UserMoneyLog::create($attrs);
        if (!$log) {
            throw new TransferFailedException("保存资金记录失败");
        }

        return $log;
    }

    /**
     * @param array $params structure:
     * [
     *      'tradeNo'        => '20181010....',
     *      'from'           => '2018-19-20 00:00:00', //  可选，默认为从24小时前
     *      'to'             => '2018-19-20 23:59:59', //  可选，默认为当前时间
     * ]
     *
     *
     * @return mixed
     */
    private function verifyTrade(AlipayCookie $alipayInfo, array $params) {
        $tradeDetails = $this->makeRequest($alipayInfo, $params);
        if (!$tradeDetails) {
            return false;
        }

        // TODO: 做额外的检查

        return $tradeDetails;
    }

    private function makeRequest(AlipayCookie $alipayInfo, $params) {
        $tradeNo = $params['tradeNo'] ?? '';
        if ($tradeNo) {
            //            $url = 'https://mbillexprod.alipay.com/enterprise/accountDetailPrecisionQuery.json';
            $url                           = 'https://mbillexprod.alipay.com/enterprise/fundAccountDetail.json';
            $params['precisionQueryKey']   = 'tradeNo';
            $params['precisionQueryValue'] = $tradeNo;
            unset($params['tradeNo']);
        } else {
            $url = 'https://mbillexprod.alipay.com/enterprise/accountDetailQuery.json';
        }

        $now    = time();
        $params = array_merge([
            "queryEntrance"   => 1,
            "billUserId"      => $alipayInfo->bill_user_id ?? self::DEFAULT_ALIPAY_USER_ID,
            "showType"        => "1",
            "type"            => "",
            "startDateInput"  => $params['from'] ?? date('Y-m-d H:i:s', $now - 86400),//"2017-07-19 00:00"
            "endDateInput"    => $params['to']   ?? date('Y-m-d H:i:s', $now),
            "pageSize"        => "20",
            "pageNum"         => "1",
            "sortTarget"      => "tradeTime",
            "order"           => "descend",
            "sortType"        => "0",
            "_input_charset"  => "utf-8",
            "_output_charset" => "utf-8",
            "ctoken"          => "CnsRcnRqmJ83pDMq",

            //            "startAmount"            => "",
            //            "endAmount"              => "",
            //            "targetMainAccount"      => "",
            //            "activeTargetSearchItem" => "tradeNo",
            //            "orderNo"                => "",
            //            "tradeNo"                => '',
            //            "searchType"             => "1",
            //            "forceAync"              => "0",
            //            "fromTime"               => "00:00",
            //            "toTime"                 => "00:00",
        ], $params);


        $headers = [
            'Accept'           => 'application/json, text/javascript',
            'Origin'           => 'https://mbillexprod.alipay.com',
            'X-Requested-With' => 'XMLHttpRequest',
            'User-Agent'       => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
            'DNT'              => '1',
            'Content-Type'     => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Referer'          => 'https://mbillexprod.alipay.com/enterprise/fundAccountDetail.htm',
            'Accept-Encoding'  => 'gzip, deflate, br',
            'Accept-Language'  => 'en-US,en;q=0.9,zh-CN;q=0.8,zh-TW;q=0.7,zh;q=0.6',
            'Cookie'           => $alipayInfo->cookie,
        ];

        $result = \Unirest\Request::post($url, $headers, $params);
        //$result   = json_decode('{"result":{"summary":{"expendSum":{"amount":"0.00","count":0},"incomeSum":{"amount":"0.00","count":0}},"detail":[{"cashierChannels":"余额支付","actualChargeAmount":"0.00","tradeTime":"2018-10-29 18:15:14","tradeNo":"2018102922001466675408632681","chargeRate":"0.000000","otherAccountFullname":"*超富","transMemo":"","signProduct":"转账收款码","balance":"4757.78","transDate":"2018-10-29","orderNo":"45408081077802145166678","otherAccount":"20888021451666780156","accountLogId":"600610519342671","otherAccountEmail":"adm***@nixingwodong.com","action":{"needDetail":true},"accountType":"交易","goodsTitle":"A123456","tradeAmount":"0.01","depositBankNo":""}],"paging":{"sizePerPage":20,"totalItems":1,"current":1}},"status":"succeed","isEntOperator":false,"org.springframework.validation.BindingResult.queryForm":{"nestedPath":"","messageCodesResolver":{"prefix":""}},"accountDetailForm":{"sortTarget":"tradeTime","precisionQueryValue":"2018102922001466675408632681","precisionQueryKey":"tradeNo","pageSize":"20","endDateInput":"2018-10-31 00:00:00","type":"","pageNum":"1","startDateInput":"2018-10-30 00:00:00","sortType":"0","showType":"1","queryEntrance":"1","billUserId":"2088202723044912"},"success":"true","queryForm":{"sortTarget":"tradeTime","precisionQueryValue":"2018102922001466675408632681","precisionQueryKey":"tradeNo","pageSize":"20","endDateInput":"2018-10-31 00:00:00","type":"","pageNum":"1","startDateInput":"2018-10-30 00:00:00","sortType":"0","showType":"1","queryEntrance":"1","billUserId":"2088202723044912"}}');

        return isset($result['status']) && $result['status'] == 'succeed' && isset($result['result']['detail']) && $result['result']['detail'] ? reset($result['result']['detail']) : null;
    }

    public function createRechargeOrder(SubAccount $userSubAccount, PaymentMethod $paymentMethod, $orderAmount, $note) {
        $poundage = $paymentMethod->calcPoundage($orderAmount);
        if ($poundage === false) {
            $this->logger->critical(sprintf("计算手续费失败，无法创建充值订单, "));
            return [false, '计算手续费失败，无法创建充值订单，请联系管理员解决'];
        }

        $now        = time();
        $platformId = $userSubAccount->getPlatformId();

        // 用户自己的充值订单
        $orderCate     = RechargeOrder::ORDER_CATE_ADD_BALANCE;
        $orderCateName = RechargeOrder::ORDER_CATEGORIES[$orderCate] ?? '';
        $rechargeOrder = RechargeOrder::create([
            'id'                   => RechargeOrder::newId(),
            'cate_id'              => $orderCate,
            'collection_account'   => $paymentMethod->collection_account,
            'outer_sn'             => '',
            'amount'               => $orderAmount,
            'poundage'             => $poundage,
            'platform_id'          => $platformId,
            'scene_id'             => $paymentMethod->scene_id,
            'note'                 => $note,
            'payment_class_id'     => $paymentMethod->class_id,  //用户付款方式
            'payment_auxiliary_id' => 0,  //付款方式子类
            'recharge_way'         => PaymentConstants::TYPE_AUTOMATIC, //充值方式
            'status'               => RechargeOrder::STATUS_UNPAID,
            'user_id'              => $userSubAccount->user_id,
            'add_time'             => $now, // ???
            'product_name'         => "{$orderCateName} - 狐豆科技",
        ]);

        if (!$rechargeOrder) {
            $this->logger->error("生成支付宝付款订单失败");
            return [false, '创建订单失败，请重试'];
        }

        return [$rechargeOrder->id, '充值订单已经生成，请完成付款'];
    }

    public function submitAlipayOrder($orderInfo, $returnUrl, $notifyUrl) {
        $client  = new AopClient();
        $request = new AlipayTradePagePayRequest();
        $request->setReturnUrl($returnUrl);// get 页面跳转
        $request->setNotifyUrl($notifyUrl);// post 异步通知
        $orderInfo['product_code'] = 'FAST_INSTANT_TRADE_PAY';
        $request->setBizContent(json_encode($orderInfo));
        $result = $client->pageExecute($request);

        return $result;
    }

    public function processRechargeOrder(RechargeOrder $rechargeOrder, $alipayTradeNo) {
        $context = ['rechargeOrderId' => $rechargeOrder->id, 'alipayTradeNo' => $alipayTradeNo];

        if ($rechargeOrder->status === RechargeOrder::STATUS_SUCCEED) {
            $this->logger->error('支付宝回调：改充值订单已经处理完毕', $context);
            return [true, '充值订单已经完成'];
        }
        if ($rechargeOrder->status === RechargeOrder::STATUS_UNPAID) {
            $succeed = $rechargeOrder->update_attribute('status', RechargeOrder::STATUS_PROCESSING);
            if (!$succeed) {
                $this->logger->error('支付宝回调：修改充值订单状态为[处理中]失败', array_merge($context));
                return [false, '修改充值订单状态失败'];
            }
        }

        if ($rechargeOrder->status !== RechargeOrder::STATUS_PROCESSING) {
            $this->logger->error('支付宝回调：充值订单状态异常', array_merge($context, ['status' => $rechargeOrder->status]));
            return [false, '订单记录不存在或者状态异常'];
        }

        $userId     = $rechargeOrder->user_id;
        $platformId = $rechargeOrder->platform_id;
        /** @var User $user */
        $user    = User::find($userId);
        $context = array_merge($context, ['user_id' => $userId, 'platform_id' => $platformId]);

        if (!$user || !$user->isValid()) {
            $this->logger->error('支付宝回调：订单所属的用户不存在或者状态异常，充值失败', $context);
            return [false, '用户状态异常']; // 这里是否应该返回 true 然后后续管理员再人工介入充值？因为用户状态异常导致的充值失败，如果不给支付宝返回成功，它会重复回调
        }

        $subAccount = $user->getSubAccount($platformId);
        if (!$subAccount || !$subAccount->isValid()) {
            $this->logger->error('支付宝回调：订单所属的用户平台子账号不存在或者状态异常，充值失败', $context);
            return [false, '用户平台子账号状态异常'];
        }

        $succeed = UserMoneyTradeLog::transaction(function () use ($subAccount, $userId, $rechargeOrder, $context) {
            $now = time();

            $orderAmount    = $rechargeOrder->amount;
            $poundage       = $rechargeOrder->poundage;
            $totalAmount    = $orderAmount + $poundage;
            $note           = $rechargeOrder->note;
            $platformId     = $rechargeOrder->platform_id;
            $orderId        = $rechargeOrder->id;
            $cateId         = $rechargeOrder->cate_id;
            $paymentClassId = $rechargeOrder->payment_class_id;

            // 创建第三方交易记录
            $thirdPartyPayLog = ThirdPartyPayLog::create([
                'id'               => ThirdPartyPayLog::newId(),
                'user_id'          => $userId,
                'platform_id'      => $platformId,
                'order_id'         => $orderId,
                'order_amount'     => $orderAmount,
                'total_amount'     => (float)number_format($totalAmount, 2),
                'poundage'         => $poundage,
                'order_cate_id'       => $cateId,
                'pay_status'       => ThirdPartyPayLog::PAY_STATUS_PAID,
                'product_name'     => $rechargeOrder->product_name,
                'payment_class_id' => $paymentClassId,//将来要检验支付方式的正确,
                'note'             => $note,
                'add_time'         => time(),
            ]);
            if (!$thirdPartyPayLog) {
                $this->logger->error("创建第三方交易记录失败", $context);
                return false;
            }

            // 创建用户交易记录
            /** @var UserMoneyTradeLog $tradeLog */
            $sceneId  = $rechargeOrder->scene_id;
            $tradeLog = UserMoneyTradeLog::create([
                'id'               => UserMoneyTradeLog::newId(),
                'order_id'         => $orderId,
                'platform_id'      => $platformId,
                'amount'           => $orderAmount,  // 充值金额，不包括额外付出的手续费
                'name'             => '余额充值',
                'user_id'          => $userId,
                'note'             => $note,
                'trade_log_type'   => UserMoneyTradeLog::TYPE_ADD_BALANCE,
                'trade_status'     => UserMoneyTradeLog::STATUS_COMPLETED, // 等待付款
                'order_cate_id'       => $cateId,
                'payment_class_id' => $paymentClassId,
                'scene_id'         => $sceneId,
                'trade_poundage'   => $poundage,
                'add_time'         => $now,
                'pay_time'         => $now,
                'end_time'         => $now,
                'trade_time'       => $now,
            ]);
            if (!$tradeLog) {
                $this->logger->error("创建用户交易记录失败", $context);
                return false;
            }

            if (!$rechargeOrder->update_attribute('status', RechargeOrder::STATUS_SUCCEED)) {
                $this->logger->error("更新用户充值订单状态失败", $context);
                return false;
            }

            if (!$subAccount->incrBalance($rechargeOrder->amount)) {
                $this->logger->error("给用户子账号增加金额失败", $context);
                return false;
            }

            $this->createMoneyLog($subAccount, $tradeLog, $orderAmount, "余额充值", $note, UserMoneyLog::TYPE_ADD_BALANCE);

            return true;
        });

        return $succeed ? [$rechargeOrder, '充值订单已经完成'] : [false, '处理充值订单失败'];
    }

    public function verifyQueryAndFindOrder(ParameterBag $params, $verifyAlipayTransation = true) {
        if (!$this->verifyAlipayQuery($params)) {
            $this->logger->error("支付宝在线充值：支付宝回调通知没有未通过支付宝安全验证，请检查！", ['params' => $params]);
            return false;
        }

        if ($verifyAlipayTransation && (!($result = $this->queryAlipayTransaction($params)) || $result->trade_status !== 'TRADE_SUCCESS' || $result->trade_status !== 'TRADE_FINISHED')) {
            $this->logger->error("支付宝在线充值：没有查询到相关的支付宝订单信息或者订单未成功", ['params' => $params, 'result' => $result]);
            return false;
        }

        $order_id = $params->get('out_trade_no');
        if (!($rechargeOrder = RechargeOrder::find($order_id))) {
            $this->logger->error("支付宝在线充值：没有查询到用户的支付宝订单信息", ['params' => $params, 'order_id' => $order_id]);
            return false;
        }

        return $rechargeOrder;
    }

    public function verifyAlipayQuery(ParameterBag $params) {
        $aop = new AopClient();
        return $params->has('sign') && $aop->rsaCheckV1($params->all(), '', 'RSA2');
    }

    //查询支付宝交易记录
    private function queryAlipayTransaction(ParameterBag $params) {
        $aop     = new AopClient();
        $data    = json_encode($params->all());
        $request = new AlipayTradeQueryRequest();
        $request->setBizContent($data);
        $result       = $aop->execute($request);
        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $response     = $result->$responseNode;

        if (!empty($response->code) && $response->code == 10000) {
            return $response;
        }

        return false;
    }

}