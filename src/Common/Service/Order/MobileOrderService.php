<?php

namespace App\Common\Service\Order;

use App\Common\Exception\OrderException;
use App\Common\Model\Order\Order;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\Common\Model\Order\OrderRechargeSupOperationLog;
use App\Common\Model\Order\OrderRechargeSupQueue;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSource;
use App\Common\Model\Product\SourceGroup;
use App\Common\Model\User\SubAccount;
use App\Common\Model\User\User;
use App\Common\Service\BaseService;
use App\Common\Service\SystemSettingManager;
use App\Common\Utils\Validator;
use App\Constants;
use App\PaymentConstants;
use App\Reseller\Service\ProductService;
use Psr\Log\LoggerInterface;
use SimpleRecord\DateTime;
use Symfu\SimpleFormBundle\Form;

class MobileOrderService extends BaseService
{
    /** @var  SystemSettingManager */
    protected $settingManager;
    /** @var ProductService */
    private $productService;

    public function __construct(LoggerInterface $logger, ProductService $productService, SystemSettingManager $settingManager)
    {
        parent::__construct($logger);

        $this->productService = $productService;
        $this->settingManager = $settingManager;
    }

    public function getRechargeOrders($form, $page, $pageSize)
    {
        list($conditions, $options) = $this->buildRechargeQuery($form);
        return OrderRecharge::paginate($conditions, $options, $page, $pageSize);
    }

    public function getRechargeOrderSummary($form)
    {
        list($conditions, $options) = $this->buildRechargeQuery($form);

        $options['select']  = 'count(o.id) as count, IFNULL(sum(o.recharge_amount), 0) as amount, IFNULL(sum(o.sell_price), 0) as sell_price,IFNULL(sum(s.sup_price), 0) as source_price,IFNULL(sum(o.sell_price-s.sup_price), 0) as profit ';
        $options['hydrate'] = false;

        $summary['IN_PROGRESS']     = OrderRecharge::first(array_merge($conditions, ['o.status' => Order::STATUS_IN_PROGRESS]), $options);
        $summary['SUCCEED']         = OrderRecharge::first(array_merge($conditions, ['o.status' => Order::STATUS_SUCCEED]), $options);
        $summary['FAILED']          = OrderRecharge::first(array_merge($conditions, ['o.status' => Order::STATUS_FAILED]), $options);
        $summary['PENDING_PAYMENT'] = OrderRecharge::first(array_merge($conditions, ['o.status' => Order::STATUS_PENDING_PAYMENT]), $options);
        $summary['CANCELED']        = OrderRecharge::first(array_merge($conditions, ['o.status' => Order::STATUS_CANCELED]), $options);

        return $summary;
    }

    private function buildRechargeQuery(Form $form): array
    {
        $conditions['o.product_cate_id']   = $form->get('product_cate_id');
        $conditions['o.platform_id']       = $form->get('platform_id');
        $conditions['o.order_mark']        = $form->get('order_mark');
        $conditions['o.id']                = $form->get('id');
        $conditions['o.status']            = $form->get('status');
        $conditions['s.settle_status']     = $form->get('settle_status');
        $conditions['o.settlement_status'] = $form->get('settlement_status');
        $conditions['s.recharge_status']   = $form->get('recharge_status');
        $conditions['o.add_time']          = ['BETWEEN' => [$form->get('start_time'), $form->get('end_time')]];
        //$between = $form->get('range_time') ? explode('~',$form->get('range_time')) : [];
        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        $conditions['o.add_time'] = ['BETWEEN' => [date('Y-m-d',$start_time), date('Y-m-d H:i:s',$end_time)]];

        $select = "o.id,o.product_id,o.product_name,t.id as t_id,o.buy_num,o.recharge_amount,
                    o.sell_price,s.sup_price,(o.sell_price-s.sup_price) as profit,o.platform_id,o.user_id,
                    s.sup_user_id,u.nick_name,t.name as template_name,o.product_face_value,o.phone_number,
                    s.source_id,o.note,o.province_name,o.city_name,u.user_name,su.nick_name as sup_nick_name,su.user_name as sup_user_name,o.on_before_info,o.on_after_info,o.status as order_status,s.recharge_status,s.settle_status,s.recharge_sequence,o.add_time,o.pay_time,o.end_time,o.product_cate_id,o.settlement_status";

        $from = OrderRecharge::table_name('o');

        $T     = function ($v) {
            return $v;
        };
        $joins = "LEFT JOIN {$T(User::table_name())} u ON(u.id = o.user_id) 
                      LEFT JOIN {$T(OrderRechargeSup::table_name())} s ON(o.id = s.order_id AND o.recharge_sequence = s.recharge_sequence) 
                        LEFT JOIN {$T(User::table_name())} su ON(su.id = s.sup_user_id) 
                          LEFT JOIN {$T(SourceGroup::table_name())} t ON(s.template_id = t.sn)";

        $order = 'o.id desc';

        return [$conditions, ['select' => $select, 'from' => $from, 'joins' => $joins, 'order' => $order,]];
    }

    public function getSupplierOrders($form, $page, $pageSize, $extra = [])
    {
        list($conditions, $options) = $this->buildSupplierOrderQuery($form);
        if (!empty($extra)) {
            $conditions = array_merge($conditions,$extra);
        }
        return OrderRecharge::paginate($conditions, $options, $page, $pageSize);
    }

    private function buildSupplierOrderQuery(Form $form): array
    {
        $conditions['o.product_cate_id'] = $form->get('product_cate_id');
        $conditions['o.id']              = $form->get('id');
        $conditions['s.recharge_status'] = $form->get('recharge_status');
        $conditions['s.settle_status']   = $form->get('settle_status');
        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d'))+86399;
        $conditions['o.add_time']        = ['between' => [date('Y-m-d',$start_time), date('Y-m-d H:i:s',$end_time)]];

        $select = "s.id,o.product_name,o.buy_num,o.status as order_status,s.sup_cost,s.source_buy_num,u.mobile,o.recharge_amount,
                    o.sell_price,s.sup_price,o.platform_id,s.source_face_value,s.template_id,
                    s.sup_user_id,t.name as template_name,o.product_face_value,
                    s.source_id,o.note,o.province_name,o.city_name,su.nick_name as sup_nick_name,su.user_name as sup_user_name,
                    o.phone_number,o.on_before_info,o.on_after_info,s.recharge_status,s.settle_status,o.add_time,o.pay_time,o.end_time,o.product_cate_id";

        $from = OrderRechargeSup::table_name('s');

        $T     = function ($v) {
            return $v;
        };
        $joins = "LEFT JOIN {$T(OrderRecharge::table_name())} o ON(o.id=s.order_id) 
                      LEFT JOIN {$T(User::table_name())} u ON(u.id = o.user_id)
                        LEFT JOIN {$T(User::table_name())} su ON(su.id = s.sup_user_id) 
                          LEFT JOIN {$T(SourceGroup::table_name())} t ON(s.template_id = t.sn)";

        $order = 's.id desc';

        return [$conditions, ['select' => $select, 'from' => $from, 'joins' => $joins, 'order' => $order,]];
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
     */
    public function createMobileRechargeOrder(SubAccount $subAccount, $product, ?ProductSource $source, array $numberInfo, $amount, $realSellPrice, $status = OrderRecharge::STATUS_PROCESSING, $note = '', $clientIp = '') {
        $platformId = $subAccount->getPlatformId();
        $sourceId   = $source ? $source->id : null;
        $context    = ['user_id' => $subAccount->user_id, 'platform_id' => $platformId, 'product_type' => $product['product_type'], 'product_id' => $product['product_id'],
                       'source_id' => $sourceId, 'number' => $numberInfo['number'], 'recharge_amount' => $amount];

        $dateTime = new DateTime();

        $order = new OrderRecharge([
            'id'                 => OrderRecharge::newId(),
            'outer_sn'           => '',
            'user_id'            => $subAccount->user_id,
            'platform_id'        => $subAccount->getPlatformId(),
            'product_id'         => $product['product_id'],
            // 'product_type'       => $product['product_type'],
            'product_face_value' => $product['face_value'],
            'product_name'       => $product['name'],
            'speed'              => $product['speed'],
            'sell_price'         => $product['price'],
            'buy_num'            => $product['face_value_type'] == 1 ? $amount : 1,
            'recharge_amount'    => $amount,
            'real_sell_price'    => $realSellPrice ?: $amount,
            'order_cate_id'      => Constants::ORDER_RECHARGE_CATE_MOBILE,
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
            'mvno'               => $numberInfo['mvno'],
            'admin_info'         => '',
            'status'             => $status,
            'pay_time'           => $dateTime,
            'recharge_sequence'  => 1,
            'note'               => $note,
            'user_ip'            => $clientIp,
        ]);

        try {
            $order->save();
            return $order;
        } catch (\Exception $e) {
            $this->logger->error('手机充值下单：创建手机充值订单失败', array_merge($context, ['order' => $order->to_array()]));
            throw $e;
        }
    }

    // /**
    //  * @param SubAccount $subAccount
    //  * @param                          $productInfo
    //  * @param ProductSource|null $source
    //  * @param array $numberInfo
    //  * @param                          $rechargeAmount
    //  * @param                          $real_sell_price
    //  * @param                          $note
    //  * @param string $clientIp
    //  * @return array|null
    //  * @throws OrderException
    //  */
    // public function createMobileRechargeOrder(SubAccount $subAccount, $productInfo, ?ProductSource $source, array $numberInfo, $rechargeAmount, $real_sell_price, $note, $clientIp = '')
    // {
    //     $platformId = $subAccount->getPlatformId();
    //     $sourceId   = $source ? $source->id : null;
    //     $context    = ['user_id' => $subAccount->user_id, 'platform_id' => $platformId, 'product_sub_id' => $productInfo['product_sub_id'], 'product_id' => $productInfo['product_id'], 'source_id' => $sourceId, 'number' => $numberInfo['number'], 'recharge_amount' => $note];
    //
    //     $dateTime = new DateTime();
    //
    //     $order = new OrderRecharge([
    //         'id'                 => OrderRecharge::newId(),
    //         'outer_sn'           => '',
    //         'user_id'            => $subAccount->user_id,
    //         'platform_id'        => $subAccount->getPlatformId(),
    //         'product_id'         => $productInfo['product_id'],
    //         'product_sub_id'     => $productInfo['product_sub_id'],
    //         'product_face_value' => $productInfo['face_value'],
    //         'product_name'       => $productInfo['name'],
    //         'order_cate_id'      => Constants::ORDER_RECHARGE_CATE_MOBILE,
    //         'supplier_id'        => $source ? $source->sell_user_id : null,
    //         'source_id'          => $sourceId,
    //         'speed'              => $productInfo['speed'],
    //         'user_ip'            => $clientIp,
    //         'product_master_id'  => 0,
    //         'operator_id'             => $numberInfo['isp_id'],
    //         'phone_number'       => $numberInfo['number'],
    //         'on_before_info'     => '',
    //         'on_after_info'      => '',
    //         'on_other'           => '',
    //         'recharge_amount'    => $rechargeAmount,
    //         'sell_price'         => $productInfo['sell_price'],
    //         'real_sell_price'    => $real_sell_price ?: $rechargeAmount,
    //         'buy_num'            => $productInfo['face_value_type'] == 1 ? $rechargeAmount : 1,
    //         'add_time'           => $dateTime,
    //         'province_name'      => $numberInfo['province_name'],
    //         'city_name'          => $numberInfo['city_name'],
    //         'mvno'               => $numberInfo['mvno'],
    //         'admin_info'         => '',
    //         'status'             => OrderRecharge::STATUS_PENDING_PAYMENT,
    //         'pay_time'           => $dateTime,
    //         'recharge_sequence'  => 1,
    //         'note'               => $note,
    //     ]);
    //
    //     if (!$order->save()) {
    //         $this->logger->error('手机充值下单：创建手机充值订单失败', array_merge($context, ['order' => $order->to_array()]));
    //         throw  new OrderException('创建手机充值订单失败');
    //     }
    //
    //     return [$order, '提交订单成功'];
    // }

    public function checkoutMobileRechargeOrder(SubAccount $subAccount, OrderRecharge $order, array $numberInfo, $clientIp = '')
    {
        try {
            User::transaction(function () use ($subAccount, $order, $numberInfo, $clientIp) {
                list($succeed, $msg) = $this->doCheckoutMobileRechargeOrder($subAccount, $order, $numberInfo, $clientIp);
                return $succeed;
            });

            return [true, '付款成功'];
        } catch (OrderException $e) {
            return [false, $e->getMessage()];
        } catch (\Exception $e) {
            return [false, '付款失败'];
        }
    }

    /**
     * @param SubAccount    $subAccount
     * @param OrderRecharge $order
     * @param array         $numberInfo
     * @param string        $clientIp
     * @return array|bool
     * @throws OrderException
     * @throws \SimpleRecord\Exception\DatabaseException
     * @throws \Exception
     */
    protected function doCheckoutMobileRechargeOrder(SubAccount $subAccount, OrderRecharge $order, array $numberInfo, $clientIp = '')
    {
        $platformId = $subAccount->getPlatformId();
        $context    = ['user_id' => $subAccount->user_id, 'platform_id' => $platformId, 'id' => $order->id, 'number' => $numberInfo['number'], 'recharge_amount' => $order->recharge_amount];

        if ($subAccount->balance < $order->sell_price) {
            throw new OrderException('您的账户余额已经不足，请充值后再下单');
        }

        if (!($productInfo = $this->productService->getProductInfo($subAccount, $order->product_sub_type, $order->product_sub_id)) || $productInfo['status'] != Product::STATUS_ACTIVE) {
            throw new OrderException('选定的商品不存在或者已经下架，请重新选择后再提交');
        }

        // 检查订单上的商品价格和现价是否一致，应对下单后商品价格变动的情况
        if ($productInfo['sell_price'] != $order->sell_price) {
            throw new OrderException('该订单对应的商品价格发生改变，请重新下单！');
        }
        // 再检查一次价格是否符合要求，应对下单后商品价格变动的情况
        if (!Validator::checkProductPrice($productInfo, $order->recharge_amount)) {
            throw new OrderException('该订单对应的商品价格发生改变，请重新下单！');
        }

        /** @var ProductSource $source */
        $source = null;
        if ($order->source_id && (!($source = ProductSource::find($order->source_id)) || !$source->isActive())) {
            throw new OrderException('选定的商品渠道不存在或者已经停售，请重新选择后再提交');
        }

        $allowEmptySource = $this->settingManager->getBool('empty_qudao_add_order', false);
        if (!$source && !$allowEmptySource) {
            throw new OrderException('选定的商品渠道维护中');
        } elseif (!$source && $allowEmptySource) {
            // 没有指定渠道的话，自动分配一个渠道
            $source = $this->productService->assignSource($productInfo, $subAccount, $order->recharge_amount, $numberInfo['city_code']);
        }

        // 先从用户的平台账户扣款，失败抛出异常
        $sellPrice = $order->sell_price;
        $subAccount->decrBalance($sellPrice, $this->logger, $context);

        // 修改订单状态为已支付待充值状态
        $order->status           = OrderRecharge::STATUS_PROCESSING;
        $order->payment_class_id = PaymentConstants::PAYMENT_METHOD_BALANCE;
        $order->source_id        = $source ? $source->id : null;
        $order->supplier_id      = $source ? $source->sell_user_id : null;

        if (!$order->save()) {
            $this->logger->error('手机充值下单：修改订单状态失败', array_merge($context, ['order' => $order->to_array()]));
            throw new OrderException('修改订单状态失败');
        }

        // 创建用户交易记录，失败会抛出异常
        $tradeLog = $this->createTradeLog($order, $context);

        //创建资金记录，失败会抛出异常
        $moneyLog = UserMoneyLog::createLog($subAccount, $tradeLog->order_id, -1 * $sellPrice, UserMoneyLog::TYPE_ORDER_PAYMENT, $order->product_name, $tradeLog->note, $tradeLog->id, $this->logger, $context);

        // 创建供应商订单
        if ($source) {
            $supOrder     = $this->createSupplierOrder($order, $source, $numberInfo, $clientIp, $context);
            $operationLog = $this->createSupplierOperationLog($supOrder, $order, $clientIp, $context);
            $this->enqueueSupOrder($supOrder, $context);
        }

        return [true, '订单付款成功'];
    }


    // public function checkoutMobileRechargeOrder2(SubAccount $subAccount, OrderRecharge $order, array $numberInfo, $productInfo = null, $clientIp = '')
    // {
    //     $platformId = $subAccount->getPlatformId();
    //     $context    = ['user_id' => $subAccount->user_id, 'platform_id' => $platformId];
    //
    //     try {
    //         User::transaction(function () use ($subAccount, $orderInfos, $clientIp) {
    //             $successNumbers = [];
    //             $failedNumbers  = [];
    //             foreach ($orderInfos as $number => $orderInfo) {
    //                 if (!($productInfo = $this->productService->getProductInfo($subAccount, $orderInfo['sub_type'], $orderInfo['sub_id'])) || $productInfo['status'] != ProductMobile::STATUS_ACTIVE) {
    //                     throw new OrderException('选定的商品不存在或者已经下架，请重新选择后再提交');
    //                 }
    //
    //                 /** @var ProductSource $source */
    //                 $source = null;
    //                 if ($orderInfo['source_id'] && (!($source = ProductSource::find($orderInfo['source_id'])) || !$source->isActive())) {
    //                     throw new OrderException('选定的商品渠道不存在或者已经停售，请重新选择后再提交');
    //                 }
    //
    //                 $order = $this->createMobileRechargeOrder($subAccount, $productInfo, $source, $orderInfo['number_info'], $orderInfo['amount'], $orderInfo['amount'], $orderInfo['name'], $clientIp);
    //                 $this->checkoutMobileRechargeOrder($subAccount, $order, $orderInfo['number_info'], $productInfo, $clientIp);
    //             }
    //
    //             $count = count($orderInfos);
    //
    //             return [true, "充值成功，共充值了 {$count} 个号码"];
    //         });
    //     } catch (OrderException $e) {
    //         $this->logger->error("手机充值失败", array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
    //         return [false, $e->getMessage()];
    //     } catch (\Exception $e) {
    //         $this->logger->error("手机充值失败", array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
    //         return [false, "充值失败，请重试，如果一直不成功，请联系客服解决"];
    //     }
    // }

    public function processMobileRechargeOrders(SubAccount $subAccount, array $orderInfos, $clientIp = '')
    {
        $platformId = $subAccount->getPlatformId();
        $context    = ['user_id' => $subAccount->user_id, 'platform_id' => $platformId];

        // ['13412345678' => ['sub_type' => $type, 'sub_id' => $productInfo['product_sub_id'], 'source_id' => $sourceId,
        //                    'amount' => $amount, 'name' => $info['name'], 'sell_price' => $productInfo['sell_price']],]
        try {
            $succeedCount  = 0;
            $failedNumbers = [];

            User::transaction(function () use ($subAccount, $orderInfos, $clientIp, $context, &$failedNumbers, &$succeedCount) {
                foreach ($orderInfos as $number => $orderInfo) {
                    try {
                        if (!($productInfo = $this->productService->getProductInfo($subAccount, $orderInfo['sub_type'], $orderInfo['sub_id'])) || $productInfo['status'] != Product::STATUS_ACTIVE) {
                            throw new OrderException('选定的商品不存在或者已经下架，请重新选择后再提交');
                        }

                        /** @var ProductSource $source */
                        $source = null;
                        if ($orderInfo['source_id'] && (!($source = ProductSource::find($orderInfo['source_id'])) || !$source->isActive())) {
                            throw new OrderException('选定的商品渠道不存在或者已经停售，请重新选择后再提交');
                        }

                        /** @var OrderRecharge $order */
                        list($order, $msg) = $this->createMobileRechargeOrder($subAccount, $productInfo, $source, $orderInfo['number_info'], $orderInfo['amount'], $orderInfo['amount'], $orderInfo['name'], $clientIp);
                        list($succeed, $msg) = $this->doCheckoutMobileRechargeOrder($subAccount, $order, $orderInfo['number_info'], $clientIp);

                        if (rand(1, 5) <= 1) {
                            $succeed = false;
                        }
                        if (!$succeed) {
                            $failedNumbers[] = ['idx' => count($failedNumbers) + 1, 'number' => $number, 'reason' => $msg];
                        } else {
                            $succeedCount++;
                        }
                    } catch (\Exception $e) {
                        $failedNumbers[] = ['idx' => count($failedNumbers) + 1, 'number' => $number, 'reason' => $msg];
                        $this->logger->error('批量充值：一个号码充值失败', array_merge($context, ['number' => $number, 'order_info' => $orderInfo]));
                    }
                }

                return true;
            });

            $faildCount = count($failedNumbers);
            return [true, "充值成功，充值成功 {$succeedCount} 个号码，失败 {$faildCount} 个号码", $failedNumbers];
        } catch (OrderException $e) {
            $this->logger->error("手机充值失败", array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return [false, $e->getMessage()];
        } catch (\Exception $e) {
            $this->logger->error("手机充值失败", array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return [false, "充值失败，请重试，如果一直不成功，请联系客服解决"];
        }
    }

    /**
     * @param $order
     * @param $context
     * @return UserMoneyTradeLog|null
     * @throws OrderException
     * @throws \SimpleRecord\Exception\ModelException
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function createTradeLog($order, $context): ?UserMoneyTradeLog
    {
        $now      = time();
        $tradeLog = new UserMoneyTradeLog([
            'id'                  => UserMoneyTradeLog::newId(),
            'order_id'            => $order->id,
            'platform_id'         => $order->platform_id,
            'amount'              => -1 * abs($order->sell_price),
            'name'                => $order->product_name,
            'user_id'             => $order->user_id,
            'note'                => "支付订单号[{$order->id}]",
            'trade_log_type'      => UserMoneyTradeLog::TYPE_ORDER_PAYMENT,
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

        if (!$tradeLog->save()) {
            $this->logger->error('手机充值下单：保存用户交易记录失败', array_merge($context, ['order' => $tradeLog->to_array()]));
            throw new OrderException('创建用户交易记录失败');
        }


        return $tradeLog;
    }

    private function createSupplierOrder(OrderRecharge $order, ProductSource $source, $numberInfo, $clientIp, $context)
    {
        $sellCost = $source->source_cost ?: 0;
        $supOrder = new OrderRechargeSup([
            'id'                       => OrderRechargeSup::newId(),
            'order_id'                 => $order->id,
            'official_sn'              => '',
            'sup_order_cate_id'        => $order->order_cate_id,
            'template_id'              => $source->template_id,
            'sup_user_id'              => $source->sell_user_id,
            'source_id'                => $source->id,
            'source_face_value'        => $source->face_value,
            'source_buy_num'           => $order->buy_num,
            'sup_cost'                 => $sellCost,
            'sup_price'                => $source->source_price,
            'sup_profit'               => $source->source_price - $sellCost, // NOTE: 需要确认这个利润计算是否有问题
            'phone_number'             => $numberInfo['number'],
            'on_before_info'           => '',
            'on_after_info'            => '',
            'on_other'                 => '',
            'recharge_status'          => OrderRechargeSup::STATUS_PENDING,//等待提单
            'recharge_sequence'        => 1,//充值次数
            'settle_status'            => OrderRechargeSup::SETTLE_STATUS_PENDING,//未结算
            'can_recharge'             => 1,//是否可以充值
            'sup_admin_info'           => '',
            'add_time'                 => new DateTime(),
            'end_time'                 => null,
            'sup_info'                 => '',
            'careful_status'           => 0,
            'sup_speed'                => $source->speed,
            'source_product_name'      => $source->formatSourceProductName(),
            'source_product_cate_id'   => Constants::PRODUCT_CATE_MOBILE_PHONE,
            'source_product_master_id' => 0,
            'source_product_unit'      => OrderRechargeSup::UNIT_RMB_YUAN,
            'province_name'            => $numberInfo['province_name'],
            'city_name'                => $numberInfo['city_name'],
            'mvno'                     => $numberInfo['mvno'],
            'operator_id'              => $numberInfo['isp_id'],
            'recharge_ip'              => $clientIp,
        ]);


        if (!$supOrder->save()) {
            $this->logger->error('手机充值下单：创建供应商订单失败', array_merge($context, ['sup_order' => $supOrder->to_array()]));
            throw new OrderException('创建供应商订单失败');
        }

        return $supOrder;
    }

    private function createSupplierOperationLog($supOrder, $rechargeOrder, $clientIp, $context)
    {
        $operationLog = new OrderRechargeSupOperationLog([
            'sup_order_id'      => $supOrder->id,
            'recharge_status'   => $supOrder->recharge_status,//本次更新的充值状态
            'settle_status'     => $supOrder->settle_status,//本次更新的结算状态
            'order_id'          => $rechargeOrder->id,
            'order_status'      => $rechargeOrder->status,//recharge订单表里面的order_status
            'operation_user_id' => 0,//本次操作的用户当if_admin为1时，此operation_user_id为管理员id
            'if_admin'          => 0,//是否为后台管理员操作0否1是
            'operation_type'    => OrderRechargeSupOperationLog::OPERATION_API,//操作方式0未知1接口2手动
            'operator_ip'       => $clientIp,
            'add_time'          => date('Y-m-d H:i:s'),
        ]);

        if (!$operationLog->save()) {
            $this->logger->error('手机充值下单：创建供应商订单记录失败', array_merge($context, ['operation_log' => $operationLog->to_array()]));
            throw new OrderException('创建供应商订单记录失败');
        }

        return $operationLog;
    }

    private function enqueueSupOrder(OrderRechargeSup $supOrder, $context)
    {
        $redis_data = [];
        if (in_array($supOrder->source_product_cate_id, [Constants::PRODUCT_CATE_MOBILE_PHONE, Constants::PRODUCT_CATE_DATA_PACKAGE, Constants::PRODUCT_CATE_LINE_PHONE])) {
            $redis_data = [
                'province_name' => $supOrder->province_name,
                'city_name'     => $supOrder->city_name,
                'operator_id'   => $supOrder->operator_id,
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
            'source_face_value' => $supOrder->source_face_value,
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
     * @param $user   object  供应商账户信息
     * @param $amount number  扣减金额
     */
    public function refund(&$user, $amount) {
        //押金账户失败扣款最低额度
        $min_deposit_amount = SystemSettingItem::first([
            'section' => 'supplier_platform',
            'name'    => 'min_deposit_amount'
        ])->value;

        if (empty($min_deposit_amount)) {
            $min_deposit_amount = 0;
        }

        if ($user->balance <= 0) {//可用余额小于0
            if ($user->cash_pledge <= $min_deposit_amount) {//最低押金标准
                $user->balance -= $amount;
            } else {
                if ($user->cash_pledge - $min_deposit_amount >= $amount) {
                    $user->cash_pledge -= $amount;
                } else {//扣押金一部分，再扣余额
                    $user->cash_pledge -= $user->cash_pledge - $min_deposit_amount;
                    $user->balance     -= $amount - ($user->cash_pledge - $min_deposit_amount);
                }
            }
        } else {
            if ($user->balance >= $amount) {//可用余额可满足本次扣款结算
                $user->balance -= $amount;
            } else {
                if ($user->cash_pledge <= $min_deposit_amount) {//押金账户不能再继续扣了
                    $user->balance -= $amount;
                } else {
                    if (($user->cash_pledge - $min_deposit_amount) >= ($amount - $user->balance)) {
                        $user->balance     -= $user->balance;
                        $user->cash_pledge -= $user->cash_pledge - ($amount - $user->balance);
                    } else {
                        $user->cash_pledge -= $user->cash_pledge - $min_deposit_amount;
                        $user->balance     -= $amount - ($user->cash_pledge - $min_deposit_amount);
                    }
                }
            }
        }
    }
}