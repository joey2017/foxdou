<?php

namespace App\Admin\Controller;

use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use App\Common\Model\MobileBalanceQuery;
use App\Common\Model\Order\Order;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\Common\Model\Order\OrderRechargeSupOperationLog;
use App\Common\Model\Payment\AgentUsersRebateLog;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSource;
use App\Common\Model\Product\SourceGroup;
use App\Common\Model\SystemSettingItem;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\SupplierAccount;
use App\Common\Model\User\User;
use App\Common\Service\Order\MobileOrderService;
use App\Common\Service\Product\ProductCate;
use App\Common\Service\QueryMobileBalance;
use App\Common\Utils\MobileNumberChecker;
use App\Constants;
use App\Platform;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/", defaults={"group": "order-management"})
 */
class OrderController extends AdminBaseController {

    /** url跳转
     * @Route("/orders", name="admin_orders_index")
     */
    public function indexAction() {
        return $this->redirectToRoute('admin_orders_recharge', ['product_cate_id' => Constants::PRODUCT_CATE_MOBILE_PHONE,/*'order_mark' => OrderRecharge::MARK_OVERTIME*/]);
    }

    /** 充值主订单
     * @Route("/orders/recharge", name="admin_orders_recharge")
     */
    public function rechargeAction(Request $request, MobileOrderService $orderManager, Form $form) {
        if ($request->query->count() <= 2) {
            $product_cate_id           = $request->query->getInt('product_cate_id');
            $order_mark_statistics     = $this->getOrderMarkTotalAction($request, $product_cate_id);
            $empty_channel_add_order   = SystemSettingItem::first(['name' => 'empty_channel_add_order']);
            $order_recharge_type_total = $this->getOrderRechargeTypeTotalAction(false);
            return $this->render("Admin/Order/recharge.twig",
                [
                    'product_cate_id'           => $product_cate_id,
                    'order_mark'                => $request->query->get('order_mark','NORMAL'),
                    'order_mark_statistics'     => $order_mark_statistics,
                    'empty_channel_add_order'   => !empty($empty_channel_add_order) ? $empty_channel_add_order->value : 0,
                    'order_recharge_type_total' => $order_recharge_type_total
                ]
            );
        }

        $cates    = join("|", array_keys(Constants::PRODUCT_CATEGORIES));
        $carriers = join("|", array_keys(Constants::CARRIERS));

        $form->init([
            'product_cate_id'   => ["enum[{$cates}]"],
            'platform_id'       => ["integer"],
            'order_mark'        => [to_enum(OrderRecharge::MARKS)],
            'id'                => [""],
            'status'            => ["digit"],
            'recharge_status'   => ["digit"],
            'settle_status'     => [to_enum(OrderRechargeSup::SETTLE_STATUSES)],
            'settlement_status' => [to_enum(OrderRecharge::SETTLEMENT)],
            'start_time'        => ["date"],
            'end_time'          => ["date"],
            'summary'           => ["enum[0|1]"],
        ]);

        if (!$form->validate($request->query)) {
            return ["status" => false, "msg" => "参数错误"];
        }

        if ($form->getBoolean('summary', false)) {
            $summary = $orderManager->getRechargeOrderSummary($form);

            return ['status' => true, 'summary' => $summary];
        }

        list($rows, $total) = $orderManager->getRechargeOrders($form, $form->page, $form->limit);

        return ["status" => true, "total" => $total, 'data' => $rows, 'msg' => '获取成功'];
    }

    /**
     * @Route("/orders/get-order-mark-total", name="admin_orders_get_order_mark_total")
     */
    public function getOrderMarkTotalAction(Request $request, $id = 0) {
        $product_cate_id = $id;

        if (empty($id)) {
            $product_cate_id = $request->request->getInt('product_cate_id', 0);
        }
        if ($product_cate_id <= 0) {
            return ['status' => false, 'msg' => '参数有误，请重新提交'];
        }

        //1.SUP订单状态“充值中”是否超过2分钟 超时2分钟

        //2.SUP订单状态“充值中”是否超过10分钟 卡单

        $where   = [];
        $options = [
            'select' => 'o.id,UNIX_TIMESTAMP(s.add_time) as add_time,s.recharge_status',
            'from'   => OrderRecharge::table_name() . ' AS o',
            'joins'  => 'LEFT JOIN ' . OrderRechargeSup::table_name() . ' AS s ON s.order_id=o.id AND s.id=(SELECT max(id) FROM ' . OrderRechargeSup::table_name() . '  WHERE order_id=o.id)',
            'order'  => 'o.id DESC'
        ];

        $results = OrderRecharge::all($where, $options);

        $systime = time();
        foreach ($results as $result) {
            if ($result['recharge_status'] == OrderRechargeSup::STATUS_IN_PROGRESS) {
                if ($systime - $result['add_time'] > 2 * 60 && $systime - $result['add_time'] <= 10 * 60) {
                    $order['order_mark'] = OrderRecharge::MARK_OVERTIME;
                } else {
                    if ($systime - $result['add_time'] > 10 * 60) {
                        $order['order_mark'] = OrderRecharge::MARK_CARD;
                    }
                }
                $order['edit_time'] = date('Y-m-d H:i:s');
                OrderRecharge::update_all($order, ['id' => $result['id']]);
            }
        }

        $sql    = "SELECT order_mark,count(id) AS total FROM " . OrderRecharge::table_name() . " WHERE product_cate_id=? GROUP BY order_mark";
        $orders = OrderRecharge::query($sql, [$product_cate_id])->fetchAll();

        $data = [
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
     * @Route("/orders/get-recharge-order-type-total", name="admin_orders_get_recharge_order_type_total")
     */
    public function getOrderRechargeTypeTotalAction($ajax = true) {
        $data              = [];
        $data['recharge']  = $this->_getOrderTypeTotal('product_cate_id', OrderRecharge::table_name());
        $data['suppliers'] = $this->_getOrderTypeTotal('source_product_cate_id', OrderRechargeSup::table_name());

        if ($ajax) {
            return ['status' => true, 'msg' => '获取成功', 'data' => $data];
        }
        return $data;
    }

    // 获取订单分类总数
    private function _getOrderTypeTotal($field, $table_name) {
        $sql    = "SELECT " . $field . ",count(id) AS total FROM `" . $table_name . "` GROUP BY " . $field;
        $stmt   = OrderRecharge::query($sql);
        $orders = $stmt->fetchAll();
        $data   = [
            Constants::PRODUCT_CATE_MOBILE_PHONE => 0,
            Constants::PRODUCT_CATE_LINE_PHONE   => 0,
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

    /** 空货源下单设置
     * @Route("/orders/empty-channel-add-order", name="admin_orders_empty_channel_add_order")
     */
    public function emptyChannelAddOrderAction(Request $request) {
        $val = $request->request->get('val');
        if (!in_array($val, ['0', '1'])) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }
        try {
            $result = SystemSettingItem::transaction(function () use ($val, $request) {
                SystemSettingItem::update_all(
                    ['value' => $val, 'edit_time' => date('Y-m-d H:i:s')],
                    ['name' => 'empty_channel_add_order']
                );

                // 写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_EDIT,
                    'subject_type' => 'ORDER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . "将订单无货源下单状态改为[{$val}]",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error("修改空货源可下单货源状态失败", $text);
        }

        return ['status' => (boolean)$result, 'msg' => $result ? '设置成功' : '设置失败'];
    }

    /** SUP充值订单
     * @Route("/orders/suppliers", name="admin_orders_suppliers")
     */
    public function suppliersAction(Request $request, MobileOrderService $orderManager, Form $form) {
        if ($request->query->count() <= 1) {
            $order_recharge_type_total = $this->getOrderRechargeTypeTotalAction(false);
            $product_cate_id           = $request->query->getInt('product_cate_id');
            return $this->render("Admin/Order/suppliers.twig",
                ['order_recharge_type_total' => $order_recharge_type_total, 'product_cate_id' => $product_cate_id]
            );
        }

        $cates            = join("|", array_keys(Constants::PRODUCT_CATEGORIES));
        $settleStatuses   = join("|", array_keys(OrderRechargeSup::SETTLE_STATUSES));
        $rechargeStatuses = join("|", array_keys(OrderRechargeSup::RECHARGE_STATUS));

        $form->init([
            'product_cate_id' => ["enum[{$cates}]"],
            'order_id'        => ["digit"],
            'recharge_status' => ["enum[{$rechargeStatuses}]"],
            'settle_status'   => ["enum[{$settleStatuses}]"],
            'start_time'      => ["date"],
            'end_time'        => ["date"]
        ]);

        if (!$form->validate($request->query)) {
            return ["status" => false, "msg" => "参数错误"];
        }

        if ($form->getBoolean('summary', false)) {
            $summary = $orderManager->getRechargeOrderSummary($form);

            return ['status' => true, 'summary' => $summary];
        }

        list($rows, $total) = $orderManager->getSupplierOrders($form, $form->getInt('page', 1), $form->getInt('limit', 10));

        return ["status" => true, "total" => $total, 'data' => $rows];
    }

    /** 主订单置成功
     * @Route("/orders/set-success", name="admin_orders_set_success")
     * $status=[0=>未知,1=>充值中,2=>充值成功(系统),3=>充值失败(系统),4=>待付款,5=>已取消,6=>充值成功(人工),7=>充值失败(人工)];
     * $rechage_status=[0 => 未知 , 1 => 待付款 , 2 => 待提单 , 3 => 已提单 , 4 => 已验单 , 5 => 提交可疑 , 6 => 提交失败 , 7 => 充值中 , 8 => 充值可疑 , 9 => 充值成功 (系统) , 10 => 充值成功 (供应商人工) , 11 => 充值成功 (总后台人工) , 12 => 充值失败 (系统) , 13 => 充值失败 (供应商人工) , 14 => 充值失败 (总后台人工) , 15 => 已退款 , 16 => 已取消 , 17 => 待处理];
     */
    public function setSuccessAction(Request $request) {
        $ids          = $request->request->get('id');
        $order_status = $request->request->getInt('order_status');
        $type         = $request->request->getInt('type');

        if (!($ids && $order_status == OrderRecharge::STATUS_SUCCEED_MAN)) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        if (!in_array($type, ['1', '2', '3'])) {
            return ['status' => false, 'msg' => '操作选项不存在'];
        }

        $orders = OrderRecharge::all(['id' => $ids]);

        if (empty($orders)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        $count = 0;

        foreach ($orders as $order) {
            $sup_order = OrderRechargeSup::last(['order_id' => $order['id']]);

            if (empty($sup_order) && $type !== 3) {//无SUP订单且选项不为3
                continue;
            }

            // 满足人工操作订单的前提
            /*
             * 1.主订单置成功（主订单状态=充值中，充值失败（系统），充值失败（人工））
             */
            if (!in_array($order['status'], [OrderRecharge::STATUS_PROCESSING, OrderRecharge::STATUS_FAILED_SYS, OrderRecharge::STATUS_FAILED_MAN])) {
                continue;
            }

            $operation = AdminOperationLog::OPERATION_SET_SUCCESS;
            $result    = false;
            // 先修改主订单状态=充值成功（人工）
            try {
                //事务处理
                $result = OrderRecharge::transaction(function () use ($order_status, $order, $operation, $request) {
                    OrderRecharge::update_all(
                        [
                            'status'    => $order_status,
                            'edit_time' => date('Y-m-d H:i:s')
                        ],
                        ['id' => $order['id']]
                    );
                    $trade_status = $order_status == OrderRecharge::STATUS_FAILED_MAN ? 4 : 3;
                    // 修改订单交易记录状态
                    UserMoneyTradeLog::update_all(['trade_status' => $trade_status], ['order_id' => $order['id']]);

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => $operation,
                        'subject_type' => 'ORDER',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . AdminOperationLog::OPERATIONS[$operation] . "订单号[{$order['id']}]",
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                    ]);
                    return true;
                    //throw new Exception("rollback!");
                });
            } catch (\Exception $e) {
                $context = [
                    'order_id' => $order['id'],
                    'admin_id' => $this->getAdminUser()->id,
                    'error'    => $e->getMessage(),
                    'stack'    => $e->getTraceAsString()
                ];
                $this->logger->error('更新订单状态失败', $context);
            }

            // 主订单结算前提
            /*  1.主订单原结算状态=已扣款 and 主订单订单状态由：充值中→充值成功（系统）
             *  2.主订单原结算状态=已扣款 and 主订单订单状态由：充值中→充值成功（人工）
             *  3.主订单原结算状态=已扣款 and 主订单订单状态由：充值失败（系统）→充值成功（人工）
             *  4.主订单原结算状态=已扣款 and 主订单订单状态由：充值失败（人工）→充值成功（人工）
             */
            if (!($order['settlement_status'] == OrderRecharge::SETTLEMENT_COMPLETED && in_array($order['status'], [OrderRecharge::STATUS_PROCESSING, OrderRecharge::STATUS_FAILED_SYS, OrderRecharge::STATUS_FAILED_MAN]))) {
                continue;
            }

            /* comment--置成功不需要更新主订单结算状态-- */

            // 分佣(平台指定经销商才有)agency_type = ResellerAccount::TYPE_UNDERLING
            $parent_dealer = ResellerAccount::first(['user_id' => $order['user_id'], 'agency_type' => ResellerAccount::TYPE_UNDERLING]);

            if (!empty($parent_dealer) && $parent_dealer->parent_dealer_user_id > 0) {
                $usersrebate = AgentUsersRebateLog::first(
                    [
                        'user_id'        => $order['user_id'],
                        'order_sn'       => $order['id'],
                        'dealer_user_id' => $parent_dealer->parent_dealer_user_id
                    ]
                );
                if (empty($usersrebate)) {
                    $rebate_data = [
                        'trade_sn'                    => $order['trade_id'],
                        'order_sn'                    => $order['id'],
                        'name'                        => $order['product_name'],
                        'info'                        => '订单成功返佣',
                        //'rebate'                      => '0.1',//测试用,暂时以订单金额的1%计算
                        'rebate'                      => $order['recharge_amount'] * 1 / 100,//测试用,暂时以订单金额的1%计算
                        'after_rebate_balance'        => $parent_dealer->rebate_balance + $order['recharge_amount'] * 1 / 100,
                        'after_pintai_rebate_balance' => $parent_dealer->rebate_balance + $order['recharge_amount'] * 1 / 100,
                        'dealer_user_id'              => $parent_dealer->parent_dealer_user_id,
                        'user_id'                     => $order['user_id'],
                        'rebate_type'                 => AgentUsersRebateLog::REBATE_ORDER_SETTLEMENT,
                        'add_time'                    => time()
                    ];

                    try {
                        AgentUsersRebateLog::transaction(function () use ($rebate_data) {
                            AgentUsersRebateLog::create($rebate_data);
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order['id'],
                            'user_id'  => $order['user_id'],
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('创建用户分佣流水失败', $context);
                    }
                }
            }

            // 最新SUP订单状态修改
            switch ($type) {
            case 1:// 最新SUP订单置成功并结算

                // SUP订单结算状态已成功的跳过
                if (in_array($sup_order->recharge_status, [OrderRechargeSup::STATUS_SUCCEED_SYS, OrderRechargeSup::STATUS_SUCCEED_SUP, OrderRechargeSup::STATUS_SUCCEED_ADMIN])) {
                    continue;
                }
                try {
                    OrderRechargeSup::transaction(function () use ($sup_order, $request) {
                        OrderRechargeSup::update_all(
                            [
                                'recharge_status' => OrderRechargeSup::STATUS_SUCCEED_ADMIN,
                                'settle_status'   => OrderRechargeSup::SETTLE_STATUS_PAID,
                                'edit_time'       => date('Y-m-d H:i:s')
                            ],
                            ['id' => $sup_order->id]
                        );
                        //更新SUP订单充值状态变更记录表
                        OrderRechargeSupOperationLog::update_all(
                            [
                                'recharge_status'   => OrderRechargeSup::STATUS_SUCCEED_ADMIN,
                                'order_status'      => OrderRecharge::STATUS_SUCCEED_MAN,
                                'settle_status'     => OrderRechargeSup::SETTLE_STATUS_PAID,
                                'if_admin'          => OrderRechargeSupOperationLog::IS_ADMIN,
                                'operation_type'    => OrderRechargeSupOperationLog::OPERATION_MANUAL,
                                'operation_user_id' => $this->getAdminUser()->id,
                                'operator_ip'       => $request->getClientIp(),
                                'edit_time'         => date('Y-m-d H:i:s')
                            ],
                            ['sup_order_id' => $sup_order->id]
                        );
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order['id'],
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('更新SUP订单充值、结算状态失败', $context);
                }

                // 是否存在对该供应商的最新一笔付款资金流水
                $record = UserMoneyLog::exists(
                    [
                        'user_id'  => $sup_order->sup_user_id,
                        'order_id' => $order['id'],
                        'log_type' => UserMoneyLog::TYPE_ORDER_SETTLEMENT
                    ]
                );
                if (empty($record)) {
                    $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order['id'], 'other_party_user_id' => $sup_order->sup_user_id]);
                    $platform_user    = $this->getPlatformAccountInfo($order['platform_id'], $sup_order->sup_user_id);

                    try {
                        UserMoneyLog::create([
                            'platform_id'            => $order['platform_id'],
                            'user_id'                => $sup_order->sup_user_id,
                            'trade_id'               => $user_money_trade->id,
                            'order_id'               => $order['id'],
                            'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                            'name'                   => $order['product_name'],
                            'note'                   => "订单号[{$order["id"]}]后台置成功结算",
                            'amount'                 => abs($sup_order->sup_price),
                            'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : '',
                            'platform_total_balance' => '',
                            'add_time'               => time(),
                        ]);
                        //增加用户相应平台余额
                        $platform_user->balance += abs($sup_order->sup_price);
                        $platform_user->save();
                        return true;
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order['id'],
                            'user_id'  => $sup_order->sup_user_id,
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('创建用户扣佣流水失败', $context);
                    }
                }

                break;
            case 2:// 最新SUP订单置成功暂不结算

                try {
                    OrderRechargeSup::transaction(function () use ($sup_order, $request) {
                        OrderRechargeSup::update_all(
                            [
                                'recharge_status' => OrderRechargeSup::STATUS_SUCCEED_ADMIN,
                                'edit_time'       => date('Y-m-d H:i:s'),
                                'settle_status'   => OrderRechargeSup::SETTLE_STATUS_PENDING
                            ],
                            ['id' => $sup_order->id]
                        );

                        // 更新SUP订单充值状态变更记录表
                        OrderRechargeSupOperationLog::update_all(
                            [
                                'recharge_status'   => OrderRechargeSup::STATUS_SUCCEED_ADMIN,
                                'order_status'      => OrderRecharge::STATUS_SUCCEED_MAN,
                                'settle_status'     => OrderRechargeSup::SETTLE_STATUS_PAID,
                                'if_admin'          => OrderRechargeSupOperationLog::IS_ADMIN,
                                'operation_type'    => OrderRechargeSupOperationLog::OPERATION_MANUAL,
                                'operation_user_id' => $this->getAdminUser()->id,
                                'operator_ip'       => $request->getClientIp(),
                                'edit_time'         => date('Y-m-d H:i:s')
                            ],
                            ['sup_order_id' => $sup_order->id]
                        );

                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order['id'],
                        'user_id'  => $sup_order->sup_user_id,
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('最新SUP订单置成功暂不结算失败', $context);
                }

                break;
            case 3:// 最新SUP订单不进行操作

                break;
            default:
                break;
            }

            if ($result) {
                $count++;
            }
        }
        return ['status' => true, 'msg' => $count . '项修改成功'];
    }

    /** 主订单置失败
     * @Route("/orders/set-failure", name="admin_orders_set_failure")
     */
    public function setFailureAction(Request $request) {
        $ids          = $request->request->get('id');
        $order_status = $request->request->getInt('order_status');
        $type         = $request->request->getInt('type');
        $password     = $request->request->get('password');

        if (!($ids && $order_status == OrderRecharge::STATUS_FAILED_MAN)) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        if (!in_array($type, ['1', '3'])) {
            return ['status' => false, 'msg' => '操作选项不存在'];
        }

        // 置失败（需要验证操作密码）
        if ($password === '') {
            return ['status' => false, 'msg' => '请输入安全操作密码'];
        }

        if (!password_verify($password, $this->getAdminUser()->password)) {
            return ['status' => false, 'msg' => '安全操作密码错误'];
        }

        $orders = OrderRecharge::all(['id' => $ids]);

        if (empty($orders)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        // 满足人工操作订单的前提
        /*
         * 1.主订单置失败（主订单状态=充值中，充值成功（系统），充值成功（人工））
         */
        $count = 0;

        foreach ($orders as $order) {
            $sup_order = OrderRechargeSup::last(['order_id' => $order['id']]);

            if (empty($sup_order) && $type !== 3) {//无SUP订单且选项不为3
                continue;
            }
            // 主订单置失败前提
            /*
             * 1.主订单置失败（主订单状态=充值中，充值成功（系统），充值成功（人工））
             */
            if (!in_array($order['status'], [OrderRecharge::STATUS_PROCESSING, OrderRecharge::STATUS_SUCCEED_SYS, OrderRecharge::STATUS_SUCCEED_MAN])) {
                continue;
            }

            $operation = AdminOperationLog::OPERATION_SET_FAIL;
            $result    = false;
            // 先修改主订单状态=充值失败（人工）
            try {
                //事务处理
                $result = OrderRecharge::transaction(function () use ($order_status, $order, $operation, $request) {
                    OrderRecharge::update_all(
                        [
                            'status'    => $order_status,
                            'edit_time' => date('Y-m-d H:i:s')
                        ],
                        ['id' => $order['id']]
                    );
                    $trade_status = $order_status == OrderRecharge::STATUS_FAILED_MAN ? 4 : 3;
                    // 修改订单交易记录状态
                    UserMoneyTradeLog::update_all(['trade_status' => $trade_status], ['order_id' => $order['id']]);

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => $operation,
                        'subject_type' => 'ORDER',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . AdminOperationLog::OPERATIONS[$operation] . "订单号[{$order['id']}]",
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                    ]);
                    return true;
                    //throw new Exception("rollback!");
                });
            } catch (\Exception $e) {
                $context = [
                    'order_id' => $order['id'],
                    'admin_id' => $this->getAdminUser()->id,
                    'error'    => $e->getMessage(),
                    'stack'    => $e->getTraceAsString()
                ];
                $this->logger->error('更新订单状态失败', $context);
            }

            // 主订单结算前提
            /* 1.主订单原结算状态=已扣款 and 主订单订单状态由：充值中→充值失败（人工）
            *  2.主订单原结算状态=已扣款 and 主订单订单状态由：充值成功（系统）→充值失败（人工）
            *  3.主订单原结算状态=二次扣款 and 主订单订单状态由：充值成功（人工）→充值失败（人工）
            */
            if (!($order['settlement_status'] == OrderRecharge::SETTLEMENT_COMPLETED && $order['status'] == OrderRecharge::STATUS_PROCESSING) && !($order['settlement_status'] == OrderRecharge::SETTLEMENT_COMPLETED && $order['status'] == OrderRecharge::STATUS_SUCCEED_SYS) && !($order['settlement_status'] == OrderRecharge::SETTLEMENT_SUCCEED_AGAIN && $order['status'] == OrderRecharge::STATUS_SUCCEED_MAN)) {
                continue;
            }

            //更新主订单结算状态为人工失败退款
            try {
                OrderRecharge::update_all(
                    [
                        'settlement_status' => OrderRecharge::SETTLEMENT_FAILED_MAN,
                        'edit_time'         => date('Y-m-d H:i:s')
                    ],
                    ['id' => $order['id']]
                );
            } catch (\Exception $e) {
                $context = [
                    'order_id' => $order['id'],
                    'user_id'  => $order['user_id'],
                    'admin_id' => $this->getAdminUser()->id,
                    'error'    => $e->getMessage(),
                    'stack'    => $e->getTraceAsString()
                ];
                $this->logger->error('更新主订单结算状态失败', $context);
            }

            //是否存在最新一笔退款资金流水
            $user_money_record = UserMoneyLog::exists(
                [
                    'order_id' => $order['id'],
                    'user_id'  => $order['user_id'],
                    'log_type' => UserMoneyLog::TYPE_REFUND
                ]
            );

            if ($user_money_record == 0) {
                //创建用户退款资金流水
                $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order['id'], 'user_id' => $order['user_id']]);
                $platform_user    = $this->getPlatformAccountInfo($order['platform_id'], $order['user_id']);
                try {
                    UserMoneyLog::transaction(function () use ($order, $user_money_trade, $platform_user, $sup_order) {
                        UserMoneyLog::create([
                            'platform_id'            => $order['platform_id'],
                            'user_id'                => $order['user_id'],
                            'trade_id'               => $user_money_trade->id,
                            'order_id'               => $order['id'],
                            'log_type'               => UserMoneyLog::TYPE_REFUND,
                            'name'                   => $order['product_name'],
                            'note'                   => "订单号[{$order["id"]}]总后台置失败产生退款",
                            'amount'                 => abs($sup_order->sup_price),
                            'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : '',
                            'platform_total_balance' => '',
                            'add_time'               => time(),
                        ]);
                        //增加用户相应平台余额
                        $platform_user->balance += abs($sup_order->sup_price);
                        $platform_user->save();
                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order['id'],
                        'user_id'  => $order['user_id'],
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('创建用户扣佣流水失败', $context);
                }
            }

            // 是否存在分佣资金流水
            $parent_dealer = ResellerAccount::first(['user_id' => $order['user_id'], 'agency_type' => ResellerAccount::TYPE_UNDERLING]);
            if ($parent_dealer) {
                $usersrebate = AgentUsersRebateLog::first(
                    [
                        'user_id'        => $order['user_id'],
                        'order_sn'       => $order['id'],
                        'dealer_user_id' => $parent_dealer->parent_dealer_user_id
                    ]
                );
                if ($usersrebate) {
                    // 扣除分佣
                    $rebate_data = [
                        'trade_sn'                    => $order['trade_id'],
                        'order_sn'                    => $order['id'],
                        'name'                        => $order['product_name'],
                        'info'                        => '总后台订单置失败扣佣',
                        'rebate'                      => -$order['recharge_amount'] * 1 / 100,//测试用
                        'after_rebate_balance'        => $parent_dealer->rebate_balance - $order['recharge_amount'] * 1 / 100,
                        'after_pintai_rebate_balance' => $parent_dealer->rebate_balance - $order['recharge_amount'] * 1 / 100,
                        'dealer_user_id'              => $parent_dealer->parent_dealer_user_id,
                        'user_id'                     => $order['user_id'],
                        'rebate_type'                 => AgentUsersRebateLog::REBATE_ORDER_SETTLEMENT,
                        'add_time'                    => time()
                    ];

                    try {
                        AgentUsersRebateLog::transaction(function () use ($rebate_data) {
                            AgentUsersRebateLog::create($rebate_data);
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order['id'],
                            'user_id'  => $order['user_id'],
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('创建用户扣佣流水失败', $context);
                    }
                }
            }

            // 最新SUP订单状态修改
            switch ($type) {
            case 1:// 最新SUP订单置失败并结算
                // 充值状态不为充值失败（系统）/充值失败（供应商人工）/充值失败（总后台人工） and 原结算状态=待结算
                if (!(in_array($sup_order->recharge_status, [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN]) && $sup_order->settle_status == OrderRechargeSup::SETTLE_STATUS_PENDING)) {
                    try {
                        OrderRechargeSup::transaction(function () use ($sup_order, $request) {
                            // 更新SUP订单结算状态为供应商人工失败，不付款结算
                            OrderRechargeSup::update_all(
                                [
                                    'settle_status' => OrderRechargeSup::SETTLE_STATUS_UNPAID,
                                    'edit_time'     => date('Y-m-d H:i:s')
                                ],
                                ['id' => $sup_order->id]
                            );
                            // 更新SUP订单充值状态变更记录表
                            OrderRechargeSupOperationLog::update_all(
                                [
                                    'recharge_status'   => OrderRechargeSup::STATUS_FAILED_ADMIN,
                                    'order_status'      => OrderRecharge::STATUS_FAILED_MAN,
                                    'settle_status'     => OrderRechargeSup::SETTLE_STATUS_UNPAID,
                                    'if_admin'          => OrderRechargeSupOperationLog::IS_ADMIN,
                                    'operation_type'    => OrderRechargeSupOperationLog::OPERATION_MANUAL,
                                    'operation_user_id' => $this->getAdminUser()->id,
                                    'operator_ip'       => $request->getClientIp(),
                                    'edit_time'         => date('Y-m-d H:i:s')
                                ],
                                ['sup_order_id' => $sup_order->id]
                            );
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order['id'],
                            'user_id'  => $order['user_id'],
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('最新SUP订单置失败并结算失败', $context);
                    }
                }

                // 充值状态不为充值失败（系统）/充值失败（供应商人工）/充值失败（总后台人工） and 原结算状态=系统充值成功，已付款结算/供应商人工成功，已付款结算/总后台人工成功，已付款结算
                if (!(in_array($sup_order->recharge_status, [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN]) && in_array($sup_order->settle_status, [OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID]))) {
                    try {
                        OrderRechargeSup::transaction(function () use ($sup_order, $request) {
                            //更新SUP订单结算状态为总后台人工失败，已退款结算
                            OrderRechargeSup::update_all(
                                [
                                    'settle_status' => OrderRechargeSup::SETTLE_STATUS_REFUNDED,
                                    'edit_time'     => date('Y-m-d H:i:s')
                                ],
                                ['id' => $sup_order->id]
                            );
                            //更新SUP订单充值状态变更记录表
                            OrderRechargeSupOperationLog::update_all([
                                'recharge_status'   => OrderRechargeSup::STATUS_FAILED_ADMIN,
                                'order_status'      => OrderRecharge::STATUS_FAILED_MAN,
                                'settle_status'     => OrderRechargeSup::SETTLE_STATUS_REFUNDED,
                                'if_admin'          => OrderRechargeSupOperationLog::IS_ADMIN,
                                'operation_type'    => OrderRechargeSupOperationLog::OPERATION_MANUAL,
                                'operation_user_id' => $this->getAdminUser()->id,
                                'operator_ip'       => $request->getClientIp(),
                                'edit_time'         => date('Y-m-d H:i:s')
                            ], ['sup_order_id' => $sup_order->id]);
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order['id'],
                            'user_id'  => $order['user_id'],
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('最新SUP订单置失败并结算失败', $context);
                    }

                    //是否存在对该供应商的最新一笔扣款资金流水
                    $user_money_record = UserMoneyLog::exists(
                        [
                            'order_id' => $order['id'],
                            'user_id'  => $sup_order->sup_user_id,
                            'log_type' => UserMoneyLog::TYPE_DEDUCTIONS
                        ]
                    );

                    if ($user_money_record == 0) {
                        //创建向供应商扣款资金流水
                        $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order['id'], 'other_party_user_id' => $sup_order->sup_user_id]);
                        $platform_user    = $this->getPlatformAccountInfo($order['platform_id'], $sup_order->sup_user_id);
                        try {
                            UserMoneyLog::transaction(function () use ($order, $user_money_trade, $platform_user, $sup_order) {
                                UserMoneyLog::create([
                                    'platform_id'            => $order['platform_id'],
                                    'user_id'                => $sup_order->sup_user_id,
                                    'trade_id'               => $user_money_trade->id,
                                    'order_id'               => $order['id'],
                                    'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                                    'name'                   => $order['product_name'],
                                    'note'                   => "订单号[{$order["id"]}]总后台置失败产生扣款",
                                    'amount'                 => -abs($sup_order->sup_price),
                                    'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : '',
                                    'platform_total_balance' => '',
                                    'add_time'               => time(),
                                ]);
                                //扣减用户相应平台余额
                                $platform_user->balance -= abs($sup_order->sup_price);
                                $platform_user->save();
                                return true;
                            });
                        } catch (\Exception $e) {
                            $context = [
                                'order_id' => $order['id'],
                                'user_id'  => $order['user_id'],
                                'admin_id' => $this->getAdminUser()->id,
                                'error'    => $e->getMessage(),
                                'stack'    => $e->getTraceAsString()
                            ];
                            $this->logger->error('创建用户扣款流水失败', $context);
                        }
                    }
                }
                try {
                    OrderRechargeSup::update_all(['recharge_status' => OrderRechargeSup::STATUS_FAILED_ADMIN, 'edit_time' => date('Y-m-d H:i:s')], ['id' => $sup_order->id]);
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order['id'],
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('更新SUP订单充值、结算状态失败', $context);
                }

                break;

            case 3:// 对最新SUP订单不进行任何操作

                break;
            default:
                break;
            }

            if ($result) {
                $count++;
            }
        }

        return ['status' => true, 'msg' => $count . '项修改成功'];
    }

    private function getPlatformAccountInfo($platform_id, $user_id) {
        if (empty($platform_id) || empty($user_id)) {
            return false;
        }

        switch ($platform_id) {
            //暂时列出开放平台，供货商，代理商
        case Platform::OPEN_PLATFORM:
            $platform_user = OpenPlatformAccount::first(['user_id' => $user_id, 'status' => OpenPlatformAccount::STATUS_ACTIVE]);

            break;
        case Platform::SUPPLIER:
            $platform_user = SupplierAccount::first(['user_id' => $user_id, 'status' => SupplierAccount::STATUS_ACTIVE]);

            break;
        case Platform::RESELLER:
            $platform_user = ResellerAccount::first(['user_id' => $user_id, 'status' => ResellerAccount::STATUS_ACTIVE]);

            break;
        default:
            return false;
            break;
        }
        return $platform_user;
    }

    // 是否存在对该供应商的最新一笔付款/扣款资金流水，无则创建向供应商付款/扣款资金流水
    protected function addUserMoneyLog($log_type, $order_id, $sup_user_id, $platform_id, $amount, $user_id, $product_name, $note, MobileOrderService $orderService = null) {
        $user_money_record = UserMoneyLog::exists(
            [
                'order_id' => $order_id,
                'user_id'  => $sup_user_id,
                'log_type' => $log_type
            ]
        );

        if ($user_money_record == 0) {
            $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order_id, 'other_party_user_id' => $sup_user_id]);
            $platform_user    = $this->getPlatformAccountInfo($platform_id, $sup_user_id);
            try {
                UserMoneyLog::transaction(function () use ($platform_id, $sup_user_id, $order_id, $amount, $user_money_trade, $platform_user, $product_name, $log_type, $note, $orderService) {
                    $amount = $log_type == UserMoneyLog::TYPE_DEDUCTIONS ? -abs($amount) : abs($amount);
                    UserMoneyLog::create([
                        'platform_id'            => $platform_id,
                        'user_id'                => $sup_user_id,
                        'trade_id'               => $user_money_trade->id,
                        'order_id'               => $order_id,
                        'log_type'               => $log_type,
                        'name'                   => $product_name,
                        'note'                   => $note,
                        'amount'                 => $amount,
                        'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : '',
                        'platform_total_balance' => '',
                        'add_time'               => time(),
                    ]);
                    if ($log_type == UserMoneyLog::TYPE_ORDER_SETTLEMENT) {
                        //增加用户相应平台余额
                        $platform_user->balance += $amount;
                    } else {
                        //扣减用户相应平台余额
                        $orderService->refund($platform_user, -$amount);
                    }
                    $platform_user->save();
                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'order_id' => $order_id,
                    'user_id'  => $user_id,
                    'admin_id' => $this->getAdminUser()->id,
                    'error'    => $e->getMessage(),
                    'stack'    => $e->getTraceAsString()
                ];
                $this->logger->error('创建用户资金流水失败', $context);
            }
        }
    }

    /** 置成功SUP订单
     * @Route("/orders/set-success-sup", name="admin_orders_set_success_sup")
     * $status=[0=>未知,1=>充值中,2=>充值成功(系统),3=>充值失败(系统),4=>待付款,5=>已取消,6=>充值成功(人工),7=>充值失败(人工)];
     * $rechage_status=[0 => 未知 , 1 => 待付款 , 2 => 待提单 , 3 => 已提单 , 4 => 已验单 , 5 => 提交可疑 , 6 => 提交失败 , 7 => 充值中 , 8 => 充值可疑 , 9 => 充值成功 (系统) , 10 => 充值成功 (供应商人工) , 11 => 充值成功 (总后台人工) , 12 => 充值失败 (系统) , 13 => 充值失败 (供应商人工) , 14 => 充值失败 (总后台人工) , 15 => 已退款 , 16 => 已取消 , 17 => 待处理];
     * $settle_status=['0'=>'未知','1'=>'未结算','2'=>'已结算','3'=>'已退款'];
     *
     */
    public function setSuccessSupAction(Request $request) {
        $ids             = $request->request->get('id');
        $recharge_status = $request->request->getInt('order_status');
        $type            = $request->request->getInt('type');
        if (!($ids && $recharge_status == OrderRechargeSup::STATUS_SUCCEED_ADMIN)) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $orders = OrderRechargeSup::all(['id' => $ids]);

        if (empty($orders)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        $count = 0;

        foreach ($orders as $order) {
            $is_newest = true;
            //最新sup订单
            $lastest_sup_order = OrderRechargeSup::last(['order_id' => $order['order_id']]);

            if ($lastest_sup_order->id != $order['id']) {
                $is_newest = false;
            }

            $order_recharge = OrderRecharge::find($order['order_id']);

            if (empty($order_recharge)) {
                continue;
            }

            $operation = AdminOperationLog::OPERATION_SET_SUCCESS;
            $result    = false;

            // 先修改SUP订单充值状态
            try {
                $result = OrderRechargeSup::transaction(function () use ($recharge_status, $order, $operation, $request) {
                    OrderRechargeSup::update_all(
                        [
                            'recharge_status' => $recharge_status,
                            'end_time'        => date('Y-m-d H:i:s'),
                            'edit_time'       => date('Y-m-d H:i:s')
                        ],
                        ['id' => $order['id']]
                    );

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => $operation,
                        'subject_type' => 'ORDER',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . AdminOperationLog::OPERATIONS[$operation] . "SUP订单“{$order['id']}”",
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                    ]);
                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'order_id' => $order_recharge->id,
                    'admin_id' => $this->getAdminUser()->id,
                    'error'    => $e->getMessage(),
                    'stack'    => $e->getTraceAsString()
                ];
                $this->logger->error('更新SUP订单状态失败', $context);
            }

            // SUP置成功条件 recharge_status!=充值成功（系统）/充值成功（供应商人工）/充值成功（总后台人工）and 操作时各状态不发生改变
            if (in_array($order['recharge_status'], [OrderRechargeSup::STATUS_SUCCEED_SYS, OrderRechargeSup::STATUS_SUCCEED_SUP, OrderRechargeSup::STATUS_SUCCEED_ADMIN])) {
                continue;
            }
            $order_status = OrderRecharge::STATUS_SUCCEED_MAN;

            // 订单状态修改
            switch ($type) {
            case 1:// 结算该笔SUP订单，并对主订单置成功
                if ($is_newest) {
                    try {
                        OrderRechargeSup::transaction(function () use ($request, $order_status, $order, $order_recharge, $recharge_status) {
                            OrderRechargeSup::update_all(
                                [
                                    'settle_status' => OrderRechargeSup::SETTLE_STATUS_PAID,
                                    'end_time'      => date('Y-m-d H:i:s'),
                                    'edit_time'     => date('Y-m-d H:i:s')
                                ],
                                ['id' => $order['id']]
                            );
                            // 订单状态
                            OrderRecharge::update_all(
                                [
                                    'status'    => $order_status,
                                    'edit_time' => date('Y-m-d H:i:s')
                                ],
                                ['id' => $order_recharge->id]
                            );

                            //更新SUP订单充值状态变更记录表
                            $data['sup_order_id']      = $order['id'];
                            $data['order_id']          = $order_recharge->id;
                            $data['order_status']      = $order_status;
                            $data['recharge_status']   = $recharge_status;
                            $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_PAID;
                            $data['operation_user_id'] = $this->getAdminUser()->id;
                            $data['if_admin']          = OrderRechargeSupOperationLog::IS_ADMIN;
                            $data['operator_ip']       = $request->getClientIp();
                            $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                            OrderRechargeSupOperationLog::create($data);
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order_recharge->id,
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('结算该笔SUP订单，并对主订单置成功失败', $context);
                    }
                    //是否存在对该供应商的最新一笔付款资金流水
                    $user_money_record = UserMoneyLog::exists(
                        [
                            'order_id' => $order['order_id'],
                            'user_id'  => $order['sup_user_id'],
                            'log_type' => UserMoneyLog::TYPE_ORDER_SETTLEMENT
                        ]
                    );

                    if ($user_money_record == 0) {
                        //创建向供应商付款资金流水
                        $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order['order_id'], 'other_party_user_id' => $order['sup_user_id']]);
                        $platform_user    = $this->getPlatformAccountInfo($order_recharge->platform_id, $order['sup_user_id']);

                        try {
                            UserMoneyLog::transaction(function () use ($order, $user_money_trade, $platform_user, $order_recharge) {
                                UserMoneyLog::create([
                                    'platform_id'            => $order_recharge->platform_id,
                                    'user_id'                => $order['sup_user_id'],
                                    'trade_id'               => $user_money_trade->id,
                                    'order_id'               => $order['order_id'],
                                    'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                                    'name'                   => $order_recharge->product_name,
                                    'note'                   => "SUP订单号[{$order["id"]}]总后台置成功产生结算",
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
                                'order_id' => $order['order_id'],
                                'user_id'  => $order['sup_user_id'],
                                'admin_id' => $this->getAdminUser()->id,
                                'error'    => $e->getMessage(),
                                'stack'    => $e->getTraceAsString()
                            ];
                            $this->logger->error('创建向供应商付款资金流水失败', $context);
                        }
                    }
                }

                break;
            case 2:// 暂不结算该笔SUP订单，并对主订单置成功
                if ($is_newest) {
                    try {
                        OrderRechargeSup::transaction(function () use ($request, $order_status, $order, $order_recharge, $recharge_status) {
                            OrderRechargeSup::update_all(
                                [
                                    'settle_status' => OrderRechargeSup::SETTLE_STATUS_PENDING,
                                    'edit_time'     => date('Y-m-d H:i:s')
                                ],
                                ['id' => $order['id']]
                            );
                            OrderRecharge::update_all(
                                [
                                    'status' => $order_status, 'edit_time' => date('Y-m-d H:i:s')
                                ],
                                ['id' => $order_recharge->id]
                            );
                            //更新SUP订单充值状态变更记录表
                            $data['sup_order_id']      = $order['id'];
                            $data['order_id']          = $order_recharge->id;
                            $data['order_status']      = $order_status;
                            $data['recharge_status']   = $recharge_status;
                            $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_PENDING;
                            $data['operation_user_id'] = $this->getAdminUser()->id;
                            $data['if_admin']          = OrderRechargeSupOperationLog::IS_ADMIN;
                            $data['operator_ip']       = $request->getClientIp();
                            $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                            OrderRechargeSupOperationLog::create($data);
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order['order_id'],
                            'user_id'  => $order['sup_user_id'],
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('暂不结算该笔SUP订单，并对主订单置成功失败', $context);
                    }
                }

                break;
            case 3:// 结算该笔SUP订单，并对主订单不进行任何操作

                try {
                    OrderRechargeSup::transaction(function () use ($request, $order_status, $order, $order_recharge, $recharge_status) {
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
                        $data['order_status']      = $order_status;
                        $data['recharge_status']   = $recharge_status;
                        $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_PAID;
                        $data['operation_user_id'] = $this->getAdminUser()->id;
                        $data['if_admin']          = OrderRechargeSupOperationLog::IS_ADMIN;
                        $data['operator_ip']       = $request->getClientIp();
                        $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                        OrderRechargeSupOperationLog::create($data);
                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order_recharge->id,
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('结算该笔SUP订单，并对主订单不进行任何操作失败', $context);
                }
                //是否存在对该供应商的最新一笔付款资金流水
                $user_money_record = UserMoneyLog::exists(
                    [
                        'order_id' => $order['order_id'],
                        'user_id'  => $order['sup_user_id'],
                        'log_type' => UserMoneyLog::TYPE_ORDER_SETTLEMENT
                    ]
                );

                if ($user_money_record == 0) {
                    //创建向供应商付款资金流水
                    $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order['order_id'], 'other_party_user_id' => $order['sup_user_id']]);
                    $platform_user    = $this->getPlatformAccountInfo($order_recharge->platform_id, $order['sup_user_id']);

                    try {
                        UserMoneyLog::transaction(function () use ($order, $user_money_trade, $platform_user, $order_recharge) {
                            UserMoneyLog::create([
                                'platform_id'            => $order_recharge->platform_id,
                                'user_id'                => $order['sup_user_id'],
                                'trade_id'               => $user_money_trade->id,
                                'order_id'               => $order['order_id'],
                                'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                                'name'                   => $order_recharge->product_name,
                                'note'                   => "SUP订单号[{$order["id"]}]总后台置成功产生结算",
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
                            'order_id' => $order['order_id'],
                            'user_id'  => $order['sup_user_id'],
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('创建向供应商付款资金流水失败', $context);
                    }
                }

                break;
            case 4:// 暂不结算该笔SUP订单，对主订单不进行任何操作

                try {
                    OrderRechargeSup::transaction(function () use ($request, $order_status, $order, $order_recharge, $recharge_status) {
                        OrderRechargeSup::update_all(
                            [
                                'settle_status' => OrderRechargeSup::SETTLE_STATUS_PENDING,
                                'edit_time'     => date('Y-m-d H:i:s')
                            ],
                            ['id' => $order['id']]
                        );

                        //更新SUP订单充值状态变更记录表
                        $data['sup_order_id']      = $order['id'];
                        $data['order_id']          = $order_recharge->id;
                        $data['order_status']      = $order_status;
                        $data['recharge_status']   = $recharge_status;
                        $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_PENDING;
                        $data['operation_user_id'] = $this->getAdminUser()->id;
                        $data['if_admin']          = OrderRechargeSupOperationLog::IS_ADMIN;
                        $data['operator_ip']       = $request->getClientIp();
                        $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                        OrderRechargeSupOperationLog::create($data);
                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order['order_id'],
                        'user_id'  => $order['sup_user_id'],
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('暂不结算该笔SUP订单，对主订单不进行任何操作失败', $context);
                }

                break;
            default:
                break;
            }

            if ($result) {
                $count++;
            }
        }
        return ['status' => true, 'msg' => $count . '项修改成功'];
    }

    /** 置失败SUP订单
     * @Route("/orders/set-failure-sup", name="admin_orders_set_failure_sup")
     */
    public function setFailureSupAction(Request $request, MobileOrderService $orderService) {
        $ids             = $request->request->get('id');
        $recharge_status = $request->request->getInt('order_status');
        $type            = $request->request->getInt('type');
        $password        = $request->request->get('password');

        if (!($ids && $recharge_status == OrderRechargeSup::STATUS_FAILED_ADMIN)) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $orders = OrderRechargeSup::all(['id' => $ids]);

        if (empty($orders)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        if ($password === '') {
            return ['status' => false, 'msg' => '请输入安全操作密码'];
        }

        if (!password_verify($password, $this->getAdminUser()->password)) {
            return ['status' => false, 'msg' => '安全操作密码错误'];
        }

        $count = 0;

        foreach ($orders as $order) {
            $is_newest = true;
            //最新sup订单
            $lastest_sup_order = OrderRechargeSup::last(['order_id' => $order['order_id']]);

            if ($lastest_sup_order->id != $order['id']) {
                $is_newest = false;
            }

            $order_recharge = OrderRecharge::find($order['order_id']);

            if (empty($order_recharge)) {
                continue;
            }

            $result       = false;
            $operation    = AdminOperationLog::OPERATION_SET_FAIL;
            $order_status = OrderRecharge::STATUS_FAILED_MAN;

            // 先更新SUP订单状态
            try {
                $result = OrderRechargeSup::transaction(function () use ($recharge_status, $order, $operation, $request) {
                    OrderRechargeSup::update_all(
                        [
                            'recharge_status' => $recharge_status,
                            'end_time'        => date('Y-m-d H:i:s'),
                            'edit_time'       => date('Y-m-d H:i:s')
                        ],
                        ['id' => $order['id']]
                    );

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => $operation,
                        'subject_type' => 'ORDER',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . AdminOperationLog::OPERATIONS[$operation] . "SUP订单“{$order['id']}”",
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                    ]);
                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'order_id' => $order_recharge->id,
                    'admin_id' => $this->getAdminUser()->id,
                    'error'    => $e->getMessage(),
                    'stack'    => $e->getTraceAsString()
                ];
                $this->logger->error('更新SUP订单状态失败', $context);
            }

            // SUP置失败条件 recharge_status!=充值失败（系统）/充值失败（供应商人工）/充值失败（总后台人工）and 操作时各状态不发生改变
            if (in_array($order['recharge_status'], [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN])) {
                continue;
            }
            if ($order['settle_status'] == OrderRechargeSup::SETTLE_STATUS_PENDING) {//待结算
                try {
                    OrderRechargeSup::transaction(function () use ($request, $order, $order_recharge, $recharge_status, $order_status) {
                        // 更新SUP订单结算状态为总后台人工失败，不付款结算
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
                        $data['order_status']      = $order_status;
                        $data['recharge_status']   = $recharge_status;
                        $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_UNPAID;
                        $data['operation_user_id'] = $this->getAdminUser()->id;
                        $data['if_admin']          = OrderRechargeSupOperationLog::IS_ADMIN;
                        $data['operator_ip']       = $request->getClientIp();
                        $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                        OrderRechargeSupOperationLog::create($data);
                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order['order_id'],
                        'user_id'  => $order['sup_user_id'],
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('更新SUP订单结算状态失败', $context);
                }
            } else {//系统充值成功，已付款结算/供应商人工成功，已付款结算/总后台人工成功，已付款结算
                if (in_array($order['settle_status'], [OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID])) {
                    try {
                        OrderRechargeSup::transaction(function () use ($request, $order, $order_recharge, $recharge_status, $order_status) {
                            // 更新SUP订单结算状态为总后台人工失败，不付款结算
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
                            $data['order_status']      = $order_status;
                            $data['recharge_status']   = $recharge_status;
                            $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_UNPAID;
                            $data['operation_user_id'] = $this->getAdminUser()->id;
                            $data['if_admin']          = OrderRechargeSupOperationLog::IS_ADMIN;
                            $data['operator_ip']       = $request->getClientIp();
                            $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                            OrderRechargeSupOperationLog::create($data);
                            return true;
                        });
                    } catch (\Exception $e) {
                        $context = [
                            'order_id' => $order['order_id'],
                            'user_id'  => $order['sup_user_id'],
                            'admin_id' => $this->getAdminUser()->id,
                            'error'    => $e->getMessage(),
                            'stack'    => $e->getTraceAsString()
                        ];
                        $this->logger->error('更新SUP订单结算状态失败', $context);
                    }

                    // 是否存在对该供应商的最新一笔扣款资金流水
                    $user_money_record = UserMoneyLog::exists(['order_id' => $order['order_id'], 'user_id' => $order['sup_user_id'], 'log_type' => UserMoneyLog::TYPE_DEDUCTIONS]);

                    if ($user_money_record == 0) {
                        //创建供应商扣款资金流水
                        $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order['order_id'], 'other_party_user_id' => $order['sup_user_id']]);
                        $platform_user    = $this->getPlatformAccountInfo($order_recharge->platform_id, $order['sup_user_id']);

                        try {
                            UserMoneyLog::transaction(function () use ($order, $user_money_trade, $platform_user, $order_recharge, $orderService) {
                                UserMoneyLog::create([
                                    'platform_id'            => $order_recharge->platform_id,
                                    'user_id'                => $order['sup_user_id'],
                                    'trade_id'               => $user_money_trade->id,
                                    'order_id'               => $order['order_id'],
                                    'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                                    'name'                   => $order_recharge->product_name,
                                    'note'                   => "SUP订单号[{$order['id']}]总后台置失败产生扣款",
                                    'amount'                 => -abs($order['sup_price']),
                                    'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : '',
                                    'platform_total_balance' => '',
                                    'add_time'               => time(),
                                ]);
                                //扣减相应平台余额
                                //$platform_user->balance -= abs($order['sup_price']);
                                $orderService->refund($platform_user, $order['sup_price']);
                                $platform_user->save();
                                return true;
                            });
                        } catch (\Exception $e) {
                            $context = [
                                'order_id' => $order['order_id'],
                                'user_id'  => $order['sup_user_id'],
                                'admin_id' => $this->getAdminUser()->id,
                                'error'    => $e->getMessage(),
                                'stack'    => $e->getTraceAsString()
                            ];
                            $this->logger->error('创建供应商扣款流水失败', $context);
                        }
                    }
                }
            }

            // 订单状态修改
            switch ($type) {
            case 1:// 对主订单置失败
                if ($is_newest) {
                    OrderRecharge::update_all(
                        [
                            'status'    => $order_status,
                            'edit_time' => date('Y-m-d H:i:s')
                        ],
                        ['id' => $order_recharge->id]
                    );
                }
                break;
            case 2:// 对主订单不进行任何操作

                break;
            default:
                break;
            }

            if ($result) {
                $count++;
            }
        }

        return ['status' => true, 'msg' => $count . '项修改成功'];
    }

    /** 主订单页面SUP订单结算
     * @Route("/orders/settlementSup", name="admin_orders_settlement_sup")
     */
    public function settlementSupAction(Request $request) {
        $ids = $request->request->get('id');

        if (!$ids) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $options = [
            'select' => 'o.id,o.status,o.platform_id,o.product_name,s.id as sid,s.recharge_status,s.settle_status,s.sup_user_id,s.sup_price',
            'from'   => OrderRecharge::table_name() . ' AS o',
            'joins'  => 'LEFT JOIN ' . OrderRechargeSup::table_name() . ' AS s ON s.order_id=o.id AND s.id=(SELECT max(id) FROM ' . OrderRechargeSup::table_name() . ' WHERE order_id=o.id)',
            'order'  => 'o.id DESC',
        ];

        $orders = OrderRecharge::all(['o.id' => $ids], $options);

        if (empty($orders)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        // 结算前提：1.主订单原结算状态=已扣款,主订单状态=充值成功（系统）/充值成功（人工）2.SUP订单充值状态=充值成功，结算状态=未结算

        $count = 0;

        foreach ($orders as $order) {
            if (!in_array($order['status'], [OrderRecharge::STATUS_SUCCEED_SYS, OrderRecharge::STATUS_SUCCEED_MAN])) {
                continue;
            }

            if ($order['settlement_status'] != OrderRecharge::SETTLEMENT_COMPLETED) {
                continue;
            }

            if ($order['recharge_status'] != OrderRechargeSup::STATUS_SUCCEED) {
                continue;
            }

            if ($order['settle_status'] != OrderRechargeSup::SETTLE_STATUS_PENDING) {
                continue;
            }

            try {
                OrderRechargeSup::transaction(function () use ($request, $order) {
                    OrderRechargeSup::update_all(
                        [
                            'settle_status' => OrderRechargeSup::SETTLE_STATUS_PAID,
                            'end_time'      => date('Y-m-d H:i:s'),
                            'edit_time'     => date('Y-m-d H:i:s')
                        ],
                        ['id' => $order['id']]
                    );

                    //更新SUP订单充值状态变更记录表
                    $data['sup_order_id']      = $order['sid'];
                    $data['order_id']          = $order['id'];
                    $data['order_status']      = $order['status'];
                    $data['recharge_status']   = $order['recharge_status'];
                    $data['settle_status']     = OrderRechargeSup::SETTLE_STATUS_PAID;
                    $data['operation_user_id'] = $this->getAdminUser()->id;
                    $data['if_admin']          = OrderRechargeSupOperationLog::IS_ADMIN;
                    $data['operator_ip']       = $request->getClientIp();
                    $data['operation_type']    = OrderRechargeSupOperationLog::OPERATION_MANUAL;
                    OrderRechargeSupOperationLog::create($data);

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => AdminOperationLog::OPERATION_SETTLEMENT,
                        'subject_type' => 'ORDER',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . "结算SUP订单号[{$order['sid']}]",
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                    ]);
                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'order_id' => $order['id'],
                    'admin_id' => $this->getAdminUser()->id,
                    'error'    => $e->getMessage(),
                    'stack'    => $e->getTraceAsString()
                ];
                $this->logger->error('结算该笔SUP订单，并对主订单不进行任何操作失败', $context);
            }
            //是否存在对该供应商的最新一笔付款资金流水
            $user_money_record = UserMoneyLog::exists(
                [
                    'order_id' => $order['id'],
                    'user_id'  => $order['sup_user_id'],
                    'log_type' => UserMoneyLog::TYPE_ORDER_SETTLEMENT
                ]
            );

            if ($user_money_record == 0) {
                //创建向供应商付款资金流水
                $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order['id'], 'other_party_user_id' => $order['sup_user_id']]);
                $platform_user    = $this->getPlatformAccountInfo($order['platform_id'], $order['sup_user_id']);

                try {
                    UserMoneyLog::transaction(function () use ($order, $user_money_trade, $platform_user) {
                        UserMoneyLog::create([
                            'platform_id'            => $order['platform_id'],
                            'user_id'                => $order['sup_user_id'],
                            'trade_id'               => $user_money_trade->id,
                            'order_id'               => $order['id'],
                            'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                            'name'                   => $order['product_name'],
                            'note'                   => "总后台对订单号[{$order["id"]}]最新SUP订单结算",
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
                        'order_id' => $order['order_id'],
                        'user_id'  => $order['sup_user_id'],
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('创建向供应商付款资金流水失败', $context);
                }
            }

            $count++;
        }

        return ['status' => true, 'msg' => $count . '项结算成功'];
    }

    /** 重新充值提示
     * @Route("/orders/recharge-again", name="admin_orders_recharge_again")
     *
     */
    public function rechargeAgainAction(Request $request, MobileOrderService $orderService) {
        $id    = $request->request->get('order_id');
        $again = $request->request->get('again');

        if (!$id) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        if (in_array($again, ['1', '2'])) {
            $password = $request->request->get('password');
            if (!password_verify($password, $this->getAdminUser()->password)) {
                return ['status' => false, 'msg' => '安全操作密码错误'];
            }
        }

        $options = [
            'select' => 'o.id,o.status,o.platform_id,o.product_name,o.settlement_status,o.user_id,s.id as sid,s.recharge_status,s.settle_status,s.sup_price,s.sup_user_id,l.id as lid',
            'from'   => OrderRecharge::table_name() . ' AS o',
            'joins'  => 'LEFT JOIN ' . OrderRechargeSup::table_name() . ' AS s ON s.order_id=o.id AND s.id=(SELECT max(id) FROM ' . OrderRechargeSup::table_name() . ' WHERE order_id=o.id) LEFT JOIN ' . UserMoneyTradeLog::table_name() . ' AS l ON l.order_id=o.id',
            'order'  => 'o.id DESC',
        ];

        $order = OrderRecharge::first(['o.id' => $id], $options);

        if (empty($order)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        // 重新充值前提
        // 1.主订单订单状态=充值中
        // 2.主订单订单状态=充值成功（系统和人工）
        if ($order->sid && !in_array($order->status, [OrderRecharge::STATUS_PROCESSING, OrderRecharge::STATUS_SUCCEED_SYS, OrderRecharge::STATUS_SUCCEED_MAN])) {
            return ['status' => false, 'msg' => '订单有误，暂不能充值'];
        }

        if ($again == 1) {//对当前最新SUP订单置失败并结算
            //当前最新SUP订单的订单状态,如果是充值成功，需要扣除已支付给供应商款项

            if (($order->status == OrderRecharge::STATUS_SUCCEED_SYS && $order->settle_status == OrderRechargeSup::SETTLE_STATUS_PAID) || ($order->status == OrderRecharge::STATUS_SUCCEED_MAN && in_array($order->settle_status, [OrderRechargeSup::SETTLE_STATUS_PAID, OrderRechargeSup::SETTLE_STATUS_PAID]))) {
                $user_money_trade = UserMoneyTradeLog::last(['order_id' => $order->id, 'other_party_user_id' => $order['sup_user_id']]);
                $platform_user    = $this->getPlatformAccountInfo($order->platform_id, $order['sup_user_id']);
                try {
                    UserMoneyLog::transaction(function () use ($order, $platform_user, $user_money_trade, $orderService) {
                        OrderRechargeSup::update_all(
                            [
                                'recharge_status' => OrderRechargeSup::STATUS_FAILED_ADMIN,
                                'edit_time'       => date('Y-m-d H:i:s')
                            ],
                            ['id' => $order['sid']]
                        );

                        UserMoneyLog::create([
                            'platform_id'            => $order->platform_id,
                            'user_id'                => $order->sup_user_id,
                            'trade_id'               => $user_money_trade->trade_id,
                            'order_id'               => $order->id,
                            'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                            'name'                   => $order->product_name,
                            'note'                   => "总后台对订单号[{$order->id}]重新充值前结算最新SUP订单",
                            'amount'                 => -abs($order->sup_price),
                            'current_balance'        => !empty($platform_user->balance) ? $platform_user->balance : 0,
                            'platform_total_balance' => '',
                            'add_time'               => time(),
                        ]);
                        //扣除供应商相应平台余额
                        //$platform_user->balance -= abs($order->sup_price);
                        $orderService->refund($platform_user, $order->sup_price);
                        $platform_user->save();
                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order->id,
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('重新充值前对当前最新SUP订单置失败并结算失败', $context);
                }
            }
            $log_text = "用户[{$this->getAdminUser()->user_name}]在订单号[{$order->id}]重新充值前对当前最新SUP订单置失败并结算";
        } else {//对当前最新SUP订单不进行任何操作
            $log_text = "用户[{$this->getAdminUser()->user_name}]在订单号[{$order->id}]重新充值前对当前最新SUP订单不进行任何操作";
        }
        // 当主订单订单状态=充值失败，又需要重新充值时，必须先操作置成功（扣除狐豆开放平台用户账户对应金额）后，再进行重新充值。
        if ($order->status == OrderRecharge::STATUS_FAILED_SYS || $order->status == OrderRecharge::STATUS_FAILED_MAN) {
            if ($order->settlement_status < OrderRecharge::SETTLEMENT_COMPLETED) {
                $platform_user = $this->getPlatformAccountInfo($order->platform_id, $order['sup_user_id']);
                try {
                    UserMoneyLog::transaction(function () use ($order, $platform_user) {
                        UserMoneyLog::create([
                            'platform_id'            => $order->platform_id,
                            'user_id'                => $order->user_id,
                            'amount'                 => -abs($order->sup_price),
                            'name'                   => $order->product_name,
                            'log_type'               => UserMoneyLog::TYPE_ORDER_SETTLEMENT,
                            'note'                   => "总后台对充值失败的订单重新充值前操作置成功扣款",
                            'trade_id'               => $order->lid,
                            'order_id'               => $order->id,
                            'current_balance'        => $platform_user->balance,
                            'platform_total_balance' => '',
                            'add_time'               => time(),
                        ]);
                        //扣减用户相应平台余额
                        $platform_user->balance -= abs($order->sup_price);
                        $platform_user->save();

                        //修改订单状态
                        OrderRecharge::update_all(
                            [
                                'status'            => OrderRecharge::STATUS_SUCCEED_MAN,
                                'settlement_status' => OrderRecharge::SETTLEMENT_COMPLETED,
                                'edit_time'         => date('Y-m-d H:i:s')
                            ],
                            ['id' => $order->id]
                        );
                        return true;
                    });
                } catch (\Exception $e) {
                    $context = [
                        'order_id' => $order->id,
                        'user_id'  => $order->user_id,
                        'admin_id' => $this->getAdminUser()->id,
                        'error'    => $e->getMessage(),
                        'stack'    => $e->getTraceAsString()
                    ];
                    $this->logger->error('总后台对充值失败的订单重新充值前操作置成功扣款失败', $context);
                }

                $log_text = "用户[{$this->getAdminUser()->user_name}]对订单号[{$order->id}]重新充值前操作置成功扣款";
            }
        }

        // 写入日志
        AdminOperationLog::create([
            'user_id'      => $this->getAdminUser()->id,
            'type'         => AdminOperationLog::OPERATION_RECHARGE_AGAIN,
            'subject_type' => 'ORDER',
            'info'         => $log_text,
            'ip'           => $request->getClientIp(),
            'add_time'     => date('Y-m-d H:i:s'),
        ]);

        return ['status' => true, 'msg' => '操作成功'];
    }

    /**
     * 重新充值订单
     * @Route("/orders/recharge-order", name="admin_orders_recharge_order")
     */
    public function rechargeOrderAction(Request $request) {
        $id = $request->query->get('order_id');

        if (!$id) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        //列出可重新充值的订单
        $where   = ['o.status' => [OrderRecharge::STATUS_PROCESSING, OrderRecharge::STATUS_SUCCEED_SYS, OrderRecharge::STATUS_SUCCEED_MAN], 'o.id' => $id];
        $options = [
            'select' => 'o.*,(o.real_sell_price-o.sell_price) as profit,u.user_name,u.nick_name,s.template_id',
            'from'   => OrderRecharge::table_name() . ' AS o',
            'joins'  => 'LEFT JOIN ' . Product::table_name() . ' AS p ON p.id=o.product_id ' .
                ' LEFT JOIN ' . User::table_name() . ' AS u ON u.id=o.user_id ' .
                ' LEFT JOIN ' . ProductSource::table_name() . ' AS s ON s.id=o.source_id',
            'order'  => 'o.id DESC',
        ];
        $data    = OrderRecharge::all($where, $options);

        if (!$data) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }

        if (!$request->isXmlHttpRequest()) {
            $source = [];
            //列出可用货源
            foreach ($data as $k => $v) {
                $icp = MobileNumberChecker::getLocationInfo($v['phone_number']);

                if ($icp['status']) {
                    $sql   = 'SELECT
                                s.id AS source_id,
                                s.face_value_type,
                                s.province_code,
                                s.city_code,
                                s.operator_name,
                                s.face_value,
                                s.province_name,
                                s.city_name,
                                t.sn,
                                t.name AS template_name,
                                u.user_name AS sell_user_name,
                                u.nick_name AS sell_nick_name,
                                CASE s.face_value_type
                            WHEN 1 THEN
                                "元"
                            WHEN 3 THEN
                                "元"
                            WHEN 2 THEN
                                "元任意充"
                            END AS unit_name,
                             CASE s.face_value_type
                            WHEN 1 THEN
                                s.source_cost
                            WHEN 2 THEN
                                s.source_cost * ' . $v['buy_num'] . '
                            END AS cost
                            FROM
                                ' . ProductSource::table_name() . ' AS s
                            LEFT JOIN ' . SourceGroup::table_name() . ' AS t ON t.id = s.template_id
                            LEFT JOIN ' . User::table_name() . ' AS u ON u.id = t.sell_user_id
                            WHERE
                                s.operator_name = ?
                            AND s.face_value = ?
                            AND s.face_value_type = ?
                            AND ((
                                s.province_code = ?
                                OR s.city_code = ?
                            )
                            OR (
                                s.province_code = ?
                                AND s.city_code = ?
                            ))';
                    $param = [$icp['operator_name'], $v['recharge_amount'], 1, $icp['province_code'], $icp['city_code'], 1, 0];

                    $source[$k] = ProductSource::query($sql, $param)->fetchAll();
                }
            }
            return $this->render('Admin/Order/recharge_order.twig', ['data' => $data, 'source' => $source]);
        }

        $password = $request->request->get('password');
        $item     = $request->request->get('item');
        $source   = $request->request->get('source');

        if (!$password) {
            return ['status' => false, 'msg' => '密码不能为空'];
        }
        if (!password_verify($password, $this->getUser()->password)) {
            return ['status' => false, 'msg' => '密码错误'];
        }

        $original = false;
        if ($request->request->get('original') == 'yes') {
            $original = true;
        } else {
            if (!$item && !$request->request->post('source')) {
                return ['status' => false, 'msg' => '您没有选择货源'];
            }
        }

        $count = 0;
        foreach ($item as $k => $v) {
            $result = false;
            try {
                if ($original) {
                    $sql    = 'update ' . OrderRecharge::table_name() . ' set recharge_sequence = recharge_sequence+?, status = ?, edit_time = ? where id = ?';
                    $param  = [1, 1, date('Y-m-d H:i:s'), $v['id']];
                    $result = OrderRecharge::transaction(function () use ($sql, $param, $data, $k, $request) {
                        OrderRecharge::query($sql, $param);

                        //创建新SUP订单与主订单关联
                        OrderRechargeSup::create([
                            'order_id'                 => $data[$k]['id'],
                            'sup_order_cate_id'        => $data[$k]['order_cate_id'],
                            'template_id'              => $data[$k]['template_id'],
                            'sup_user_id'              => $data[$k]['supplier_id'],
                            'source_id'                => $data[$k]['source_id'],
                            'source_face_value'        => $data[$k]['product_face_value'],
                            'source_buy_num'           => $data[$k]['buy_num'],
                            'sup_cost'                 => $data[$k]['sell_price'],
                            'sup_price'                => $data[$k]['real_sell_price'],
                            'sup_profit'               => $data[$k]['profit'],
                            'phone_number'             => $data[$k]['phone_number'],
                            'recharge_sequence'        => 1,
                            'recharge_status'          => OrderRechargeSup::STATUS_PENDING,//待提单
                            'sup_speed'                => $data[$k]['speed'],
                            'add_time'                 => date('Y-m-d H:i:s'),
                            'source_product_name'      => $data[$k]['product_name'] ?? '',
                            'source_product_cate_id'   => $data[$k]['product_master_id'],
                            'source_product_master_id' => $data[$k]['product_cate_id'],
                            //'source_product_unit'      => $data[$k][''],
                            'province_name'            => $data[$k]['province_name'],
                            'city_name'                => $data[$k]['city_name'],
                            'mvno'                     => $data[$k]['mvno'],
                            'recharge_ip'              => $request->getClientIp(),
                        ]);

                        return true;
                    });
                } else {
                    if ($source) {
                        $v['source_id'] = $source;
                    }

                    $template = $this->sourceInfo($v['source_id']);

                    if (!$template['status']) {
                        return ['status' => false, 'msg' => '操作失败货源' . $v['source_id'] . '异常'];
                    }
                    $template = $template['data'];

                    $sql = 'update ' . OrderRecharge::table_name() . ' set recharge_sequence = recharge_sequence + ?,status = ?,settlement_status = ?,edit_time = ? ,source_id = ?,sell_price = ? where id = ?';

                    $param = [1, 1, 1, date('Y-m-d H:i:s'), intval($v['source_id']), $template['source_cost'], $v['id']];

                    $result = OrderRecharge::transaction(function () use ($sql, $param, $data, $k, $request, $template) {
                        OrderRecharge::query($sql, $param);

                        //创建新SUP订单与主订单关联
                        OrderRechargeSup::create([
                            'id'                       => OrderRechargeSup::newId(),
                            'order_id'                 => $data[$k]['id'],
                            'sup_order_cate_id'        => $data[$k]['order_cate_id'],
                            'template_id'              => $template['t_id'],
                            'sup_user_id'              => $template['sell_user_id'],
                            'source_id'                => $template['id'],
                            'source_face_value'        => $data[$k]['product_face_value'],
                            'source_buy_num'           => $data[$k]['buy_num'],
                            'sup_cost'                 => $template['source_cost'],
                            'sup_price'                => $template['source_price'],
                            'sup_profit'               => ($template['source_price'] - $template['source_cost']) * $data[$k]['buy_num'],
                            'phone_number'             => $data[$k]['phone_number'],
                            'recharge_sequence'        => 1,
                            'recharge_status'          => OrderRechargeSup::STATUS_PENDING,//待提单
                            'sup_speed'                => $data[$k]['speed'],
                            'add_time'                 => date('Y-m-d H:i:s'),
                            'source_product_name'      => $template['product_name'] ?? '',
                            'source_product_cate_id'   => $data[$k]['product_master_id'],
                            'source_product_master_id' => $data[$k]['product_cate_id'],
                            //'source_product_unit'      => $data[$k]['source_product_unit'],
                            'province_name'            => $template['province_name'],
                            'city_name'                => $template['city_name'],
                            'mvno'                     => $template['mvno'],
                            'recharge_ip'              => $request->getClientIp(),
                        ]);

                        return true;
                    });
                }
            } catch (\Exception $e) {
                $this->logger->error('操作失败', ['admin_id' => $this->getUserId(), 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()]);
            }

            if ($result) {
                $count++;
            }
        }
        return ['status' => true, 'msg' => $count . '项操作成功'];
    }

    /**
     * 货源信息
     * @Route("/orders/get-source-info", name="admin_orders_get_source_info")
     */
    public function getSourceInfoAction(Request $request) {
        $id = $request->query->get('id');
        return $this->sourceInfo($id);
    }

    private function sourceInfo($id) {
        $where   = ['s.id' => $id];
        $options = [
            'select' => 'FORMAT(s.source_cost,5) as source_cost,t.sn as t_sn,t.name,t.id as t_id,s.sell_user_id,s.id,s.source_price,' .
                's.province_name,s.city_name,s.mvno,p.name as product_name',
            'from'   => ProductSource::table_name() . ' AS s',
            'joins'  => 'LEFT JOIN ' . SourceGroup::table_name() . ' AS t ON t.id=s.template_id LEFT JOIN ' . Product::table_name() . ' AS p ON p.id=s.product_id',
            'order'  => 's.id DESC',
        ];
        $data    = ProductSource::first($where, $options);
        if (!$data) {
            return ['status' => false, 'msg' => '货源不存在'];
        }
        return ['status' => true, 'data' => $data->to_array()];
    }

    /** 验证最新SUP订单状态
     * @Route("/orders/get-sup-order-status", name="admin_orders_get_sup_order_status")
     *
     */
    public function getSupOrderStatusAction(Request $request) {
        $order_id = $request->request->get('order_id');
        if (!$order_id) {
            return ['status' => false, 'msg' => '订单id不能为空'];
        }
        $options   = [
            'select' => 'o.id,s.recharge_status',
            'from'   => OrderRecharge::table_name() . ' AS o',
            'joins'  => 'LEFT JOIN ' . OrderRechargeSup::table_name() . ' AS s ON s.order_id = o.id',
            'order'  => 'o.id DESC',
        ];
        $sup_order = OrderRechargeSup::last(['s.order_id' => $order_id], $options);
        if (empty($sup_order)) {
            return ['status' => false, 'msg' => '订单不存在'];
        }

        if (!in_array($sup_order->recharge_status, [OrderRechargeSup::STATUS_FAILED_SYS, OrderRechargeSup::STATUS_FAILED_SUP, OrderRechargeSup::STATUS_FAILED_ADMIN])) {
            return ['status' => true, 'msg' => '获取成功'];
        } else {
            return ['status' => false, 'msg' => '获取成功'];
        }
    }

    /** 查询手机话费余额
     * @Route("/orders/query-mobile-balance", name="admin_orders_query_mobile_balance")
     *
     */
    public function queryMobileBalanceAction(Request $request) {
        if ($request->getMethod() != Request::METHOD_POST) {
            return ['status' => false, 'msg' => '非法操作'];
        }

        $order_sn = $request->request->get('order_sn');

        if (!$order_sn) {
            return ['status' => false, 'msg' => '非法操作'];
        }

        $order = OrderRecharge::first(['order_sn' => $order_sn, 'product_cate' => Constants::PRODUCT_CATE_MOBILE_PHONE]);

        if (!$order) {
            return ['status' => false, 'msg' => '非法订单'];
        }
        $query = QueryMobileBalance::getResult($order->recharge_number, 3, $this->getAdminUser()->id, 5, ['icp' => $order->icp]);
        if (!$query['status']) {
            return ['status' => false, 'msg' => '查询失败，请稍后再试'];
        }
        $order->on_after_info = json_encode($query, JSON_UNESCAPED_UNICODE);
        $order->save();
        return ['status' => true, 'msg' => '查询成功', 'result' => $query['name'] . $query['balance'], 'query' => $query];
    }

    /** 话费余额查询记录
     * @Route("/orders/query-mobile-balance-logs", name="admin_orders_query_mobile_balance_logs")
     *
     */
    public function queryMobileBalanceLogsAction(Request $request, Form $form) {
        if ($request->query->count() <= 2) {
            return $this->render('Admin/Order/balance_logs.twig');
        }

        $form->init([
            'user_name'   => [''],
            'platform_id' => ['integer'],
            'mobile'      => ['require,mobile'],
            'status'      => ['integer'],
            'start_time'  => ['date'],
            'end_time'    => ['date'],
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }
        $where = ['u.user_name' => $form->user_name, 'l.mobile' => $form->mobile];
        if ($form->platform_id > 0) {
            $where['l.platform_id'] = $form->platform_id;
        }

        if ($form->status > 0) {
            $where['l.status'] = $form->status;
        }

        $start_time = $form->start_time ? strtotime($form->start_time) : strtotime(date('Y-m-d'));
        $end_time   = $form->end_time ? strtotime($form->end_time) + 86399 : strtotime(date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '查询范围不允许超过30天'];
        }
        $where['l.add_time'] = ['BETWEEN' => [$start_time, $end_time]];

        $options = [
            'select' => 'l.id,l.user_id,l.platform_id,l.status,l.mobile,l.request,l.params,l.response,l.add_time,l.ip,u.user_name,u.nick_name',
            'from'   => '`' . MobileBalanceQuery::table_name() . '` AS l',
            'joins'  => 'LEFT JOIN `' . User::table_name() . '` AS u ON l.user_id = u.id',
            'order'  => 'l.id DESC'
        ];
        list($data, $total) = MobileBalanceQuery::paginate($where, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /** 订单详情
     * @Route("/orders/detail", name="admin_orders_detail")
     */
    public function detailAction(Request $request) {
        $order_id = $request->query->get('id');
        $select   = 'o.product_cate_id,o.order_cate_id,o.id,o.product_name,o.operator_id,o.province_name,o.city_name,o.product_face_value,o.recharge_method,o.note,
        o.recharge_sequence,o.status,s.recharge_status,o.outer_sn,s.settle_status,o.settlement_status,s.sup_cost,s.sup_user_id,
        o.user_ip,s.sup_price,o.sell_price,(o.sell_price-s.sup_price) as profit,o.phone_number,o.recharge_amount,o.add_time,o.pay_time,o.end_time,
        s.template_id,t.id as t_id,t.name as template_name,u.nick_name as user_nick_name,
        t.supply_type,o.platform_id,o.user_id,o.admin_info,su.nick_name as sell_nick_name,t.sell_user_id,su.user_name as sell_username,
        u.user_name,s.source_id,s.official_sn,s.sup_info';

        $joins   = 'LEFT JOIN ' . OrderRechargeSup::table_name() . ' AS s ON o.id=s.order_id ';
        $joins   .= 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=o.user_id ';
        $joins   .= 'LEFT JOIN ' . SourceGroup::table_name() . ' AS t ON s.template_id=t.sn ';
        $joins   .= 'LEFT JOIN ' . User::table_name() . ' AS su ON t.sell_user_id=su.id ';
        $where   = ['o.id' => $order_id];
        $options = [
            'select' => $select,
            'from'   => OrderRecharge::table_name() . ' AS o',
            'joins'  => $joins,
            'order'  => 'o.id DESC',
        ];
        $data    = OrderRecharge::first($where, $options);

        $select = 's.id,l.sup_order_id,s.order_id,s.recharge_sequence,l.recharge_status,l.settle_status,
        l.add_time,s.template_id,t.name as t_name,s.sup_price,s.phone_number,l.operation_user_id,l.order_status,l.if_admin,
        l.operation_type,s.source_id,s.sup_user_id';

        $joins = 'LEFT JOIN ' . OrderRechargeSup::table_name() . ' AS s ON l.sup_order_id=s.id ';
        $joins .= 'LEFT JOIN ' . SourceGroup::table_name() . ' AS t ON s.template_id=t.sn ';

        $options = [
            'select' => $select,
            'from'   => OrderRechargeSupOperationLog::table_name() . ' AS l',
            'joins'  => $joins,
            'order'  => 'l.sup_order_id DESC,l.id DESC',
        ];

        $recharge_status_log = OrderRechargeSupOperationLog::all(['s.order_id' => $order_id], $options);

        $having_operation_user = [];//防止相同operation_user_id多次查询数据库

        foreach ($recharge_status_log as &$v) {
            $key = $v['operation_user_id'] . $v['if_admin'];
            if (isset($having_operation_user[$key])) {
                $v['operation_user'] = $having_operation_user[$key];
                continue;
            }
            if ($v['operation_user_id'] == 0) {
                $having_operation_user[$key] = '系统分配';
            } elseif ($v['if_admin'] == 1) {
                $admin = AdminUser::find($v['operation_user_id']);
                if ($admin) {
                    $having_operation_user[$key] = $admin->user_name;
                } else {
                    $having_operation_user[$key] = '未知管理员操作';
                }
            } else {
                $user = User::find($v['operation_user_id']);
                if ($user) {
                    $having_operation_user[$key] = "{$user->user_name}<br/>({$user->nick_name})";
                } else {
                    $having_operation_user[$key] = '未知用户操作';
                }
            }
            $v['operation_user'] = $having_operation_user[$key];
        }
        // $user_level = (new Query())->select('l.id,l.name')
        //     ->from(SystemConfig::getPintaiUserTableName($data['pintai']) . 'as u')->join('left join', '{{%pintai_user_level}} as l', 'u.level=l.id')->where(['u.user_id' => $data['user_id']])->limit(1)->one();
        $product_cate = ProductCate::get();

        return $this->render('Admin/Order/detail.twig', ['data' => $data, 'recharge_status_log' => $recharge_status_log, 'product_cate' => $product_cate]);
    }

    /** 号卡订单
     * @Route("/orders/kahao", name="admin_orders_kahao")
     */
    public function kahaoAction(Request $request) {
        return $this->render("Admin/Order/kahao.twig");
    }

    /** 票务订单
     * @Route("/orders/tickets", name="admin_orders_tickets")
     */
    public function ticketsAction(Request $request) {
        return $this->render("Admin/Order/tickets.twig");
    }

    /** 提现订单
     * @Route("/orders/withdraw", name="admin_orders_withdraw")
     */
    public function withdrawAction(Request $request) {
        return $this->render("Admin/Order/withdraw.twig");
    }

}
