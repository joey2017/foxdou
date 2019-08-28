<?php

namespace App\Supplier\Controller;

use App\Common\Model\Product\SourceGroup;
use App\MobileNetworkOperator;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\User;
use App\Constants;
use App\Platform;
use App\ProductConstants;
use SimpleRecord\Model;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route(defaults={"group": "product-sources"})
 */
class SourceGroupController extends SupplierBaseController {

    /**
     * 货源组管理,列表显示货源组
     * @Route("/products/source-groups", name="supplier_product_source_groups_index")
     */
    public function indexAction(Request $request, Form $form) {
        if (!$request->isXmlHttpRequest()) {
            return $this->render('Supplier/ProductSourceGroup/index.twig');
        }

        $form->init([
            'product_cate_id' => [to_enum(Constants::PRODUCT_CATEGORIES)],
            'auto_refund'     => [to_enum(SourceGroup::AUTO_REFUND_STATUSES)],
            'name'            => [''],
            'id'              => [''],
            'info'            => [''],
            'status'          => [to_enum(SourceGroup::STATUSES)],
            'supply_type'     => [to_enum(SourceGroup::SUPPLY_TYPES)],
            'start_time'      => ['date'],
            'end_time'        => ['date']
        ]);

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '数据有误，请重新提交'];
        }

        $where = [
            'product_cate_id' => $form->product_cate_id,
            'auto_refund'     => $form->auto_refund,
            'status'          => $form->status,
            'supply_type'     => $form->supply_type,
            'sell_user_id'    => $this->getUserId()
        ];

        if ($form->name) {
            $where['name'] = ['LIKE' => '%' . $form->name . '%'];
        }

        if ($form->id) {
            $where['id'] = ['LIKE' => '%' . $form->id . '%'];
        }

        if ($form->info) {
            $where['info'] = ['LIKE' => '%' . $form->info . '%'];
        }

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        if (($end_time - $start_time) > 30 * 86400) {
            return ['status' => false, 'msg' => '时间范围不允许超过30天'];
        }

        $where['add_time'] = ['BETWEEN' => [$start_time, $end_time]];

        $options = ['order' => 'add_time DESC'];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time   = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        if ($end_time - $start_time > 30 * 86400) {
            return ['status' => false, 'msg' => '日期范围不允许超过30天'];
        }

        list($data, $total) = SourceGroup::paginate($where, $options, $form->page, $form->limit);

        if ($data) {
            foreach ($data as &$v) {
                $v['type'] = Constants::PRODUCT_CATEGORIES[$v['product_cate_id']];
                $which     = ['template_id' => $v['id'], 'sell_user_id' => $this->getUserId()];
                switch ($v['product_cate_id']) {
                case 1:
                    $v['activeNum'] = ProductMobileSource::count(array_merge($which, ['status' => ProductMobileSource::STATUS_ACTIVE]));
                    $v['total']     = ProductMobileSource::count($which);
                    break;

                case 2:

                    break;
                case 3:
                    $v['activeNum'] = ProductCommonTemplateRelation::count(array_merge($which, ['status' => ProductCommonTemplateRelation::STATUS_ACTIVE]));
                    $v['total']     = ProductCommonTemplateRelation::count($which);
                    break;

                case 4:
                    $v['activeNum'] = ProductFlowSource::count(array_merge($which, ['status' => ProductFlowSource::STATUS_ACTIVE]));
                    $v['total']     = ProductFlowSource::count($which);
                    break;

                case 10:
                    $v['activeNum'] = ProductTelephoneSource::count(array_merge($which, ['status' => ProductTelephoneSource::STATUS_ACTIVE]));
                    $v['total']     = ProductTelephoneSource::count($which);
                    break;

                default:
                    break;
                }
            }
        }

        return ['status' => true, 'msg' => '获取成功', 'data' => $data, 'total' => $total];
    }

    // /**
    //  * 添加模板
    //  * @Route("/products/source-groups/add-template", name="supplier_product_source_groups_add_template")
    //  */
    // public function addTemplateAction(Request $request, Form $form) {
    //     $form->init([
    //         'name'            => ['required'],
    //         'product_cate_id' => ['required,' . to_enum(Constants::PRODUCT_CATEGORIES)],
    //         'auto_refund'     => ['required,' . to_enum(SourceGroup::AUTO_REFUND_STATUSES)],
    //         'supply_type'     => ['required,' . to_enum(SourceGroup::SUPPLY_TYPES)],
    //         'status'          => ['required,' . to_enum(SourceGroup::STATUSES)],
    //         'info'            => [''],
    //     ]);
    //
    //     if (!$form->validate($request->request)) {
    //         return ['status' => false, 'msg' => '数据有误，请重新提交'];
    //     }
    //
    //     $result = false;
    //     try {
    //         $result = SourceGroup::transaction(function () use ($form, $request) {
    //             SourceGroup::create([
    //                 'id'              => 'M' . date('YmdHis'),
    //                 'name'            => $form->name,
    //                 'product_cate_id' => $form->product_cate_id,
    //                 'auto_refund'     => $form->auto_refund,
    //                 'info'            => $form->info,
    //                 'sell_user_id'    => $this->getUserId(),
    //                 'status'          => $form->status,
    //                 'add_time'        => time(),
    //                 'edit_time'       => time(),
    //                 'supply_type'     => $form->supply_type
    //             ]);
    //             // 写入日志
    //             OperationLog::create([
    //                 'user_id'     => $this->getUserId(),
    //                 'log_type'    => OperationLog::OPERATION_CREATE,
    //                 'platform_id' => Platform::SUPPLIER,
    //                 'info'        => "创建名称为“{$form->name}”的供货模板",
    //                 'ip'          => $request->getClientIp(),
    //                 'add_time'    => time(),
    //             ]);
    //             return true;
    //         });
    //     } catch (\Exception $e) {
    //         $text = ['supplier_id' => $this->getUserId(), 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
    //         $this->logger->error('新增供货模板失败', $text);
    //     }
    //
    //     return ['status' => (boolean)$result, 'msg' => '添加' . ($result ? '成功' : '失败')];
    // }
    //
    // /**
    //  * 编辑模板
    //  * @Route("/products/source-groups/edit-template", name="supplier_product_source_groups_edit_template")
    //  */
    // public function editTemplateAction(Request $request, Form $form) {
    //     $form->init([
    //         'id'              => ['required'],
    //         'name'            => ['required'],
    //         'product_cate_id' => ['required,' . to_enum(Constants::PRODUCT_CATEGORIES)],
    //         'auto_refund'     => ['required,' . to_enum(SourceGroup::AUTO_REFUND_STATUSES)],
    //         'supply_type'     => ['required,' . to_enum(SourceGroup::SUPPLY_TYPES)],
    //         'status'          => ['required,' . to_enum(SourceGroup::STATUSES)],
    //         'info'            => [''],
    //     ]);
    //
    //     if (!$form->validate($request->request)) {
    //         return ['status' => false, 'msg' => '数据有误，请重新提交'];
    //     }
    //
    //     $template = SourceGroup::first(['id' => $form->id, 'sell_user_id' => $this->getUserId()]);
    //
    //     if (!$template) {
    //         return ['status' => false, 'msg' => '未找到指定数据'];
    //     }
    //
    //     try {
    //         $result = SourceGroup::transaction(function () use ($form, $request, $template) {
    //             SourceGroup::update_all([
    //                 'name'            => $form->name,
    //                 'product_cate_id' => $form->product_cate_id,
    //                 'auto_refund'     => $form->auto_refund,
    //                 'info'            => $form->info,
    //                 'status'          => $form->status,
    //                 'edit_time'       => time(),
    //                 'supply_type'     => $form->supply_type
    //             ], [
    //                 'id' => $form->id
    //             ]);
    //             // 写入日志
    //             OperationLog::create([
    //                 'user_id'     => $this->getUserId(),
    //                 'log_type'    => OperationLog::OPERATION_EDIT,
    //                 'platform_id' => Platform::SUPPLIER,
    //                 'info'        => "将供货模板名称“{$template->name}”修改为“{$form->name}”",
    //                 'ip'          => $request->getClientIp(),
    //                 'add_time'    => time(),
    //             ]);
    //             return true;
    //         });
    //     } catch (\Exception $e) {
    //         $text = ['supplier_id' => $this->getUserId(), 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
    //         $this->logger->error('修改供货模板失败', $text);
    //     }
    //
    //     return ['status' => (boolean)$result, 'msg' => '修改' . ($result ? '成功' : '失败')];
    // }
    //
    // /**
    //  * 删除模板
    //  * @Route("/products/source-groups/del-template", name="supplier_product_source_groups_del_template")
    //  */
    // public function delTemplateAction(Request $request) {
    //     $ids = $request->request->get('id');
    //
    //     if (!$ids) {
    //         return ['status' => false, 'msg' => '参数有误'];
    //     }
    //     $templates = SourceGroup::all(['id' => $ids, 'sell_user_id' => $this->getUserId()]);
    //
    //     if (!$templates) {
    //         return ['status' => false, 'msg' => '未找到指定数据'];
    //     }
    //     $count = 0;
    //     foreach ($templates as $template) {
    //         $result = false;
    //         try {
    //             $result = SourceGroup::transaction(function () use ($template, $request) {
    //                 SourceGroup::delete_all(['id' => $template['id'], 'sell_user_id' => $this->getUserId()]);
    //                 // 写入日志
    //                 OperationLog::create([
    //                     'user_id'     => $this->getUserId(),
    //                     'log_type'    => OperationLog::OPERATION_DELETE,
    //                     'platform_id' => Platform::SUPPLIER,
    //                     'info'        => "删除供货模板“{$template['name']}”",
    //                     'ip'          => $request->getClientIp(),
    //                     'add_time'    => time(),
    //                 ]);
    //                 return true;
    //             });
    //         } catch (\Exception $e) {
    //             $text = ['supplier_id' => $this->getUserId(), 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
    //             $this->logger->error('删除供货模板失败', $text);
    //         }
    //         if ($result) {
    //             $count++;
    //         }
    //     }
    //     return ['status' => true, 'msg' => '成功删除' . $count . '项'];
    // }
    //
    // /**
    //  * 模板停用/启用
    //  * @Route("/products/source-groups/change-status", name="supplier_product_source_groups_change_status")
    //  */
    // public function changeStatusAction(Request $request) {
    //     $ids    = $request->request->get('id');
    //     $status = $request->request->get('status');
    //
    //     if (!$ids || !in_array($status, array_keys(SourceGroup::STATUSES))) {
    //         return ['status' => false, 'msg' => '参数有误'];
    //     }
    //
    //     $templates = SourceGroup::all(['id' => $ids, 'sell_user_id' => $this->getUserId()]);
    //
    //     if (!$templates) {
    //         return ['status' => false, 'msg' => '未找到指定数据'];
    //     }
    //     $count  = 0;
    //     $action = $status == SourceGroup::STATUS_ENABLED ? '启用' : '停用';
    //     $type   = $status == SourceGroup::STATUS_ENABLED ? OperationLog::OPERATION_ENABLE : OperationLog::OPERATION_DISABLE;
    //     foreach ($templates as $template) {
    //         $result = false;
    //         try {
    //             $result = SourceGroup::transaction(function () use ($template, $request, $status, $action, $type) {
    //                 SourceGroup::update_all([
    //                     'status'    => $status,
    //                     'edit_time' => time()
    //                 ], [
    //                     'id'           => $template['id'],
    //                     'sell_user_id' => $this->getUserId()
    //                 ]);
    //                 // 写入日志
    //                 OperationLog::create([
    //                     'user_id'     => $this->getUserId(),
    //                     'log_type'    => $type,
    //                     'platform_id' => Platform::SUPPLIER,
    //                     'info'        => $action . "供货模板{$template['name']}",
    //                     'ip'          => $request->getClientIp(),
    //                     'add_time'    => time(),
    //                 ]);
    //                 return true;
    //             });
    //         } catch (\Exception $e) {
    //             $text = ['supplier_id' => $this->getUserId(), 'stack' => $e->getTraceAsString(), 'error' => $e->getMessage()];
    //             $this->logger->error($action . '供货模板失败', $text);
    //         }
    //         if ($result) {
    //             $count++;
    //         }
    //     }
    //     return ['status' => true, 'msg' => '成功' . $action . $count . '项'];
    // }
    //
    // /**
    //  * 模板商品列表
    //  * @Route("/products/source-groups/products", name="supplier_product_source_groups_products_list")
    //  */
    // public function productsListAction(Request $request, Form $form) {
    //     $productCateId     = $request->get('product_cate_id');
    //     $template_id       = $request->get('template_id', 0);
    //     $add_exist_product = $request->get('add_exist_product', 0);
    //
    //     if (!isset(Constants::PRODUCT_CATEGORIES[$productCateId])) {
    //         return ['status' => false, 'msg' => '分类错误'];
    //     }
    //     if (!$template_id || !SourceGroup::exists(['id' => $template_id, 'sell_user_id' => $this->getUserId()])) {
    //         return ['status' => false, 'msg' => '模板id参数有误'];
    //     }
    //
    //
    //
    //     if (!$request->isXmlHttpRequest()) {
    //         $view = [
    //             Constants::PRODUCT_CATE_MOBILE_PHONE => 'template_products_mobile_list.twig',
    //             Constants::PRODUCT_CATE_TENCENT      => 'template_products_tencent_list.twig',
    //             Constants::PRODUCT_CATE_DATA_PACKAGE => 'template_products_flow_list.twig',
    //             Constants::PRODUCT_CATE_LINE_PHONE   => 'template_products_telephone_list.twig',
    //         ];
    //
    //         return $this->render('/Supplier/ProductSourceGroup/' . $view[$productCateId],
    //             ['template_id' => $template_id, 'product_cate_id' => $productCateId, 'add_exist_product' => $add_exist_product]
    //         );
    //     }
    //
    //     $form->init([
    //         'face_value_type' => [to_enum(ProductMobile::FACE_VALUE_TYPES)],
    //         'range'           => [''],
    //         'cate_id'         => [to_enum(Constants::CARRIERS)],
    //         'speed'           => [to_enum(Constants::RECHARGE_SPEED)],
    //         'keyword'         => [''],
    //         'status'          => [to_enum(ProductMobileSource::STATUSES)],
    //         'review_status'   => [to_enum(ProductConstants::REVIEW_STATUSES)],
    //         'sell_status'     => [to_enum(ProductMobileSource::SELL_STATUSES)],
    //         'start_time'      => ['date'],
    //         'end_time'        => ['date'],
    //         'page'            => ['integer'],
    //         'limit'           => ['integer'],
    //     ]);
    //
    //     if (!$form->validate($request->query)) {
    //         return ['status' => false, 'msg' => '数据有误，请重新提交', 'errors' => $form->getErrors()];
    //     }
    //
    //     $where = [
    //         'ms.template_id'     => $template_id,
    //         'ms.sell_user_id'    => $this->getUserId(),
    //         'ms.face_value_type' => $form->face_value_type,
    //         'ms.cate_id'         => $form->cate_id,
    //         'ms.speed'           => $form->speed,
    //         'ms.status'          => $form->status,
    //         'ms.review_status'   => $form->review_status,
    //         'ms.sell_status'     => $form->sell_status,
    //     ];
    //
    //     if ($add_exist_product) {
    //         $where['ms.template_id'] = 0;
    //     }
    //
    //     /** @var Model $modelClass */
    //     $modelClass = '';
    //     /** @var Model $joinTable */
    //     $joinTable = '';
    //
    //     $options = [
    //         'select' => 'ms.*,m.name'
    //     ];
    //
    //     switch ($productCateId) {
    //         // 手机
    //     case Constants::PRODUCT_CATE_MOBILE_PHONE:
    //         $modelClass = ProductMobileSource::class;
    //         $joinTable  = ProductMobile::class;
    //         break;
    //         // 腾讯
    //     case Constants::PRODUCT_CATE_TENCENT:
    //         $modelClass = ProductCommonTemplateRelation::class;
    //         $joinTable  = ProductCommon::class;
    //         $options    = [
    //             'select' => 'ms.*,m.face_value_type,m.face_value,cm.name'
    //         ];
    //         break;
    //         // 流量
    //     case Constants::PRODUCT_CATE_DATA_PACKAGE:
    //         $modelClass = ProductFlowSource::class;
    //         $joinTable  = ProductFlow::class;
    //         break;
    //         // 固话
    //     case Constants::PRODUCT_CATE_LINE_PHONE:
    //         $modelClass = ProductTelephoneSource::class;
    //         $joinTable  = ProductTelephone::class;
    //         break;
    //     default:
    //         break;
    //     }
    //
    //     $options = array_merge($options, [
    //         'from'  => $modelClass::table_name() . ' AS ms',
    //         'joins' => ' LEFT JOIN ' . $joinTable::table_name() . ' AS m ON m.id=ms.product_id',
    //         'order' => 'ms.id DESC',
    //     ]);
    //
    //     if ($productCateId == 3) {
    //         $options['joins'] .= ' LEFT JOIN ' . ProductCommonMaster::table_name() . ' AS cm ON cm.id=m.master_id';
    //     }
    //
    //     list($data, $total) = $modelClass::paginate($where, $options, $form->page, $form->limit);
    //
    //     return ['status' => true, 'msg' => '获取成功', 'data' => $data, 'total' => $total];
    // }
    //
    // /**
    //  * 移除模板商品
    //  * @Route("/products/source-groups/remove", name="supplier_product_source_groups_remove")
    //  */
    // public function removeAction(Request $request) {
    //     $ids           = $request->request->get('id', 0);
    //     $productCateId = $request->get('product_cate_id', 0);
    //     if (!$ids || !$productCateId) {
    //         return ['status' => false, 'msg' => '参数有误'];
    //     }
    //
    //     $where = [
    //         's.sell_user_id' => $this->getUserId(),
    //         's.id'           => $ids,
    //         'u.status'       => User::STATUS_ACTIVE,
    //         //'s.review_status' => 3
    //     ];
    //
    //     $joins = 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=s.sell_user_id ';
    //
    //     $options = [
    //         'select' => 's.id,u.user_name,s.status,s.sell_status',
    //         'from'   => ProductSource::table_name() . ' AS s',
    //         'joins'  => $joins,
    //         'order'  => 's.id DESC'
    //     ];
    //
    //     $products = ProductSource::all($where, $options);
    //
    //     if (empty($products)) {
    //         return ['status' => false, 'msg' => '未找到指定数据'];
    //     }
    //
    //     $count = 0;
    //
    //     foreach ($products as $product) {
    //         $result = false;
    //         try {
    //             $result = ProductSource::transaction(function () use ($product, $request) {
    //                 ProductSource::update_all([
    //                     'template_id' => '0',
    //                     'edit_time'   => time(),
    //                 ], [
    //                     'id' => $product['id']
    //                 ]);
    //
    //                 // 写入日志
    //                 OperationLog::create([
    //                     'user_id'     => $this->getUserId(),
    //                     'log_type'    => OperationLog::OPERATION_REMOVE,
    //                     'platform_id' => Platform::SUPPLIER,
    //                     'info'        => OperationLog::OPERATIONS[OperationLog::OPERATION_REMOVE] . ProductSource::table_name() . "表中id={$product['id']}的template_id数据（置为0）",
    //                     'ip'          => $request->getClientIp(),
    //                     'add_time'    => time(),
    //                 ]);
    //                 return true;
    //             });
    //         } catch (\Exception $e) {
    //             $text = [
    //                 'supplier_id'     => $this->getUserId(),
    //                 'product_cate_id' => $productCateId,
    //                 'id'              => $product['id'],
    //                 'stack'           => $e->getTraceAsString(),
    //                 'error'           => $e->getMessage()
    //             ];
    //             $this->logger->error(OperationLog::OPERATIONS[OperationLog::OPERATION_REMOVE] . '模板下的商品失败', $text);
    //         }
    //
    //         if ($result) {
    //             $count++;
    //         }
    //     }
    //
    //     return ['status' => true, 'msg' => $count . '项移除成功'];
    // }
    //
    // /**
    //  * 模板商品上下架
    //  * @Route("/products/source-groups/product-change-status", name="supplier_product_source_groups_product_change_status")
    //  */
    // public function productChangeStatusAction(Request $request) {
    //     $ids           = $request->request->get('id', 0);
    //     $productCateId = $request->request->get('product_cate_id', 0);
    //     $status        = $request->request->get('status', 0);
    //     if (!$ids || !$productCateId) {
    //         return ['status' => false, 'msg' => '参数有误'];
    //     }
    //
    //     $where = [
    //         's.sell_user_id' => $this->getUserId(),
    //         's.id'           => $ids,
    //         //'s.review_status' => 3,
    //         'u.status'       => User::STATUS_ACTIVE
    //     ];
    //
    //     $joins = 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=s.sell_user_id ';
    //
    //     $options = [
    //         'select' => 's.id,u.user_name,s.status,s.sell_status',
    //         'from'   => ProductSource::table_name() . ' AS s',
    //         'joins'  => $joins,
    //         'order'  => 's.id DESC'
    //     ];
    //
    //     $products = ProductSource::all($where, $options);
    //
    //     if (empty($products)) {
    //         return ['status' => false, 'msg' => '未找到指定数据'];
    //     }
    //
    //     $count = 0;
    //
    //     foreach ($products as $product) {
    //         $result = false;
    //         if ($product['status'] == $status) {
    //             continue;
    //         }
    //         $action = $status == 1 ? OperationLog::OPERATION_UPPER : OperationLog::OPERATION_LOWER;
    //         try {
    //             $result = ProductSource::transaction(function () use ($product, $request, $status, $action) {
    //                 ProductSource::update_all([
    //                     'status'    => $status,
    //                     'edit_time' => time(),
    //                 ], [
    //                     'id' => $product['id']
    //                 ]);
    //
    //                 // 写入日志
    //                 OperationLog::create([
    //                     'user_id'     => $this->getUserId(),
    //                     'log_type'    => $action,
    //                     'platform_id' => Platform::SUPPLIER,
    //                     'info'        => '将' . ProductSource::table_name() . "表中id={$product['id']}的货源" . OperationLog::OPERATIONS[$action],
    //                     'ip'          => $request->getClientIp(),
    //                     'add_time'    => time(),
    //                 ]);
    //                 return true;
    //             });
    //         } catch (\Exception $e) {
    //             $text = [
    //                 'supplier_id'     => $this->getUserId(),
    //                 'product_cate_id' => $productCateId,
    //                 'id'              => $product['id'],
    //                 'stack'           => $e->getTraceAsString(),
    //                 'error'           => $e->getMessage()
    //             ];
    //             $this->logger->error(OperationLog::OPERATIONS[$action] . '模板下的商品失败', $text);
    //         }
    //
    //         if ($result) {
    //             $count++;
    //         }
    //     }
    //
    //     return ['status' => true, 'msg' => $count . '项' . OperationLog::OPERATIONS[$action] . '成功'];
    // }
    //
    // /**
    //  * 模板商品停用/启用
    //  * @Route("/products/source-groups/product-change-sell-status", name="supplier_product_source_groups_change_sell_status")
    //  */
    // public function productChangeSellStatusAction(Request $request) {
    //     $ids           = $request->request->get('id', 0);
    //     $productCateId = $request->request->get('product_cate_id', 0);
    //     $sell_status   = $request->request->get('status', 0);
    //
    //     if (!$ids || !$productCateId) {
    //         return ['status' => false, 'msg' => '参数有误'];
    //     }
    //
    //     $where = [
    //         's.sell_user_id' => $this->getUserId(),
    //         's.id'           => $ids,
    //         //'s.review_status' => 3,
    //         'u.status'       => User::STATUS_ACTIVE
    //     ];
    //
    //     $joins = 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=s.sell_user_id ';
    //
    //     $options = [
    //         'select' => 's.id,u.user_name,s.status,s.sell_status',
    //         'from'   => ProductSource::table_name() . ' AS s',
    //         'joins'  => $joins,
    //         'order'  => 's.id DESC'
    //     ];
    //
    //     $products = ProductSource::all($where, $options);
    //
    //     if (empty($products)) {
    //         return ['status' => false, 'msg' => '未找到指定数据'];
    //     }
    //
    //     $count = 0;
    //
    //     foreach ($products as $product) {
    //         $result = false;
    //         if ($product['sell_status'] == $sell_status) {
    //             continue;
    //         }
    //         $action = $sell_status == 1 ? OperationLog::OPERATION_ENABLE : OperationLog::OPERATION_DISABLE;
    //         try {
    //             $result = ProductSource::transaction(function () use ($product, $request, $sell_status, $action) {
    //                 ProductSource::update_all([
    //                     'sell_status' => $sell_status,
    //                     'edit_time'   => time()
    //                 ], [
    //                     'id' => $product['id']
    //                 ]);
    //
    //                 // 写入日志
    //                 OperationLog::create([
    //                     'user_id'     => $this->getUserId(),
    //                     'log_type'    => $action,
    //                     'platform_id' => Platform::SUPPLIER,
    //                     'info'        => '将' . ProductSource::table_name() . "表中id={$product['id']}的货源" . OperationLog::OPERATIONS[$action],
    //                     'ip'          => $request->getClientIp(),
    //                     'add_time'    => time(),
    //                 ]);
    //                 return true;
    //             });
    //         } catch (\Exception $e) {
    //             $text = [
    //                 'supplier_id'     => $this->getUserId(),
    //                 'product_cate_id' => $productCateId,
    //                 'id'              => $product['id'],
    //                 'stack'           => $e->getTraceAsString(),
    //                 'error'           => $e->getMessage()
    //             ];
    //             $this->logger->error(OperationLog::OPERATIONS[$action] . '模板下的商品失败', $text);
    //         }
    //
    //         if ($result) {
    //             $count++;
    //         }
    //     }
    //
    //     return ['status' => true, 'msg' => $count . '项' . OperationLog::OPERATIONS[$action] . '成功'];
    // }
    //
    // /**
    //  * 比例向下同步
    //  * @Route("/products/source-groups/product-syncdown", name="supplier_product_source_groups_syncdown")
    //  */
    // public function syncdownAction(Request $request) {
    //     $id            = $request->request->get('id', 0);
    //     $productCateId = $request->request->get('product_cate_id', 0);
    //
    //     if (!$id || !$productCateId) {
    //         return ['status' => false, 'msg' => '参数有误'];
    //     }
    //
    //     $where = [
    //         's.sell_user_id' => $this->getUserId(),
    //         's.id'           => $id,
    //         //'s.review_status' => 3, //审核通过
    //         //'s.status'        => 1, //已上架
    //         //'s.sell_status'   => 1, //已启用
    //         'u.status'       => User::STATUS_ACTIVE //激活
    //     ];
    //
    //     $joins = 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=s.sell_user_id ';
    //
    //     $options = [
    //         'select' => 's.id,u.user_name,s.status,s.sell_status,s.source_price,s.face_value,s.template_id',
    //         'from'   => ProductSource::table_name() . ' AS s',
    //         'joins'  => $joins,
    //         'order'  => 's.id DESC'
    //     ];
    //
    //     $product = ProductSource::first($where, $options);
    //
    //     if (empty($product)) {
    //         return ['status' => false, 'msg' => '未找到指定数据或状态不合法'];
    //     }
    //
    //     $percent = $product->source_price / $product->face_value;
    //
    //     $result = false;
    //
    //     try {
    //         $result = ProductSource::transaction(function () use ($request, $product, $percent) {
    //             /*ProductSource::update_all([
    //                 'source_price'      => 'face_value * ' . $percent,
    //                 'edit_time' => time()
    //             ], [
    //                 'id'            => ['<' => $product->id],
    //                 'sell_user_id'  => $this->getUserId(),
    //                 'template_id'   => $product->template_id,
    //                 'review_status' => ['>=' => 3],
    //             ]);*/
    //
    //             ProductSource::query(
    //                 'UPDATE ' . ProductSource::table_name() . ' SET `source_price` = `face_value` * ? ,edit_time = ? WHERE id < ? AND sell_user_id = ? AND template_id = ?',
    //                 [
    //                     $percent,
    //                     time(),
    //                     $product->id,
    //                     $this->getUserId(),
    //                     $product->template_id
    //                 ]
    //             );
    //
    //             // 写入日志
    //             OperationLog::create([
    //                 'user_id'     => $this->getUserId(),
    //                 'log_type'    => OperationLog::OPERATION_SYNCDOWN,
    //                 'platform_id' => Platform::SUPPLIER,
    //                 'info'        => '将' . ProductSource::table_name() . "表中id={$product->id}的货源" . OperationLog::OPERATIONS[OperationLog::OPERATION_SYNCDOWN],
    //                 'ip'          => $request->getClientIp(),
    //                 'add_time'    => time(),
    //             ]);
    //
    //             return true;
    //         });
    //     } catch (\Exception $e) {
    //         $text = [
    //             'supplier_id'     => $this->getUserId(),
    //             'product_cate_id' => $productCateId,
    //             'id'              => $product->id,
    //             'stack'           => $e->getTraceAsString(),
    //             'error'           => $e->getMessage()
    //         ];
    //         $this->logger->error('模板下的商品' . OperationLog::OPERATIONS[OperationLog::OPERATION_SYNCDOWN] . '失败', $text);
    //     }
    //
    //     return ['status' => (boolean)$result, 'msg' => OperationLog::OPERATIONS[OperationLog::OPERATION_SYNCDOWN] . ($result ? '成功' : '失败')];
    // }
    //
    // /**
    //  * 供货价修改
    //  * @Route("/products/source-groups/product-change-source_price", name="supplier_product_source_groups_change_cost")
    //  */
    // public function productChangeCostAction(Request $request) {
    //     $ids           = $request->request->get('id', 0);
    //     $productCateId = $request->request->get('product_cate_id', 0);
    //     $cost          = $request->request->get('source_price', 0);
    //
    //     if (!$ids || !$productCateId) {
    //         return ['status' => false, 'msg' => '参数有误'];
    //     }
    //
    //     $where = [
    //         's.sell_user_id' => $this->getUserId(),
    //         's.id'           => $ids,
    //         //'s.review_status' => 3,
    //         'u.status'       => User::STATUS_ACTIVE
    //     ];
    //
    //     $joins = 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=s.sell_user_id ';
    //
    //     $options = [
    //         'select' => 's.id,u.user_name,s.status,s.sell_status',
    //         'from'   => ProductSource::table_name() . ' AS s',
    //         'joins'  => $joins,
    //         'order'  => 's.id DESC'
    //     ];
    //
    //     $product = ProductSource::first($where, $options);
    //
    //     if (empty($product)) {
    //         return ['status' => false, 'msg' => '未找到指定数据'];
    //     }
    //
    //     $result = false;
    //
    //     try {
    //         $result = ProductSource::transaction(function () use ($product, $request, $cost) {
    //             ProductSource::update_all([
    //                 'source_price' => $cost,
    //                 'edit_time'    => time()
    //             ], [
    //                 'id' => $product->id
    //             ]);
    //
    //             // 写入日志
    //             OperationLog::create([
    //                 'user_id'     => $this->getUserId(),
    //                 'log_type'    => OperationLog::OPERATION_EDIT,
    //                 'platform_id' => Platform::SUPPLIER,
    //                 'info'        => OperationLog::OPERATIONS[OperationLog::OPERATION_EDIT] . ProductSource::table_name() . "表中id={$product->id}的货源成本为{$cost}",
    //                 'ip'          => $request->getClientIp(),
    //                 'add_time'    => time(),
    //             ]);
    //             return true;
    //         });
    //     } catch (\Exception $e) {
    //         $text = [
    //             'supplier_id'     => $this->getUserId(),
    //             'product_cate_id' => $productCateId,
    //             'id'              => $product->id,
    //             'stack'           => $e->getTraceAsString(),
    //             'error'           => $e->getMessage()
    //         ];
    //         $this->logger->error(OperationLog::OPERATIONS[OperationLog::OPERATION_EDIT] . '模板下的商品成本失败', $text);
    //     }
    //
    //     return ['status' => (boolean)$result, 'msg' => OperationLog::OPERATIONS[OperationLog::OPERATION_EDIT] . ($result ? '成功' : '失败')];
    // }
    //
    // // /**
    // //  * 添加已有商品
    // //  * @Route("/products/source-groups/add-template-product", name="supplier_product_source_groups_add_template_product")
    // //  */
    // // public function addTemplateProduct(Request $request) {
    // //     $ids           = $request->request->get('id');
    // //     $productCateId = $request->request->get('product_cate_id');
    // //     $template_id   = $request->request->get('template_id');
    // //
    // //     if (!($ids && $template_id)) {
    // //         return ['status' => false, 'msg' => '参数错误'];
    // //     }
    // //
    // //
    // //     $where = [
    // //         's.sell_user_id' => $this->getUserId(),
    // //         's.id'           => $ids,
    // //         'u.status'       => User::STATUS_ACTIVE,
    // //         //'s.review_status' => 3
    // //     ];
    // //
    // //     $joins = 'LEFT JOIN ' . User::table_name() . ' AS u ON u.id=s.sell_user_id ';
    // //
    // //     $options = [
    // //         'select' => 's.id,u.user_name,s.status,s.sell_status',
    // //         'from'   => ProductSource::table_name() . ' AS s',
    // //         'joins'  => $joins,
    // //         'order'  => 's.id DESC'
    // //     ];
    // //
    // //
    // //
    // //     $products = ProductSource::all($where, $options);
    // //
    // //     if (empty($products)) {
    // //         return ['status' => false, 'msg' => '未找到指定数据'];
    // //     }
    // //
    // //     $count = 0;
    // //
    // //     foreach ($products as $product) {
    // //         $result = false;
    // //         try {
    // //             $result = ProductSource::transaction(function () use ($product, $request, $template_id) {
    // //                 ProductSource::update_all(['template_id' => $template_id, 'edit_time'   => time()], ['id' => $product['id']]);
    // //
    // //                 // 写入日志
    // //                 OperationLog::create([
    // //                     'user_id'     => $this->getUserId(),
    // //                     'log_type'    => OperationLog::OPERATION_EDIT,
    // //                     'platform_id' => Platform::SUPPLIER,
    // //                     'info'        => OperationLog::OPERATIONS[OperationLog::OPERATION_EDIT] . ProductSource::table_name(). "表中id={$product['id']}的template_id数据（置为{$template_id}）",
    // //                     'time'        => time(),
    // //                     'ip'          => $request->getClientIp(),
    // //                     'add_time'    => time(),
    // //                 ]);
    // //                 return true;
    // //             });
    // //         } catch (\Exception $e) {
    // //             $text = [
    // //                 'supplier_id'     => $this->getUserId(),
    // //                 'product_cate_id' => $productCateId,
    // //                 'id'              => $product['id'],
    // //                 'stack'           => $e->getTraceAsString(),
    // //                 'error'           => $e->getMessage()
    // //             ];
    // //             $this->logger->error("添加已有商品到相应模板({$template_id})下的失败", $text);
    // //         }
    // //
    // //         if ($result) {
    // //             $count++;
    // //         }
    // //     }
    // //
    // //     return ['status' => true, 'msg' => $count . '项添加成功'];
    // // }
    //
    // /**
    //  * 模板下添加新商品
    //  * @Route("/products/source-groups/add-new-product", name="supplier_product_source_groups_add_new_product")
    //  */
    // public function addNewProductAction(Request $request, Form $form) {
    //     $template_id   = $request->get('template_id');
    //     $productCateId = $request->get('product_cate_id');
    //
    //     if (!$template_id) {
    //         return ['status' => false, 'msg' => '模板id参数有误'];
    //     }
    //
    //     if (!in_array($productCateId, ['1', '3', '4', '10'])) {
    //         return ['status' => false, 'msg' => '分类错误'];
    //     }
    //     if ($request->getMethod() !== Request::METHOD_POST) {
    //         $view = [
    //             Constants::PRODUCT_CATE_MOBILE_PHONE => 'add_new_product_mobile.twig',
    //             Constants::PRODUCT_CATE_TENCENT      => 'add_new_product_tencent.twig',
    //             Constants::PRODUCT_CATE_DATA_PACKAGE => 'add_new_product_flow.twig',
    //             Constants::PRODUCT_CATE_LINE_PHONE   => 'add_new_product_telephone.twig',
    //         ];
    //
    //         $region = $this->getRegionsAction();
    //
    //         $province_count = $region['count'];
    //         $region         = $region['data'];
    //         // $form->init([
    //         //     'cate_id'       => [to_enum(Constants::CARRIERS)],
    //         //     'product_cate_id'     => [to_enum(Constants::PRODUCT_CATEGORIES)],
    //         //     'speed'         => [to_enum(Constants::RECHARGE_SPEED_TYPES)],
    //         //     'face_value_type'    => [to_enum(ProductMobile::FACE_VALUE_TYPES)],
    //         //     'face_value'    => ['required,numeric'],
    //         //     'province_name' => [''],
    //         //     'city_name'     => [''],
    //         //     'source_price'          => ['required,numeric'],
    //         //     'mnvo'          => ['required,integer'],
    //         //     'source_cost'     => ['required,numeric'],
    //         //     'is_mvno'       => [''],
    //         //     'mvno'          => ['integer']
    //         // ]);
    //
    //         $mvno_list = MobileNetworkOperator::all();
    //
    //         return $this->render('/Supplier/ProductSourceGroup/' . $view[$productCateId],
    //             [
    //                 'template_id'     => $template_id,
    //                 'product_cate_id' => $productCateId,
    //                 'region'          => $region,
    //                 'count'           => $province_count,
    //                 'mvno_list'       => $mvno_list,
    //                 // 'form'        => $form
    //             ]
    //         );
    //     }
    //
    //     $product_data = $request->request->get('product_data');
    //
    //     // foreach ($product_data as $data) {
    //     //     $form->init([
    //     //         'cate_id'       => ['required,'.to_enum(Constants::CARRIERS)],
    //     //         'speed'         => ['required,'.to_enum(Constants::RECHARGE_SPEED_TYPES)],
    //     //         'face_value_type'    => ['required,'.to_enum(ProductMobile::FACE_VALUE_TYPES)],
    //     //         'face_value'    => ['required,numeric'],
    //     //         'province_name' => ['required'],
    //     //         'city_name'     => [''],
    //     //         'source_price'          => ['required,numeric'],
    //     //         'source_cost'     => ['required,numeric'],
    //     //         'is_mvno'       => ['integer'],
    //     //         'mvno'          => ['integer']
    //     //     ]);
    //     // }
    //     //
    //     // if (!$form->validate($request->request)) {
    //     //     return ['status' => false, 'msg' => '数据有误，请重新提交'];
    //     // }
    //
    //     $count = 0;
    //
    //     foreach ($product_data as $p_data) {
    //         if ($productCateId == 3) {//腾讯业务暂不处理
    //             $product = ProductSource::first([
    //                 'face_value' => $p_data['face_value'],
    //                 'num'        => $p_data['num'],
    //             ]);
    //         } else {
    //             $product = ProductSource::first([
    //                 'operation_id'    => $p_data['operation_id'],
    //                 'province_name'   => $p_data['province_name'],
    //                 'city_name'       => $p_data['city_name'],
    //                 'speed'           => $p_data['speed'],
    //                 'face_value'      => $p_data['face_value'],
    //                 'face_value_type' => $p_data['face_value_type'],
    //                 'name'            => $p_data['product_name']
    //             ]);
    //         }
    //
    //         if (empty($product) || $product->status == 0) {
    //             //return ['status' => false, 'msg' => '暂不存在匹配的主商品'];
    //             continue;
    //         }
    //
    //         if ($productCateId == 3) {//腾讯业务暂不处理
    //             $data        = [
    //                 'template_id'   => $template_id,
    //                 'product_id'    => $product->id,
    //                 'sell_user_id'  => $this->getUserId(),
    //                 'source_price'  => $p_data['source_price'],
    //                 'source_cost'   => $p_data['source_cost'],
    //                 'num'           => $p_data['num'],
    //                 'status'        => ProductConstants::SELL_STATUS_SELL,
    //                 'sell_status'   => 1,
    //                 'review_status' => ProductConstants::REVIEW_STATUS_APPROVED,
    //                 'add_time'      => time(),
    //                 'edit_time'     => time(),
    //                 'face_value'    => $p_data['face_value']
    //             ];
    //             $common_data = [
    //                 'master_id'       => '',
    //                 'face_value_type' => $p_data['face_value_type'],
    //                 'face_value'      => $p_data['face_value'],
    //                 'status'          => 1,
    //                 'add_time'        => time(),
    //                 'edit_time'       => time(),
    //             ];
    //         } else {
    //             $code = (new product_mobile_province_city_code())->first([
    //                 'province_name' => $p_data['province_name'],
    //                 'city_name'     => $p_data['city_name']
    //             ]);
    //
    //             $data = [
    //                 'operator_id'   => $p_data['operator_id'],
    //                 'product_id'    => $product->id,
    //                 'speed'         => $p_data['speed'],
    //                 'province_name' => $p_data['province_name'],
    //                 'city_name'     => $p_data['city_name'],
    //                 'sell_user_id'  => $this->getUserId(),
    //                 'province_code' => !empty($code->province_code) ? $code->province_code : 0,
    //                 'city_code'     => !empty($code->city_code) ? $code->city_code : 0,
    //                 'template_id'   => $template_id,
    //                 'operator_name' => Constants::CARRIERS[$p_data['cate_id']],
    //                 'face_value'    => $p_data['face_value'],
    //                 'num'           => $p_data['num'],
    //                 'source_price'  => $p_data['source_price'],
    //                 'source_cost'   => $p_data['source_cost'],
    //                 //'discount'      => '',
    //                 //'info'          => '',
    //                 'sell_status'   => 1,
    //                 'status'        => 1,
    //                 'review_status' => 1,
    //                 'is_mvno'       => $p_data['is_mvno'],
    //                 'mvno'          => $p_data['mvno'],
    //                 'add_time'      => time(),
    //                 'edit_time'     => time()
    //             ];
    //         }
    //
    //         $result = false;
    //
    //         try {
    //             $result = ProductSource::transaction(function () use ($data, $request, $p_data) {
    //                 ProductSource::create($data);
    //
    //                 // 写入日志
    //                 OperationLog::create([
    //                     'user_id'     => $this->getUserId(),
    //                     'log_type'    => OperationLog::OPERATION_CREATE,
    //                     'platform_id' => Platform::SUPPLIER,
    //                     'info'        => "创建名称为“{$p_data['product_name']}”的供货模板商品",
    //                     'ip'          => $request->getClientIp(),
    //                     'add_time'    => time(),
    //                 ]);
    //                 return true;
    //             });
    //         } catch (\Exception $e) {
    //             $text = [
    //                 'supplier_id'     => $this->getUserId(),
    //                 'product_cate_id' => $productCateId,
    //                 'id'              => $product->id,
    //                 'stack'           => $e->getTraceAsString(),
    //                 'error'           => $e->getMessage()
    //             ];
    //             $this->logger->error(OperationLog::OPERATIONS[OperationLog::OPERATION_CREATE] . '模板下的商品失败', $text);
    //         }
    //
    //         if ($result) {
    //             $count++;
    //         }
    //     }
    //
    //     return ['status' => true, 'msg' => $count . '项' . OperationLog::OPERATIONS[OperationLog::OPERATION_CREATE] . '成功'];
    // }
    //
    // /**
    //  * @Route("/products/source-groups/get-regions", name="supplier_product_source_groups_get_regions")
    //  */
    // public function getRegionsAction() {
    //     //        $redis = new \redis();
    //     //        $redis->connect('127.0.0.1', '6379');
    //     //
    //     //        $results = $redis->smembers('area');
    //
    //     if (empty($results)) {
    //         $regions   = new regions();
    //         $provinces = $regions->all(['parent_id' => 0, 'level' => 1], ['select' => 'id,area_name,parent_id,level,short_name', 'order' => 'sort']);
    //         $citys     = [];
    //         foreach ($provinces as $province) {
    //             $citys[$province['id']]               = [];
    //             $citys[$province['id']]['short_name'] = $province['short_name'];
    //             $citys[$province['id']]['city_name']  = $regions->all(['parent_id' => $province['id'], 'level' => 2], ['select' => 'id,area_name,parent_id,level,sort,short_name', 'order' => 'sort']);
    //         }
    //         //$redis->sadd('area', \GuzzleHttp\json_encode($citys));
    //     } else {
    //         $citys = \GuzzleHttp\json_decode($results, true);
    //     }
    //
    //     return ['status' => true, 'data' => $citys, 'count' => count($provinces)];
    // }

}
