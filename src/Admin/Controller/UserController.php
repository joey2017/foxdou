<?php

namespace App\Admin\Controller;

use App\Admin\Model\AdminOperationLog;
use App\Common\Model\AvailableServiceGroup;
use App\Common\Model\ResellerPriceGroup;
use App\Common\Model\User\User;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\SupplierAccount;
use App\Common\Model\User\PlatformUserLevel;
use App\Common\Model\User\RealNameAuthenticationInfo;
use App\Common\Model\User\UsersAccountStatusLog;
use App\Common\Model\User\UsersOpenAccountLog;
use App\Common\Model\User\UsersPremiumAccount;
use App\Common\Service\UserManager;
use function App\is_email;
use function App\is_mobile;
use App\Platform;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "user-management"})
 */
class UserController extends AdminBaseController {

    /**
     * @Route("/users", name="admin_users_index")
     */
    public function indexAction(Request $request) {
        return $this->redirectToRoute('admin_users_pass_management');
    }

    /** 狐豆通信证管理
     * @Route("/users/pass-management", name="admin_users_pass_management")
     */
    public function PassManagementAction(Request $request, UserManager $userManager, Form $form) {
        if ($request->query->count() <= 1) {
            return $this->render("Admin/User/pass_management.twig", ['statistics' => $this->statistics()]);
        }

        $total = 0;
        $users = [];

        $page     = $request->query->getInt('page', 1);
        $pageSize = $request->query->getInt('limit', self::$pageSize);

        list($conds, $params) = $this->buildQuery($form, $request->query);
        if ($conds === false) {
            return ["status" => false, "msg" => "参数错误"];
        }

        list($users, $total) = $userManager->getAllUsers($conds, $params, $page, $pageSize);
        return ["status" => true, "total" => $total, 'data' => $users];
    }

    private function buildQuery(Form $form, $query): array {
        $userTypes        = join("|", array_keys(User::TYPES));
        $userStatuses     = join("|", array_keys(User::STATUSES));
        $realNameStatuses = join("|", array_keys(RealNameAuthenticationInfo::STATUSES));
        $isEntry          = join("|", array_keys(User::IDENTITY_STATUS));
        $isOpen           = join("|", array_keys(User::OPENPLATFORM_STATUS));
        $isAgent          = join("|", array_keys(User::AGENTPLATFORM_STATUS));
        $isSupplier       = join("|", array_keys(User::SUPPLIERPLATFORM_STATUS));

        $form->init([
            'user_name'              => ['natural'],
            'mobile'                 => ['integer'],
            'is_entry_identity_info' => ["enum[{$isEntry}]"],
            'is_open_platform'       => ["enum[{$isOpen}]"],
            'is_agent_platform'      => ["enum[{$isAgent}]"],
            'is_supplier_platform'   => ["enum[{$isSupplier}]"],
            'type'                   => ["enum[{$userTypes}]"],
            'status'                 => ["enum[{$userStatuses}]"],
            'real_name_status'       => ["enum[{$realNameStatuses}]"],
            'start_time'             => ["date"],
            'end_time'               => ["date"],
        ]);

        if (!$form->validate($query)) {
            $errors = $form->getErrors();

            return [false, 0];
        }

        $conds  = [];  // 一定需要加上的过滤条件
        $params = [];

        // 可选过滤条件
        if ($value = $form->get('user_name')) {
            $conds[]  = "(U.user_name like ?)";
            $params[] = '%' . $value . '%';
        }
        if ($value = $form->get('mobile')) {
            $conds[]  = "(U.mobile like ?)";
            $params[] = '%' . $value . '%';
        }
        if ($value = $form->get('is_entry_identity_info')) {
            $conds[]  = "(U.is_entry_identity_info = ?)";
            $params[] = $value;
        }
        if ($value = $form->get('is_open_platform')) {
            $conds[]  = "(U.is_open_platform = ?)";
            $params[] = $value;
        }
        if ($value = $form->get('is_agent_platform')) {
            $conds[]  = "(U.is_agent_platform = ?)";
            $params[] = $value;
        }
        if ($value = $form->get('is_supplier_platform')) {
            $conds[]  = "(U.is_supplier_platform = ?)";
            $params[] = $value;
        }
        if ($value = $form->get('type')) {
            $conds[]  = "(U.type = ?)";
            $params[] = $value;
        }
        if ($value = $form->get('status')) {
            $conds[]  = "(U.status = ?)";
            $params[] = $value;
        }
        if ($value = $form->get('real_name_status')) {
            $conds[]  = "(U.real_name_status = ?)";
            $params[] = $value;
        }

        if ($form->get('start_time') && $end_time = $form->get('end_time')) {
            $conds[]  = "(U.add_time BETWEEN ? AND ?)";
            $params[] = strtotime($form->get('start_time'));
            $params[] = strtotime($end_time) + 86399;
        }

        return [$conds, $params];
    }

    /** 平台账户开通记录
     * @Route("/users/open-account-log", name="admin_users_open_account_log")
     */
    public function openAccountLogAction(Request $request, Form $form) {
        if ($request->query->count() <= 1) {
            return $this->render("Admin/User/open_account_log.twig");
        }
        $form->init([
            'keyword'    => [''],
            'method'     => [to_enum(['1', '2', '3', '4'], true)],
            'start_time' => ['date'],
            'end_time'   => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }
        $where = ['status' => 2];
        if ($keyword = $form->keyword) {
            //搜索邮箱
            $where['pass'] = ['LIKE' => '%' . $keyword . '%'];
        }

        $where['method'] = $form->method;
        $start_time      = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time        = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        if ($end_time > $start_time) {
            $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        list($data, $total) = UsersOpenAccountLog::paginate($where, [], $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /** 冻结/解冻通行证
     * @Route("/users/set-pass-status", name="admin_users_set_pass_status")
     */
    public function setPassStatusAction(Request $request) {
        $users_ids = $request->request->get('ids');
        if (!$users_ids) {
            return ['status' => false, 'msg' => '请选择需要操作的账号'];
        }
        is_array($users_ids) || $users_ids = [$users_ids];
        $status = $request->request->get('status');
        if (!in_array($status, [User::STATUS_ACTIVE, User::STATUS_SUSPENDED])) {
            return ['status' => false, 'msg' => '参数有误'];
        }
        $options = [
            'select' => 'u.id,if(u.type="I",u.mobile,u.email) as pass,pa.account',
            'from'   => User::table_name() . ' AS u',
            'joins'  => 'LEFT JOIN `' . UsersPremiumAccount::table_name() . '` AS pa ON pa.user_id=u.id',
            'order'  => 'u.id DESC',
        ];
        $users   = User::all(['u.id' => $users_ids], $options);
        if (empty($users)) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }
        $count     = 0;
        $operation = $status == User::STATUS_ACTIVE ? '解冻' : '冻结';
        $type      = $status == User::STATUS_ACTIVE ? 'UNFREEZE' : 'FREEZE';

        foreach ($users as $user) {
            $result = false;
            try {
                $result = UsersAccountStatusLog::transaction(function () use ($status, $user, $request, $operation, $type) {
                    // 更新账户状态
                    User::update_all([
                        'status'    => $status,
                        'edit_time' => time()
                    ], [
                        'id' => $user['id']
                    ]);

                    // 解冻/冻结记录
                    UsersAccountStatusLog::create([
                        'platform_user_id' => $user['id'],
                        'operate_admin_id' => $this->getAdminUser()->id,
                        'pass'             => !empty($user['pass']) ? $user['pass'] : '',
                        'platform_id'      => Platform::PASSPORT,
                        'account'          => !empty($user['account']) ? $user['account'] : '',
                        'status'           => $status == User::STATUS_ACTIVE ? 2 : 1,
                        'desc'             => '后台用户（' . $this->getAdminUser()->user_name . '）主动'.$operation,
                        'add_time'         => time(),
                    ]);

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => $type,
                        'subject_type' => 'ADMIN_USER',
                        //'subject_id'   => '',
                        //'name'         => '',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "狐豆通行证[{$user['pass']}]",
                        //'sn'           => '',
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                        //'context'      => '',
                    ]);

                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'admin_id' => $this->getAdminUser()->id,
                    'stack'    => $e->getTraceAsString(),
                    'error'    => $e->getMessage()
                ];
                $this->logger->error('管理员“' . $this->getAdminUser()->user_name . '”' . $operation . '狐豆通行证失败', $context);
            }
            if ($result) {
                $count++;
            }
        }
        return ['status' => true, 'msg' => '成功' . $operation . $count . '个账户'];
    }

    /** 通行证冻结/解冻记录
     * @Route("/users/account-status-log", name="admin_users_account_status_log")
     */
    public function accountStatusLogAction(Request $request, Form $form) {
        if ($request->query->count() <= 1) {
            return $this->render("Admin/User/account_status_log.twig", ['platform_id' => $request->query->get('platform_id', Platform::PASSPORT)]);
        }
        $form->init([
            'keyword'     => [''],
            'platform_id' => [to_enum(Platform::PLATFORMS)],
            'start_time'  => ['date'],
            'end_time'    => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }
        $where['platform_id'] = $form->platform_id;
        $where['user_name']   = $form->keyword;
        if ($keyword = $form->keyword) {
            $where['pass'] = ['LIKE' => '%' . $keyword . '%'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        if ($end_time > $start_time) {
            $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        list($data, $total) = UsersAccountStatusLog::paginate($where, [], $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /** 供应商平台账户
     * @Route("/users/get-supplier-account", name="admin_users_get_supplier_account")
     */
    public function getSupplierAccountAction(Request $request, Form $form) {
        if ($request->query->count() <= 1) {
            //定价组
            $groups = ResellerPriceGroup::all([], ['select' => 'id,group_name']);
            return $this->render("Admin/User/get_supplier_account.twig", ['groups' => $groups]);
        }
        $form->init([
            'keyword'          => [''],
            'real_name_status' => [to_enum(RealNameAuthenticationInfo::STATUSES)],
            'status'           => [to_enum(SupplierAccount::STATUSES)],
            'start_time'       => ['date'],
            'end_time'         => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }
        $where['u.user_name']        = $form->keyword;
        $where['u.real_name_status'] = $form->real_name_status;
        $where['su.status']          = $form->status;

        $options = [
            'select' => 'u.id,u.real_name_status,u.user_name,u.nick_name,if(u.type="I",u.mobile,u.email) as pass,su.id as sup_users_id,su.balance,su.status,su.cash_pledge,su.drawing_amount,su.freeze_amount,su.add_time,pa.account',
            'from'   => '`' . SupplierAccount::table_name() . '` AS su',
            'joins'  => 'LEFT JOIN `' . User::table_name() . '` AS u ON u.id=su.user_id LEFT JOIN `' . UsersPremiumAccount::table_name() . '` AS pa ON pa.user_id=u.id',
            'order'  => 'su.id DESC',
        ];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        if ($end_time > $start_time) {
            $where['su.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        list($data, $total) = SupplierAccount::paginate($where, $options, $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /** 供应商平台账户冻结/解冻
     * @Route("/users/set-sup-account-status", name="admin_users_set_sup_account_status")
     */
    public function setSupAccountStatusAction(Request $request) {
        $sup_users_ids = $request->request->get('ids');
        if (!$sup_users_ids) {
            return ['status' => false, 'msg' => '请选择需要操作的账号'];
        }
        is_array($sup_users_ids) || $sup_users_ids = [$sup_users_ids];
        $status = $request->request->get('status');
        if (!in_array($status, [SupplierAccount::STATUS_ACTIVE, SupplierAccount::STATUS_SUSPENDED])) {
            return ['status' => false, 'msg' => '参数有误'];
        }
        $options   = [
            'select' => 'if(u.type="I",u.mobile,u.email) as pass,pa.account,su.*',
            'from'   => SupplierAccount::table_name() . ' AS su',
            'joins'  => 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=su.user_id LEFT JOIN ' . UsersPremiumAccount::table_name() . ' AS pa ON pa.user_id=u.id',
            'order'  => 'su.id DESC',
        ];
        $sup_users = SupplierAccount::all(['su.id' => $sup_users_ids], $options);
        if (empty($sup_users)) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }
        $count     = 0;
        $type      = $status == SupplierAccount::STATUS_ACTIVE ? AdminOperationLog::OPERATION_UNFREEZE : AdminOperationLog::OPERATION_FREEZE;
        $operation = AdminOperationLog::OPERATIONS[$type];
        foreach ($sup_users as $user) {
            $result = false;
            try {
                $result = UsersAccountStatusLog::transaction(function () use ($status, $user, $request, $operation, $type) {
                    // 更新账户状态
                    SupplierAccount::update_all([
                        'status'    => $status,
                        'edit_time' => time()
                    ], [
                        'id' => $user['id']
                    ]);

                    // 解冻/冻结记录
                    UsersAccountStatusLog::create([
                        'platform_user_id' => $user['id'],
                        'operate_admin_id' => $this->getAdminUser()->id,
                        'pass'             => !empty($user['pass']) ? $user['pass'] : '',
                        'platform_id'      => Platform::SUPPLIER,
                        'account'          => !empty($user['account']) ? $user['account'] : '',
                        'status'           => $status == SupplierAccount::STATUS_ACTIVE ? 2 : 1,
                        'desc'             => '后台用户（' . $this->getAdminUser()->user_name . '）主动' . $operation,
                        'add_time'         => time(),
                    ]);

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => $type,
                        'subject_type' => 'ADMIN_USER',
                        //'subject_id'   => '',
                        //'name'         => '',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "供应商平台账户[{$user['pass']}]",
                        //'sn'           => '',
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                        //'context'      => '',
                    ]);

                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'admin_id' => $this->getAdminUser()->id,
                    'stack'    => $e->getTraceAsString(),
                    'error'    => $e->getMessage()
                ];
                $this->logger->error('管理员“' . $this->getAdminUser()->user_name . '”' . $operation . '供应商账户失败', $context);
            }
            if ($result) {
                $count++;
            }
        }
        return ['status' => true, 'msg' => '成功' . $operation . $count . '个账户'];
    }

    /** 供应商平台账户清退
     * @Route("/users/set-banned", name="admin_users_set_banned")
     */
    public function setBannedAction(Request $request) {
        $sup_users_id = $request->request->get('ids');
        $status       = $request->request->get('status');
        if (!$sup_users_id) {
            return ['status' => false, 'msg' => '请选择需要操作的账号'];
        }

        if ($status != SupplierAccount::STATUS_BANNED) {
            return ['status' => false, 'msg' => '参数有误'];
        }
        $options  = [
            'select'  => 'if(u.type="I",u.mobile,u.email) as pass,pa.account,su.*',
            'from'    => SupplierAccount::table_name() . ' AS su',
            'joins'   => 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=su.user_id LEFT JOIN ' . UsersPremiumAccount::table_name() . ' AS pa ON pa.user_id=u.id',
            'order'   => 'su.id DESC',
            'hydrate' => 'false',
        ];
        $sup_user = SupplierAccount::first(['su.id' => $sup_users_id], $options);
        if (empty($sup_user)) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }
        $type      = AdminOperationLog::OPERATION_BANNED;
        $operation = AdminOperationLog::OPERATIONS[$type];

        $result = false;
        try {
            $result = UsersAccountStatusLog::transaction(function () use ($status, $sup_user, $request, $operation, $type) {
                // 更新账户状态
                SupplierAccount::update_all([
                    'status'    => $status,
                    'edit_time' => time()
                ], [
                    'id' => $sup_user['id']
                ]);

                // 写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => $type,
                    'subject_type' => 'ADMIN_USER',
                    //'subject_id'   => '',
                    //'name'         => '',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "供应商平台账户[{$sup_user['pass']}]",
                    //'sn'           => '',
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                    //'context'      => '',
                ]);

                return true;
            });
        } catch (\Exception $e) {
            $context = [
                'admin_id' => $this->getAdminUser()->id,
                'stack'    => $e->getTraceAsString(),
                'error'    => $e->getMessage()
            ];
            $this->logger->error('管理员“' . $this->getAdminUser()->user_name . '”' . $operation . '供应商账户失败', $context);
        }

        return ['status' => (boolean)$result, 'msg' => $operation . ($result ? '成功' : '失败')];
    }

    /** 代理商平台账户
     * @Route("/users/get-agent-account", name="admin_users_get_agent_account")
     */
    public function getAgentAccountAction(Request $request, Form $form) {
        if ($request->query->count() <= 1) {
            //定价组
            $groups = ResellerPriceGroup::all([], ['select' => 'id,group_name']);
            return $this->render("Admin/User/get_agent_account.twig", ['groups' => $groups]);
        }
        $form->init([
            'keyword'          => [''],
            'status'           => [to_enum(User::STATUSES)],
            'real_name_status' => [to_enum(RealNameAuthenticationInfo::STATUSES)],
            'level'            => ['integer'],
            'agency_type'      => [to_enum(ResellerAccount::TYPES)],
            'start_time'       => ['date'],
            'end_time'         => ['date'],
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = [
            'au.level'           => $form->level,
            'au.status'          => $form->status,
            'au.agency_type'     => $form->agency_type,
            'u.real_name_status' => $form->real_name_status
        ];
        if ($keyword = $form->keyword) {
            $where['u.email'] = ['LIKE' => '%' . $keyword . '%'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        if ($end_time > $start_time) {
            $where['au.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }
        $select = 'u.id,u.real_name_status,u.user_name,u.nick_name,if(u.type="I",u.mobile,u.email) as pass,au.id as agent_users_id' .
            ',au.balance,au.status,au.service_group,au.freeze_amount,au.rebate_balance,au.drawing_rebate' .
            ',au.agency_type,au.level,au.add_time,au.parent_dealer_user_id,pa.account,if(us.type="I",us.mobile,us.email) as dealer_pass';

        $joins   = 'LEFT JOIN `' . User::table_name() . '` AS u ON u.id=au.user_id ' .
            'LEFT JOIN `' . UsersPremiumAccount::table_name() . '` AS pa ON pa.user_id=u.id ' .
            'LEFT JOIN `' . User::table_name() . '` AS us ON au.parent_dealer_user_id=us.id ';
        $options = [
            'select' => $select,
            'from'   => '`' . ResellerAccount::table_name() . '` AS au',
            'joins'  => $joins,
            'order'  => 'au.id DESC',
        ];

        list($data, $total) = ResellerAccount::paginate($where, $options, $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /** 代理商平台账户冻结/解冻
     * @Route("/users/set-agent-account-status", name="admin_users_set_agent_account_status")
     */
    public function setAgentAccountStatusAction(Request $request) {
        $agent_users_ids = $request->request->get('ids');
        if (!$agent_users_ids) {
            return ['status' => false, 'msg' => '请选择需要操作的账号'];
        }
        is_array($agent_users_ids) || $agent_users_ids = [$agent_users_ids];
        $status = $request->request->get('status');
        if (!in_array($status, [ResellerAccount::STATUS_ACTIVE, ResellerAccount::STATUS_SUSPENDED])) {
            return ['status' => false, 'msg' => '参数有误'];
        }
        $options     = [
            'select' => 'if(u.type="I",u.mobile,u.email) as pass,pa.account,au.*',
            'from'   => ResellerAccount::table_name() . ' AS au',
            'joins'  => 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=au.user_id LEFT JOIN `' . UsersPremiumAccount::table_name() . '` AS pa ON pa.user_id=u.id',
            'order'  => 'au.id DESC',
        ];
        $agent_users = ResellerAccount::all(['au.id' => $agent_users_ids], $options);
        if (empty($agent_users)) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }
        $count     = 0;
        $operation = $status == ResellerAccount::STATUS_ACTIVE ? '解冻' : '冻结';
        $type      = $status == ResellerAccount::STATUS_ACTIVE ? 'UNFREEZE' : 'FREEZE';
        foreach ($agent_users as $user) {
            $result = false;
            try {
                $result = UsersAccountStatusLog::transaction(function () use ($status, $user, $request, $operation, $type) {
                    // 更新账户状态
                    ResellerAccount::update_all([
                        'status'    => $status,
                        'edit_time' => time()
                    ], [
                        'id' => $user['id']
                    ]);

                    // 解冻/冻结记录
                    UsersAccountStatusLog::create([
                        'platform_user_id' => $user['id'],
                        'operate_admin_id' => $this->getAdminUser()->id,
                        'pass'             => !empty($user['pass']) ? $user['pass'] : '',
                        'platform_id'      => Platform::RESELLER,
                        'account'          => !empty($user['account']) ? $user['account'] : '',
                        'status'           => $status == ResellerAccount::STATUS_ACTIVE ? 2 : 1,
                        'desc'             => '后台用户（' . $this->getAdminUser()->user_name . '）主动' . $operation,
                        'add_time'         => time(),
                    ]);

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => $type,
                        'subject_type' => 'ADMIN_USER',
                        //'subject_id'   => '',
                        //'name'         => '',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "代理商平台账户[{$user['pass']}]",
                        //'sn'           => '',
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                        //'context'      => '',
                    ]);

                    return true;
                });
            } catch (\Exception $e) {
                $context = [
                    'admin_id' => $this->getAdminUser()->id,
                    'stack'    => $e->getTraceAsString(),
                    'error'    => $e->getMessage()
                ];
                $this->logger->error('管理员“' . $this->getAdminUser()->user_name . '”' . $operation . '代理商账户失败', $context);
            }
            if ($result) {
                $count++;
            }
        }
        return ['status' => true, 'msg' => '成功' . $operation . $count . '个账户'];
    }

    /** 指定/取消经销商
     * @Route("/users/set-agent-type", name="admin_users_set_agent_type")
     */
    public function setAgentTypeAction(Request $request) {
        $agent_users_ids = $request->request->get('ids');
        if (!$agent_users_ids) {
            return ['status' => false, 'msg' => '请选择需要操作的账号'];
        }
        is_array($agent_users_ids) || $agent_users_ids = [$agent_users_ids];
        $type = $request->request->get('type');
        if (!in_array($type, [ResellerAccount::TYPE_NORMAL, ResellerAccount::TYPE_DEALER])) {
            return ['status' => false, 'msg' => '参数有误'];
        }
        $options     = [
            'select' => 'if(u.type="I",u.mobile,u.email) as pass,au.*',
            'from'   => ResellerAccount::table_name() . ' AS au',
            'joins'  => 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=au.user_id',
            'order'  => 'au.id DESC',
        ];
        $agent_users = ResellerAccount::all(['au.id' => $agent_users_ids], $options);
        if (empty($agent_users)) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }

        $count     = 0;
        $operation = $type == ResellerAccount::TYPE_DEALER ? '指定' : '取消';

        foreach ($agent_users as $user) {
            $result = false;
            try {
                $result = ResellerAccount::transaction(function () use ($type, $user, $request, $operation) {
                    ResellerAccount::update_all([
                        'agency_type' => $type,
                        'edit_time'   => time(),
                    ], [
                        'id' => $user['id']
                    ]);

                    // 写入日志
                    AdminOperationLog::create([
                        'user_id'      => $this->getAdminUser()->id,
                        'type'         => 'EDIT',
                        'subject_type' => 'ADMIN_USER',
                        //'subject_id'   => '',
                        //'name'         => '',
                        'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "通行证为“{$user['pass']}”的代理商为经销商",
                        //'sn'           => '',
                        'ip'           => $request->getClientIp(),
                        'add_time'     => date('Y-m-d H:i:s'),
                        //'context'      => '',
                    ]);

                    return true;
                });
            } catch (\Exception $e) {
                $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
                $this->logger->error('', $text);
            }

            if ($result) {
                $count++;
            }
        }
        return ['status' => true, 'msg' => '成功' . $operation . $count . '个经销商'];
    }

    /** 定价分组列表
     * @Route("/users/set-price-group", name="admin_users_set_price_group")
     */
    public function setPriceGroupAction(Request $request, Form $form) {
        if ($request->query->count() <= 2) {
            return $this->render('Admin/User/set_price_group.twig');
        }
        $form->init([
            'keyword'    => [''],
            'start_time' => ['date'],
            'end_time'   => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = ['group_name' => $form->keyword];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        if ($end_time > $start_time) {
            $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        list($data, $total) = ResellerPriceGroup::paginate($where, [], $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /** 可用服务分组列表
     * @Route("/users/service-group", name="admin_users_service_group")
     */
    public function serviceGroupAction(Request $request, Form $form) {
        if ($request->query->count() <= 2) {
            return $this->render('Admin/User/service_group.twig');
        }
        $form->init([
            'keyword'    => [''],
            'start_time' => ['date'],
            'end_time'   => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }
        $where = ['service_name' => $form->keyword];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        if ($end_time > $start_time) {
            $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        list($data, $total) = AvailableServiceGroup::paginate($where, [], $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /** 添加定价组
     * @Route("/users/add-price-group", name="admin_users_add_price_group")
     */
    public function addPriceGroupAction(Request $request, Form $form) {
        $form->init([
            'group_name' => ['required'],
            'note'       => [''],
        ]);
        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        // 唯一性
        $group = ResellerPriceGroup::first(['group_name' => $form->group_name]);

        if ($group) {
            return ['status' => false, 'msg' => '已存在相同名称的定价组'];
        }

        $result    = false;
        $operation = AdminOperationLog::OPERATIONS[AdminOperationLog::OPERATION_CREATE];
        try {
            $result = ResellerPriceGroup::transaction(function () use ($form, $request, $operation) {
                ResellerPriceGroup::create([
                    'group_name'  => $form->group_name,
                    'note'        => $form->note,
                    'user_amount' => '0',
                    'is_default'  => 'N',
                    'add_time'    => time(),
                    'edit_time'   => time()
                ]);

                // 写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_CREATE,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "定价组“{$form->group_name}”",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error("管理员“{$this->getAdminUser()->user_name}”新增定价组“{$form->group_name}”失败", $text);
        }

        return ['status' => (boolean)$result, 'msg' => '新增定价组' . ($result ? '成功' : '失败')];
    }

    /** 添加可用服务组
     * @Route("/users/add-service-group", name="admin_users_add_service_group")
     */
    public function addServiceGroupAction(Request $request, Form $form) {
        $form->init([
            'service_name' => ['required'],
            'note'         => [''],
        ]);
        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        // 唯一性
        $group = AvailableServiceGroup::first(['service_name' => $form->service_name]);

        if ($group) {
            return ['status' => false, 'msg' => '已存在相同名称的可用服务组'];
        }

        $result    = false;
        $operation = AdminOperationLog::OPERATIONS[AdminOperationLog::OPERATION_CREATE];
        try {
            $result = AvailableServiceGroup::transaction(function () use ($form, $request, $operation) {
                AvailableServiceGroup::create([
                    'service_name' => $form->service_name,
                    'note'         => $form->note,
                    'user_amount'  => '0',
                    'is_default'   => 'N',
                    'add_time'     => time(),
                    'edit_time'    => time()
                ]);

                // 写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_CREATE,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "可用服务组“{$form->service_name}”",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error("管理员“{$this->getAdminUser()->user_name}”新增可用服务组“{$form->service_name}”失败", $text);
        }

        return ['status' => (boolean)$result, 'msg' => '新增可用服务组' . ($result ? '成功' : '失败')];
    }

    /** 修改定价组
     * @Route("/users/edit-price-group", name="admin_users_edit_price_group")
     */
    public function editPriceGroupAction(Request $request, Form $form) {
        $form->init([
            'id'         => ['required,integer'],
            'group_name' => ['required'],
            'note'       => [''],
        ]);
        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $group = ResellerPriceGroup::find($form->id);
        if (!$group) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }

        $result = false;

        $exist = ResellerPriceGroup::first(['group_name' => $form->group_name, 'id' => ['<>' => $form->id]]);

        if ($exist) {
            return ['status' => false, 'msg' => '已存在相同的定价组名称'];
        }

        try {
            $result = ResellerPriceGroup::transaction(function () use ($form, $request, $group) {
                ResellerPriceGroup::update_all([
                    'group_name' => $form->group_name,
                    'note'       => $form->note,
                    'edit_time'  => time()
                ], [
                    'id' => $form->id
                ]);

                // 写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_EDIT,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . AdminOperationLog::OPERATION_EDIT . "定价组“{$group->group_name}”为“{$form->group_name}”",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error("管理员“{$this->getAdminUser()->user_name}”修改定价组“{$form->group_name}”失败", $text);
        }

        return ['status' => (boolean)$result, 'msg' => '修改定价组' . ($result ? '成功' : '失败')];
    }

    /** 修改可用服务分组
     * @Route("/users/edit-service-group", name="admin_users_edit_service_group")
     */
    public function editServiceGroupAction(Request $request, Form $form) {
        $form->init([
            'id'           => ['required,integer'],
            'service_name' => ['required'],
            'note'         => ['']
        ]);
        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $group = AvailableServiceGroup::find($form->id);
        if (!$group) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }

        $result = false;

        $exist = AvailableServiceGroup::first(['service_name' => $form->service_name, 'id' => ['<>' => $form->id]]);

        if ($exist) {
            return ['status' => false, 'msg' => '已存在相同的可用服务组名称'];
        }

        try {
            $result = AvailableServiceGroup::transaction(function () use ($form, $request, $group) {
                AvailableServiceGroup::update_all([
                    'service_name' => $form->service_name,
                    'note'         => $form->note,
                    'edit_time'    => time()
                ], [
                    'id' => $form->id
                ]);

                // 写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_EDIT,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . AdminOperationLog::OPERATION_EDIT . "可用服务组“{$group->service_name}”为“{$form->service_name}”",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error("管理员“{$this->getAdminUser()->user_name}”修改可用服务组“{$form->service_name}”失败", $text);
        }

        return ['status' => (boolean)$result, 'msg' => '修改可用服务组' . ($result ? '成功' : '失败')];
    }

    /** 设置开通定价默认组
     * @Route("/users/set-default-price", name="admin_users_set_default_price")
     */
    public function setDefaultPriceAction(Request $request) {
        $ids = $request->request->get('id');
        if (!$ids) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $list = ResellerPriceGroup::all(['id' => $ids]);
        if (!$list) {
            return ['status' => false, 'msg' => '定价组不存在'];
        }

        $group_names = [];
        foreach ($list as $item) {
            $group_names[] = $item['group_name'];
        }

        $number    = 0;
        $result    = false;
        $operation = count($group_names) > 1 ? '批量' : '' . AdminOperationLog::OPERATIONS[AdminOperationLog::OPERATION_EDIT];
        try {
            $result = ResellerPriceGroup::transaction(function () use ($ids, $group_names, $request, &$number, $operation) {
                $number = ResellerPriceGroup::update_all([
                    'is_default' => 'Y',
                    'edit_time'  => time(),
                ], [
                    'id' => $ids
                ]);

                //写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_EDIT,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "定价组“" . implode(',', $group_names) . "”为开通时默认组",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error('设置开通时默认定价组失败', $text);
        }

        return ['status' => (boolean)$result, 'msg' => '成功操作' . $number . '项'];
    }

    /** 设置开通服务默认组
     * @Route("/users/set-default-service", name="admin_users_set_default_service")
     *
     */
    public function setDefaultServiceAction(Request $request) {
        $ids = $request->request->get('id');
        if (!$ids) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $list = AvailableServiceGroup::all(['id' => $ids]);
        if (!$list) {
            return ['status' => false, 'msg' => '可用服务组不存在'];
        }

        $service_names = [];
        foreach ($list as $item) {
            $service_names[] = $item['service_name'];
        }

        $number    = 0;
        $result    = false;
        $operation = count($service_names) > 1 ? '批量' : '' . AdminOperationLog::OPERATIONS[AdminOperationLog::OPERATION_EDIT];
        try {
            $result = AvailableServiceGroup::transaction(function () use ($ids, $service_names, $request, &$number, $operation) {
                $number = AvailableServiceGroup::update_all([
                    'is_default' => 'Y',
                    'edit_time'  => time(),
                ], [
                    'id' => $ids
                ]);

                //写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_EDIT,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "可用服务组“" . implode(',', $service_names) . "”为开通时默认组",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error('设置开通时默认可用服务组失败', $text);
        }

        return ['status' => (boolean)$result, 'msg' => '成功操作' . $number . '项'];
    }

    /** 删除定价组
     * @Route("/users/del-price-group", name="admin_users_del_price_group")
     */
    public function delPriceGroupAction(Request $request) {
        $ids = $request->request->get('id');
        if (!$ids) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $list = ResellerPriceGroup::all(['id' => $ids]);
        if (!$list) {
            return ['status' => false, 'msg' => '定价组不存在'];
        }

        $group_names = [];
        foreach ($list as $item) {
            $group_names[] = $item['group_name'];
        }

        $number    = 0;
        $result    = false;
        $operation = count($group_names) > 1 ? '批量' : '' . AdminOperationLog::OPERATIONS[AdminOperationLog::OPERATION_DELETE];
        try {
            $result = ResellerPriceGroup::transaction(function () use ($ids, $group_names, $request, &$number, $operation) {
                $number = ResellerPriceGroup::delete_all(['id' => $ids]);

                //写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_DELETE,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "定价组“" . implode(',', $group_names) . "”",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s')
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error('删除定价组失败', $text);
        }

        return ['status' => (boolean)$result, 'msg' => '成功操作' . $number . '项'];
    }

    /** 删除可用服务组
     * @Route("/users/del-service-group", name="admin_users_del_service_group")
     */
    public function delServiceGroupAction(Request $request) {
        $ids = $request->request->get('id');
        if (!$ids) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $list = AvailableServiceGroup::all(['id' => $ids]);
        if (!$list) {
            return ['status' => false, 'msg' => '可用服务组不存在'];
        }

        $service_names = [];
        foreach ($list as $item) {
            $service_names[] = $item['service_name'];
        }

        $number    = 0;
        $result    = false;
        $operation = count($service_names) > 1 ? '批量' : '' . AdminOperationLog::OPERATIONS[AdminOperationLog::OPERATION_DELETE];
        try {
            $result = AvailableServiceGroup::transaction(function () use ($ids, $service_names, $request, &$number, $operation) {
                $number = AvailableServiceGroup::delete_all(['id' => $ids]);

                //写入日志
                AdminOperationLog::create([
                    'user_id'      => $this->getAdminUser()->id,
                    'type'         => AdminOperationLog::OPERATION_DELETE,
                    'subject_type' => 'ADMIN_USER',
                    'info'         => "用户[{$this->getAdminUser()->user_name}]" . $operation . "可用服务组“" . implode(',', $service_names) . "”",
                    'ip'           => $request->getClientIp(),
                    'add_time'     => date('Y-m-d H:i:s'),
                ]);
                return true;
            });
        } catch (\Exception $e) {
            $text = ['admin_id' => $this->getAdminUser()->id, 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
            $this->logger->error('删除可用服务组失败', $text);
        }

        return ['status' => (boolean)$result, 'msg' => '成功操作' . $number . '项'];
    }

    /**
     * @Route("/users/add", name="admin_users_add")
     */
    public function addAction(Request $request) {
        if ($request->getMethod() !== Request::METHOD_POST) {
            return $this->render("Admin/User/add.twig", ['type' => User::TYPES]);
        }

        $form = new Form($this->container,
            [
                'user_name'        => ['required,min_length[2],regex[/[\x80-\xff\w\-]+/]'],
                'password'         => ['required,min_length[3],max_length[15]'],
                'password_confirm' => ['required,matchs[password],min_length[3],max_length[15]'],
                'mobile'           => ["regex[/^(((13([0-9]{1})|14([579])|15([012356789])|16([6])|17([0135678])|18([0-9]{1})|19([89]))([0-9]{8}))|((170([059]))([0-9]{7})))$/]"],
            ]
        );

        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();
            return ['status' => false, 'msg' => '数据错误，请检查后重新提交', 'errors' => $errors];
        }

        $user_name = $form->get('user_name');
        $password  = $form->get('password');
        $type      = $request->request->get('type', '');
        $mobile    = $request->request->get('mobile', '');
        $nick_name = $request->request->get('nick_name', '');
        $mail      = $request->request->get('email', '');

        $business_name                 = $request->request->get('business_name');
        $legal_person_name             = $request->request->get('legal_person_name');
        $legal_person_identity_card_no = $request->request->get('legal_person_identity_card_no');
        $business_license_no           = $request->request->get('business_license_no');

        //判断唯一性
        $result = User::first(['user_name' => $user_name]);
        if (!empty($result)) {
            return ['status' => false, 'msg' => '用户名已存在'];
        }

        $systime = time();
        $result  = User::create([
            'user_name' => $user_name,
            'nick_name' => $nick_name,
            'mobile'    => $mobile,
            'email'     => $mail,
            'password'  => password_hash($password, PASSWORD_BCRYPT),
            'type'      => $type,
            'add_time'  => $systime,
            'edit_time' => $systime
        ]);

        if (false === $result) {
            return ['status' => false, 'msg' => '添加失败'];
        }

        $user_id = $result->read_attribute('id');

        $data = [
            'user_id'                       => $user_id,
            'user_type'                     => $type,
            'legal_person_name'             => $legal_person_name,
            'legal_person_identity_card_no' => $legal_person_identity_card_no,
            'add_time'                      => $systime,
            'edit_time'                     => $systime
        ];
        switch ($type) {
            // 个人用户
        case 'I':

            $data['business_name']       = $legal_person_name;
            $data['business_license_no'] = $legal_person_identity_card_no;

            break;
            // 个体
        case 'B':

            $data['business_name']       = $business_name;
            $data['business_license_no'] = $legal_person_identity_card_no;

            break;
            // 企业
        case 'E':

            $data['business_name']       = $business_name;
            $data['business_license_no'] = $business_license_no;

            break;
        default:
            break;
        }

        RealNameAuthenticationInfo::create($data);

        return ['status' => true, 'msg' => '添加成功'];
    }

    /**
     * @Route("/users/change-status", name="admin_users_change_status")
     */
    public function changeStatusAction(Request $request) {
        $id = $request->request->get('id', '');

        if (empty($id)) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $name  = $request->request->get('name', '');
        $value = $request->request->get('value', '');

        if (!in_array($name, ['status']) || $value == '') {
            return ['status' => false, 'msg' => '参数错误'];
        }

        if (false !== strpos($id, ',')) {
            $id = explode(',', $id);
        }

        $current_user_id = $this->getUserId();

        if ($current_user_id == $id || in_array($current_user_id, $id)) {
            return ['status' => false, 'msg' => '无法操作当前登录账号！'];
        }

        $succeed = User::update_all(['status' => $value, 'edit_time' => time()], ['id' => $id]);

        return ['status' => (bool)$succeed, 'msg' => $succeed ? "修改成功" : '修改失败'];
    }

    /**
     * @Route("/users/stats", name="admin_users_stats")
     * 用户分析
     */
    public function statsAction(Request $request) {
        return $this->indexAction($request);
    }

    /**
     * @Route("/users/wtf", name="admin_users_wtf")
     * 潜在客户
     */
    public function wtfAction(Request $request) {
        return $this->indexAction($request);
    }

    /**
     * @Route("/users/number-pool", name="admin_users_number_pool")
     * 号码池
     */
    public function numberPoolAction(Request $request) {
        $data = ['left_nav' => $this->getLeftNav(), 'main_panel_route' => 'admin_dashboard_stats'];

        return $this->render("Admin/User/numberPool.twig", $data);
    }

    /**
     *
     * 统计金额
     */
    private function statistics() {
        $statistics = [
            'open_money'       => $open_money = OpenPlatformAccount::sum('balance'),
            'agent_money'      => $agent_money = ResellerAccount::sum('balance'),
            'supplier_money'   => $supplier_money = SupplierAccount::sum('balance'),
            'statistics_money' => $statistics_money = $supplier_money + $agent_money + $open_money
        ];
        return $statistics;
    }

    /**
     * @Route("/users/levels", name="admin_users_levels")
     * 级别列表
     */
    public function levelsAction(Request $request) {
        $platform_id = $request->query->get('tab',Platform::OPEN_PLATFORM);
        return $this->render("Admin/User/levels.twig", ['platform_id' => $platform_id]);
    }

    /**
     * @Route("/users/ajax-levels", name="admin_users_ajax_levels")
     *
     */
    public function ajaxLevelAction(Request $request, Form $form) {
        $platform_id = $request->query->get('platform_id', Platform::OPEN_PLATFORM);
        $form->init([
            'name'       => [''],
            'default'    => ['enum[0|1|all]'],
            'time_type'  => ['enum[add_time|edit_time]'],
            'start_time' => ['date'],
            'end_time'   => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        $time_type  = $form->get('time_type');

        $where = ['is_deleted' => 0];

        if (in_array($platform_id, array_keys(Platform::PLATFORMS))) {
            $where['platform_id'] = $platform_id;
        }

        if ($form->name) {
            $where['name'] = ['LIKE' => '%' . $form->name . '%'];
        }

        if (in_array($form->default, ['0', '1'])) {
            $where['default'] = $form->default;
        }

        if ($end_time > $start_time) {
            $where[$time_type] = ['BETWEEN' => [$start_time, $end_time]];
        }

        $options = [
            'select' => 'id, `name`, info, `default`, platform_id, add_time, edit_time'
        ];

        list($data, $total) = PlatformUserLevel::paginate($where, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }

    /**
     * @Route("/users/level-add", name="admin_users_level_add")
     *
     */
    public function levelAddAction(Request $request, Form $form) {
        $form->init([
            'platform_id'   => [to_enum(Platform::PLATFORMS)],
            'name'          => [''],
            'info'          => [''],
            'synchro_level' => [''],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '参数有误，请重新提交'];
        }

        if (!$form->platform_id) {
            return ['status' => false, 'msg' => '请选择平台'];
        }

        if (!$form->name) {
            return ['status' => false, 'msg' => '请输入级别名称'];
        }

        $systime = time();

        $result = PlatformUserLevel::create([
            'platform_id' => $form->platform_id,
            'name'        => $form->name,
            'info'        => $form->info,
            'default'     => 0,
            'add_time'    => $systime,
            'edit_time'   => $systime
        ]);

        return ['status' => (boolean)$result, 'msg' => $result ? '添加成功' : '添加失败'];
    }

    /**
     * @Route("/users/set-default-level", name="admin_users_set_default_level")
     *
     */
    public function setDefaultLevelAction(Request $request) {
        $id = $request->request->getInt('id');

        if (!$id) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $result = PlatformUserLevel::find($id);

        if (empty($result)) {
            return ['status' => false, 'msg' => '找不到指定数据'];
        }

        //事务处理
        $update = PlatformUserLevel::transaction(function () use ($result, $id) {
            PlatformUserLevel::update_all(["default" => "0"], ['platform_id' => $result->platform_id]);
            PlatformUserLevel::update_all(["default" => "1"], ['platform_id' => $result->platform_id, 'id' => $id]);
            return true;
        });

        return ['status' => (boolean)$update, 'msg' => $update ? '设置成功' : '设置失败'];
    }

    /**
     * @Route("/users/level-edit", name="admin_users_level_edit")
     *
     */
    public function levelEditAction(Request $request, Form $form) {
        $form->init([
            'id'            => ['integer'],
            'platform_id'   => [to_enum(Platform::PLATFORMS)],
            'name'          => [''],
            'info'          => [''],
            'synchro_level' => [''],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '参数有误，请重新提交'];
        }

        $result = PlatformUserLevel::find($form->id);

        if (empty($result)) {
            return ['status' => false, 'msg' => '找不到指定数据'];
        }

        //等级名称唯一
        $is_exist = false;

        if ($form->name) {
            $is_exist = PlatformUserLevel::first(['name' => $form->name]);
        }

        if ($is_exist && $is_exist->id != $form->id) {
            return ['status' => false, 'msg' => '已存在相同的等级名称'];
        }

        $status = PlatformUserLevel::update_all(['name' => $form->name, 'info' => $form->info], ['id' => $form->id]);

        return ['status' => (boolean)$status, 'msg' => $status ? '更新成功' : '更新失败'];
    }

    /**
     * @Route("/users/level-del", name="admin_users_level_del")
     * @return array
     */
    public function levelDelAction(Request $request) {
        $id = $request->request->getInt('id', 0);

        if (!$id) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $result = PlatformUserLevel::find($id);
        if (!$result) {
            return ['status' => false, 'msg' => '找不到指定数据'];
        }

        $update = PlatformUserLevel::update_all(['is_deleted' => 1], ['id' => $id]);

        return ['status' => (boolean)$update, 'msg' => $update ? '删除成功' : '删除失败'];
    }

    /**
     * @Route("/users/search", name="admin_users_search")
     */
    public function searchAction(Request $request) {
        $criteria = $request->query->get('criteria');

        if (!$criteria) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        if(is_mobile($criteria)) {
            $conditions = ['mobile' => $criteria];
        } elseif(is_email($criteria)) {
            $conditions = ['email' => $criteria];
        } else {
            $conditions = ['user_name' => $criteria];
        }

        $user = User::first($conditions, ['select' => 'id, user_name, mobile, nick_name', 'hydrate' => false]);

        if (!$user) {
            return ['status' => false, 'msg' => '找不到符合查询条件的用户'];
        }

        return ['status' => true, 'user' => $user];
    }
}
