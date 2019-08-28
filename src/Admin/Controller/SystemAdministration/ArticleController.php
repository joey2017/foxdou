<?php

namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Form\ArticleEditForm;
use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use App\Admin\Service\AdminOperatonLogManager;
use App\Common\Form\FoxdouForm;
use App\Common\Model\Article;
use App\Common\Model\ArticleCategory;
use App\Common\Model\File;
use App\Common\Service\ArticleManager;
use App\Common\Service\FileUpload\UploadFileManager;
use App\Platform;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @Route("/", defaults={"group": "system-administration"})
 */
class ArticleController extends AdminBaseController {
    /**
     * @Route("/system-administration/articles.{_format}", name="admin_system_administration_articles_index", defaults={"_format"="html"})
     */
    public function indexAction(Request $request, ArticleManager $articleManager) {
        if(!$request->isXmlHttpRequest()) {
            return $this->render("/Admin/SystemAdministration/Article/index.twig");
        }

        $portalId = $request->query->get('portal_id');
        $cateId   = $request->query->get('cate_id');
        $page     = $request->query->getInt('page');
        $limit    = $request->query->getInt('limit');

        global $T;
        $conditions = ['a.portal_id' => $portalId, 'a.cate_id' => $cateId];
        $options = [
            'select' => 'a.id, a.portal_id, a.cate_id, c.name as cate_name, a.title, a.cover_image_id, a.cover_image_url, a.source, a.editor_id, u.user_name as editor_name, a.view_count, a.published,  FROM_UNIXTIME(a.publish_time) as publish_time',
            'from'  => "{$T(Article::table_name())} a",
            'joins' => "INNER JOIN {$T(ArticleCategory::table_name())} c on a.cate_id=c.id
                        LEFT JOIN {$T(AdminUser::table_name())} u on a.editor_id=u.id",
            'order' => 'a.id DESC'
        ];
        list($rows, $total) = Article::paginate($conditions, $options, $page, $limit);

        foreach ($rows as &$row) {
            $row['editor_name'] = $row['editor_name'] ?? '管理员';
            $row['portal_name'] = Platform::PLATFORMS[$row['portal_id']] ?? '所有';
        }

        return ['status' => true, 'data' => $rows, 'total' => $total];
    }

    /**
     * @Route("/system-administration/articles/edit", name="admin_system_administration_articles_edit")
     */
    public function editAction(Request $request, AdminOperatonLogManager $operatonLogManager, ArticleEditForm $form) {
        $id = $request->query->getInt('id');
        $article = $id ? Article::find($id) : new Article();
        if(!$article) {
            throw new NotFoundHttpException('无此文章');
        }

        $form->bind($article->attributes());

        return $this->render("/Admin/SystemAdministration/Article/edit.twig", ['form' => $form, 'article' => $article]);
    }

    /**
     * @Route("/system-administration/articles/save", name="admin_system_administration_articles_save", methods={"POST"})
     */
    public function saveAction(Request $request, AdminOperatonLogManager $operatonLogManager, UploadFileManager $uploadFileManager, ArticleEditForm $form) {
        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => "表单验证失败，请修改后重新保存", 'errors' => $form->getErrors()];
        }
        if(!isset(Platform::PLATFORMS[$form->portal_id])) {
            return ['status' => false, 'msg' => '平台参数错误'];
        }

        try {
            $context = ['user_id' => $this->getUserId(), 'id' => $form->id];

            $cateIdValid = false;
            $allCates = ArticleCategory::all(['portal_id' => $form->portal_id]);
            foreach ($allCates as $cate) {
                if($cate['id'] == $form->cate_id) {
                    $cateIdValid = true;
                    break;
                }
            }
            if(!$cateIdValid) {
                return ['status' => false, 'msg' => '栏目参数错误'];
            }

            $article = $form->id ? Article::find($form->id) : new Article();
            if(!$article) {
                return ['status' => false, 'msg' => '文章 ID 错误'];
            }

            $cover_image_id = (int)$form->cover_image_id;
            if($cover_image_id && !($imageFile = File::find($cover_image_id))) {
                return ['status' => false, 'msg' => '题图 ID 错误'];
            }

            $article->portal_id = $form->portal_id;
            $article->cate_id = $form->cate_id;
            $article->source = $form->source;
            $article->title = $form->title;
            $article->abstract = $form->abstract;
            $article->content = $form->content;
            $article->published = (bool)$form->published;
            $article->publish_time = $form->published ? time() : null;

            if($cover_image_id && $cover_image_id !== $article->cover_image_id) {
                if($article->cover_image_id) {
                    $uploadFileManager->deleteUploadedFile($article->cover_image_id);
                }

                $article->cover_image_id = $imageFile->id;
                $article->cover_image_url = $imageFile->url;
            }

            $article->save(true, true);

            $operatonLogManager->createLog($this->getAdminUser(), AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_ARTICLE, "", $request->getClientIp(), $context);

            return ['status' => true, 'msg' => '保存成功', 'id' => $article->id, ''];
        } catch (\Exception $e) {
            $this->logger->error('保存文章失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ['status' => false, 'msg' => '系统错误，保存失败'];
        }
    }

    /**
     * @Route("/system-administration/articles/delete", name="admin_system_administration_articles_delete")
     */
    public function deleteAction(Request $request, AdminOperatonLogManager $operatonLogManager, Form $form) {
        $form->init([
            'id' => ['required, integer'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '参数错误', 'errors' => $form->getErrors()];
        }


        try {
            $id = (int)$form->id;
            Article::delete_by_id($id);
            $context = ['user_id' => $this->getUserId(), 'id' => $id];
            $operatonLogManager->createLog($this->getAdminUser(), AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_ARTICLE, "", $request->getClientIp(), $context);

            return ['status' => true, 'msg' => '删除成功'];
        } catch (\Exception $e) {
            $this->logger->error('删除文章失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ['status' => false, 'msg' => '系统错误，删除失败'];
        }
    }

    /**
     * @Route("/system-administration/articles/upload-images", name="admin_system_administration_articles_upload_images")
     */
    public function uploadImagesAction(Request $request) {
        $files = $request->files;
        return ['location' => 'https://foxdou-upload.oss-cn-shenzhen.aliyuncs.com/article-images/20141102212724_JSfuy.jpeg'];
    }
}
