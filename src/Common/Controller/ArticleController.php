<?php

namespace App\Common\Controller;

use App\Common\Model\Article;
use App\Common\Service\ArticleManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends BaseController {
    /**
     * @Route("/articles.{format}", name="common_articles")
     */
    public function indexAction(Request $request, ArticleManager $articleManager, $format) {
        $partalId      = $request->get('portal_id');
        $cate          = $request->get('cate_id');
        $page          = $request->get('page', 1);
        $pageSize      = $request->get('limit');
        $getReadStatus = $request->get('rs');

        list($rows, $total) = $articleManager->getArticles($partalId, $cate, $page, $pageSize, $getReadStatus);
        if($format === 'json') {
            return ['status' => true, 'data' => $rows, 'total' => $total];
        }

        if($format === 'list') {
            $view = '/Common/Article/index.list.twig';
        } else {
            $view = '/Common/Article/index.twig';
        }

        return $this->render($view, ['articles' => $rows, 'total' => $total]);
    }

    /**
     * @Route("/articles/json", name="articles_json")
     */
    public function jsonAction(Request $request, ArticleManager $articleManager) {
        $partalId      = $request->query->get('portal_id');
        $cate          = $request->query->getInt('cate_id', 0);
        $page          = $request->query->getInt('page', 1);
        $pageSize      = $request->query->getInt('page_size');
        $getReadStatus = $request->query->getInt('rs');

        list($rows, $total) = $articleManager->getArticles($partalId, $cate, $page, $pageSize, $getReadStatus);
        return ['status' => true, 'data' => $rows, 'total' => $total];
    }

    /**
     * @Route("/articles/view", name="common_articles_view")
     */
    public function viewAction(Request $request) {
        $id = $request->query->get('id');
        if (!$id || !($article = Article::find($id)) || !$article->published) {
            throw new NotFoundHttpException();
        }

        $article->view_count += 1;
        $article->save();

        $data = ['article' => $article, 'prev_id' => null, 'next_id' => null];

        return $this->render("/Common/Article/view.twig", $data);
    }
}
