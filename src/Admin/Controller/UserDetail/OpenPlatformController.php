<?php
namespace App\Admin\Controller\UserDetail;

use App\Admin\Controller\AdminBaseController;
use App\Common\Model\User\UserService;
use App\Common\Model\OpenPlatform\App;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\UserBalanceRechargeOrders;
use App\Common\Model\Order\ServiceOrder;
use App\Common\Model\ApiRequestLog;
use App\Common\Model\User\OperationLog;
use App\Open\Model\Service;
use App\Platform;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Model\User\ContactInfo;
use App\Common\Model\User\User;

class OpenPlatformController extends AdminBaseController {
    use MenuTraits;

    /**
     * @Route("/user-details/open-platform/details-main", name="admin_user_details_open_platform_details_main")
     *
     */
    public function detailsMainAction(Request $request) {
        return $this->render('Admin/UserDetail/details_main.twig',
            [
                'id'               => $request->query->get('id'),
                'left_route_path'  => 'admin_user_details_open_platform_left_main',
                'right_route_path' => 'admin_user_details_open_platform_basic_info'
            ]);
    }

    /**
     * @Route("/user-details/open-platform/left-main", name="admin_user_details_open_platform_left_main")
     *
     */
    public function leftMainAction(Request $request) {
        return $this->render('Admin/UserDetail/left_main.twig', ['left_menu' => $this->getMenu('open'), 'id' => $request->query->get('id')]);
    }

    /**
     * @Route("/user-details/open-platform/basic-info", name="admin_user_details_open_platform_basic_info")
     */
    public function basicInfoAction(Request $request) {
        $id = $request->query->getInt('id', 0);

        if ($id <= 0) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $user = OpenPlatformAccount::first(['user_id' => $id]);

        if (empty($user)) {
            return ['status' => false, 'msg' => '未找到相关用户信息'];
        }

        return $this->render("Admin/UserDetail/OpenPlatform/basic_info.twig", ['user' => $user]);
    }

    /**
     * @Route("/user-details/open-platform/get-key", name="admin_user_details_open_platform_get_key")
     */
    public function getKeyAction(Request $request) {
        $id       = $request->query->getInt('id', 0);
        $password = $request->query->get('password', '');

        if ($id <= 0) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        // 验证密码
        $user = User::first(['id' => $id], ['select' => 'password']);

        if (empty($user)) {
            return ['status' => false, 'msg' => '未找到相关用户信息'];
        }

        if (password_verify($password, $user->password)) {
            return ['status' => true, 'msg' => '恭喜你通过验证'];
        } else {
            return ['status' => false, 'msg' => '密码错误，验证不通过'];
        }

    }

    /**
     * @Route("/user-details/open-platform/contact", name="admin_user_details_open_platform_contact")
     * 联系信息
     */
    public function contactAction(Request $request) {
        $id = $request->query->getInt('id', 0);

        if ($id <= 0) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $user = ContactInfo::first(['user_id' => $id], ['select' => 'contact_name,contact_phone,contact_mail,contact_qq,contact_address']);

        if (empty($user)) {
            return ['status' => false, 'msg' => '未找到相关用户信息'];
        }

        return $this->render("Admin/UserDetail/OpenPlatform/contact.twig", ['user' => $user]);
    }

    /**
     * @Route("/user-details/open-platform/services", name="admin_user_details_open_platform_services")
     */
    public function servicesAction(Request $request, Form $form) {
        $user_id = $request->query->get('id', 0);
        if ($user_id <= 0) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        if ($request->query->count() > 1) {
            $form->init([
                //'service_status' => ['integer'],
                //'use_status'     => ['integer'],
                'service_name' => [''],
            ]);

            if (!$form->validate($request->query)) {
                return ['status' => false, 'msg' => '数据有误，请重新提交'];
            }

            $service_status = $request->query->get('service_status', '');
            $status         = $request->query->get('use_status', '');
            $page           = $form->get('page', 1);
            $limit          = $form->get('limit', 10);

            $conditions = [
                'us.user_id' => $user_id,
                's.name'     => ['LIKE' => '%' . ($form->service_name ?: '') . '%']
            ];

            if (in_array($service_status, ['0', '1'])) {
                $conditions['s.service_status'] = $service_status;
            }

            if (in_array($status, ['0', '1'])) {
                $conditions['us.status'] = $status;
            }

            $options = [
                'select' => 's.id,s.name,s.thumb,us.limit_app_num,s.service_status,us.status,(select count(*) from `'.App::table_name().'` as a where a.service_id=s.id and a.user_id=us.user_id) as app_count',
                'from'   => UserService::table_name().' us',
                'joins'  => 'LEFT JOIN '.Service::table_name().' AS s ON s.id=us.service_id',
                'order'  => 's.id DESC',
            ];

            list($data, $total) = UserService::paginate($conditions, $options, $page, $limit);

            return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
        }
        return $this->render("Admin/UserDetail/OpenPlatform/services.twig", ['id' => $user_id]);
    }

    /**
     * @Route("/user-details/open-platform/services-edit", name="admin_user_details_open_platform_services_edit")
     */
    public function servicesEditAction(Request $request) {
        $user_id       = $request->request->getInt('id', 0);
        $status        = $request->request->getInt('status', 1);
        $limit_app_num = $request->request->getInt('limit_app_num');
        $service_id    = $request->request->getInt('service_id', '');

        if (!in_array($status, ['0', '1']) || $limit_app_num <= 0 || empty($service_id) || $user_id == 0) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        if (!UserService::update_all(['status' => $status, 'limit_app_num' => $limit_app_num], ['user_id' => $user_id, 'service_id' => $service_id])) {
            return ['status' => false, 'msg' => '修改失败'];
        };
        return ['status' => true, 'msg' => '修改成功'];

    }

    /**
     * @Route("/user-details/open-platform/apps", name="admin_user_details_open_platform_apps")
     */
    public function appsAction(Request $request, Form $form) {
        $user_id = $request->query->getInt('id', 0);

        if ($user_id <= 0) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        if ($request->query->count() > 1) {
            $form->init([
                'name'  => [''],
            ]);

            if (!$form->validate($request->query)) {
                return ['status' => false, 'msg' => '数据有误，请重新提交'];
            }

            $app_id     = $request->query->getInt('app_id', '0');
            $app_status = $request->query->get('app_status', '');
            $pay_type   = $request->query->get('pay_type', '1');
            $page       = $form->get('page', 1);
            $limit      = $form->get('limit', 10);

            $conditions = [
                'a.user_id' => $user_id,
                's.name'    => ['LIKE' => '%' . ($form->name ?: '') . '%']
            ];

            if (!empty($app_id)) {
                $conditions['a.app_id'] = $app_id;
            }

            if (in_array($app_status, ['0', '1', '2', '3'])) {
                $conditions['a.app_status'] = $app_status;
            }

            if (in_array($pay_type, ['1', '2', '3', '4', '5'])) {
                $conditions['a.pay_type'] = $pay_type;
            }

            $options = [
                'select' => 's.name as service_name,a.name,a.app_id,a.service_id,a.status,a.thumb,a.pay_type,a.pay_template,a.balance,a.last_pay_time,a.end_use_time',
                'from'   => '`'.App::table_name().'` a',
                'joins'  => 'LEFT JOIN `'.Service::table_name().'` AS s ON s.id=a.service_id',
                'order'  => 'a.app_id DESC',
            ];

            list($data, $total) = App::paginate($conditions, $options, $page, $limit);

            return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
        }
        return $this->render("Admin/UserDetail/OpenPlatform/apps.twig", ['id' => $user_id]);
    }

    /**
     * @Route("/user-details/open-platform/apps-edit", name="admin_user_details_open_platform_apps_edit")
     */
    public function appsEditAction(Request $request) {
        $status = $request->request->get('status', '');
        $id     = $request->request->get('id', '');
        $app_id = $request->request->get('app_id', '');

        $where   = ['status' => $status, 'edit_time' => time()];
        $options = ['user_id' => $id, 'app_id' => $app_id];

        if (!App::update_all($where, $options)) {
            return ['status' => false, 'msg' => '修改失败'];
        }

        return ['status' => true, 'msg' => '修改成功'];

    }

    /**
     * @Route("/user-details/open-platform/finance", name="admin_user_details_open_platform_finance")
     */
    public function financeAction(Request $request) {
        $id    = $request->query->getInt('id', 0);
        $page  = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 10);
        if ($id <= 0) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $balance = OpenPlatformAccount::first(['user_id' => $id], ['select' => 'balance']);
        $where   = ['platform_id' => Platform::OPEN_PLATFORM, 'user_id' => $id];
        $options = [
            'select' => 'add_time,name,amount,trade_status',
            'page'   => $page,
            'limit'  => $limit
        ];
        list($data, $total) = UserMoneyTradeLog::paginate($where, $options);

        return $this->render('Admin/UserDetail/OpenPlatform/finance.twig', ['balance' => $balance, 'data' => $data, 'total' => $total, 'title' => 'API账户', 'id' => $id]);
    }


    /**
     * @Route("/user-details/open-platform/trade-logs", name="admin_user_details_open_platform_trade_logs")
     */
    public function tradeLogsAction(Request $request) {
        return $this->render('Admin/UserDetail/OpenPlatform/trade_logs.twig', ['id' => $request->query->getInt('id')]);
    }

    /**
     * @Route("/user-details/open-platform/ajax-trade-logs", name="admin_user_details_open_platform_ajax_trade_logs")
     */
    // ajax获取交易记录
    public function ajaxTradeLogsAction(Request $request, Form $form) {
        $id     = $request->query->getInt('id', 0);
        $name   = $request->query->get('name', '');
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

        $where = [
            'user_id'          => $id,
            'platform_id'      => Platform::OPEN_PLATFORM,
            'payment_class_id' => $payment_class_id
        ];

        if ($start_time < $end_time && $end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        if ($start_time < $end_time) {
            $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        if ($amount_max < $amount_min) {
            return ['status' => false, 'msg' => '金额范围最大值不能小于最小值'];
        }

        $where['amount'] = ['BETWEEN' => [$amount_min, $amount_max]];

        $options = [
            'select' => 'order_id,outer_sn,name,trade_log_type,amount,trade_status,add_time,pay_time,end_time',
        ];

        $where['trade_log_type'] = $trade_log_type;
        $where['trade_status'] = $trade_status;
        $where['name'] = $name;

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
            $data['no_pay']        = UserMoneyTradeLog::all(array_merge($where, ['trade_status' => 1]), $opt);
            $data['trading']       = UserMoneyTradeLog::all(array_merge($where, ['trade_status' => 2]), $opt);
            $data['loser']         = UserMoneyTradeLog::all(array_merge($where, ['trade_status' => 4]), $opt);
            $success_opt['select'] = 'count(id) as count,ifnull(sum(amount),0) as sum_money';
            $data['success']       = UserMoneyTradeLog::all(array_merge($where, ['trade_status' => 3]), $success_opt);

            return ['status' => true, 'data' => $data];
        }

        list($data, $total) = UserMoneyTradeLog::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }


    /**
     * @Route("/user-details/open-platform/finance-detail", name="admin_user_details_open_platform_finance_detail")
     */
    public function financeDetailAction(Request $request) {
        return $this->render('Admin/UserDetail/OpenPlatform/finance_detail.twig', ['id' => $request->query->getInt('id')]);
    }


    /**
     * @Route("/user-details/open-platform/ajax-finance-detail", name="admin_user_details_open_platform_ajax_finance_detail")
     */
    // 资金明细
    public function ajaxFinanceDetailAction(Request $request, Form $form) {

        $id     = $request->query->getInt('id', 0);
        $name   = $request->query->get('name', '');
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

        $where = [
            'user_id'     => $id,
            'platform_id' => Platform::OPEN_PLATFORM,
        ];

        if ($start_time < $end_time && $end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        if ($start_time < $end_time) {
            $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        if ($amount_max < $amount_min) {
            return ['status' => false, 'msg' => '金额范围最大值不能小于最小值'];
        }

        $where['amount'] = ['BETWEEN' => [$amount_min, $amount_max]];

        $options = [
            'select' => 'trade_id,order_id,name,log_type,amount,current_balance,add_time',
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
            $data['payment'] = UserMoneyLog::all(array_merge($where, ['amount' => ['<' => 0]]), $opt);

            return ['status' => true, 'data' => $data];
        }
        list($data, $total) = UserMoneyLog::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }


    /**
     * @Route("/user-details/open-platform/charge-logs", name="admin_user_details_open_platform_charge_logs")
     */
    public function chargeLogsAction(Request $request) {
        return $this->render('Admin/UserDetail/OpenPlatform/charge_logs.twig', ['id' => $request->query->getInt('id')]);
    }


    /**
     * @Route("/user-details/open-platform/ajax-charge-logs", name="admin_user_details_open_platform_ajax_charge_logs")
     */
    // 充值记录
    public function ajaxChargeLogsAction(Request $request, Form $form) {

        $id     = $request->query->get('id', 0);
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

        $where = [
            'user_id'     => $id,
            'platform_id' => Platform::OPEN_PLATFORM
        ];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        $amount_min = $form->get('amount_min');
        $amount_max = $form->get('amount_max');

        if ($start_time < $end_time && $end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        if ($start_time < $end_time) {
            $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        if ($amount_max < $amount_min) {
            return ['status' => false, 'msg' => '金额范围最大值不能小于最小值'];
        }

        $where['amount'] = ['BETWEEN' => [$amount_min, $amount_max]];

        $options = [
            'select' => 'trade_sn,status,amount,payment_class_id,current_balance,note,add_time',
        ];

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
            //$data['income'] = UserBalanceRechargeOrders::all(array_merge($where, ['amonut' => ['>' => 0]]), $opt);
            $data['income'] = UserBalanceRechargeOrders::all($where, $opt);

            return ['status' => true, 'data' => $data];
        }
        list($data, $total) = UserBalanceRechargeOrders::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }


    /**
     * @Route("/user-details/open-platform/orders", name="admin_user_details_open_platform_orders")
     */
    public function ordersAction(Request $request) {
        return $this->render('Admin/UserDetail/OpenPlatform/orders.twig', ['id' => $request->query->getInt('id')]);
    }


    /**
     * @Route("/user-details/open-platform/ajax-orders", name="admin_user_details_open_platform_ajax_orders")
     */
    // ta的订单
    public function ajaxOrdersAction(Request $request, Form $form) {

        $id = $request->query->getInt('id', 0);

        if ($id <= 0) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'order_type' => ['integer'],
            'pay_status' => ['integer'],
            'sn'         => [''],
            'name'       => ['']
        ]);
        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = ['o.user_id' => $id];

        if ($form->name) {
            $where['s.name'] = ['LIKE' => ['%' . $form->name . '%']];
        }

        if ($form->sn) {
            $where['o.sn'] = ['LIKE' => ['%' . $form->sn . '%']];
        }

        if ($form->order_type && in_array($form->order_type, [1, 2, 3])) {
            $where['o.order_type'] = $form->order_type;
        }

        if (in_array($form->pay_status, [0, 1, 2])) {
            $where['o.pay_status'] = $form->pay_status;
        }

        $options = [
            'select' => 'o.sn,o.trade_sn,s.thumb,s.name,o.pay_type,o.order_type,o.money,o.pay_status,o.add_time',
            'from'   => '`'.ServiceOrder::table_name().'` AS o',
            'joins'  => 'LEFT JOIN `'.Service::table_name().'` AS s ON o.service_id=s.id',
            'order'  => 'o.id DESC',
        ];

        list($data, $total) = ServiceOrder::paginate($where, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }

    /**
     * @Route("/user-details/open-platform/request-logs", name="admin_user_details_open_platform_request_logs")
     */
    public function requestLogsAction(Request $request) {
        return $this->render("Admin/UserDetail/OpenPlatform/request_logs.twig", ['id' => $request->query->getInt('id')]);
    }

    /**
     * @Route("/user-details/open-platform/ajax-request-logs", name="admin_user_details_open_platform_ajax_request_logs")
     */
    public function ajaxRequestLogsAction(Request $request, Form $form) {
        $id = $request->query->getInt('id', 0);

        if ($id <= 0) {
            return ['status' => false, 'msg' => '用户id不存在'];
        }

        $form->init([
            'app_status' => ['integer'],
            'sys_status' => ['integer'],
            'status'     => ['integer'],
            'pay_type'   => ['integer'],
            'app_name'   => [''],
            'user_name'  => [''],
            'start_time' => ['date'],
            'end_time'   => ['date'],
        ]);
        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = ['a.user_id' => $id];

        if ($form->app_name) {
            $where['a.name'] = ['LIKE' => ['%' . $form->app_name . '%']];
        }

        if ($form->user_name) {
            $where['u.user_name'] = ['LIKE' => ['%' . $form->user_name . '%']];
        }

        $where['o.app_status'] = $form->app_status;
        //$where['o.sys_status'] = $form->sys_status;
        $where['o.status']     = $form->status;
        $where['o.pay_type']   = $form->pay_type;

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        if ($start_time < $end_time && $end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        if ($start_time < $end_time) {
            $where['o.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        $options = [
            'select' => 'o.id,o.app_id,a.name as app_name,o.app_status,o.user_id,u.user_name,u.nick_name,
                o.interface_id,i.name as interface_name,o.status,o.code,o.koufei,o.pay_type,o.ip,o.add_time',
            'from'   => \App\Common\Model\OpenPlatform\ApiRequestLog::table_name().' AS o',
            'joins'  => 'LEFT JOIN '.App::table_name().' AS a ON a.id=o.app_id LEFT JOIN '.User::table_name().' AS u ON o.user_id=u.id LEFT JOIN yzb_interface AS i ON i.id=o.interface_id',
            'order'  => 'o.id DESC'
        ];

        list($data, $total) = ApiRequestLog::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }

    /**
     * @Route("/user-details/open-platform/operation-logs", name="admin_user_details_open_platform_operation_logs")
     */
    public function operationLogsAction(Request $request) {
        return $this->render("Admin/UserDetail/OpenPlatform/operation_logs.twig", ['id' => $request->query->getInt('id')]);
    }

    /**
     * @Route("/user-details/open-platform/ajax-operation-logs", name="admin_user_details_open_platform_ajax_operation_logs")
     */
    public function ajaxOperationLogsAction(Request $request, Form $form) {

        $id = $request->query->getInt('id', 0);

        if ($id <= 0) {
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

        if ($start_time < $end_time && $end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        if ($start_time < $end_time) {
            $where['l.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        $where = ['l.user_id' => $id, 'l.platform_id' => 2];

        if (!empty($form->app_name)) {
            $where['l.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        if (!empty($form->info)) {
            $where['l.info'] = ['LIKE' => ['%' . $form->info . '%']];
        }

        if (!empty($form->user_name)) {
            $where['u.user_name'] = ['LIKE' => ['%' . $form->user_name . '%']];
        }

        $where['l.ip'] = $form->ip;

        $options = [
            'select' => 'l.add_time,l.info,l.ip,u.user_name',
            'from'   => '`'.OperationLog::table_name().'` AS l',
            'joins'  => 'LEFT JOIN `'.User::table_name().'` AS u ON u.id=l.user_id',
            'order'  => 'l.id DESC'
        ];

        list($data, $total) = OperationLog::paginate($where, $options, (int)$form->page, (int)$form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }
}
