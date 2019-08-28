<?php
namespace App\Admin\Controller\ProductManagement;

use App\Common\Model\TencentProductCategory;
use App\Reseller\Controller\ResellerBaseController;
use Psr\SimpleCache\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;

/**
 * @Route(defaults={"group": "product-management"})
 */
class TencentProductCategoryController extends ResellerBaseController {

    /**
     * @Route("/tencent-product-categories", name="admin_tencent_product_categories_index")
     */
    public function indexAction(Request $request, Form $editForm, Form $searchForm) {
        $editForm->init([
            'id'              => ['integer'],
            'name'            => ['required, max_length[25]'],
            'enabled'         => ['integer'],
        ], 'edit_tencent_product_category');

        $searchForm->init([
            'enabled'         => ['integer'],
            'name'            => ['max_length[25]'],
        ]);

        if (!$request->isXmlHttpRequest()) {
            return $this->render('/Admin/ProductManagement/TencentProductCategory/index.twig', ['edit_form' => $editForm, 'search_form' => $searchForm]);
        }

        if (!$searchForm->validate($request->query)) {
            return ["status" => false, "msg" => "参数错误"];
        }

        $conditions['enabled'] = $searchForm->enabled;
        $conditions['name'] = ['LIKE' => "%{$searchForm->name}%"];
        $options = [
            'select' => "id, name, enabled, created_at, updated_at",
            'order' => 'id',
        ];

        list($rows, $total) = TencentProductCategory::paginate($conditions, $options, $searchForm->page, $searchForm->limit);
        foreach ($rows as &$row) {
            $row['enabled_text'] = (string)$row['enabled'] === '1' ? '启用' : '禁用';
        }

        return $this->json(["status" => true, "data" => $rows, "total" => $total]);
    }

    /**
     * @Route("/tencent-product-categories/save", name="admin_tencent_product_categories_save")
     */
    public function saveAction(Request $request, Form $form) {
        $form->init([
            'id'              => ['integer'],
            'name'            => ['required, max_length[25]'],
            'enabled'         => ['integer'],
        ], 'edit_tencent_product_category');

        if (!$form->validate($request->request)) {
            return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
        }


        try {
            $category = $form->id ? TencentProductCategory::find($form->id) : new TencentProductCategory();
            $category->name = $form->name;
            $category->enabled = (int)$form->enabled;

            $category->save();

            return ["status" => true, 'msg' => '保存成功'];
        } catch (\Exception | InvalidArgumentException $e) {
            $context = [];
            $this->logger->error('保存类目失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ["status" => false, 'msg' => '保存类目失败'];
        }

    }

    /**
     * @Route("/tencent-product-categories/delete", name="admin_tencent_product_categories_delete", methods={"POST"})
     */
    public function deleteAction(Request $request, Form $form) {
        $form->init([
            'id' => ['required, integer'],
        ], 'admin_tencent_product_categories_delete');

        if (!$form->validate($request->request)) {
            return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
        }

        TencentProductCategory::delete_by_id($form->id);

        return["status" => true, 'msg' => '删除成功'];
    }
}
