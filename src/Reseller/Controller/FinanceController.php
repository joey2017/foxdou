<?php

namespace App\Reseller\Controller;

use App\Common\Exception\TransferFailedException;
use App\Common\Model\Payment\AgentUsersRebateLog;
use App\Common\Model\Payment\PaymentMethod;
use App\Common\Model\Payment\RechargeOrder;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\User;
use App\Common\Service\UserManager;
use App\Common\Service\UuidGenerator;
use App\ErrorCodes;
use App\PaymentConstants;
use App\Platform;
use App\Reseller\Form\TransferForm;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\PaymentMethodSettings;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;
use function Symfu\SimpleFormBundle\to_enum;

class FinanceController extends ResellerBaseController {

    /**
     * @Route("/finance", name="reseller_finance_index")
     */
    public function indexAction() {
        $conditions = ['user_id' => $this->getUserId(), 'platform_id' => Platform::RESELLER];
        list($trades, $total) = UserMoneyTradeLog::paginate($conditions, [], 1, 20);
        $data = ['left_nav' => $this->getFinanceLeftNavMenus(), 'trades' => $trades];

        return $this->render("Reseller/Finance/index.twig", $data);
    }

    /**
     * @Route("/finance/funds/add-balance", name="reseller_finance_add_balance")
     */
    public function addBalanceAction(Request $request) {
        return $this->render("/Reseller/Finance/addBalance.twig", ['left_nav' => $this->getFinanceLeftNavMenus()]);
    }

    /**
     * @Route("/finance/check-user", name="reseller_finance_check_user")
     */
    public function checkUserAction(Request $request, UserManager $userManager) {
        $username = $request->query->get("username");

        list($valid, $subject) = $this->checkRecipientStatus($userManager, $username);
        if (!$valid) {
            return $this->json(['status' => false, 'msg' => $subject]);
        }

        $data = ['status' => true, 'msg' => "用户状态正常，昵称：{$subject->nick_name}", 'recipient_name' => $subject->nick_name];

        return $this->json($data);
    }

    private function checkRecipientStatus(UserManager $userManager, $username) {
        if ($username === $this->getUser()->user_name) {
            return [false, "不能转账给自己"];
        }

        $user = $userManager->getUserByUserName($username, true);
        if (!$user) {
            return [false, "用户不存在或状态异常"];
        }

        $resellerAccount = $user->getResellerAccount();
        if (!$resellerAccount || !$resellerAccount->isValid()) {
            return [false, "用户没有开通代理平台账号"];
        }

        $realNameInfo = $user->getRealNameInfo();
        if (!$realNameInfo || !$realNameInfo->isIdentityVerified()) {
            $this->logger->debug("用户没有通过实名认证，无法接受转账：username={$user->user_name}");

            return [false, "用户没有通过实名认证，无法接受转账"];
        }

        return [true, $user];
    }

    /**
     * @Route("/finance/transfer", name="reseller_finance_transfer")
     */
    public function transferAction(Request $request, Form $form) {
        $form->init(
            [
                'recipient_id'   => ['required, min_length[2], max_length[20], regex[/^[a-z0-9_-]+$/]'],
                'recipient_name' => ['required, min_length[2], max_length[20]'],
                'amount'         => ['required, decimal, min[0.01], max[10000]'],
                'amount_confirm' => ['equals_to[amount]'],
                'pay_password'   => ['required'],
                'note'           => [''],
            ]
        );
        $data = ['left_nav' => $this->getFinanceLeftNavMenus(), 'form' => $form];

        return $this->render("Reseller/Finance/transfer.twig", $data);
    }

    /**
     * @Route("/finance/transfer/confirm", name="reseller_finance_transfer_confirm", methods={"POST"})
     */
    public function transferConfirmAction(Request $request, TransferForm $form, UserManager $userManager, UuidGenerator $uuidGenerator) {
        // 先做一些参数合法性判断
        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();

            return $this->json(['status' => false, "errors" => $errors, 'msg' => '表单数据错误，修改表单错误后重新提交']);
        }

        // 检查一下收款方状态和真实姓名是否正确
        /**  @var $recipient User */
        list($valid, $recipient) = $this->checkRecipientStatus($userManager, $form->getAlnum('recipient_id'));
        if (!$valid) {
            return $this->json(['status' => false, 'msg' => '收款人不存在或状态异常']);
        }
        $business_name = $recipient->getRealNameInfo()->business_name;
        if ($business_name !== $form->get('recipient_name')) {
            return $this->json(['status' => false, 'errors' => ['recipient_name' => '收款人真实姓名不正确'], 'msg' => '表单数据错误，修改表单错误后重新提交']);
        }

        // 然后判断一下账户余额是否足够
        $user   = $this->getUser();
        $amount = $form->getDecimal('amount');
        if ($user->getResellerAccount()->amount < $amount) {
            return $this->json(['status' => false, 'msg' => '转账失败-账户余额不足']);
        }

        // 最后检查支付密码是否正确
        list($succeed, $msg) = $userManager->verifyPayPassword($user, $form->get("pay_password"));
        if (!$succeed) {
            return $this->json(['status' => false, 'errors' => ['pay_password' => $msg]]);
        }

        // 参数全部合法，交易双方账户状态正常可以交易，可以继续进行了
        try {
            $succeed = $this->doTransferInTransation($user, $recipient, $form);
            if ($succeed) {
                return $this->json(['status' => true, 'balance' => $user->getResellerAccount()->amount]);
            } else {
                return $this->json(['status' => false, 'msg' => '转账失败-系统错误，请重试']);
            }
        } catch (TransferFailedException $ex) {
            $uuid = $uuidGenerator->newUuid();
            $this->logger->critical("转账失败，uuid={$uuid}，payer={$user}, recipient={$recipient}, amount={$amount}, TransferFailedException.message=" . $ex->getMessage() . ", stack=" . $ex->getTraceAsString());

            return $this->json(['status' => false, 'msg' => '转账失败：' . $ex->getMessage()]);
        } catch (\Exception $ex) {
            $uuid = $uuidGenerator->newUuid();
            $this->logger->critical("转账失败, uuid={$uuid}，payer={$user}, recipient={$recipient}, amount={$amount}, Exception.message=" . $ex->getMessage() . ", stack=" . $ex->getTraceAsString());

            return $this->json(['status' => false, 'msg' => "系统错误，转账失败，请联系管理员解决。相关信息：{$uuid}"]);
        }
    }

    // 把整个转账过程放进事务中处理，如果有一步失败，则自动进行回滚

    /**
     * @param User $payer
     * @param User $recipient
     * @param Form $form
     * @return mixed
     * @throws \Exception
     */
    private function doTransferInTransation(User $payer, User $recipient, Form $form) {
        $succeed = User::transaction(function () use ($payer, $recipient, $form) {
            $amount = $form->getDecimal('amount');
            $note   = $form->get('note', '');

            // 先给转出方扣款，如果失败则抛出异常，中断交易
            if (!$payer->getResellerAccount()->decrBalance($amount)) {
                throw new TransferFailedException("付款人账户扣款失败");
            }
            // 然后给转入方增加余额，如果失败则抛出异常，中断交易
            if (!$recipient->getResellerAccount()->incrBalance($amount)) {
                throw new TransferFailedException("收款人账户收款失败");
            }

            // 为转出方创建一个转账记录，如果失败则抛出异常，中断交易
            $tradeLog = $this->createTradeLogData($payer, $recipient, -1 * $amount, $note);

            // 分别为交易双方各创建一个余额记录，如果失败则抛出异常，中断交易
            $this->createMoneyLog($payer, $tradeLog, -1 * $amount, $note);
            $this->createMoneyLog($recipient, $tradeLog, $amount, $note);

            return true;
        });

        return $succeed;
    }

    /**
     * @return array
     */
    private function getFinanceLeftNavMenus(): array {
        $leftNavMenu = [];

        $leftNavMenu[] = ['name' => '我的财务', 'route' => 'reseller_finance_index', 'icon' => '&#xe643;',];
        $leftNavMenu[] = ['name' => '我要转账', 'route' => 'reseller_finance_transfer', 'icon' => '&#xe8fb;',];
        // ['name'=>'我要提现','url'=>Url::to(['/backend/transfer-cash/index']),'icon'=>'&#xe631;',],

        $user = $this->getUser();
        if ($user->getResellerAccount()->agency_type == 2) {
            $leftNavMenu[] = ['name' => '提取佣金', 'route' => 'reseller_finance_withdraw', 'icon' => '&#xe631;',];
        }

        return $leftNavMenu;
    }

    private function createTradeLogData(User $payer, User $recipient, $amount, $note) {
        $now       = time();
        $tradeData = [
            'platform_id'             => Platform::RESELLER,
            'amount'                  => $amount,
            'name'                    => '转账',
            'user_id'                 => $payer->id,
            'note'                    => $note,
            'trade_log_type'          => UserMoneyTradeLog::TYPE_TRANSFER,//****************************注意平台  // FIXME: 2 == 创建应用??
            'order_id'                => '',
            'order_cate_id'           => 0,
            'trade_time'              => $now,
            'pay_time'                => $now,
            'other_party_user_id'     => $recipient->id,
            'other_party_user_pintai' => Platform::RESELLER,//对方id
            'product_cate_id'         => null,//可空，
            'trade_status'            => 3,//可空，默认为1
            'trade_poundage'          => 0,//交易手续费，默认为0

            'scene_id'         => 2,//****************************注意平台
            'payment_class_id' => 1,//支付方式
            'trade_id'         => UserMoneyTradeLog::newId(),
        ];

        $log = UserMoneyTradeLog::create($tradeData);
        if (!$log) {
            throw new TransferFailedException("保存转账记录失败");
        }

        return $log;
    }

    private function createMoneyLog(User $user, UserMoneyTradeLog $tradeLog, $amount, $note) {
        $resellerAccount = $user->getResellerAccount();
        $totalAmount     = ResellerAccount::sum("amount");
        $logData         = [
            'platform_id'            => Platform::RESELLER,
            'user_id'                => $user->id,
            'amount'                 => $amount,
            'name'                   => "转账",
            'log_type'               => UserMoneyLog::TYPE_TRANSFER, // FIXME: 转成可读的常量形式
            'note'                   => $note,
            'trade_id'               => $tradeLog->trade_id,
            'order_id'               => $tradeLog->order_id,
            'current_balance'        => $resellerAccount->balance,
            'platform_total_balance' => $totalAmount,
            'add_time'               => time(),
        ];

        $log = UserMoneyLog::create($logData);
        if (!$log) {
            throw new TransferFailedException("保存转账记录失败");
        }

        return $log;
    }

    /**
     * @Route("/finance/trade-logs", name="reseller_finance_trade_logs")
     */
    public function tradeLogsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildTradeLogQueryOptions($form, $request->query);

        if ($request->query->count() < 2) {
            $data = [
                'left_nav' => $this->getFinanceLeftNavMenus(),
                'form'     => $form,
            ];

            return $this->render("Reseller/Finance/tradeLogs.twig", $data);
        }
        list($data, $total) = UserMoneyTradeLog::paginate($conditions, $options, $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /**
     * @Route("/finance/trade-logs/summary", name="reseller_finance_trade_logs_summary")
     */
    public function tradeLogSummaryAction(Request $request,Form $form) {
        $request->query->remove("trade_status"); // 删掉这个过滤条件，下面再根据情况添加
        list($conditions, $options, $form) = $this->buildTradeLogQueryOptions($form, $request->query);

        $conditionStr    = array_shift($conditions);
        $conditionValues = array_shift($conditions);

        $tableName = UserMoneyTradeLog::table_name();
        $sql       = "SELECT count(`id`) as `count`, ifnull(sum(`amount`),0) as `sum_money` FROM `{$tableName}` WHERE {$conditionStr}";

        $summary['no_pay']  = UserMoneyTradeLog::query("{$sql} AND trade_status = 1", $conditionValues)->fetchColumn(0);
        $summary['trading'] = UserMoneyTradeLog::query("{$sql} AND trade_status = 2", $conditionValues)->fetchColumn(0);
        $summary['success'] = UserMoneyTradeLog::query("{$sql} AND trade_status = 3", $conditionValues)->fetch();
        $summary['loser']   = UserMoneyTradeLog::query("{$sql} AND trade_status = 4", $conditionValues)->fetchColumn(0);

        return $this->json(['code' => "SUCCEED", 'summary' => $summary]);
    }

    /**
     * @Route("/finance/trade-logs/export", name="reseller_finance_trade_logs_export")
     */
    public function exportTradeLogsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildTradeLogQueryOptions($form, $request->query);

        $options['order']   = 'id ASC'; // 导出记录时按时间先后顺序导出
        $options['hydrate'] = 'true'; // 要返回 model 对象，而不是数组
        $tradeLogs          = UserMoneyTradeLog::all($conditions,$options);

        $rows = [];
        foreach ($tradeLogs as $log) {
            if (!$rows) {
                $headers = $this->formatTradeLogHeaders(array_keys($log->to_array()));
                $rows[]  = $this->toCsv($headers);
            }

            if ($line = $this->toCsv($log->export())) {
                $rows[] = $line;
            }
        }

        $datetime = date("Y-m-d-His");
        $filename = "export-trades-{$datetime}.csv";
        $contents = join("\r\n", $rows);
        $response = new Response($contents, 200, ['Content-Type' => "text/plain", "Content-Disposition" => "attachment;filename={$filename}"]);

        return $response;
    }

    private function buildTradeLogQueryOptions(Form $form, $query) {
        $paymentMethods = join("|", array_keys(PaymentConstants::PAYMENT_METHOD_CLASS_INFOS));
        $tradeTypes     = join("|", array_keys(UserMoneyTradeLog::TRADE_TYPES));
        $tradeStatuses  = join("|", array_filter(array_keys(UserMoneyTradeLog::TRADE_STATUSES)));

        $form->init([
            'trade_id'       => ['digit'], // 流水号
            'order_id'       => ['digit'], // 业务单号
            'from'           => ['date'],// 开始时间
            'to'             => ['date'],// 结束时间
            'time_type'      => ['enum[add_time|pay_time|end_time]'], // 时间范围类型
            'trade_type'     => ["enum[{$tradeTypes}]"], // 交易类型
            'trade_status'   => ["enum[{$tradeStatuses}]"], // 交易类型
            'payment_method' => ["enum[{$paymentMethods}]"], // 支付方式
        ]);

        $userId = $this->getUser()->id;
        $page   = $form->getInt('page', 1);
        $conds  = ['user_id = ? AND platform_id = ?'];  // 一定需要加上的过滤条件
        $params = [$userId, Platform::RESELLER];

        if (!$form->validate($query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 1 * 31 * 86400) {
            $this->flashError("时间范围不允许超过 1 个月");
        } else {
            // 可选过滤条件
            if ($trade_id = $form->get('trade_id')) {
                $conds[]  = "(id = ?)";
                $params[] = $trade_id;
            }
            if ($order_id = $form->get('order_id')) {
                $conds[]  = "(order_id = ?)";
                $params[] = $order_id;
            }
            if ($trade_status = $form->get('trade_status')) {
                $conds[]  = "(trade_status = ?)";
                $params[] = $trade_status;
            }
            if ($trade_log_type = $form->get('trade_type')) {
                $conds[]  = "(trade_log_type = ?)";
                $params[] = $trade_log_type;
            }
            if ($paymentMethod = $form->get('payment_method')) {
                $conds[]  = "(payment_class_id = ?)";
                $params[] = $paymentMethod;
            }
            if ($dateFrom = $form->get('from')) {
                $conds[]  = "(add_time >= ?)";
                $params[] = strtotime($dateFrom);
            }
            if ($dateTo = $form->get('to')) {
                $conds[]  = "(add_time < ?)";
                $params[] = strtotime($dateTo) + 86400 - 1; // 到该天 23:59:59
            }
        }

        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];

        $options = [
            'select' => '`id`, `order_id`, `name`, `trade_log_type`, `amount`, `trade_status`, `payment_class_id`, `add_time`',
            'limit'  => self::$pageSize,
            'offset' => ($page - 1) * self::$pageSize,
            'order'  => 'id DESC',
        ];

        return [$conditions, $options, $form];
    }

    /**
     * @Route("/finance/transactions", name="reseller_finance_transactions")
     */
    public function transactionsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildTransactionsQueryOptions($request, $form);

        if ($request->query->count() < 2) {
            $data = [
                'left_nav' => $this->getFinanceLeftNavMenus(),
                'form'     => $form,
            ];

            return $this->render("Reseller/Finance/transactions.twig", $data);
        }
        list($data, $total) = UserMoneyLog::paginate($conditions, $options, $form->page, $form->limit);
        foreach ($data as &$v) {
            $v['log_type'] = UserMoneyLog::getLogTypeText($v['log_type']);
        }
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /**
     * @Route("/finance/transactions/summary", name="reseller_finance_transactions_summary")
     */
    public function transactionSummaryAction(Request $request, Form $form) {
        $request->query->remove("trade_status"); // 删掉这个过滤条件，下面再根据情况添加
        list($conditions, $options, $form) = $this->buildTransactionsQueryOptions($request, $form);

        $conditionStr    = array_shift($conditions);
        $conditionValues = array_shift($conditions);

        $tableName = UserMoneyLog::table_name();
        $sql       = "SELECT count(`id`) as `count`, ifnull(sum(`amount`),0) as `sum_money` FROM `{$tableName}` WHERE {$conditionStr}";

        $income = UserMoneyLog::query("{$sql} AND amount > 0", $conditionValues)->fetch(); //  收入
        $spend  = UserMoneyLog::query("{$sql} AND amount < 0", $conditionValues)->fetch();  // 支出

        return $this->json(['code' => 'SUCCEED', 'income' => $income, 'spend' => $spend]);
    }

    /**
     * @Route("/finance/transactions/export", name="reseller_finance_transactions_export")
     */
    public function exportTransactionsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildTransactionsQueryOptions($request, $form);

        $options['order']   = 'id ASC'; // 导出记录时按时间先后顺序导出
        $options['hydrate'] = 'true'; // 要返回 model 对象，而不是数组
        list($moneyLogs, $total) = UserMoneyLog::paginate($conditions, $options);

        $rows = [];
        foreach ($moneyLogs as $log) {
            if (!$rows) {
                $headers = $this->formatTransactionHeaders(array_keys($log->to_array()));
                $rows[]  = $this->toCsv($headers);
            }

            if ($line = $this->toCsv($log->export())) {
                $rows[] = $line;
            }
        }

        $datetime = date("Y-m-d-His");
        $filename = "export-transactions-{$datetime}.csv";
        $contents = join("\r\n", $rows);
        $response = new Response($contents, 200, ['Content-Type' => "text/plain", "Content-Disposition" => "attachment;filename={$filename}"]);

        return $response;
    }

    private function buildTransactionsQueryOptions(Request $request, Form $form) {

        $form->init([
            'trade_id' => ['natural'], // 流水号
            'order_id' => ['natural'], // 业务单号
            'name'     => [], // 交易名称
            'min'      => ['decimal, min[0.01], max[99999] '], // 最小金额
            'max'      => ['decimal, min[0.01], max[99999]'], // 最大金额
            'from'     => ['date'],// 开始时间
            'to'       => ['date'],// 结束时间
            'log_type' => [to_enum(UserMoneyLog::LOG_TYPES)], // 交易类型
        ]);

        $userId = $this->getUser()->id;
        $page   = $form->getInt('page', 1);
        $conds  = ['user_id = ? AND platform_id = ?'];  // 一定需要加上的过滤条件
        $params = [$userId, Platform::RESELLER];

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 1 * 31 * 86400) {
            $this->flashError("时间范围不允许超过 1 个月");
        } else {
            // 可选过滤条件
            if ($trade_id = $form->get('trade_id')) {
                $conds[]  = "(trade_id = ?)";
                $params[] = $trade_id;
            }
            if ($order_id = $form->get('order_id')) {
                $conds[]  = "(order_id = ?)";
                $params[] = $order_id;
            }
            if ($trade_log_type = $form->get('log_type')) {
                $conds[]  = "(log_type = ?)";
                $params[] = $trade_log_type;
            }
            if ($dateFrom = $form->get('from')) {
                $conds[]  = "(add_time >= ?)";
                $params[] = strtotime($dateFrom);
            }
            if ($dateTo = $form->get('to')) {
                $conds[]  = "(add_time < ?)";
                $params[] = strtotime($dateTo) + 86400 - 1; // 到该天 23:59:59;
            }

            if ($min = $form->getDecimal('min', 0)) { // TODO: 是否需要判断绝对值？
                $conds[]  = "(amount >= ?)";
                $params[] = $min;
            }
            if ($max = $form->getDecimal('max', 0)) {
                $conds[]  = "(amount <= ?)";
                $params[] = $max;
            }

            if ($name = $form->get('name')) {
                $conds[]  = "(name LIKE ?)";
                $params[] = "%{$name}%";
            }
        }

        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];
        $options    = [
            'select' => '`trade_id`, `order_id`, `name`, `log_type`, `amount`, `current_balance`, `add_time`',
            'limit'  => self::$pageSize,
            'offset' => ($page - 1) * self::$pageSize,
            'order'  => 'id DESC',
        ];

        return [$conditions, $options, $form];
    }

    /**
     * @Route("/finance/funding", name="reseller_finance_funding")
     */
    public function fundingLogsAction(Request $request, Form $form) {
        $orderStatuses  = join("|", array_filter(array_keys(RechargeOrder::STATUSES)));
        $paymentMethods = join("|", array_keys(PaymentConstants::PAYMENT_METHOD_CLASS_INFOS));
        $form->init([
            'order_id'       => ['digit'], // 业务单号
            'from'           => ['date'],// 开始时间
            'to'             => ['date'],// 结束时间
            'status'         => ["enum[{$orderStatuses}]"], // 交易类型
            'payment_method' => ["enum[{$paymentMethods}]"], // 支付方式
        ]);

        $userId                    = $this->getUser()->id;
        $conditions['user_id']     = $userId;
        $conditions['platform_id'] = Platform::RESELLER;

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 1 * 31 * 86400) {
            $this->flashError("时间范围不允许超过 1 个月");
        } else {
            $conditions['id']       = $form->get('order_id');
            $conditions['status']   = $form->get('status');
            $conditions['add_time'] = ['BETWEEN' => [strtotime($form->get('from')), strtotime($form->get('to'))]];
        }
        $page = $form->getInt('page', 1);

        list($rows, $total) = RechargeOrder::paginate($conditions, [], $page);

        $data = [
            'left_nav'        => $this->getFinanceLeftNavMenus(),
            'data'            => $rows,
            'row_count'       => $total,
            'payment_methods' => PaymentConstants::toChoices(),
            'form'            => $form,
        ];

        return $this->render("Reseller/Finance/fundingLogs.twig", $data);
    }

    /**
     * @Route("/finance/funding/summary", name="reseller_finance_funding_summary")
     */
    public function fundingSummaryAction(Request $request, Form $form) {
        $request->query->remove('name');
        $request->query->remove('trade_type');
        $request->query->set('trade_type', UserMoneyTradeLog::TYPE_ADD_BALANCE);

        list($conditions, $options, $form) = $this->buildTradeLogQueryOptions($form, $request->query);

        $conditionStr    = array_shift($conditions);
        $conditionValues = array_shift($conditions);

        $tableName = UserMoneyTradeLog::table_name();
        $sql       = "SELECT count(`id`) as `count`, ifnull(sum(`amount`),0) as `sum_money` FROM `{$tableName}` WHERE {$conditionStr}";

        $summary = UserMoneyTradeLog::query("{$sql} AND amount > 0", $conditionValues)->fetch(); //  收入
        $data    = ['code' => 'SUCCEED', 'summary' => $summary];
        return $this->json($data);
    }

    /**
     * @Route("/finance/withdraw", name="reseller_finance_withdraw")
     */
    // public function withdrawAction(Request $request, UserManager $userManager) {
    //     $data = ['left_nav' => $this->getFinanceLeftNavMenus()];
    //
    //     return $this->render("Reseller/Finance/fundingLogs.twig", $data);
    // }

    private function toCsv($fields) {
        $f = fopen('php://memory', 'r+');
        if (fputcsv($f, $fields) === false) {
            return false;
        }
        rewind($f);
        $csv_line = stream_get_contents($f);

        return rtrim($csv_line);
    }

    private function formatTradeLogHeaders($headers, $charset = 'GB18030') {
        $headerMap = [
            'trade_id'         => '流水号',
            'order_id'         => '业务单号',
            'name'             => '交易名称',
            'trade_log_type'   => '交易类型',
            'trade_status'     => '交易类型',
            'payment_class_id' => '支付方式',
            'amount'           => '金额',
            'current_balance'  => '账户余额',
            'add_time'         => '交易时间',
        ];

        $curEncoding = mb_internal_encoding();
        foreach ($headers as &$header) {
            $header = $headerMap[$header] ?? $header;

            if ($curEncoding !== $charset) {
                $header = mb_convert_encoding($header, $charset);
            }
        }

        return $headers;
    }

    private function formatTransactionHeaders($headers, $charset = 'GB18030') {
        $headerMap = [
            'trade_id' => '流水号',
            'order_id' => '业务单号',
            'name'     => '交易名称',
            'add_time' => '开始时间',
            'log_type' => '交易类型',
            'amount'   => '金额',
        ];

        $curEncoding = mb_internal_encoding();
        foreach ($headers as &$header) {
            $header = $headerMap[$header] ?? $header;

            if ($curEncoding !== $charset) {
                $header = mb_convert_encoding($header, $charset);
            }
        }

        return $headers;
    }

    /**
     * @Route("/finance/withdraw", name="reseller_finance_withdraw")
     */
    public function withdrawAction(Request $request, Form $form, UserManager $userManager, UuidGenerator $uuidGenerator) {
        $form->init(
            [
                'amount'         => ['required, decimal, min[0.01], max[10000]'],
                'amount_confirm' => ['equals_to[amount]'],
                'pay_password'   => ['required'],
                'note'           => [''],
            ]
        );
        if ($request->getMethod() !== Request::METHOD_POST) {
            $data = ['left_nav' => $this->getFinanceLeftNavMenus(), 'form' => $form];
            return $this->render("Reseller/Finance/withdraw.twig", $data);
        }

        // 先做一些参数合法性判断
        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();

            return ['status' => false, "errors" => $errors, 'msg' => '表单数据错误，修改表单错误后重新提交'];
        }

        // 然后检查支付密码是否正确
        list($succeed, $msg) = $userManager->verifyPayPassword($this->getResellerUser(), $form->get("pay_password"));
        if (!$succeed) {
            return ['status' => false, 'errors' => ['pay_password' => $msg]];
        }

        // 最后判断一下佣金余额是否足够
        $amount   = $form->getDecimal('amount');
        $reseller = ResellerAccount::first(['user_id' => $this->getUserId(), 'status' => ResellerAccount::STATUS_ACTIVE]);
        if ($reseller->rebate_balance < $amount) {
            return ['status' => false, 'msg' => '提现失败-佣金余额不足'];
        }

        // 参数全部合法，交易双方账户状态正常可以交易，可以继续进行了
        try {
            //$succeed = $this->doTransferInTransation($user, $form);
            $succeed = ResellerAccount::transaction(function () use ($reseller, $form, $amount) {
                ResellerAccount::update_all([
                    'rebate_balance' => $reseller->rebate_balance - $amount,
                    'balance'        => $reseller->balance + $amount,
                    'edit_time'      => time()
                ], [
                    'id' => $reseller->id
                ]);
                AgentUsersRebateLog::create([
                    'name'                        => '佣金提取到余额',
                    'trade_sn'                    => '',
                    'info'                        => '佣金提现',
                    'rebate'                      => $amount,
                    'after_rebate_balance'        => $reseller->rebate_balance - $amount,
                    'after_pintai_rebate_balance' => $reseller->rebate_balance - $amount,
                    'dealer_user_id'              => $reseller->user_id,
                    //'user_id'                     => 0,
                    'rebate_type'                 => AgentUsersRebateLog::REBATE_DRAW,
                    'add_time'                    => time()
                ]);
                UserMoneyLog::create([
                    'platform_id'            => Platform::RESELLER,
                    'user_id'                => $this->getUserId(),
                    'amount'                 => $amount,
                    'name'                   => "佣金提取",
                    'log_type'               => UserMoneyLog::TYPE_BROKERAGE,
                    'note'                   => $form->note,
                    'trade_id'               => '',
                    //'order_id'             => $tradeLog->order_id,
                    'current_balance'        => $reseller->balance + $amount,
                    'platform_total_balance' => 0,//待定
                    'add_time'               => time(),
                ]);
                return true;
            });
            if ($succeed) {
                return ['status' => true, 'msg' => '佣金提现成功', 'rebate_balance' => $reseller->rebate_balance - $amount];
            } else {
                return ['status' => false, 'msg' => '佣金提现失败-系统错误，请重试'];
            }
        } catch (TransferFailedException $ex) {
            $uuid = $uuidGenerator->newUuid();
            $this->logger->critical("佣金提现失败，uuid={$uuid}，withdrawer={$this->getResellerUser()}, amount={$amount}, TransferFailedException.message=" . $ex->getMessage() . ", stack=" . $ex->getTraceAsString());

            return ['status' => false, 'msg' => '佣金提现失败：' . $ex->getMessage()];
        } catch (\Exception $ex) {
            $uuid = $uuidGenerator->newUuid();
            $this->logger->critical("佣金提现失败, uuid={$uuid}，withdrawer={$this->getResellerUser()}, amount={$amount}, Exception.message=" . $ex->getMessage() . ", stack=" . $ex->getTraceAsString());

            return ['status' => false, 'msg' => "系统错误，佣金提现失败，请联系管理员解决。相关信息：{$uuid}"];
        }
    }

    /**
     * @Route("/finance/rebate-logs", name="reseller_finance_rebate_logs")
     */
    public function rebateLogsAction(Request $request, Form $form) {
        $rebateLogTypes = join("|", array_keys(AgentUsersRebateLog::TRADE_STATUSES));

        $form->init([
            'trade_sn'    => ['natural'], // 流水号
            'order_sn'    => ['natural'], // 业务单号
            'name'        => [], // 交易名称
            'min'         => ['decimal, min[0.01], max[99999] '], // 最小金额
            'max'         => ['decimal, min[0.01], max[99999]'], // 最大金额
            'from'        => ['date'],// 开始时间
            'to'          => ['date'],// 结束时间
            'rebate_type' => ["enum[{$rebateLogTypes}]"], // 交易类型
        ]);

        if ($request->query->count() < 2) {
            $data = [
                'left_nav' => $this->getFinanceLeftNavMenus(),
                'form'     => $form,
            ];
            return $this->render("Reseller/Finance/rebateLogs.twig", $data);
        }
        list($conditions, $options) = $this->buildRebateLogsQueryOptions($request, $form);

        list($data, $total) = AgentUsersRebateLog::paginate($conditions, $options);

        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    private function buildRebateLogsQueryOptions(Request $request, Form $form) {
        $userId = $this->getUserId();
        $page   = $form->getInt('page', 1);
        $conds  = ['dealer_user_id = ?'];  // 一定需要加上的过滤条件
        $params = [$userId];

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 1 * 31 * 86400) {
            $this->flashError("时间范围不允许超过 1 个月");
        } else {
            // 可选过滤条件
            if ($trade_sn = $form->get('trade_sn')) {
                $conds[]  = "(trade_sn = ?)";
                $params[] = $trade_sn;
            }
            if ($order_sn = $form->get('order_sn')) {
                $conds[]  = "(order_sn = ?)";
                $params[] = $order_sn;
            }
            if ('' !== $rebate_log_type = $form->get('rebate_type')) {
                $conds[]  = "(rebate_type = ?)";
                $params[] = $rebate_log_type;
            }
            if ($dateFrom = $form->get('from')) {
                $conds[]  = "(add_time >= ?)";
                $params[] = strtotime($dateFrom);
            }
            if ($dateTo = $form->get('to')) {
                $conds[]  = "(add_time < ?)";
                $params[] = strtotime($dateTo) + 86400 - 1; // 到该天 23:59:59;
            }

            if ($min = $form->getDecimal('min', 0)) { // TODO: 是否需要判断绝对值？
                $conds[]  = "(rebate >= ?)";
                $params[] = $min;
            }
            if ($max = $form->getDecimal('max', 0)) {
                $conds[]  = "(rebate <= ?)";
                $params[] = $max;
            }

            if ($name = $form->get('name')) {
                $conds[]  = "(name LIKE ?)";
                $params[] = "%{$name}%";
            }
        }

        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];
        $options    = [
            'select' => '`trade_sn`, `order_sn`, `name`, `rebate_type`, `rebate`, `after_rebate_balance`, `add_time`,`user_id`, `info`',
            'limit'  => self::$pageSize,
            'offset' => ($page - 1) * self::$pageSize,
            'order'  => 'id DESC',
        ];

        return [$conditions, $options];
    }

    /**
     * @Route("/finance/rebatelogs-summary", name="reseller_finance_rebatelogs_summary")
     */
    public function rebateLogsSummaryAction(Request $request, Form $form) {
        $rebateLogTypes = join("|", array_keys(AgentUsersRebateLog::TRADE_STATUSES));

        $form->init([
            'trade_sn'    => ['natural'], // 流水号
            'order_sn'    => ['natural'], // 业务单号
            'name'        => [], // 交易名称
            'min'         => ['decimal, min[0.01], max[99999] '], // 最小金额
            'max'         => ['decimal, min[0.01], max[99999]'], // 最大金额
            'from'        => ['date'],// 开始时间
            'to'          => ['date'],// 结束时间
            'rebate_type' => ["enum[{$rebateLogTypes}]"], // 交易类型
        ]);

        list($conditions, $options) = $this->buildRebateLogsQueryOptions($request, $form);

        $conditionStr    = array_shift($conditions);
        $conditionValues = array_shift($conditions);

        $tableName = AgentUsersRebateLog::table_name();
        $sql       = "SELECT count(`id`) as `count`, ifnull(sum(`rebate`),0) as `sum_money` FROM `{$tableName}` WHERE {$conditionStr}";

        $income = AgentUsersRebateLog::query("{$sql} AND rebate > 0", $conditionValues)->fetch(); //  收入
        $spend  = AgentUsersRebateLog::query("{$sql} AND rebate < 0", $conditionValues)->fetch();  // 支出

        return ['status' => true, 'income' => $income, 'spend' => $spend];
    }
}
