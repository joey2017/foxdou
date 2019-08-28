<?php

namespace App\Admin\Controller\ProductManagement;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Model\AdminOperationLog;
use App\Admin\Service\AdminOperatonLogManager;
use App\Admin\Service\ProductManager;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderMap;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSetting;
use App\Common\Model\ResellerPriceGroup;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\User;
use function App\is_email;
use function App\is_mobile;
use App\Platform;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/product-management/specific-user-settings/{product_type}", defaults={"group": "product-management"})
 */
class SpecificUserSettingController extends AdminBaseController {
    protected function productManager(): ProductManager {
        return $this->container->get(__METHOD__);
    }

    /**    特殊用户列表
     * @Route("", name="admin_product_management_specific_user_settings")
     */
    public function indexAction(Request $request, Form $form) {
        $groups = ResellerPriceGroup::allGroups();
        $form->init([
            'product_id'    => ['integer'],
            'group_id'      => [to_enum(ResellerPriceGroup::allGroups())],
            'enabled'       => [to_enum(ProductConstants::STATUSES)],
            'sell_status'   => [to_enum(ProductConstants::SELL_STATUSES)],
            'auto_refund'   => [to_enum(ProductConstants::REFUND_TYPES)],
            'price_limit'   => [to_enum(ProductConstants::PRICE_LIMIT_TYPES)],
            'strategy'      => [to_enum(ProductConstants::STRATEGIES)],
            'area_priority' => [to_enum(ProductConstants::AREA_PRIORITIES)],
            'search'        => ['max_length[100]'],
        ]);


        if (!$request->isXmlHttpRequest()) {
            $product_id = $request->query->getInt('product_id', 0);
            $product    = $product_id ? Product::find($product_id) : null;
            return $this->render("Admin/ProductManagement/SpecificUserSetting/index.twig",
                ['form' => $form, 'product' => $product, 'groups' => $groups]);
        }

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '表单数据错误', 'errors' => $form->getErrors()];
        }

        global $T;

        $conditions = [
            'ps.product_id'    => $form->product_id,
            'ps.subject_type'  => ProductConstants::SETTING_SUBJECT_TYPE_USER, // 类型为用户的商品设置
            'ps.enabled'       => $form->enabled,
            'ps.sell_status'   => $form->sell_status,
            'ps.auto_refund'   => $form->auto_refund,
            'ps.price_limit'   => $form->price_limit,
            'ps.strategy'      => $form->strategy,
            'ps.area_priority' => $form->area_priority,
            'g.id'             => $form->group_id,
        ];

        $criteria = $form->search;
        if(is_mobile($criteria)) {
            $conditions['u.mobile'] = $criteria;
        } elseif(is_email($criteria)) {
            $conditions['u.email'] = $criteria;
        } elseif(preg_match('/\d+/', $criteria)) {
            $conditions['u.user_name'] = $criteria;
        } else {
            $conditions['u.nick_name'] = ['LIKE' => "%{$criteria}%"];
        }

        $options = [
            'select' => "ps.id as setting_id, u.id as user_id, u.user_name, CONCAT(u.user_name, ' (', u.nick_name, ')') as subject_name, g.group_name, p.official_price,
                    ps.enabled        AS subject_enabled,
                    ps.sell_status    AS subject_sell_status,
                    ps.auto_refund    AS subject_auto_refund,
                    ps.price_limit    AS subject_price_limit,
                    ps.strategy       AS subject_strategy,
                    ps.area_priority  AS subject_area_priority,
                    ps.price          AS subject_price,
                    ps.rebate         AS subject_rebate,
                    ps.provider_id    AS subject_provider_id,

                    FROM_UNIXTIME(ps.add_time) AS add_time",
            'from'   => "{$T(ProductSetting::table_name())} ps",
            'joins'  => "LEFT JOIN {$T(Product::table_name())} p on p.id=ps.product_id
                            LEFT JOIN {$T(User::table_name())} u on u.id=ps.subject_id
                               LEFT JOIN {$T(ResellerAccount::table_name())} a on a.user_id=u.id
                                 LEFT JOIN {$T(ResellerPriceGroup::table_name())} g on g.id=a.level",
            'order'  => 'g.id, u.id',
        ];

        $product = $form->product_id ? Product::find($form->product_id) : null;

        list($userProducts, $total) = ProductSetting::paginate($conditions, $options, $form->page, $form->limit);
        foreach ($userProducts as &$row) {
            $row['subject_strategy_text']      = ProductConstants::STRATEGIES[$row['subject_strategy']] ?? "未知策略（{$row['subject_strategy']}）";
            $row['subject_area_priority_text'] = ProductConstants::AREA_PRIORITIES[$row['subject_area_priority']] ?? "未知优先地区（{$row['subject_area_priority']}）";

            $row['subject_provider_name']      = RechargeServiceProviderMap::PROVIDER_NAMES[$row['subject_provider_id']] ?? "未知供应商（{$row['subject_provider_id']}）";
        }

        return ['status' => true, 'data' => $userProducts, 'total' => $total];
    }


    /**    特殊用户列表
     * @Route("/save-specific-user-settings", name="admin_product_management_specific_user_settings_save_specific_user_settings", methods={"POST"})
     */
    public function save_specific_user_settingsAction(Request $request, Form $form) {
        $form->init([
            // 'setting_ids'   => ['required', '', 'split[,]'],
            'product_id'    => ['required, integer'],
            'user_names'    => ['required'],
            'price'         => ['required, numeric'],
            'enabled'       => ['required, ' . to_enum(ProductConstants::STATUSES)],
            'sell_status'   => ['required, ' . to_enum(ProductConstants::SELL_STATUSES)],
            'auto_refund'   => ['required, ' . to_enum(ProductConstants::REFUND_TYPES)],
            'price_limit'   => ['required, ' . to_enum(ProductConstants::PRICE_LIMIT_TYPES)],
            'strategy'      => ['required, ' . to_enum(ProductConstants::STRATEGIES)],
            'area_priority' => ['required, ' . to_enum(ProductConstants::AREA_PRIORITIES)],
            'provider_id'   => ['required, ' . to_enum(RechargeServiceProviderMap::PROVIDERS)],
        ], 'admin_products');

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $userNames = array_filter(preg_split('/\s+/', $form->user_names), function ($v) { return trim($v) !== ''; });
        if (!$userNames) {
            return ['status' => false, 'msg' => '用户列表不能为空'];
        }

        $context = $form->all();
        try {
            $now = time();

            $attrs = $form->all();
            unset($attrs['setting_ids'], $attrs['product_id'], $attrs['user_names']);

            $userIds = User::getIdsByUserName($userNames);

            ProductSetting::transaction(function () use ($request, $userIds, $attrs, $form, $now) {
                foreach ($userIds as $userId) {
                    $attrs = array_merge($attrs, [
                        'product_id'   => $form->product_id,
                        'subject_type' => ProductConstants::SETTING_SUBJECT_TYPE_USER,
                        'subject_id'   => $userId,
                        'add_time'     => $now,
                        'edit_time'    => $now,
                    ]);

                    ProductSetting::upsert($attrs);
                }

                $num = count($userIds);
                $user = $this->getAdminUser();
                $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_CREATE, AdminOperationLog::SUBJECT_PRODUCT_USER,
                    "用户 {$user} 添加了 {$num} 个商品特殊用户", $request->getClientIp(), ['user_id' => $user->id, 'specific_user_names' => $form->user_names]);

                return true;
            });

            return ['status' => true, 'msg' => '保存成功'];
        } catch (\InvalidArgumentException $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        } catch (\Exception $e) {
            $this->logger->error('Error', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ['status' => false, 'msg' => '系统错误，保存失败'];
        }
    }

    /**
     * @Route("/delete-specific-user-settings", name="admin_product_management_specific_user_settings_delete_specific_user_settings")
     */
    public function delete_specific_user_settingsAction(Request $request, Form $form) {
        $form->init([
            'ids' => ['required']
        ], 'admin_products');

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $ids = array_filter(preg_split('/,/', $form->ids), function ($v) { return $v !== ''; });
        if (!$ids) {
            return ['status' => false, 'msg' => '请先选择要删除的数据再点击删除'];
        }

        $rowsAffected = ProductSetting::delete_all(['id' => $ids]);  // 特殊用户组相关数据

        $user = $this->getAdminUser();
        $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_PRODUCT_USER,
            "用户 {$user} 删除了 {$rowsAffected} 个商品特殊用户设置", $request->getClientIp(), ['user_id' => $user->id, 'ids' => $ids]);

        return ['status' => true, 'msg' => '删除成功'];
    }

}
