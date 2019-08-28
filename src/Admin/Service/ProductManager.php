<?php
namespace App\Admin\Service;

use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSetting;
use App\Platform;
use App\ProductConstants;

class ProductManager extends AdminBaseService {

    /**
     * @param AdminUser $user
     * @param           $products
     * @param           $defaultSettings
     * @param           $specificUserSettings
     * @param           $groupSettings
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function batchCreateProducts(AdminUser $user, $products, $defaultSettings, $groupSettings, $specificUserSettings) {
        return $this->batchSaveProducts($user, 'create', $products, $defaultSettings, $groupSettings, $specificUserSettings);
    }

    /**
     * @param AdminUser $user
     * @param           $products
     * @param           $defaultSettings
     * @param           $groupSettings
     * @param           $specificUserSettings
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function batchUpdateProducts(AdminUser $user, $products, $defaultSettings, $groupSettings, $specificUserSettings) {
        return $this->batchSaveProducts($user, 'edit', $products, $defaultSettings, $groupSettings, $specificUserSettings);
    }

    /**
     * @param AdminUser $user
     * @param           $mode
     * @param           $products
     * @param           $defaultSettings
     * @param           $groupSettings
     * @param           $specificUserSettingInfos
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    private function batchSaveProducts(AdminUser $user, $mode, $products, $defaultSettings, $groupSettings, $specificUserSettingInfos) {
        $context = ['user_id' => $user->id, 'product_ids' => array_keys($products)];
        ['specific_user_ids' => $specificUserIds, 'settings' => $specificUserSettings] = $specificUserSettingInfos;

        try {
            Product::begin_transaction();

            foreach ($products as $tmpProductId => &$product) {
                $productId = $product['id'];
                unset($product['id']);

                $product['is_mvno'] = (int)($product['is_mvno'] ?? 0);
                if ($mode === 'edit') {
                    Product::update_all($product, ['id' => $productId]);
                } else {
                    $product['platform_id'] = Platform::RESELLER;
                    $productId              = Product::upsert($product);
                }

                $this->saveDefaultSettings(Platform::RESELLER, $productId, $defaultSettings[$tmpProductId]);
                $this->saveGroupSettings(Platform::RESELLER, $productId, $groupSettings["product_{$tmpProductId}"]);
                $this->saveUserSettings(Platform::RESELLER, $productId, $specificUserIds, $specificUserSettings[$tmpProductId]);
            }

            $count = count($products);

            $userIp = $this->getUserIp();
            if ($mode === 'edit') {
                $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_EDIT, AdminOperationLog::SUBJECT_PRODUCT, "用户 {$user} 编辑了 {$count} 个商品", $userIp, $context);
            } else {
                $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_CREATE, AdminOperationLog::SUBJECT_PRODUCT, "用户 {$user} 新增了 {$count} 个商品", $userIp, $context);
            }

            Product::commit();
        } catch (\Exception $e) {
            Product::rollback();
            $this->logger->error('批量保存商品失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw new \RuntimeException('批量保存商品失败', 0, $e);
        }
    }

    /**
     * @param $platformId
     * @param $productId
     * @param $settings
     * @internal param $specificUserSettings
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function saveDefaultSettings($platformId, $productId, $settings) {
        if (!$settings) {
            return;
        }

        $settings['enabled'] = ProductConstants::SETTING_ENABLED; // 强制启用默认设置（因为这是所有用户的默认设置）
        $this->saveProductSettings($platformId, $productId, ProductConstants::SETTING_SUBJECT_TYPE_DEFAULT, 0, $settings);
    }

    /**
     * @param $productsWithId
     * @param $groupIds
     * @throws \SimpleRecord\Exception\ModelException
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function saveGroupSettings($platformId, $productId, $groupSettings) {
        if (!$groupSettings) {
            return;
        }

        // ProductSetting::delete_all(['product_id' => $productId, 'subject_type' => ProductConstants::SETTING_SUBJECT_TYPE_GROUP]);
        foreach ($groupSettings as $groupId => $settings) {
            $this->saveProductSettings($platformId, $productId, ProductConstants::SETTING_SUBJECT_TYPE_GROUP, $groupId, $settings);
        }
    }

    // 批量保存操作里，每次都是更新所有特殊用户到相同的设置

    /**
     * @param $platformId
     * @param $productId
     * @param $specificUserSettings
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function saveUserSettings($platformId, $productId, $specificUserIds, $settings) {
        if (!$settings) {
            return;
        }

        // ProductSetting::delete_all(['product_id' => $productId, 'subject_type' => ProductConstants::SETTING_SUBJECT_TYPE_GROUP]);
        // ['specific_user_ids' => $specificUserIds, 'settings' => $settings] = $specificUserSettings;
        foreach ($specificUserIds as $userId) {
            $this->saveProductSettings($platformId, $productId, ProductConstants::SETTING_SUBJECT_TYPE_USER, $userId, $settings);
        }
    }

    /**
     * @param $platformId
     * @param $productId
     * @param $subjectType
     * @param $subjectId
     * @param $settings
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    private function saveProductSettings($platformId, $productId, $subjectType, $subjectId, $settings) {
        $now = time();
        $settingAttrs = [
            'platform_id'   => $platformId,
            'product_id'    => $productId,
            'subject_type'  => $subjectType,
            'subject_id'    => $subjectId,

            'price'         => (float)$settings['price'],
            'enabled'       => (int)($settings['enabled'] ?? null),
            'sell_status'   => $settings['sell_status']   ?? null,
            'auto_refund'   => $settings['auto_refund']   ?? null,
            'price_limit'   => $settings['price_limit']   ?? null,
            'strategy'      => $settings['strategy']      ?? null,
            'area_priority' => $settings['area_priority'] ?? null,
            'provider_id'   => $settings['provider_id']   ?? null,

            'edit_time'     => $now,
            'add_time'      => $now,
        ];

        ProductSetting::upsert($settingAttrs);
    }

}