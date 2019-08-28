<?php
namespace App\Supplier\Controller;

use App\Common\Model\Article;
use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Order\OrderRechargeSup;
use App\Common\Model\Product\ProductSource;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\SupplierAccount;
use App\Common\Model\User\User;
use App\Platform;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;

/**
 * @Route(defaults={"group": "dashboard"})
 */
class DashboardController extends SupplierBaseController {

    /**
     * 首页
     * @Route("/dashboard", name="supplier_dashboard_index")
     */
    public function indexAction(Request $request) {
        // 全部商品
        $where        = [
            'sell_user_id'  => $this->getUserId(),
            'review_status' => ['<' => 3]
        ];
        $all_products = ProductSource::count($where);

        // 已上架商品
        $where['status'] = 1;
        $online_products = ProductSource::count($where);

        // 交易额
        $amount = OrderRecharge::all(
            [
                'supplier_id' => $this->getUserId(),
                'status'      => [OrderRecharge::STATUS_SUCCEED_SYS, OrderRecharge::STATUS_SUCCEED_MAN]
            ],
            ['select' => 'sum(sell_price*buy_num) as total']
        );

        // 我的订单数量
        $order_total = OrderRecharge::count(
            [
                'supplier_id' => $this->getUserId()
            ]
        );

        // 最新公告
        $articles = Article::all(['portal_id' => Platform::SUPPLIER], ['limit' => 4]);

        // 销售统计
        $sales = $this->getSalesStatisticsAction($request);
        return $this->render("/Supplier/Dashboard/index.twig", [
            'articles'        => $articles,
            'all_products'    => $all_products,
            'online_products' => $online_products,
            'amount'          => $amount[0],
            'order_total'     => $order_total,
            'sales'           => $sales,
        ]);
    }

    /**
     * 销售统计
     * @Route("/dashboard/sales-statistics", name="supplier_dashboard_sales_statistics")
     */
    public function getSalesStatisticsAction(Request $request, $page = 1, $limit = 10) {
        $page  = $page ?? $request->query->getInt('page', 1);
        $limit = $limit ?? $request->query->getInt('limit', 10);

        $sql = 'SELECT
            DATE_FORMAT(o.add_time, "%Y-%m-%d") AS dday,
            COUNT(o.id) AS total,
            IFNULL(sum(o.recharge_amount), 0) AS amount,
            IFNULL(sum(s.sup_cost), 0) AS source_price,
            IFNULL(sum(o.sell_price - s.sup_price),0) AS profit
        FROM
            '.OrderRecharge::table_name('o').'
        LEFT JOIN '.OrderRechargeSup::table_name('s').' ON s.order_id = o.id
        AND s.id = (
            SELECT
                max(id)
            FROM
                '.OrderRechargeSup::table_name().'
            WHERE
                order_id = o.id
            AND s.sup_user_id = ?
        )
        WHERE
            o.supplier_id = ?
        AND (o.status = ? OR o.status = ?)
        GROUP BY
            dday
        LIMIT ' . (int)($page - 1) . ',' . (int)$limit;

        $params = [
            $this->getUserId(),
            $this->getUserId(),
            OrderRecharge::STATUS_SUCCEED_SYS,
            OrderRecharge::STATUS_SUCCEED_MAN
        ];

        $data = OrderRecharge::query($sql, $params)->fetchAll();

        $total = OrderRecharge::query('SELECT COUNT(*) AS count FROM (' . $sql . ') AS t', $params)->fetch();

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }


    /**
     * 账户信息/修改
     * @Route("/dashboard/profile", name="supplier_dashboard_profile")
     */
    public function profileAction(Request $request, Form $form) {
        $user = User::first(['u.id' => $this->getUserId()], [
            'select' => 'u.*,s.shop_name,s.shop_address',
            'from'   => User::table_name() . ' AS u',
            'joins'  => 'INNER JOIN `'.SupplierAccount::table_name().'` AS s ON s.user_id=u.id',
            'order'  => 'u.id DESC',
        ]);
        if (empty($user)) {
            return ['status' => false, 'msg' => '用户不存在'];
        }
        if ($user->status != User::STATUS_ACTIVE) {
            return ['status' => false, 'msg' => '账户状态异常，暂不可修改'];
        }

        if ($request->getMethod() !== Request::METHOD_POST) {
            return $this->render("/Supplier/Dashboard/profile.twig", ['user_info' => $user]);
        }

        $form->init([
            'nick_name'    => ['required'],
            'head_img'     => [''],
            'bind_mobile'  => ['required,mobile'],
            'bind_email'   => ['required,email'],
            'shop_name'    => ['required'],
            'shop_address' => ['required'],
        ], 'supplier_dashboard_profile');
        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $result = false;
        try {
            $result = User::transaction(function () use ($form, $user, $request) {
                User::update_all([
                    'edit_time'   => time(),
                    'nick_name'   => $form->nick_name,
                    'head_img'    => $form->head_img,
                    'bind_mobile' => $form->bind_mobile,
                    'bind_email'  => $form->bind_email
                ], [
                    'id' => $user->id
                ]);
                (new sup_users())->update_all(['shop_name' => $form->shop_name, 'shop_address' => $form->shop_address, 'edit_time' => time()], ['user_id' => $user->id]);

                // 写入日志
                OperationLog::create([
                    'user_id'     => $user->id,
                    'log_type'    => OperationLog::OPERATION_EDIT,
                    'platform_id' => Platform::SUPPLIER,
                    'info'        => "{$user->email}修改账户信息“nick_name:{$form->nick_name},head_img:{$form->head_img},bind_mobile:{$form->bind_mobile},bind_email:{$form->bind_email},shop_name:{$form->shop_name},shop_address:{$form->shop_address}”",
                    'ip'          => $request->getClientIp(),
                    'add_time'    => time(),
                ]);

                return true;
            });
        } catch (\Exception $e) {
            $text = [
                'supplier_id' => $this->getUserId(),
                'stack'       => $e->getTraceAsString(),
                'error'       => $e->getMessage()
            ];
            $this->logger->error(OperationLog::OPERATIONS[OperationLog::OPERATION_EDIT] . '账户信息失败', $text);
        }
        return ['status' => (boolean)$result, 'msg' => '保存' . ($result ? '成功' : '失败')];
    }

    /**
     * 头像上传处理
     * @Route("/dashboard/head-img-upload", name="supplier_dashboard_head_img_upload")
     */
    // public function headImgUploadAction(Request $request,UploadedFile $uploadedFile) {
    //     $upload = new UploadFileManager();
    //     $upload->saveUploadedFile($uploadedFile,$this->getSupplierUser(),'head-img');
    // }

    /**
     * 平台公告
     * @Route("/dashboard/announcements", name="supplier_dashboard_announcements")
     */
    public function announcementsAction(Request $request, Form $form) {
        if ($request->query->count() < 2) {
            return $this->render("/Supplier/Dashboard/announcements.twig");
        }
        $form->init([
            'start_time' => ['date'],
            'end_time'   => ['date'],
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = [
            'a.portal_id' => Platform::SUPPLIER,
        ];

        $options    = [
            'select' => 'a.*,c.name',
            'from'   => Article::table_name() . ' AS a',
            'joins'  => 'LEFT JOIN `'.ArticleCategory::table_name().'` AS c ON c.id=a.cate_id',
            'order'  => 'a.id DESC',
        ];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        /*if ($end_time > $start_time) {
            $where['a.publish_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }*/

        list($data, $total) = Article::paginate($where, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }

    /**
     * 操作日志
     * @Route("/dashboard/operation-logs", name="supplier_dashboard_operation_logs")
     */
    public function operationLogsAction(Request $request, Form $form) {
        if ($request->query->count() < 2) {
            return $this->render("/Supplier/Dashboard/operation_logs.twig");
        }
        $form->init([
            'ip'         => [''],
            'info'       => [''],
            'email'      => [''],
            'start_time' => ['date'],
            'end_time'   => ['date'],
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where      = [
            'sl.user_id'     => $this->getUserId(),
            'sl.platform_id' => Platform::SUPPLIER,
            'sl.ip'          => $form->ip,
            'sl.info'        => $form->info,
            'u.email'        => $form->email,
        ];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        /*if ($end_time > $start_time) {
            $where['sl.time'] = ['BETWEEN' => [$start_time, $end_time]];
        }*/
        $options = [
            'select' => 'u.user_name,u.email,sl.*',
            'from'   => OperationLog::table_name() . ' AS sl',
            'joins'  => 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=sl.user_id',
            'order'  => 'sl.id DESC',
        ];
        list($data, $total) = OperationLog::paginate($where, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }

}
