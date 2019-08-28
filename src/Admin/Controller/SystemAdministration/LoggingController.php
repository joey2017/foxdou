<?php
namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "system-administration"})
 */
class LoggingController extends AdminBaseController {

    /**
     * @Route("/system-administration/logging/admin-operation-logs", name="admin_system_administration_logging_admin_operation_logs")
     */
    public function admin_operation_logsAction(Request $request, Form $form) {
        if (!$request->isXmlHttpRequest()) {
            $users = AdminUser::all();
            $availableAdmins = [];
            foreach ($users as $user) {
                $displayName = $user['name'] ? "{$user['name']} ({$user['user_name']})" :  $user['user_name'];
                $availableAdmins[$user['id']] = $displayName;
            }
            return $this->render("Admin/SystemAdministration/Logging/admin_operation_logs.twig", ['admins' => $availableAdmins]);
        }

        $form->init([
            'user_id'    => ['integer'],
            'start_time' => ['date_time'],
            'end_time'   => ['date_time'],
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;
        if ($end_time - $start_time > 86400 * 30) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        $t = function ($tableName) { return $tableName; };
        $conditions = [];
        if($form->user_id) {
            $conditions['a.user_id'] = $form->user_id;
        }
        if($form->start_time) {
            $conditions['a.add_time'] = ['BETWEEN' => [$form->start_time ?: '1980-01-01 00:00:00', $form->end_time ?: '2099-12-30 00:00:00']];
        }

        $options = [
            'select' => 'a.id, a.user_id, u.user_name, a.info, a.ip, a.type, a.subject_type, a.subject_id, a.context, a.add_time',
            'from'   => "{$t(AdminOperationLog::table_name())} a",
            'joins'  => "INNER JOIN `{$t(AdminUser::table_name())}` AS u ON u.id=a.user_id",
            'order'  => 'a.id DESC',
        ];

        list($data, $total) = AdminOperationLog::paginate($conditions, $options, $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];
    }

    /**
     * @Route("/system-administration/logging/operation-logs-detail", name="admin_system_administration_logging_operation_logs_detail")
     */
    public function operationLogsDetailAction(Request $request) {
        $id = $request->query->getInt('id', '0');

        if (!$id || !($log = AdminOperationLog::first(['id' => $id], ['hydrate' => false]))) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $operator = $log['user_id'] == $this->getUserId() ? $this->getUser() : AdminUser::find($log['user_id']);

        $log['type'] = AdminOperationLog::OPERATIONS[$log['type']] ?? "未知操作类型({$log['type']})";
        $log['subject_type'] = AdminOperationLog::SUBJECT_TYPES[$log['subject_type']] ?? "未知操作对象类型({$log['type']})";
        // $log['operator'] = $operator ? (string)$operator : "未知用户({$log['user_id']})";

        return ['status' => true, 'msg' => '获取数据成功', 'data' => $log];
    }

    /**
     * @Route("/system-administration/logging/delete-all", name="admin_system_administration_logging_delete_all")
     */
    public function deleteAllAction(Request $request) {
        // 验证管理员权限
        $user = $this->getUser();
        if (false === strpos($user['roles'], 'ROLE_ADMIN')) {
            return ['status' => false, 'msg' => '管理员才可执行该操作'];
        }
        if ($request->getMethod() === Request::METHOD_POST) {
            AdminOperationLog::query('TRUNCATE TABLE ' . AdminOperationLog::table_name());
            return ['status' => true, 'msg' => '清除数据成功'];
        }

        return ['status' => false, 'msg' => '非法请求'];
    }

    /**
     * @Route("/system-administration/logging/trace", name="admin_system_administration_logging_trace")
     */
    public function traceAction(Request $request) {
        $id      = $request->query->getInt('id', 0);
        $user_id = $request->query->getInt('user_id', 0);
        if(!$id || !$user_id) {
            throw new BadRequestHttpException('非法请求');
        }

        if(!$request->isXmlHttpRequest()) {
            return $this->render('Admin/SystemAdministration/Logging/trace.twig', ['id' => $id, 'user_id' => $user_id]);
        }

        $direction = $request->query->getInt('direction');
        $where   = ['user_id' => $user_id];
        $options = [
            'hydrate' => false,
            'order'   => 'id DESC',
        ];
        if ($direction == 1) {  //向下
            $where['id'] = ['<=' => $id];
        } else {              //向上
            $where['id'] = ['>=' => $id];
        }

        list($data, $total) = AdminOperationLog::paginate($where, $options);

        foreach ($data as &$log) {
            $log['type'] = AdminOperationLog::OPERATIONS[$log['type']] ?? "未知操作类型({$log['type']})";
            $log['subject_type'] = AdminOperationLog::SUBJECT_TYPES[$log['subject_type']] ?? "未知操作对象类型({$log['type']})";
        }

        return ['status' => true, 'msg' => '获取成功', 'data' => $data];
    }
}
