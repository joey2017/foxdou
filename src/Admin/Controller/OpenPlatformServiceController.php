<?php

namespace App\Admin\Controller;

use App\Common\Model\OpenPlatform\ApiRequestLog;
use App\Common\Model\OpenPlatform\ApiRequestLogInfo;
use App\Common\Model\OpenPlatform\App;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Model\User\User;
use App\Common\Model\User\UsersPremiumAccount;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "service-management"})
 */
class OpenPlatformServiceController extends AdminBaseController {
    /**
     * @Route("/open-platform", name="admin_open_platform_index")
     */
    public function indexAction(Request $request) {
        return __METHOD__;
    }


    /** 请求记录
     * @Route("/open-platform/interface/request-logs", name="admin_open_platform_interface_request_logs")
     */
    public function requestLogsAction(Request $request, Form $form) {

        if ($request->query->count() < 2) {
            return $this->render('Admin/OpenPlatformService/request_logs.twig');
        }

        $form->init([
            'app_status' => ['integer'],
            'status'     => ['integer'],
            'app_name'   => [''],
            'user_name'  => [''],
            'start_time' => ['date'],
            'end_time'   => ['date'],
        ]);
        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        if ($form->app_name) {
            $where['a.name'] = ['LIKE' => ['%' . $form->app_name . '%']];
        }

        if ($form->user_name) {
            $where['u.user_name'] = ['LIKE' => ['%' . $form->user_name . '%']];
        }

        $where['o.app_status'] = $form->app_status;
        $where['o.status']     = $form->status;

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        if ($start_time < $end_time && $end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        if ($start_time < $end_time) {
            $where['o.add_time'] = ['BETWEEN' => [$start_time, $end_time]];
        }

        $options = [
            'select' => 'o.id,o.app_id,a.name as app_name,o.app_status,o.user_id,if(u.type="I",u.mobile,u.email) as pass,upa.account,u.nick_name,
                o.interface_id,o.status,o.code,o.amount,o.pay_type,o.ip,o.add_time,opa.id as open_platform_id',
            'from'   => ApiRequestLog::table_name().' AS o',
            'joins'  => 'LEFT JOIN '.App::table_name().' AS a ON a.id=o.app_id LEFT JOIN '.User::table_name().
                ' AS u ON o.user_id=u.id '.
                ' LEFT JOIN '.OpenPlatformAccount::table_name().' AS opa ON opa.user_id=o.user_id '.
                ' LEFT JOIN '.UsersPremiumAccount::table_name().' AS upa ON upa.user_id=o.user_id',
            'order'  => 'o.id DESC'
        ];

        list($data, $total) = ApiRequestLog::paginate($where, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total, 'msg' => '获取成功'];

    }


    /** 请求记录
     * @Route("/open-platform/interface/request-log-detail", name="admin_open_platform_interface_request_log_detail")
     */
    public function detailAction(Request $request){
        $id = $request->request->getInt('id');
        
        if (!$id) {
            return ['status' => false,'msg' => '参数有误'];
        }

        if (!$log = ApiRequestLog::find($id)) {
            return ['status' => false,'msg' => '未找到指定的数据'];
        }

        $data = ApiRequestLogInfo::first(['request_log_id' => $id]);

        return $this->renderView('Admin/OpenPlatformService/detail.twig',['data' => $data]);
    }
}
