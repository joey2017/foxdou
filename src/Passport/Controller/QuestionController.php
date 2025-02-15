<?php
namespace App\Passport\Controller;

use App\Common\Model\Article;
use App\Common\Model\ArticleCategory;
use App\Platform;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends PassportBaseController {

    /**
     * 常见问题列表
     * @Route("/question/common-questions", name="passport_question_common_questions")
     */
    public function commonQuestionsAction($render = true) {
        $where    = ['c.name' => '常见问题', /*'c.portal_id' => Platform::PASSPORT,*/ 'a.portal_id' => Platform::PASSPORT];
        $options  = [
            'select' => 'a.*,c.name',
            'from'   => Article::table_name() . ' AS a',
            'joins'  => 'LEFT JOIN ' . ArticleCategory::table_name() . ' AS c ON c.id=a.cate_id',
            'order'  => 'a.id DESC',
        ];
        $articles = Article::all($where, $options);

        return !$render ? $articles : $this->render('/Passport/Question/common_questions.twig', ['articles' => $articles]);
    }

    /**
     * 问题详情
     * @Route("/question/detail", name="passport_question_detail")
     */
    public function detailAction(Request $request) {
        $id = $request->query->getInt('id', 0);
        if (!$id) {
            return ['status' => false, 'msg' => '参数有误'];
        }

        $article = Article::first(['portal_id' => Platform::PASSPORT, 'id' => $id]);

        if (empty($article)) {
            return ['status' => false, 'msg' => '未找到指定数据'];
        }
        //$article->content = strip_tags($article->content);
        $common_where = ['portal_id' => Platform::PASSPORT, 'cate_id' => $article->cate_id, 'published' => 0];
        $article_list = Article::all(array_merge($common_where, ['id' => ['<>' => $id]]), ['limit' => 10]);;
        $last = Article::first(array_merge($common_where, ['id' => ['>' => $id]]));
        $next = Article::first(array_merge($common_where, ['id' => ['<' => $id]]));

        return $this->render('/Passport/Question/detail.twig', ['article_list' => $article_list, 'article' => $article, 'last' => $last, 'next' => $next]);
    }

}
