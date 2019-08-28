<?php
namespace App\Common\Service;

use App\Admin\Model\AdminUser;
use App\Common\Model\Article;
use App\Common\Model\ArticleCategory;
use App\Common\Model\ArticleReadStatus;
use App\Common\Model\User\User;

class ArticleManager {
    public function getArticles($portalId, $cateId, $page, $limit, $getReadStatusOfUser = null) {
        $limit = min(max($limit, 1), 1000);

        $conditions['a.portal_id'] = $portalId;
        $conditions['a.cate_id']   = $cateId;
        $conditions['a.published'] = 1;

        $T = function($v) {return $v;};

        $select = "a.id, a.portal_id, a.cate_id, c.name as cate_name, a.title, a.abstract, IFNULL(a.keywords, '管理员') keywords, a.cover_image_url, a.source, a.view_count, FROM_UNIXTIME(a.publish_time) as publish_time";
        $from = "{$T(Article::table_name())} a";

        $joins = "INNER JOIN {$T(ArticleCategory::table_name())} c ON (c.id = a.cate_id)";

        // if($getReadStatus) {
        //     $select .= " , IFNULL(s.status, 0) as is_read";
        //     $joins  .= " INNER JOIN {$T(ArticleReadStatus::table_name())} s ON (s.article_id = a.id AND s.user_id = u.id)";
        // }

        $order = 'a.publish_time desc';
        $options = ['select' => $select, 'from'   => $from, 'joins'  => $joins, 'order'  => $order,];

        list($rows, $total) = Article::paginate($conditions, $options, $page, $limit);

        return [$rows, $total];
    }

}