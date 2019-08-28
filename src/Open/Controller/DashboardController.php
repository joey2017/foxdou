<?php

namespace App\Open\Controller;

use App\Common\Model\Article;
use App\Common\Model\ArticleCategory;
use App\Common\Model\ArticleReadStatus;
use App\Common\Model\User\ContactInfo;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\RealNameAuthenticationInfo;
use App\Common\Model\User\SupplierAccount;
use App\Common\Model\User\User;
use App\Common\Model\User\UserIdentity;
use App\Common\Model\UsersMessage;
use App\Platform;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(defaults={"group": "dashboard"})
 */
class DashboardController extends OpenBaseController {

    /**
     * @Route("/dashboard", name="open_dashboard_index")
     */
    public function indexAction() {
        // 消息
        $message = UsersMessage::count(['user_id' => $this->getUserId(), 'status' => 1]);
        return $this->render("Open/Dashboard/index.twig", ['message' => $message]);
    }

    /**
     * 账户信息/修改
     * @Route("/dashboard/user-info", name="open_dashboard_user_info")
     */
    public function userInfoAction(Request $request, Form $form) {
        $options = [
            'select' => 'u.*,c.contact_name,c.contact_phone,c.contact_mail,c.contact_qq,c.contact_address,' .
                'ui.entity_name,ui.biz_legal_representative_name,ui.entity_license_address',
            'from'   => User::table_name() . ' AS u',
            'joins'  => 'LEFT JOIN `' . ContactInfo::table_name() . '` AS c on c.user_id=u.id' .
                ' LEFT JOIN `' . UserIdentity::table_name() . '` AS ui ON u.id=ui.user_id',
            'order'  => 'u.id DESC',
        ];
        $user = User::first(['u.id' => $this->getUserId()], $options);
        if (empty($user)) {
            return ['status' => false, 'msg' => '用户不存在'];
        }
        if ($user->status != User::STATUS_ACTIVE) {
            return ['status' => false, 'msg' => '账户状态异常，暂不可修改'];
        }

        if ($request->getMethod() !== Request::METHOD_POST) {
            return $this->render("/Open/Dashboard/user_info.twig", ['user_info' => $user]);
        }

        $form->init([
            'nick_name'       => ['required'],
            'head_img'        => [''],
            'bind_mobile'     => ['required,mobile'],
            'bind_email'      => ['required,email'],
            'contact_name'    => [''],
            'contact_phone'   => ['mobile'],
            'contact_mail'    => ['email'],
            'contact_qq'      => ['integer'],
            'contact_address' => [''],
        ], 'open_dashboard_user_info');
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

                ContactInfo::update_all([
                    'contact_name'    => $form->contact_name,
                    'contact_phone'   => $form->contact_phone,
                    'contact_mail'    => $form->contact_mail,
                    'contact_qq'      => $form->contact_qq,
                    'contact_address' => $form->contact_address,
                    'edit_time'       => date('Y-m-d H:i:s')
                ], [
                    'user_id' => $user->id
                ]);

                // 写入日志
                OperationLog::create([
                    'user_id'     => $user->id,
                    'log_type'    => OperationLog::OPERATION_EDIT,
                    'platform_id' => Platform::OPEN_PLATFORM,
                    'info'        => "{$user->email}修改账户信息“nick_name:{$form->nick_name},head_img:{$form->head_img},bind_mobile:{$form->bind_mobile},bind_email:{$form->bind_email},contact_name:{$form->contact_name},contact_phone:{$form->contact_phone},contact_mail:{$form->contact_mail},contact_qq:{$form->contact_qq},contact_address:{$form->contact_address}”",
                    'ip'          => $request->getClientIp(),
                    'add_time'    => time(),
                ]);

                return true;
            });
        } catch (\Exception $e) {
            $text = [
                'open_id' => $this->getUserId(),
                'stack'   => $e->getTraceAsString(),
                'error'   => $e->getMessage()
            ];
            $this->logger->error(OperationLog::OPERATIONS[OperationLog::OPERATION_EDIT] . '账户信息失败', $text);
        }
        return ['status' => (boolean)$result, 'msg' => '保存' . ($result ? '成功' : '失败')];
    }

    /**
     * 平台公告
     * @Route("/dashboard/announcements", name="open_dashboard_announcements")
     */
    public function announcementsAction(Request $request/*, Form $form*/) {
        $page  = $request->query->get('page', 1);
        $limit = $request->query->get('limit', 10);

        $where = [
            'a.portal_id' => Platform::OPEN_PLATFORM,
            'a.published' => 0
        ];

        $options = [
            'select' => 'a.*,c.name,s.status',
            'from'   => Article::table_name() . ' AS a',
            'joins'  => 'LEFT JOIN `' . ArticleCategory::table_name() . '` AS c ON c.id=a.cate_id' .
                ' LEFT JOIN ' . ArticleReadStatus::table_name() . ' AS s ON s.article_id=a.id AND s.user_id=' . $this->getUserId(),
            'order'  => 'a.id DESC',

        ];

        list($data, $total) = Article::paginate($where, $options, $page, $limit);
        if ($request->getMethod() === Request::METHOD_POST) {
            return ['status' => true, 'data' => $data, 'total' => $total];
        }

        return $this->render("/Open/Dashboard/announcements.twig", ['data' => $data, 'total' => $total, 'page' => $page, 'page_size' => $limit]);
    }

    /**
     * @Route("/dashboard/announcement-details", name="open_dashboard_announcement_details")
     */
    public function announcementDetailsAction(Request $request) {
        $id = $request->query->getInt('id', 0);
        if (!$id || !($announcement = Article::find($id))) {
            $this->flashError("参数错误");

            return $this->redirectToRoute('open_dashboard_announcements');
        }

        $common_where = ['portal_id' => Platform::OPEN_PLATFORM, 'cate_id' => $announcement->cate_id, 'published' => 0];

        $last = Article::first(array_merge($common_where, ['id' => ['>' => $id]]));
        $next = Article::first(array_merge($common_where, ['id' => ['<' => $id]]));
        $data = ['announcement' => $announcement, 'last' => $last, 'next' => $next];

        return $this->render("Open/Dashboard/announcement_details.twig", $data);
    }

    /**
     * 操作日志
     * @Route("/dashboard/operation-logs", name="open_dashboard_operation_logs")
     */
    public function operationLogsAction(Request $request, Form $form) {
        if ($request->query->count() < 2) {
            return $this->render("/Open/Dashboard/operation_logs.twig");
        }
        $form->init([
            'ip'         => [''],
            'info'       => [''],
            'user_name'  => [''],
            'start_time' => ['date'],
            'end_time'   => ['date'],
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = [
            'sl.user_id'     => $this->getUserId(),
            'sl.platform_id' => Platform::OPEN_PLATFORM,
            'sl.ip'          => $form->ip,
            'sl.info'        => $form->info,
            'u.user_name'    => $form->user_name,
        ];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        if ($end_time > $start_time) {
            $where['sl.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }
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
