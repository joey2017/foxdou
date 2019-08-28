<?php

namespace App\Admin\Controller\UserDetail;

use App\Admin\Controller\AdminBaseController;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Payment\UserBalanceRechargeOrders;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\SubAccount;
use App\Common\Model\User\User;
use App\Platform;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

class ResellerPlatformController extends AdminBaseController {
    use MenuTraits;

    public static $_agency_type = [1 => '系统直属代理商', 2 => '经销商', 3 => '经销商直属'];

    /**
     * @Route("/user-details/reseller-platform/details-main", name="admin_user_details_reseller_platform_details_main")
     *
     */
    public function detailsMainAction(Request $request) {
        return $this->render('Admin/UserDetail/details_main.twig',
            [
                'id'               => $request->query->get('id'),
                'left_route_path'  => 'admin_user_details_reseller_platform_left_main',
                'right_route_path' => 'admin_user_details_reseller_platform_basic_info'
            ]);
    }

    /**
     * @Route("/user-details/reseller-platform/left-main", name="admin_user_details_reseller_platform_left_main")
     *
     */
    public function leftMainAction(Request $request) {
        return $this->render('Admin/UserDetail/left_main.twig', ['left_menu' => $this->getMenu('reseller'), 'id' => $request->query->get('id')]);
    }

    /**
     * @Route("/user-details/reseller-platform/basic-info", name="admin_user_details_reseller_platform_basic_info")
     */
    public function basicInfoAction(Request $request) {
        //$user_pintai=\common\models\users\Users::queryUserPintai($this->user['id']);
        $id = $request->query->getInt('id', 0);

        if (empty($id)) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $user_agent = ResellerAccount::first(['user_id' => $id]);
        if (empty($user_agent)) {
            return ['status' => false, 'msg' => '非代理商用户'];
        }

        $user = User::first(['id' => $user_agent['parent_dealer_user_id']], ['select' => 'user_name']);

        return $this->render("Admin/UserDetail/ResellerPlatform/basic_info.twig",
            [
                'user_agent' => $user_agent,
                'user_name'  => !empty($user->user_name) ? $user->user_name : '',
                'agent_type' => self::$_agency_type,
            ]
        );
    }

    /**
     * @Route("/user-details/reseller-platform/contact", name="admin_user_details_reseller_platform_contact")
     */
    public function contactAction(Request $request) {
        $id = $request->query->getInt('id', 0);

        if (empty($id)) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $user = ResellerAccount::first(['user_id' => $id], ['select' => 'id,shop_name,shop_address']);

        return $this->render('Admin/UserDetail/ResellerPlatform/contact.twig', ['user' => $user]);
    }

    /**
     * @Route("/user-details/reseller-platform/extension", name="admin_user_details_reseller_platform_extension")
     */
    public function extensionAction(Request $request) {
        return $this->render('Admin/UserDetail/ResellerPlatform/extension.twig',
            [
                'id'           => $request->query->getInt('id'),
                'agency_types' => self::$_agency_type,
                'statuses'     => SubAccount::STATUSES
            ]
        );
    }

    /**
     * @Route("/user-details/reseller-platform/ajax-extension", name="admin_user_details_reseller_platform_ajax_extension")
     */
    public function ajaxExtensionAction(Request $request, Form $form) {

        $id = $request->query->getInt('id', 0);

        if (empty($id)) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'user_name'   => [''],
            'nick_name'   => [''],
            'level'       => ['integer'],
            'status'      => [to_enum(ResellerAccount::STATUSES)],
            'agency_type' => ['integer']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = ['au.parent_dealer_user_id' => $id];

        if ($form->get('user_name')) {
            $where['u.user_name'] = ['LIKE' => '%' . $form->get('user_name') . '%'];
        }

        if ($form->get('nick_name')) {
            $where['u.nick_name'] = ['LIKE' => '%' . $form->get('nick_name') . '%'];
        }

        if ($form->get('status')) {
            $where['au.status'] = $form->get('status');
        }

        if ($form->get('agency_type')) {
            $where['au.agency_type'] = $form->get('agency_type');
        }

        $options = [
            'select' => 'u.user_name,u.nick_name,au.balance,au.rebate_balance,level,au.status,au.agency_type,au.add_time',
            'from'   => '`'.ResellerAccount::table_name().'` AS au',
            'joins'  => 'LEFT JOIN `'.User::table_name().'` AS u ON u.id=au.user_id',
            'order'  => 'au.id DESC',
        ];
        list($data, $total) = ResellerAccount::paginate($where, $options);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }


    /**
     * @Route("/user-details/reseller-platform/finance", name="admin_user_details_reseller_platform_finance")
     */
    public function finance(Request $request) {
        $id = $request->query->getInt('id', 0);

        if (empty($id)) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $user_agent = ResellerAccount::first(['user_id' => $id, 'status' => ResellerAccount::STATUS_ACTIVE]);

        if (empty($user_agent)) {
            return ['status' => false, 'msg' => '找不到指定的数据'];
        }

        return $this->render('Admin/UserDetail/ResellerPlatform/finance.twig', ['user_agent' => $user_agent, 'id' => $id]);
    }


    /**
     * @Route("/user-details/reseller-platform/finance-detail", name="admin_user_details_reseller_platform_finance_detail")
     */
    public function financeDetailAction(Request $request) {
        return $this->render('Admin/UserDetail/ResellerPlatform/finance_detail.twig', ['id' => $request->query->getInt('id')]);
    }


    /**
     * @Route("/user-details/reseller-platform/ajax-finance-detail", name="admin_user_details_reseller_platform_ajax_finance_detail")
     */
    // 资金明细
    public function ajaxFinanceDetailAction(Request $request, Form $form) {

        $id     = $request->query->get('id', 0);
        $name   = $request->query->getInt('name', '');
        $export = $request->query->get('export');
        $count  = $request->query->get('count');

        if ($id <= 0) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'amount_min' => ['numeric'],
            'amount_max' => ['numeric'],
            'log_type'   => ['integer'],
            'start_time' => ['date'],
            'end_time'   => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        $amount_min = $form->get('amount_min');
        $amount_max = $form->get('amount_max');
        $log_type   = $form->getInt('log_type');

        if (abs(date('m', $end_time) - date('m', $start_time)) >= 1 || abs(date('Y', $end_time) - date('Y', $start_time)) >= 1) {
            return ['status' => false, 'msg' => '时间范围不允许超过1个月'];
        }

        if ($amount_max < $amount_min) {
            return ['status' => false, 'msg' => '金额范围最大值不能小于最小值'];
        }

        $options = [
            'select' => 'trade_id,order_id,name,log_type,amount,current_balance,add_time',
        ];

        $where = [
            'user_id'     => $id,
            'platform_id' => Platform::RESELLER,
            'amount'      => ['BETWEEN' => [$amount_min, $amount_max]],
            'add_time'    => ['BETWEEN' => [$start_time, $end_time]],
        ];

        if (isset($log_type)) {
            $where['log_type'] = $log_type;
        }

        if (!empty($name)) {
            $where['name'] = $name;
        }

        // 数据导出
        if ($export == 'yes') {
            $data = UserMoneyLog::all($where, $options);

            if (empty($data)) {
                return ['status' => false, 'msg' => '暂无数据'];
            }

            foreach ($data as $k => $v) {
                $data[$k]['log_type'] = UserMoneyLog::LOG_TYPES[$v['log_type']];
                $data[$k]['add_time'] = $v['add_time'] ? date("Y-m-d H:i:s", $data[$k]['add_time']) : '';
            }

            /*theCsv::export([
                    'data'=>$data,
                    'header' => ['流水号','业务单号','交易名称','类型','金额','交易后余额','时间'],
                    'name'=>'资金明细'.date("YmdHis").'.csv'
             ]);*/
            exit();
        } elseif ($count == 'yes') {
            $opt['select'] = 'count(id) as count,ifnull(sum(amount),0) as sum_money';

            //收入;
            $data['income'] = UserMoneyLog::all(array_merge($where, ['amount' => ['>' => 0]]), $opt);

            //支出
            $data['payment'] = UserMoneyLog::all(array_merge($where, ['amount' => ['>' => 0]]), $opt);

            return ['status' => true, 'data' => $data];
        }
        list($data, $total) = UserMoneyLog::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }


    /**
     * @Route("/user-details/reseller-platform/charge-logs", name="admin_user_details_reseller_platform_charge_logs")
     */
    public function chargeLogsAction(Request $request) {
        return $this->render('Admin/UserDetail/ResellerPlatform/charge_logs.twig', ['id' => $request->query->getInt('id')]);
    }


    /**
     * @Route("/user-details/reseller-platform/ajax-charge-logs", name="admin_user_details_reseller_platform_ajax_charge_logs")
     */
    // 充值记录
    public function ajaxChargeLogsAction(Request $request, Form $form) {

        $id     = $request->query->get('id', 0);
        $name   = $request->query->getInt('name', '');
        $export = $request->query->get('export');
        $count  = $request->query->get('count');

        if ($id <= 0) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'amount_min'       => ['numeric'],
            'amount_max'       => ['numeric'],
            'status'           => ['integer'],
            'payment_class_id' => ['integer'],
            'start_time'       => ['date'],
            'end_time'         => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        $amount_min = $form->get('amount_min');
        $amount_max = $form->get('amount_max');

        if (abs(date('m', $end_time) - date('m', $start_time)) >= 1 || abs(date('Y', $end_time) - date('Y', $start_time)) >= 1) {
            return ['status' => false, 'msg' => '时间范围不允许超过1个月'];
        }

        if ($amount_max < $amount_min) {
            return ['status' => false, 'msg' => '金额范围最大值不能小于最小值'];
        }

        $options = [
            'select' => 'trade_sn,id,status,amount,payment_class_id,current_balance,note,add_time',
        ];

        $where = [
            'user_id'     => $id,
            'platform_id' => Platform::RESELLER,
            'amount'      => ['BETWEEN' => [$amount_min, $amount_max]],
            'add_time'    => ['BETWEEN' => [$start_time, $end_time]],
        ];

        if (!empty($name)) {
            $where['name'] = $name;
        }

        if (!empty($form->get('payment_class_id'))) {
            $where['payment_class_id'] = $form->get('payment_class_id');
        }

        // 数据导出
        if ($export == 'yes') {
            $data = UserBalanceRechargeOrders::all($where, $options);

            if (empty($data)) {
                return ['status' => false, 'msg' => '暂无数据'];
            }

            foreach ($data as $k => $v) {
                $data[$k]['status']   = UserBalanceRechargeOrders::STATUSES[$v['status']];
                $data[$k]['add_time'] = $v['add_time'] ? date("Y-m-d H:i:s", $data[$k]['add_time']) : '';
            }

            /*theCsv::export([
                    'data'=>$data,
                    'header' => ['流水号','业务单号','交易名称','类型','金额','交易后余额','时间'],
                    'name'=>'资金明细'.date("YmdHis").'.csv'
             ]);*/
            exit();
        } elseif ($count == 'yes') {
            $opt['select'] = 'count(id) as count,ifnull(sum(amount),0) as sum_money';

            //收入;
            $data['income'] = UserBalanceRechargeOrders::all(array_merge($where, ['amount' => ['>' => 0]]), $opt);

            return ['status' => true, 'data' => $data];
        }
        list($data, $total) = UserBalanceRechargeOrders::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }


    /**
     * @Route("/user-details/reseller-platform/orders", name="admin_user_details_reseller_platform_orders")
     */
    public function ordersAction(Request $request) {
        return $this->render('Admin/UserDetail/ResellerPlatform/orders.twig', ['id' => $request->query->getInt('id')]);
    }


    /**
     * @Route("/user-details/reseller-platform/ajax-orders", name="admin_user_details_reseller_platform_ajax_orders")
     */
    // ta的订单
    public function ajaxOrdersAction(Request $request, Form $form) {
        $id     = $request->query->getInt('id', 0);
        $export = $request->query->get('export');
        $count  = $request->query->get('count');

        if ($id <= 0) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'speed'        => ['integer'],
            'status'       => ['integer'],
            //'recharge_amount' => ['numeric'],
            'order_id'     => ['numeric'],
            'product_name' => [''],
            'start_time'   => ['date'],
            'end_time'     => ['date']
        ]);
        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        if (abs(date('m', $end_time) - date('m', $start_time)) >= 1 || abs(date('Y', $end_time) - date('Y', $start_time)) >= 1) {
            return ['status' => false, 'msg' => '时间范围不允许超过1个月'];
        }

        $where = [
            'user_id'  => $id,
            'add_time' => ['BETWEEN' => [$start_time, $end_time]],
        ];

        if ($form->order_id) {
            $where['id'] = $form->order_id;
        }

        if ($form->product_name) {
            $where['product_name'] = ['LIKE' => '%' . $form->product_name . '%'];
        }

        if ($form->speed && in_array($form->speed, [1, 2])) {
            $where['speed'] = $form->speed;
        }

        if (in_array($form->status, [0, 1, 2, 3, 4, 5])) {
            $where['status'] = $form->status;
        }

        $options = [
            'select' => 'id,product_name,product_face_value,buy_num,recharge_amount,sell_price,real_sell_price,(real_sell_price-sell_price) as profit,phone_number,status,add_time,pay_time,end_time,admin_info,note'
        ];

        // 数据导出
        if ($export == 'yes') {
            $data = OrderRecharge::all($where, $options, $form->page, $form->limit);

            if (empty($data)) {
                return ['status' => false, 'msg' => '暂无数据'];
            }

            foreach ($data as $k => $v) {
                $data[$k]['status'] = OrderRecharge::STATUSES[$v['status']];
            }

            /*theCsv::export([
                'data'   => $data,
                'header' => ['交易流水号', '业务单号', '交易名称', '交易类型', '金额', '交易状态', '创建时间', '付款时间', '完成时间'],
                'name'   => 'trade.csv'
            ]);*/
            exit();
        } elseif ($count == 'yes') {
            $opt['select'] = 'count(id) as count,sum(recharge_amount) as recharge_amount,sum(real_sell_price-sell_price) as profit';

            $data['success']  = OrderRecharge::all(array_merge($where, ['status' => [OrderRecharge::STATUS_SUCCEED_MAN,OrderRecharge::STATUS_SUCCEED_SYS]]), $opt);
            $data['loser']    = OrderRecharge::all(array_merge($where, ['status' => [OrderRecharge::STATUS_FAILED_SYS,OrderRecharge::STATUS_FAILED_MAN]]), $opt);
            $data['recharge'] = OrderRecharge::all(array_merge($where, ['status' => OrderRecharge::STATUS_PROCESSING]), $opt);
            $data['nopay']    = OrderRecharge::all(array_merge($where, ['status' => OrderRecharge::STATUS_PENDING_PAYMENT]), $opt);

            return ['status' => true, 'data' => $data];
        }

        list($data, $total) = OrderRecharge::paginate($where, $options);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }


    /**
     * @Route("/user-details/reseller-platform/trade-logs", name="admin_user_details_reseller_platform_trade_logs")
     */
    public function tradeLogsAction(Request $request) {
        return $this->render("Admin/UserDetail/ResellerPlatform/trade_logs.twig", ['id' => $request->query->getInt('id')]);
    }


    /**
     * @Route("/user-details/reseller-platform/ajax-trade-logs", name="admin_user_details_reseller_platform_ajax_trade_logs")
     */
    public function ajaxTradeLogs(Request $request, Form $form) {
        $id     = $request->query->get('id', 0);
        $name   = $request->query->getInt('name', '');
        $export = $request->query->get('export');
        $count  = $request->query->get('count');

        if ($id <= 0) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'amount_min'       => ['numeric'],
            'amount_max'       => ['numeric'],
            'payment_class_id' => ['integer'],
            'trade_status'     => ['integer'],
            'trade_log_type'   => ['integer'],
            'start_time'       => ['date'],
            'end_time'         => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        $amount_min       = $form->get('amount_min');
        $amount_max       = $form->get('amount_max');
        $payment_class_id = $form->getInt('payment_class_id');
        $trade_log_type   = $form->getInt('trade_log_type');
        $trade_status     = $form->getInt('trade_status');

        if (abs(date('m', $end_time) - date('m', $start_time)) >= 1 || abs(date('Y', $end_time) - date('Y', $start_time)) >= 1) {
            return ['status' => false, 'msg' => '时间范围不允许超过1个月'];
        }

        if ($amount_max < $amount_min) {
            return ['status' => false, 'msg' => '金额范围最大值不能小于最小值'];
        }

        $options = [
            'select' => 'id,order_id,name,trade_log_type,amount,trade_status,payment_class_id,add_time,pay_time,end_time',
        ];

        $where = [
            'user_id'          => $id,
            'platform_id'      => Platform::RESELLER,
            'amount'           => ['BETWEEN' => [$amount_min, $amount_max]],
            'add_time'         => ['BETWEEN' => [$start_time, $end_time]],
            'payment_class_id' => $payment_class_id
        ];

        if (isset($trade_log_type)) {
            $where['trade_log_type'] = $trade_log_type;
        }

        if (isset($trade_status)) {
            $where['trade_status'] = $trade_status;
        }

        if (!empty($name)) {
            $where['name'] = $name;
        }

        // 数据导出
        if ($export == 'yes') {
            $data = UserMoneyTradeLog::all($where, $options);

            if (empty($data)) {
                return ['status' => false, 'msg' => '暂无数据'];
            }

            foreach ($data as $k => $v) {
                $data[$k]['trade_log_type'] = UserMoneyTradeLog::TRADE_TYPES[$v['trade_log_type']];
                $data[$k]['trade_status']   = UserMoneyTradeLog::TRADE_STATUSES[$v['trade_status']];
                $data[$k]['add_time']       = $v['add_time'] ? date("Y-m-d H:i:s", $data[$k]['add_time']) : '';
                $data[$k]['pay_time']       = $v['pay_time'] ? date("Y-m-d H:i:s", $data[$k]['pay_time']) : '';
                $data[$k]['end_time']       = $v['add_time'] ? date("Y-m-d H:i:s", $data[$k]['end_time']) : '';
            }

            /*theCsv::export([
                'data'   => $data,
                'header' => ['交易流水号', '业务单号', '交易名称', '交易类型', '金额', '交易状态', '创建时间', '付款时间', '完成时间'],
                'name'   => 'trade.csv'
            ]);*/
            exit();
        } elseif ($count == 'yes') {
            $opt['select']         = 'count(id) as count';
            $data['no_pay']        = UserMoneyTradeLog::count(array_merge($where, ['trade_status' => 1]), $opt);
            $data['trading']       = UserMoneyTradeLog::count(array_merge($where, ['trade_status' => 2]), $opt);
            $data['loser']         = UserMoneyTradeLog::count(array_merge($where, ['trade_status' => 4]), $opt);
            $success_opt['select'] = 'count(id) as count,ifnull(sum(amount),0) as sum_money';
            $data['success']       = UserMoneyTradeLog::count(array_merge($where, ['trade_status' => 3]), $success_opt);

            return ['status' => true, 'data' => $data];
        }

        list($data, $total) = UserMoneyTradeLog::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }

    /**
     * @Route("/user-details/reseller-platform/operation-logs", name="admin_user_details_reseller_platform_operation_logs")
     */
    public function operationLogsAction(Request $request) {
        return $this->render("Admin/UserDetail/ResellerPlatform/operation_logs.twig", ['id' => $request->query->getInt('id', 0)]);
    }

    /**
     * @Route("/user-details/reseller-platform/ajax-operation-logs", name="admin_user_details_reseller_platform_ajax_operation_logs")
     */
    public function ajaxOperationLogsAction(Request $request, Form $form) {

        $id = $request->query->getInt('id', 0);

        if (empty($id)) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'ip'         => [''],
            'info'       => ['integer'],
            'user_name'  => [''],
            'start_time' => ['date'],
            'end_time'   => ['date'],
        ]);
        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        /*if (abs(date('m', $end_time) - date('m', $start_time)) >= 1 || abs(date('Y', $end_time) - date('Y', $start_time)) >= 1) {
            return ['status' => false, 'msg' => '时间范围不允许超过1个月'];
        }*/

        if ($start_time < $end_time && ceil(abs(($end_time - $start_time) / 60 / 60 / 24)) > 30) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        $where = ['l.user_id' => $id, 'l.platform_id' => Platform::RESELLER];

        if ($form->app_name) {
            $where['l.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        if ($form->info) {
            $where['l.info'] = ['LIKE' => '%' . $form->info . '%'];
        }

        if ($form->user_name) {
            $where['u.user_name'] = ['LIKE' => '%' . $form->user_name . '%'];
        }

        if ($form->ip) {
            $where['l.ip'] = $form->user_name;
        }

        $start_time = strtotime($form->getInt('start_time', 0));
        $end_time   = strtotime($form->getInt('end_time', 0));

        if ($start_time < $end_time) {
            $where['l.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        $options = [
            'select' => 'l.add_time,l.info,l.ip,u.user_name',
            'from'   => '`'.OperationLog::table_name().'` AS l',
            'joins'  => 'LEFT JOIN `'.User::table_name().'` AS u ON u.id=l.user_id',
            'order'  => 'l.id DESC'
        ];

        list($data, $total) = OperationLog::paginate($where, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }

}
