<?php

namespace App\Admin\Controller;

use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use App\Admin\Model\CronJob;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSetting;
use App\Common\Model\ResellerPriceGroup;
use App\Platform;
use App\ProductConstants;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/", defaults={"group": "system-administration"})
 */
class CronJobController  extends AdminBaseController {

    /**
     * 定时价格修改任务
     * @Route("/cron-jobs", name="admin_cron_jobs")
     */
    public function scheduled_product_price_changesAction(Request $request, Form $form) {
        $form->init([
            'enabled' => ['enum[1|0]'],
            'status'  => [to_enum(CronJob::STATUSES)],
            'from'    => ['datetime'],
            'to'      => ['datetime'],
            'search'  => [''],
        ]);

        if (!$request->isXmlHttpRequest()) {
            return $this->render("/Admin/CronJob/scheduled_price_changes.twig", ['form' => $form]);
        }

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $conditions['j.enabled'] = $form->enabled;
        $conditions['j.status']  = $form->status;
        if ($form->from) {
            $conditions['j.scheduled_at'] = ['BETWEEN' => [$form->from, $form->to]];
        }

        global $T;
        $options = [
            'select' => "j.id, j.name, j.enabled, j.status, j.platform_id, j.payload, j.scheduled_at, j.created_at, j.updated_at,
                         uc.user_name as creator_name, ud.user_name as canceller_name
                        ",
            'from'   => "{$T(CronJob::table_name())} j",
            'joins'  => "LEFT JOIN {$T(AdminUser::table_name())} uc ON uc.id=j.creator_user_id
                            LEFT JOIN {$T(AdminUser::table_name())} ud ON ud.id=j.canceller_user_id
                        ",
        ];
        list($rows, $total) = CronJob::paginate($conditions, $options, $form->page, $form->limit);

        foreach ($rows as &$row) {
            $row['platform_name'] = Platform::PLATFORMS[$row['platform_id']] ?? "未知平台({$row['platform_id']})";
            $row['status_text']   = CronJob::STATUSES[$row['status']] ?? "未知状态({$row['status']})";

            $payload            = json_decode($row['payload'], true);
            $row['product_num'] = count($payload['products'] ?? []);
        }
        return ['status' => true, 'data' => $rows, 'total' => $total];
    }

    /**
     *
     * @Route("scheduled-jobs/cancel", name="admin_cron_jobs_cancel", methods={"POST"})
     */
    public function cancelAction(Request $request) {
        $ids = array_filter(preg_split('/,/', $request->request->get('ids')), function ($v) { return $v !== ''; });
        if (!$ids) {
            return ['status' => false, 'msg' => '请先选择要撤销任务'];
        }

        $user    = $this->getAdminUser();
        $context = ['user_id' => $user->id, 'ids' => $ids, 'status' => CronJob::STATUS_CANCELLED];

        CronJob::update_all(['enabled' => 0, 'status' => CronJob::STATUS_CANCELLED], ['id' => $ids]);

        $count  = count($ids);
        $idsStr = json_encode($ids);

        $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_EDIT, AdminOperationLog::SUBJECT_PRODUCT,
            "用户 {$user} 撤销了 {$count} 个定时任务：{$idsStr}", $request->getClientIp(), $context);

        return ['status' => true, 'msg' => "成功撤销 {$count} 个任务"];
    }
}
