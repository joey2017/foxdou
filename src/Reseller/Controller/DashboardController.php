<?php
namespace App\Reseller\Controller;

use App\Common\Model\Article;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\ResellerAccount;
use App\Common\Service\ArticleManager;
use App\Platform;
use App\Reseller\Form\PrintSettingForm;
use App\Reseller\Model\Announcement;
use App\Reseller\Model\PrinterSetting;
use App\Common\Model\User\User;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "dashboard"})
 */
class DashboardController extends ResellerBaseController {

    use NavTrait;

    /**
     * @Route("/dashboard", name="reseller_dashboard_index")
     */
    public function indexAction() {
        //key是order_cate
        $shortcuts = [
            '100003' => ['name' => '手机话费充值', 'url' => '/reseller/recharge/mobile-single', 'icon' => '&#xe608;', 'img' => '//apistore.foxdou.com/uploads/service/d4d0438deec74b25c08d413732350b63?0.0014853213043255487'],
            '100004' => ['name' => '手机流量充值', 'url' => '/reseller/recharge/flow', 'icon' => '&#xe612;', 'img' => '//apistore.foxdou.com/uploads/service/af4796192fdbf578dc3895ef6816a283.png?0.022305543320271903'],
            '100007' => ['name' => '固话宽带充值', 'url' => '/reseller/recharge/telephone', 'icon' => '&#xe600;', 'img' => '//apistore.foxdou.com/uploads/service/f62ee3a5d31c700c25914677913c9458.png?0.21023703728866638'],
            '100005' => ['name' => '腾讯业务充值', 'url' => '/reseller/recharge/tencent', 'icon' => '&#xe60b;', 'img' => '//apistore.foxdou.com/uploads/service/753d95c4da563e5f6db581fa9fb94a37.png?0.6723992915045243'],
            '100006' => ['name' => '游戏点卡充值', 'url' => '/reseller/recharge/game', 'icon' => '&#xe61e;', 'img' => '//apistore.foxdou.com/uploads/service/412ae292df552ef00758734d5ce1fb49.jpg?0.9258981295715749'],
            //            ['id'=>'','name'=>'充值卡密购买','url'=>'','icon'=>'&#xe617;',],
        ];

        // 推广用户数量
        $spread_users = ResellerAccount::count(['parent_dealer_user_id' => $this->getUserId(), 'status' => ResellerAccount::STATUS_ACTIVE]);

        // 今日收益
        $where         = [
            'user_id' => $this->getUserId(),
            'status'  => [OrderRecharge::STATUS_SUCCEED_SYS, OrderRecharge::STATUS_SUCCEED_MAN]
        ];
        $opt['select'] = 'ifnull(sum(real_sell_price-sell_price),0) as profit';

        $income_today = OrderRecharge::all(array_merge($where, ['add_time' => ['>=' => 'CURDATE()']]), $opt);

        // 昨日收益
        $income_yest = OrderRecharge::all(array_merge($where, ['add_time' => ['BETWEEN' => ['DATE_SUB(CURDATE(),INTERVAL 1 DAY)', 'CURDATE()']]]), $opt);

        $data = [
            'left_nav'     => $this->getLeftMenu(),
            'shortcuts'    => $shortcuts,
            'spread_users' => $spread_users,
            'income_today' => $income_today[0],
            'income_yest'  => $income_yest[0],
        ];

        return $this->render("Reseller/Dashboard/index.twig", $data);
    }

    /**
     * @Route("/dashboard/operation-logs", name="reseller_dashboard_operation_logs")
     */
    public function operationLogsAction(Request $request, Form $form) {
        list($conditions, $options, $form) = $this->buildOperationLogQueryOptions($form, $request->query);

        $conditionStr = array_shift($conditions);
        $params       = array_shift($conditions);

        $operationLogTableName = OperationLog::table_name();
        $userTableName         = User::table_name();

        $select  = 'l.id, l.add_time, l.info, l.ip, u.nick_name, u.user_name';
        $orderBy = 'ORDER BY l.id DESC';
        $paging  = "LIMIT {$options['offset']},{$options['limit']}";
        $sql     = "SELECT {$select} FROM `{$operationLogTableName}` l LEFT JOIN `{$userTableName}` u ON l.user_id = u.id WHERE {$conditionStr} {$orderBy} {$paging};";

        $stmt = OperationLog::query($sql, $params);
        $logs = $stmt->fetchAll();

        $countSql  = "SELECT count(*) as `row_count` FROM `{$operationLogTableName}` l  WHERE {$conditionStr};";
        $row_count = OperationLog::query($countSql, $params)->fetchColumn(0);

        $data = ['left_nav' => $this->getLeftMenu(), 'form' => $form, 'operation_logs' => $logs, 'row_count' => $row_count, 'page' => $form->get('page', 1), 'page_size' => self::$pageSize];

        return $this->render("Reseller/Dashboard/operationLogs.twig", $data);
    }

    private function buildOperationLogQueryOptions(Form $form, $query) {
        $form->init([
            'user_name' => [], // 操作人
            'ip'        => [], // IP
            'info'      => [], // 操作详情
            'from'      => ['date'],// 开始时间
            'to'        => ['date'],// 结束时间
        ]);

        $userId = $this->getUser()->id;
        $conds  = ['user_id = ?'];  // 一定需要加上的过滤条件
        $params = [$userId];

        if (!$form->validate($query)) {
            $errors = $form->getErrors();
            $this->flashError("参数错误，请检查后重新查询");
        } elseif ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 1 * 31 * 86400) {
            $this->flashError("时间范围不允许超过 1 个月");
        } else {
            // 可选过滤条件
            if ($user_name = $form->get('user_name')) {
                $conds[]  = "(u.user_name = ?)";
                $params[] = $user_name;
            }
            if ($ip = $form->get('ip')) {
                $conds[]  = "(l.ip = ?)";
                $params[] = $ip;
            }
            if ($dateFrom = $form->get('from')) {
                $conds[]  = "(l.add_time >= ?)";
                $params[] = strtotime($dateFrom);
            }
            if ($dateTo = $form->get('to')) {
                $conds[]  = "(l.add_time < ?)";
                $params[] = strtotime($dateTo) + 86400 - 1; // 到该天 23:59:59
            }
            if ($info = $form->get('note')) {
                $conds[]  = "(l.info LIKE ?)";
                $params[] = "%{$info}%";
            }
        }
        $page = $form->getInt('page', 1);

        $condsStr   = join(' AND ', $conds);
        $conditions = $conditions = [$condsStr, $params];
        $options    = [
            'select' => 'l.add_time, l.info, l.ip, u.nick_name, u.user_name',
            'limit'  => self::$pageSize,
            'offset' => ($page - 1) * self::$pageSize,
            'order'  => 'l.id DESC',
        ];

        return [$conditions, $options, $form];
    }

    /**
     * @Route("/dashboard/announcements", name="reseller_dashboard_announcements")
     */
    public function announcementsAction(Request $request) {
        $data = ['left_nav' => $this->getLeftMenu()];
        return $this->render("Reseller/Dashboard/announcements.twig", $data);
    }
}
