<?php

namespace App\Supplier\Controller;

use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\Common\Model\Order\OrderRechargeSupOperationLog;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\SupplierAccount;
use App\Common\Service\Order\MobileOrderService;
use App\Constants;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route(defaults={"group": "orders"})
 */
class OrdersController extends SupplierBaseController {

    /** url跳转
     * @Route("/orders", name="supplier_orders_index")
     */
    public function indexAction() {
        return $this->redirectToRoute('supplier_orders_order_list', ['product_cate_id' => Constants::PRODUCT_CATE_MOBILE_PHONE,/*'order_mark' => OrderRecharge::MARK_OVERTIME*/]);
    }

    /**
     * 订单标记分类
     * @Route("/orders/get-order-mark-total", name="supplier_orders_get_order_mark_total")
     */
    public function getOrderMarkTotalAction(Request $request, $id = 0) {
        $product_cate_id = $id;

        if (empty($id)) {
            $product_cate_id = $request->request->getInt('product_cate_id', 0);
        }
        if ($product_cate_id <= 0) {
            return ['status' => false, 'msg' => '参数有误，请重新提交'];
        }

        $where   = [
            'r.product_cate_id' => $product_cate_id,
            'r.supplier_id'     => $this->getUserId(),
            's.sup_user_id'     => $this->getUserId()
        ];
        $options = [
            'select' => 'r.order_mark,COUNT(s.id) AS total',
            'from'   => OrderRechargeSup::table_name() . ' AS s',
            'joins'  => 'LEFT JOIN ' . OrderRecharge::table_name() . ' AS r ON r.id=s.order_id',
            'group'  => 'r.order_mark',
            'order'  => 'r.order_mark ASC',
        ];
        $orders  = OrderRecharge::all($where, $options);
        $data    = [
            OrderRecharge::MARK_NORMAL             => 0,
            OrderRecharge::MARK_OVERTIME           => 0,
            OrderRecharge::MARK_CARD               => 0,
            OrderRecharge::MARK_PENDING_PROCESSING => 0,
            OrderRecharge::MARK_FAIL               => 0
        ];
        if (!empty($orders)) {
            foreach ($orders as $key => $val) {
                foreach ($data as $d_key => $d_val) {
                    if ($val['order_mark'] == $d_key) {
                        $data[$d_key] = $val['total'];
                    }
                }
            }
        }

        return $data;
    }

    /** 订单分类总数
     * @Route("/orders/get-recharge-order-type-total", name="supplier_orders_get_recharge_order_type_total")
     */
    public function getOrderRechargeTypeTotalAction($ajax = true) {
        $data              = [];
        $data['suppliers'] = $this->_getOrderTypeTotal('source_product_cate_id', OrderRechargeSup::table_name());

        if ($ajax) {
            return ['status' => true, 'msg' => '获取成功', 'data' => $data];
        }
        return $data;
    }

    // 获取订单分类总数
    private function _getOrderTypeTotal($field, $table_name) {
        $sql    = "SELECT " . $field . ",count(id) AS total FROM `" . $table_name . "` WHERE sup_user_id=? GROUP BY " . $field;
        $stmt   = OrderRechargeSup::query($sql, [$this->getUserId()]);
        $orders = $stmt->fetchAll();
        $data   = [
            Constants::PRODUCT_CATE_MOBILE_PHONE => 0,
            Constants::PRODUCT_CATE_LINE_PHONE   => 0,
            Constants::PRODUCT_CATE_DATA_PACKAGE => 0,
            Constants::PRODUCT_CATE_TENCENT      => 0
        ];
        if (!empty($orders)) {
            foreach ($orders as $key => $val) {
                foreach ($data as $d_key => $d_val) {
                    if ($val[$field] == $d_key) {
                        $data[$d_key] = $val['total'];
                    }
                }
            }
        }

        return $data;
    }

    /** SUP充值订单
     * @Route("/orders/order-list", name="supplier_orders_order_list")
     */
    public function orderListAction(Request $request, MobileOrderService $orderManager, Form $form) {
        if ($request->query->count() <= 1) {
            $product_cate_id           = $request->query->getInt('product_cate_id');
            $order_mark_statistics     = $this->getOrderMarkTotalAction($request, $product_cate_id);
            $order_recharge_type_total = $this->getOrderRechargeTypeTotalAction(false);
            return $this->render("Supplier/Orders/order_list.twig",
                [
                    'product_cate_id'           => $product_cate_id,
                    'order_mark'                => $request->query->get('order_mark','NORMAL'),
                    'order_mark_statistics'     => $order_mark_statistics,
                    'order_recharge_type_total' => $order_recharge_type_total
                ]
            );
        }

        $form->init([
            'product_cate_id' => [to_enum(Constants::PRODUCT_CATEGORIES)],
            'order_id'        => ["digit"],
            'order_mark'      => [to_enum(OrderRecharge::MARKS)],
            'recharge_status' => [to_enum(OrderRechargeSup::RECHARGE_STATUS)],
            'settle_status'   => [to_enum(OrderRechargeSup::SETTLE_STATUSES)],
            'start_time'      => ["date"],
            'end_time'        => ["date"]
        ]);

        if (!$form->validate($request->query)) {
            return ["status" => false, "msg" => "参数错误"];
        }
        $extra = [
            's.sup_user_id' => $this->getUserId(),
            'o.order_mark'  => $form->order_mark,
            'o.supplier_id' => $this->getUserId()
        ];
        list($rows, $total) = $orderManager->getSupplierOrders($form, $form->page, $form->limit, $extra);

        return ["status" => true, "total" => $total, 'data' => $rows];
    }

    /** 改变SUP订单状态
     * @Route("/orders/edit-status-sup", name="supplier_orders_edit_status_sup")
     * $status=[0=>未知,1=>充值中,2=>充值成功(系统),3=>充值失败(系统),4=>待付款,5=>已取消,6=>充值成功(人工),7=>充值失败(人工)];
     * $rechage_status=[0 => 未知 , 1 => 待付款 , 2 => 待提单 , 3 => 已提单 , 4 => 已验单 , 5 => 提交可疑 , 6 => 提交失败 , 7 => 充值中 , 8 => 充值可疑 , 9 => 充值成功 (系统) , 10 => 充值成功 (供应商人工) , 11 => 充值成功 (总后台人工) , 12 => 充值失败 (系统) , 13 => 充值失败 (供应商人工) , 14 => 充值失败 (总后台人工) , 15 => 已退款 , 16 => 已取消 , 17 => 待处理];
     * $settle_status=['0'=>'未知','1'=>'未结算','2'=>'已结算','3'=>'已退款'];
     *
     */
    public function editStatusSupAction(Request $request, MobileOrderService $orderManager) {
        $ids             = $request->request->get('id');
        $recharge_status = $request->request->getInt('status');
        if (!($ids && in_array($recharge_status, [OrderRechargeSup::STATUS_SUCCEED_SUP, OrderRechargeSup::STATUS_FAILED_SUP]))) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $orders = OrderRechargeSup::all(['id' => $ids, 'sup_user_id' => $this->getUserId()]);

        if (empty($orders)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        $count = 0;

        foreach ($orders as $order) {
            $order_recharge = OrderRecharge::first(['id' => $order['order_id'], 'supplier_id' => $this->getUserId()]);

            if (empty($order_recharge)) {
                continue;
            }

            // SUP置成功条件 recharge_status!=充值成功（系统）/充值成功（供应商人工）/充值成功（总后台人工）and 原结算状态=待结算 and 操作时各状态不发生改变
            if ($recharge_status == OrderRechargeSup::STATUS_SUCCEED_SUP) {//置成功

                if (in_array($order['recharge_status'], [OrderRechargeSup::STATUS_SUCCEED_SYS, OrderRechargeSup::STATUS_SUCCEED_SUP, OrderRechargeSup::STATUS_SUCCEED_ADMIN]) || $order['settle_status'] != OrderRechargeSup::SETTLE_STATUS_PENDING) {
                    continue;
                }

                // 订单状态修改
                try {
                    OrderRechargeSup::transaction(function () use ($request, $recharge_status, $order, $order_recharge) {
                        OrderRechargeSup::update_all(
                            [
                                'settle_status' => OrderRechargeSup::SETTLE_STATUS_PAID,
                                'end_time'      => date('Y-m-d H:i:s'),
                                'edit_time'     => date('Y-m-d H:i:s')
                            ],
                            ['id' => $order['id']]
                        );

                        //更新SUP订单充值状态变更记录表
                        $data['sup_order_id']      = $order['id'];
                        $data['order_id']          = $order_recharge->id;
                        $data['order_status']      = $order_recharge->status;
                        $data['recharge_status']   = $recharge_status;
                        $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_PAID;
                        $data['operation_user_id'] = $this->getUserId();
                        $data['if_admin']          = OrderRechargeSupOperationLog::NOT_ADMIN;
                        $data['operator_ip']       = $request->getClientIp();
                        $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                        OrderRechargeSupOperationLog::create($data);
                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id'    => $order_recharge->id,
                        'supplier_id' => $this->getUserId(),
                        'error'       => $e->getMessage(),
                        'stack'       => $e->getTraceAsString()
                    ];
                    $this->logger->error('供应商结算该笔SUP订单失败', $context);
                }
                //是否存在对该供应商的最新一笔付款资金流水
                $user_money_record = UserMoneyLog::first(
                    [
                        'order_id' => $order['order_id'],
                        'user_id'  => $order['sup_user_id'],
                        'log_type' => UserMoneyLog::TYPE_ORDER_SETTLEMENT
                    ]
                );

                if (empty($user_money_record)) {
                    //创建向供应商付款资金流水
                    $user_money_trade = UserMoneyTradeLog::last([
                        'order_id'            => $order['order_id'],
                        'other_party_user_id' => $order['sup_user_id']
                    ]);

                    $platform_user = SupplierAccount::first([
                        'user_id' => $order['sup_user_id'],
                        'status'  => SupplierAccount::STATUS_ACTIVE
                    ]);

                    try {
                        OrderRechargeSup::transaction(function () use ($order, $user_money_trade, $platform_user, $order_recharge) {
                            UserMoneyLog::create([
                                'platform_id'            => $order_recharge->platform_id,
                                'user_id'                => $order['sup_user_id'],
                                'trade_id'               => $user_money_trade->id,
                                'order_id'               => $order['order_id'],
                                'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                                'name'                   => $order_recharge->product_name,
                                'note'                   => "SUP订单号[{$order["id"]}]供应商平台置成功结算",
                                'amount'                 => abs($order['sup_price']),
                                'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : '',
                                'platform_total_balance' => '',
                                'add_time'               => time(),
                            ]);
                            //增加用户相应平台余额
                            $platform_user->balance += abs($order['sup_price']);
                            $platform_user->save();
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id'    => $order['order_id'],
                            'user_id'     => $order['sup_user_id'],
                            'supplier_id' => $this->getUserId(),
                            'error'       => $e->getMessage(),
                            'stack'       => $e->getTraceAsString()
                        ];
                        $this->logger->error('创建向供应商付款资金流水失败', $context);
                    }
                }
            }

            if ($recharge_status == OrderRechargeSup::STATUS_FAILED_SUP) {//置失败

                //SUP订单原充值状态不为充值失败（系统）/充值失败（供应商人工）/充值成功（总后台人工）/充值失败（总后台人工） and 原结算状态=待结算/总后台人工成功，待结算/系统成功，已付款结算/供应商人工成功，已付款结算/总后台人工成功，已付款结算

                if (in_array($order['recharge_status'], [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_SUCCEED_ADMIN, OrderRechargeSup::STATUS_FAILED_ADMIN]) || !in_array($order['settle_status'], [OrderRechargeSup::SETTLE_STATUS_PENDING, OrderRechargeSup::SETTLE_STATUS_PENDING, OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID])) {
                    continue;
                }

                if (!in_array($order['recharge_status'], [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN, OrderRechargeSup::STATUS_SUCCEED_ADMIN]) && $order['settle_status'] == OrderRechargeSup::SETTLE_STATUS_PENDING) {// 1.该笔SUP订单原充值状态不为：充值失败（系统）/充值失败（供应商人工）/充值成功（总后台人工）/充值失败（总后台人工） and 原结算状态=待结算
                    try {
                        OrderRechargeSup::transaction(function () use ($request, $order, $order_recharge, $recharge_status) {
                            // 更新SUP订单结算状态为供应商人工失败，不付款结算
                            OrderRechargeSup::update_all(
                                [
                                    'settle_status' => OrderRechargeSup::SETTLE_STATUS_UNPAID,
                                    'end_time'      => date('Y-m-d H:i:s'),
                                    'edit_time'     => date('Y-m-d H:i:s')
                                ],
                                ['id' => $order['id']]
                            );

                            //更新SUP订单充值状态变更记录表
                            $data['sup_order_id']      = $order['id'];
                            $data['order_id']          = $order_recharge->id;
                            $data['order_status']      = $order_recharge->status;
                            $data['recharge_status']   = $recharge_status;
                            $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_UNPAID;
                            $data['operation_user_id'] = $this->getUserId();
                            $data['if_admin']          = OrderRechargeSupOperationLog::NOT_ADMIN;
                            $data['operator_ip']       = $request->getClientIp();
                            $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                            OrderRechargeSupOperationLog::create($data);
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id'    => $order['order_id'],
                            'user_id'     => $order['sup_user_id'],
                            'supplier_id' => $this->getUserId(),
                            'error'       => $e->getMessage(),
                            'stack'       => $e->getTraceAsString()
                        ];
                        $this->logger->error('供应商平台更新SUP订单结算状态失败', $context);
                    }
                } else {
                    if (!in_array($order['recharge_status'], [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN, OrderRechargeSup::STATUS_SUCCEED_ADMIN]) && in_array($order['settle_status'], [OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID])) {//2.该笔SUP订单原充值状态不为：充值失败（系统）/充值失败（供应商人工）/充值成功（总后台人工）/充值失败（总后台人工） and 原结算状态=系统成功，已付款结算/供应商人工成功，已付款结算/总后台人工成功，已付款结算 and 操作时各状态不发生改变

                        try {
                            OrderRechargeSup::transaction(function () use ($request, $order, $order_recharge, $recharge_status) {
                                // 更新SUP订单结算状态为供应商人工失败，已退款结算
                                OrderRechargeSup::update_all(
                                    [
                                        'settle_status' => OrderRechargeSup::SETTLE_STATUS_REFUNDED,
                                        'end_time'      => date('Y-m-d H:i:s'),
                                        'edit_time'     => date('Y-m-d H:i:s')
                                    ],
                                    ['id' => $order['id']]
                                );

                                //更新SUP订单充值状态变更记录表
                                $data['sup_order_id']      = $order['id'];
                                $data['order_id']          = $order_recharge->id;
                                $data['order_status']      = $order_recharge->status;
                                $data['recharge_status']   = $recharge_status;
                                $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_REFUNDED;
                                $data['operation_user_id'] = $this->getUserId();
                                $data['if_admin']          = OrderRechargeSupOperationLog::NOT_ADMIN;
                                $data['operator_ip']       = $request->getClientIp();
                                $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                                OrderRechargeSupOperationLog::create($data);
                                return true;
                            });
                        } catch (\Exception $e) {
                            $context = [
                                'order_id'    => $order['order_id'],
                                'user_id'     => $order['sup_user_id'],
                                'supplier_id' => $this->getUserId(),
                                'error'       => $e->getMessage(),
                                'stack'       => $e->getTraceAsString()
                            ];
                            $this->logger->error('供应商平台更新SUP订单结算状态失败', $context);
                        }

                        // 是否存在对该供应商的最新一笔扣款资金流水
                        $user_money_record = UserMoneyLog::first([
                            'order_id' => $order['order_id'],
                            'user_id'  => $order['sup_user_id'],
                            'log_type' => UserMoneyLog::TYPE_ORDER_SETTLEMENT
                        ]);

                        if (empty($user_money_record)) {
                            //创建供应商扣款资金流水
                            $user_money_trade = UserMoneyTradeLog::last([
                                'order_id'            => $order['order_id'],
                                'other_party_user_id' => $order['sup_user_id']
                            ]);
                            $platform_user    = SupplierAccount::first([
                                'user_id' => $order['sup_user_id'],
                                'status'  => SupplierAccount::STATUS_ACTIVE
                            ]);

                            try {
                                OrderRechargeSup::transaction(function () use ($order, $user_money_trade, $platform_user, $order_recharge, $orderManager) {
                                    UserMoneyLog::create([
                                        'platform_id'            => $order_recharge->platform_id,
                                        'user_id'                => $order['sup_user_id'],
                                        'trade_id'               => $user_money_trade->id,
                                        'order_id'               => $order['order_id'],
                                        'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                                        'name'                   => $order_recharge->product_name,
                                        'note'                   => "SUP订单号[{$order['id']}]供应商平台置失败产生扣款",
                                        'amount'                 => -abs($order['sup_price']),
                                        'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : '',
                                        'platform_total_balance' => '',
                                        'add_time'               => time(),
                                    ]);
                                    //扣减相应平台余额
                                    //$platform_user->balance -= abs($order['sup_price']);
                                    $orderManager->refund($platform_user, $order['sup_price']);
                                    $platform_user->save();
                                    return true;
                                });
                            } catch (\Exception $e) {
                                $context = [
                                    'order_id'    => $order['order_id'],
                                    'user_id'     => $order['sup_user_id'],
                                    'supplier_id' => $this->getUserId(),
                                    'error'       => $e->getMessage(),
                                    'stack'       => $e->getTraceAsString()
                                ];
                                $this->logger->error('创建供应商扣款流水失败', $context);
                            }
                        }
                    }
                }
            }

            $result = false;

            try {
                $result = OrderRechargeSup::transaction(function () use ($recharge_status, $order, $request) {
                    OrderRechargeSup::update_all(
                        [
                            'recharge_status' => $recharge_status,
                            'end_time'        => date('Y-m-d H:i:s'),
                            'edit_time'       => date('Y-m-d H:i:s')
                        ],
                        ['id' => $order['id']]
                    );

                    // 写入日志
                    OperationLog::create([
                        'user_id'     => $this->getUserId(),
                        'log_type'    => OperationLog::OPERATION_SET_SUCCESS,
                        'platform_id' => Platform::SUPPLIER,
                        'info'        => "供应商平台置成功SUP订单编号“{$order['id']}”并结算",
                        'ip'          => $request->getClientIp(),
                        'add_time'    => time(),
                    ]);
                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'order_id'    => $order_recharge->id,
                    'supplier_id' => $this->getUserId(),
                    'error'       => $e->getMessage(),
                    'stack'       => $e->getTraceAsString()
                ];
                $this->logger->error('供应商平台更新SUP订单状态失败', $context);
            }

            if ($result) {
                $count++;
            }
        }

        return ['status' => true, 'msg' => $count . '项修改成功'];
    }

}
