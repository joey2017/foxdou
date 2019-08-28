<?php
namespace App\Open\Controller;

use App\Common\Service\UserManager;
use App\Reseller\Form\TransferForm;
use App\Common\Model\Payment\UserMoneyLog;
use App\Common\Model\Payment\PaymentMethodSettings;
use Symfony\Component\HttpFoundation\Response;
use Symfu\SimpleFormBundle\Form;
use App\PaymentConstants;
use App\Common\Service\UuidGenerator;
use App\Common\Model\Payment\RechargeOrder;
use App\Common\Model\Payment\UserMoneyTradeLog;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Model\User\User;
use App\Common\Exception\TransferFailedException;
use App\Common\Model\Payment\AgentUsersRebateLog;
use App\Platform;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route(defaults={"group": "finance"})
 */
class FinanceController extends OpenBaseController {

    /**
     * @Route("/finance", name="open_finance_index")
     */
    public function indexAction() {
        $conditions = ['user_id' => $this->getUserId(), 'platform_id' => Platform::OPEN_PLATFORM];
        list($trades, $total) = UserMoneyTradeLog::paginate($conditions, [], 1, 20);
        $data = ['trades' => $trades];

        return $this->render("Open/Finance/index.twig", $data);
    }

    /**
     * @Route("/finance/funds/add-balance", name="open_finance_add_balance")
     */
    public function addBalanceAction(Request $request) {
        return $this->render("/Open/Finance/add_balance.twig");
    }

    /**
     * @Route("/finance/trade-logs", name="open_finance_trade_logs")
     */
    public function tradeLogsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildTradeLogQueryOptions($form, $request->query);

        if ($request->query->count() < 2) {
            $data = [
                'form' => $form,
            ];

            return $this->render("Open/Finance/trade_logs.twig", $data);
        }
        list($data, $total) = UserMoneyTradeLog::paginate($conditions, $options, $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /**
     * @Route("/finance/trade-logs/summary", name="open_finance_trade_logs_summary")
     */
    public function tradeLogSummaryAction(Request $request, Form $form) {
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
     * @Route("/finance/trade-logs/export", name="open_finance_trade_logs_export")
     */
    public function exportTradeLogsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildTradeLogQueryOptions($form, $request->query);

        $options['order']   = 'id ASC'; // 导出记录时按时间先后顺序导出
        $options['hydrate'] = 'true'; // 要返回 model 对象，而不是数组
        $tradeLogs          = UserMoneyTradeLog::all($conditions, $options);

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
            'start_time'     => ['date'],// 开始时间
            'end_time'       => ['date'],// 结束时间
            'type_time'      => ['enum[add_time|pay_time|end_time]'], // 时间范围类型
            'trade_type'     => ["enum[{$tradeTypes}]"], // 交易类型
            'trade_status'   => ["enum[{$tradeStatuses}]"], // 交易类型
            'payment_method' => ["enum[{$paymentMethods}]"], // 支付方式
            'min'            => ["decimal, min[0.01], max[99999] "], // 最小金额
            'max'            => ["decimal, min[0.01], max[99999] "], // 最大金额
        ]);

        $userId = $this->getUser()->id;
        $page   = $form->getInt('page', 1);
        $conds  = ['user_id = ? AND platform_id = ?'];  // 一定需要加上的过滤条件
        $params = [$userId, Platform::OPEN_PLATFORM];

        if (!$form->validate($query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('end_time')) - strtotime($form->get('start_time'))) > 31 * 86400) {
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
            if ($dateFrom = $form->get('start_time')) {
                $conds[]  = "({$form->type_time} >= ?)";
                $params[] = strtotime($dateFrom);
            }
            if ($dateTo = $form->get('end_time')) {
                $conds[]  = "({$form->type_time} < ?)";
                $params[] = strtotime($dateTo) + 86400 - 1; // 到该天 23:59:59
            }

            if ($amount_min = $form->get('min')) {
                $conds[]  = "(amount >= ?)";
                $params[] = $amount_min;
            }
            if ($amount_max = $form->get('max')) {
                $conds[]  = "(amount < ?)";
                $params[] = $amount_max;
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
     * @Route("/finance/transactions", name="open_finance_transactions")
     */
    public function transactionsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildTransactionsQueryOptions($request, $form);

        if ($request->query->count() < 2) {
            $data = [
                'form' => $form,
            ];

            return $this->render("Open/Finance/transactions.twig", $data);
        }
        list($data, $total) = UserMoneyLog::paginate($conditions, $options, $form->page, $form->limit);
        foreach ($data as &$v) {
            $v['log_type'] = UserMoneyLog::getLogTypeText($v['log_type']);
        }
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /**
     * @Route("/finance/transactions/summary", name="open_finance_transactions_summary")
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
     * @Route("/finance/transactions/export", name="open_finance_transactions_export")
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
        $params = [$userId, Platform::OPEN_PLATFORM];

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 31 * 86400) {
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
     * @Route("/finance/funding", name="open_finance_funding")
     */
    public function fundingLogsAction(Request $request, Form $form) {
        $orderStatuses  = join("|", array_filter(array_keys(RechargeOrder::STATUSES)));
        $paymentMethods = join("|", array_keys(PaymentConstants::PAYMENT_METHOD_CLASS_INFOS));
        $form->init([
            'trade_sn'       => ['digit'], // 流水号
            'order_id'       => ['digit'], // 业务单号
            'start_time'     => ['date'],// 开始时间
            'end_time'       => ['date'],// 结束时间
            'status'         => ["enum[{$orderStatuses}]"], // 充值状态
            'payment_method' => ["enum[{$paymentMethods}]"], // 支付方式
        ]);

        if ($request->query->count() < 2) {
            $data = [
                'payment_methods' => PaymentConstants::toChoices(),
                //'form'            => $form,
            ];

            return $this->render("Open/Finance/funding_logs.twig", $data);
        }

        $userId                    = $this->getUser()->id;
        $conditions['user_id']     = $userId;
        $conditions['platform_id'] = Platform::OPEN_PLATFORM;

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('end_time')) - strtotime($form->get('start_time'))) > 31 * 86400) {
            $this->flashError("时间范围不允许超过 1 个月");
        } else {
            $conditions['trade_sn']         = $form->get('trade_sn');
            $conditions['id']               = $form->get('order_id');
            $conditions['payment_class_id'] = $form->get('payment_method');
            $conditions['status']           = $form->get('status');
            $conditions['add_time']         = ['BETWEEN' => [strtotime($form->get('start_time')), strtotime($form->get('end_time'))]];
        }

        list($data, $total) = RechargeOrder::paginate($conditions, [], $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    /**
     * @Route("/finance/funding/summary", name="open_finance_funding_summary")
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
}
