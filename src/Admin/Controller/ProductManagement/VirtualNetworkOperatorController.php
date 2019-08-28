<?php
namespace App\Admin\Controller\ProductManagement;

use App\Admin\Form\VirtualNetworkOperatorEditForm;
use App\MobileNetworkOperator;
use App\Constants;
use App\Reseller\Controller\ResellerBaseController;
use Psr\SimpleCache\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;

/**
 * @Route(defaults={"group": "product-management"})
 */
class VirtualNetworkOperatorController extends ResellerBaseController {

    // /**
    //  * @Route("/virtual-netowork-operators", name="admin_virtual_netowork_operators_index")
    //  */
    // public function indexAction(Request $request, VirtualNetworkOperatorEditForm $editForm, Form $searchForm) {
    //     $searchForm->init([
    //         'top_operator_id' => ['integer'],
    //         'enabled'         => ['integer'],
    //         'name'            => ['max_length[25]'],
    //     ]);
    //
    //     if (!$request->isXmlHttpRequest()) {
    //         return $this->render('/Admin/ProductManagement/VirtualNetworkOperator/index.twig', ['edit_form' => $editForm, 'search_form' => $searchForm]);
    //     }
    //
    //     if (!$searchForm->validate($request->query)) {
    //         return ["status" => false, "msg" => "参数错误"];
    //     }
    //
    //     $conditions['top_operator_id'] = $searchForm->top_operator_id;
    //     $conditions['enabled']         = $searchForm->enabled;
    //     $conditions['name']            = ['LIKE' => "%{$searchForm->name}%"];
    //     $options = [
    //         'select' => "id, top_operator_id, name, enabled, created_at, updated_at",
    //         'order' => 'id',
    //     ];
    //
    //     list($rows, $total) = MobileNetworkOperator::paginate($conditions, $options, $searchForm->page, $searchForm->limit);
    //     foreach ($rows as &$row) {
    //         $row['enabled_text'] = (string)$row['enabled'] === '1' ? '启用' : '禁用';
    //         $row['top_operator_name'] = Constants::CARRIERS[$row['top_operator_id']] ?? "未知顶级运营商({$row['top_operator_id']})";
    //     }
    //
    //     return $this->json(["status" => true, "data" => $rows, "total" => $total]);
    // }
    //
    // /**
    //  * @Route("/virtual-netowork-operators/save", name="admin_virtual_netowork_operators_save")
    //  */
    // public function saveAction(Request $request, VirtualNetworkOperatorEditForm $form) {
    //     if (!$form->validate($request->request)) {
    //         return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
    //     }
    //
    //
    //     try {
    //         $operator = $form->id ? MobileNetworkOperator::find($form->id) : new MobileNetworkOperator();
    //         $operator->top_operator_id = $form->top_operator_id;
    //         $operator->name = $form->name;
    //         $operator->enabled = (int)$form->enabled;
    //
    //         $operator->save();
    //
    //         return ["status" => true, 'msg' => '保存成功'];
    //     } catch (\Exception | InvalidArgumentException $e) {
    //         $context = [];
    //         $this->logger->error('保存虚拟运营商失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
    //         return ["status" => false, 'msg' => '保存虚拟运营商失败'];
    //     }
    //
    // }
    //
    // /**
    //  * @Route("/virtual-netowork-operators/delete", name="admin_virtual_netowork_operators_delete", methods={"POST"})
    //  */
    // public function deleteAction(Request $request, Form $form) {
    //     $form->init([
    //         'id' => ['required, integer'],
    //     ], 'admin_virtual_netowork_operators_delete');
    //
    //     if (!$form->validate($request->request)) {
    //         return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
    //     }
    //
    //     MobileNetworkOperator::delete_by_id($form->id);
    //
    //     return["status" => true, 'msg' => '删除成功'];
    // }
}
