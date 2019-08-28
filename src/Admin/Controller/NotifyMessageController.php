<?php

namespace App\Admin\Controller;

use App\Common\Model\Order\OrderRecharge;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NotifyMessageController extends AdminBaseController {

    /**
     * 获取订单分类统计
     * @Route("/notify/get-orders-total", name="admin_notify_get_orders_total")
     */
    public function getOrdersTotalAction(Request $request) {
        $voice = $this->session()->get('admin_speek_notice');
        if ($voice === null) {
            $this->session()->set('admin_speek_notice', 1);
        }

        $sql  = "SELECT count(id) AS count, CASE order_mark WHEN 1 THEN 'timeout' WHEN 2 THEN 'stack' WHEN 3 THEN 'pending' WHEN 4 THEN 'failures' ELSE 'normal' END AS status FROM " . OrderRecharge::table_name() . " GROUP BY order_mark ORDER BY status DESC";
        $stmt = OrderRecharge::query($sql);

        $orders = $stmt->fetchAll();

        $data = [];
        if (!empty($orders)) {
            foreach ($orders as $key => $val) {
                if ($val['status'] == 'normal') {
                    continue;
                }

                $data[$val['status']]['count'] = $val['count'];

                switch ($val['status']) {
                case 'stack'://卡单
                    $data[$val['status']]['msg'] = "话费卡单{$val['count']}笔";
                    break;
                case 'failures'://失败可疑
                    $data[$val['status']]['msg'] = "失败可疑的话费订单{$val['count']}笔";
                    break;
                case 'pending'://待人工处理
                    $data[$val['status']]['msg'] = "待处理的话费订单{$val['count']}笔";
                    break;
                case 'timeout'://超时
                    $data[$val['status']]['msg'] = "已有{$val['count']}笔超过2分钟还在充值中的话费订单";
                    break;
                default:
                    break;
                }
            }
        }

        $msg     = '有';
        $re_data = [];
        foreach ($data as $k => $v) {
            if ($v['count'] && $k != 'timeout') {
                $msg .= "{$v['msg']}，";
            } else {
                if ($v['count'] >= 10 && $k == 'timeout') {
                    if ($msg == '有') {
                        $msg = "注意：{$v['msg']}";
                    } else {
                        $msg .= "{$v['msg']}，";
                    }
                }
            }
            $re_data[$k] = $v['count'];
        }
        if ($msg != '有') {//中文字符串截取
            return array_merge(['status' => true, 'msg' => mb_substr($msg, 0, -1), 'voice' => $voice], $re_data);
        }
        return ['status' => false, 'msg' => '', 'voice' => $voice, 'timeout' => $data['timeout']['count']];
    }

    /**
     * 语音开启/关闭
     * @Route("/notify/switch-voice", name="admin_notify_switch_voice")
     */
    public function switchVoiceAction(Request $request) {
        if ($request->getMethod() !== Request::METHOD_POST) {
            return ['status' => false, 'msg' => '非法操作'];
        }
        $status = $request->request->get('status');
        if (!in_array($status, [0, 1])) {
            return ['status' => false, 'msg' => '非法状态'];
        }
        $this->session()->set('admin_speek_notice', intval($status));
        return ['status' => true, 'msg' => '操作成功'];
    }

}