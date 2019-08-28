<?php

namespace App\Admin\Controller\ProductManagement;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Model\AdminUser;
use App\Admin\Model\CronJob;
use App\Common\Model\Product\Product;
use App\Common\Model\ResellerPriceGroup;
use App\Platform;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/product-management", defaults={"group": "product-management"})
 */
class ProductCronJobController  extends AdminBaseController {

    /**
     * 定时价格修改任务
     * @Route("/cron-jobs", name="admin_product_management_products_cron_jobs")
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
            return $this->render("/Admin/ProductManagement/ProductCronJob/index.twig", ['form' => $form]);
        }

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $conditions['j.name']    = 'product:update_price';
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
     * @Route("/cron-jobs/view-price-change-job-details", name="admin_product_management_products_cron_jobs_view_price_change_job_details")
     */
    public function view_price_change_job_detailsAction(Request $request) {
        $id = $request->query->get('id');
        if (!$id || !($job = CronJob::find($id))) {
            return $this->redirectToRoute('admin_product_management_products_cron_jobs');
        }

        // $payload = ['products' => $productInfos, 'default_settings' => $defaultSettings, 'group_settings' => $groupSettings, 'specific_user_settings' => $specificUserSettings];
        $payload              = json_decode($job->payload, true);
        $products             = $payload['products'];
        $defaultSettings      = $payload['default_settings'] ?? [];
        $groupSettings        = $payload['group_settings'] ?? [];
        $specificUserSettings = $payload['specific_user_settings'] ?? [];

        $priceGroups     = ResellerPriceGroup::all(['platform_id' => Platform::RESELLER], ['select' => 'id, group_name, 0 as checked']);

        foreach ($products as &$product) {
            $product_id = $product['id'];
            foreach ($priceGroups as &$priceGroup) {
                $groupId = $priceGroup['id'];
                $priceGroup['checked'] = $groupSettings[$product_id][$groupId] ?? false;
            }
        }

        $data = ['job' => $job, 'products' => $products, 'price_groups' => $priceGroups, 'default_settings' => $defaultSettings, 'group_settings' => $groupSettings, 'specific_user_settings' => $specificUserSettings];
        return $this->render("Admin/ProductManagement/ProductCronJob/view_price_change_job_details.twig", $data);
    }
}
