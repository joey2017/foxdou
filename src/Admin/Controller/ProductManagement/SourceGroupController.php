<?php

namespace App\Admin\Controller\ProductManagement;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Model\AdminOperationLog;
use App\Common\Model\BaseModel;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSource;
use App\Common\Model\Product\ProductSourceSetting;
use App\Common\Model\Product\SourceGroup;
use App\Common\Model\User\SupplierAccount;
use App\Common\Model\User\User;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route(defaults={"group": "product-management"})
 */
class SourceGroupController extends AdminBaseController {
    /**    货源列表
     * @Route("/product-management/source-groups/{product_type}", name="admin_product_management_source_groups_index")
     */
    public function indexAction(Request $request, Form $form, $product_type) {
        $form->init([
            'product_id'              => ['required, numeric'],
            'supplier_account_status' => [to_enum(SupplierAccount::STATUSES)],
            'source_group_status'     => ['enum[1|0]'],
            'source_status'           => ['enum[1|0]'],
            'source_review_status'    => [to_enum(ProductConstants::REVIEW_STATUSES)],
            'search'                  => ['max_length[100]'],
        ]);

        if (!($productId = $request->query->getInt('product_id')) || !($product = Product::find($productId))) {
            throw new NotFoundHttpException('无此商品');
        }
        if (!$request->isXmlHttpRequest()) {
            return $this->render("Admin/ProductManagement/SourceGroup/index.twig", ['form' => $form, 'product' => $product]);
        }

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '表单数据错误', 'errors' => $form->getErrors()];
        }

        global $T;

        $conditions = [
            'ss.product_id'   => $form->product_id,
            'sa.status'       => $form->supplier_account_status,
            'sg.status'       => $form->source_group_status,
            's.status'        => $form->source_status,
            's.review_status' => $form->source_review_status,
            // 'a.level'         => $form->source_strategy_status,
        ];

        // if ($form->search) {
        //     $conditions['search'] = ['MATCH' => 'p.name', 'AGAINST' => $form->search];
        // }

        $options = [
            'select' => "s.id as source_id, s.source_price, s.status as source_status, 999 as template_source_status, s.review_status as source_review_status, 999 as source_strategy_status, FROM_UNIXTIME(s.add_time) as source_add_time,
                         su.id as supplier_user_id, su.user_name as supplier_user_name, su.mobile as supplier_mobile, su.status as supplier_user_status,
                         sa.id as supplier_account_id, sa.status as supplier_account_status,
                         sg.id as group_id, sg.name as group_name, sg.status as group_status, sg.review_status as group_review_status,
                         ss.sort as source_setting_sort, ss.weight as source_setting_weight, ss.enabled as source_setting_enable_status,
                         FROM_UNIXTIME(s.add_time) as add_time",
            'from'   => "{$T(ProductSource::table_name())} s",
            'joins'  => "LEFT JOIN {$T(SourceGroup::table_name())} sg on sg.id=s.template_id
                            LEFT JOIN {$T(SupplierAccount::table_name())} sa on sa.user_id=s.sell_user_id
                                LEFT JOIN {$T(ProductSourceSetting::table_name())} ss on ss.source_id=s.id
                                    LEFT JOIN {$T(User::table_name())} su on su.id=s.sell_user_id
                             ",
            'order'  => 'ss.product_id, ss.sort ASC',
        ];

        list($rows, $total) = ProductSource::paginate($conditions, $options, $form->page, $form->limit);
        foreach ($rows as &$source) {
            $source['product_id']         = $product->id;
            $source['product_name']       = $product->name;
            $source['product_face_value'] = $product->face_value;
            $source['source_rate']        = number_format($source['source_price'] / $product->face_value, 5);
        }

        return ['status' => true, 'data' => $rows, 'total' => $total];
    }

    /**    商品列表
     * @Route("/product-management/source-groups/groups-of/{product_type}", name="admin_product_management_source_groups_groups_of_products", methods={"GET"})
     */
    public function groupsOfProductAction(Request $request, Form $form, $product_type) {
        $form->init([
            'product_ids' => ['required', '', 'split[,]'],
        ]);
        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '表单数据错误', 'errors' => $form->getErrors()];
        }

        global $T;
        $conditions = ['s.product_id' => $form->product_ids];
        $options    = [
            'select' => 'sg.id, sg.name as group_name, sa.name as supplier_name',
            'from'   => "{$T(SourceGroup::table_name())} sg",
            'joins'  => "LEFT JOIN {$T(ProductSource::table_name())} s on s.template_id=sg.id
                          LEFT JOIN {$T(SupplierAccount::table_name())} sa on sa.user_id=sg.sell_user_id
                      ",
            // 'order' => 'sa.name, sg.name',
        ];

        $rows = SourceGroup::all($conditions, $options);
        foreach ($rows as &$row) {
            $row['display_name'] = "{$row['group_name']} - {$row['supplier_name']}";
        }

        return ['status' => true, 'product_source_groups' => $rows];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/batch-update-source-settings", name="admin_product_management_source_groups_batch_update_source_settings", methods={"POST"})
     */
    public function batch_update_source_settingsAction(Request $request, $product_type) {
        if (!($data = json_decode($request->getContent(), true))) {
            return ['status' => false, 'msg' => '表单数据解析失败'];
        }
        if (!isset($data['_token']) || !$this->isCsrfTokenValid('admin_products', $data['_token'])) {
            return ['status' => false, 'msg' => '表单安全检校失败'];
        }
        if (!isset($data['product_id']) || !($product = Product::find($data['product_id']))) {
            return ['status' => false, 'msg' => '表单安全检校失败'];
        }

        $allowedAttributes = [
            'sort'   => '排序',
            'weight' => '分流常量',
        ];

        try {
            $user    = $this->getAdminUser();
            $context = array_merge(['user_id' => $user->id], $data);

            $attributeInfo = [];
            ProductSourceSetting::transaction(function () use ($data, $allowedAttributes, $product_type) {
                foreach ($data['source_ids'] as $source_id) {
                    $updateAttributes               = [];
                    $updateAttributes['product_id'] = $data['product_id'];
                    $updateAttributes['source_id']  = $source_id;

                    foreach ($data['attributes'] as $attribute => $value) {
                        if (!isset($allowedAttributes[$attribute])) {
                            throw new BadRequestHttpException('非法操作');
                        }

                        $updateAttributes[$attribute]                  = (int)$value;
                        $attributeInfo[$allowedAttributes[$attribute]] = 1;
                    }

                    $rowsAffected = ProductSourceSetting::upsert($updateAttributes);
                }
            });

            $message = "用户 {$user} 修改了商品 {$product} 的货源设置：" . join(', ', array_keys($attributeInfo));

            $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_EDIT, AdminOperationLog::SUBJECT_PRODUCT_SOURCE, $message, $request->getClientIp(), $context);
        } catch (\Exception $e) {
            $this->logger->error('Error', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
        }

        return ['status' => true, 'msg' => '操作成功'];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/update-supplier-account-status", name="admin_product_management_source_groups_update_supplier_account_status", methods={"POST"})
     */
    public function update_supplier_account_statusAction(Request $request, Form $form, $product_type) {
        $form->init([
            'supplier_account_ids' => ['required', '', 'split[,]'],
            'status'               => ['required, ' . to_enum(SupplierAccount::STATUSES)],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        SupplierAccount::update_all(['status' => $form->status], ['id' => $form->supplier_account_ids]);

        return ['status' => true, 'msg' => '修改供应商账号状态成功'];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/update-source-price", name="admin_product_management_source_groups_update_source_price", methods={"POST"})
     */
    public function update_source_priceAction(Request $request, Form $form, $product_type) {
        $form->init([
            'source_ids' => ['required', '', 'split[,]'],
            'price'      => ['required, numeric'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $rowAffected = ProductSource::update_all(['source_price' => $form->price], ['id' => $form->source_ids]);

        return ['status' => true, 'msg' => '修改货源价格比例成功'];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/update-product-source-group-status", name="admin_product_management_source_groups_update_source_group_status", methods={"POST"})
     */
    public function update_source_group_statusAction(Request $request, Form $form, $product_type) {
        $form->init([
            'group_ids' => ['required', '', 'split[,]'],
            'status'    => ['required, integer'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $rowsAffected = SourceGroup::update_all(['status' => $form->status], ['id' => $form->group_ids]);

        return ['status' => true, 'msg' => '修改模板状态成功'];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/update-product-source-review-status", name="admin_product_management_source_groups_update_product_source_review_status", methods={"POST"})
     */
    public function update_product_source_review_statusAction(Request $request, Form $form, $product_type) {
        $form->init([
            'source_ids' => ['required', '', 'split[,]'],
            'status'     => ['required, enum[1|2|3]'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        if ($form->status === '1') {
            $updates = ['status' => 1, 'review_status' => 2];
        } elseif ($form->status === '2') {
            $updates = ['status' => 0, 'review_status' => 2];
        } elseif ($form->status === '3') {
            $updates = ['status' => 0, 'review_status' => 3];
        }

        $rowsAffected = ProductSource::update_all($updates, ['id' => $form->source_ids]);

        return ['status' => true, 'msg' => '修改货源审核状态成功'];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/update-source-status", name="admin_product_management_source_groups_updatesource_status", methods={"POST"})
     */
    public function update_source_statusAction(Request $request, Form $form, $product_type) {
        $form->init([
            'source_ids' => ['required', '', 'split[,]'],
            'status'     => ['required, enum[1|0]'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $rowsAffected = ProductSource::update_all(['status' => $form->status], ['id' => $form->source_ids]);

        return ['status' => true, 'msg' => '修改货源上下架状态成功'];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/update-product-source-enable-status", name="admin_product_management_source_groups_update_product_source_enable_status", methods={"POST"})
     */
    public function update_product_source_enable_statusAction(Request $request, Form $form, $product_type) {
        $form->init([
            'product_id' => ['required, integer'],
            'source_ids' => ['required', '', 'split[,]'],
            'status'     => ['required, enum[1|0]'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $rowsAffected = ProductSourceSetting::update_all(['enabled' => $form->status], ['product_id' => $form->product_id, 'source_id' => $form->source_ids]);

        return ['status' => true, 'msg' => '修改货源启用状态成功'];
    }

    /**
     * @Route("/product-management/source-groups/{product_type}/delete-product-sources", name="admin_product_management_source_groups_delete_product_sources")
     */
    public function delete_product_sourcesAction(Request $request, Form $form, $product_type) {
        $form->init([
            'product_id' => ['required, integer'],
            'source_ids' => ['required', '', 'split[,]']
        ], 'admin_products');

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }
        if (!$form->source_ids) {
            return ['status' => false, 'msg' => '请先选择要删除的数据再点击删除'];
        }

        $user    = $this->getAdminUser();
        $context = ['user_id' => $user->id, 'product_id' => $form->product_id, 'source_ids' => $form->source_ids];

        try {
            ProductSource::transaction(function () use ($user, $context, $form, $request, $product_type) {
                $rowsAffected  = ProductSource::delete_all(['id' => $form->source_ids]);
                $rowsAffected2 = ProductSourceSetting::delete_all(['source_id' => $form->source_ids]);

                $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_PRODUCT_SOURCE, "用户 {$user} 删除了 {$rowsAffected} 个商品货源", $request->getClientIp(), $context);

                return true;
            });
            return ['status' => true, 'msg' => '删除成功'];
        } catch (\Exception $e) {
            $this->logger->error('Error', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ['status' => true, 'msg' => '删除失败'];
        }
    }

}
