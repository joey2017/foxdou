<?php

namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Model\AdminOperationLog;
use App\Admin\Service\AdminOperatonLogManager;
use App\Common\Model\Article;
use App\Common\Model\ArticleCategory;
use App\Platform;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/", defaults={"group": "system-administration"})
 */
class ArticleCategoryController extends AdminBaseController {
    /**
     * @Route("/system-administration/article-categories.{_format}", name="admin_system_administration_articles_categories", defaults={"_format"="html"})
     */
    public function indexAction(Request $request) {
        global $T;
        $portalId = $request->query->get('portal_id');
        $options = [
            'select' => "ac.id, ac.name, p.name as parent_cate_name, ac.portal_id, ac.parent_id",
            'from' => "{$T(ArticleCategory::table_name())} ac",
            'joins' => " LEFT JOIN {$T(ArticleCategory::table_name())} p on p.id = ac.parent_id",
            'order' => 'ac.portal_id, ac.level',
        ];
        list($data,$total) = ArticleCategory::paginate(['ac.portal_id' => $portalId], $options);

        foreach ($data as &$row) {
            $row['portal_name'] = (Platform::PLATFORMS[$row['portal_id']] ?? "未知平台（{$row['portal_id']}）");
        }

        $format = $request->getRequestFormat();
        if($format === 'json') {
            return ['status' => true, 'data' => $data,'total' => $total];
        } else {
            return $this->render("/Admin/SystemAdministration/ArticleCategory/index.twig", ['data' => $data]);
        }
    }

    /**
     * @Route("/system-administration/article-categories/save", name="admin_system_administration_articles_categories_save")
     */
    public function saveAction(Request $request, AdminOperatonLogManager $adminOperatonLogManager, Form $form) {
        $form->init([
            'id' => ['integer'],
            'portal_id' => ['required, '.to_enum(Platform::PLATFORMS)],
            'parent_id' => ['integer'],
            'name' => ['required, min_length[2], max_length[20]'],
        ]);

        if(!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '参数错误', 'errors' => $form->getErrors()];
        }


        $category = $form->id ? ArticleCategory::find($form->id) : new ArticleCategory();
        if(!$category) {
            return ['status' => false, 'msg' => '用户不存在'];
        }

        $currentUser = $this->getAdminUser();
        $isNew       = $category->is_new_record();
        $operation   = $isNew ? AdminOperationLog::OPERATION_CREATE : AdminOperationLog::OPERATION_EDIT;

        $category->portal_id = $form->portal_id;
        $category->parent_id = (int)$form->parent_id;
        $category->name      = $form->name;

        try {
            $context['dirty_attrs'] = $category->dirty_attributes();
            unset($context['dirty_attrs']['created_at'], $context['dirty_attrs']['updated_at']);

            $category->save(true, true);

            $context['id'] = $category->id;
            $context['name'] = $category->name;

            $actionName = $isNew ? '新增' : '编辑';
            $adminOperatonLogManager->createLog($currentUser, $operation, AdminOperationLog::SUBJECT_ARTICLE_CATEGORY, "用户 {$currentUser} {$actionName}文章分类 {$category->name} ", $request->getClientIp(), $context);

            return ['status' => true, 'msg' => '保存成功'];
        } catch (\Exception $e) {
            $context = array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            $this->logger->error('保存文章分类失败', $context);
            return ['status' => false, 'msg' => '保存失败，请稍后重试'];
        }
    }

    /**
     * @Route("/system-administration/article-categories/delete", name="admin_system_administration_articles_categories_delete")
     */
    public function deleteCategoryAction(Request $request, AdminOperatonLogManager $operatonLogManager, Form $form) {
        $form->init([
            'id' => ['required, integer'],
        ], 'admin_system_administration_articles_categories_delete');

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '参数错误', 'errors' => $form->getErrors()];
        }


        try {
            $id = (int)$form->id;
            $category = ArticleCategory::find($id);
            if(!$category) {
                return ['status' => true, 'msg' => '删除成功']; // 因为已经不存在了，所以就当做是删除成功了
            }

            $category->delete();
            Article::update_all(['cate_id' => null], ['cate_id' => $id]);

            $context = ['id' => $id, 'name' => $category->name];
            $currentUser = $this->getAdminUser();
            $operatonLogManager->createLog($currentUser, AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_ARTICLE_CATEGORY, "用户 {$currentUser} 删除了文章分类 {$category->name} ", $request->getClientIp(), $context);

            return ['status' => true, 'msg' => '删除成功'];
        } catch (\Exception $e) {
            $this->logger->error('删除文章失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ['status' => false, 'msg' => '系统错误，删除失败'];
        }
    }
}
