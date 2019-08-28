<?php
namespace App\Reseller\Controller;

use App\Reseller\Model\SiteAgentArticle;
use Symfony\Component\Routing\Annotation\Route;

class ResellerAccountController extends ResellerBaseController
{
//    /**
//     * @Route("/", name="reseller_")
//     */
//    public function indexAction() {
//        $conditions = ['scene_id' => 3,'cate_id' => 4,'publish' => 1];
//        $options    = [
//            'select'     => 'id, title',
//            'limit'      => 8,
//            'offset'     => 0,
//            'order'      => 'publish_time DESC',
//        ];
//
//        $tableName = SiteAgentArticle::table_name();
//        $articles = SiteAgentArticle::query("SELECT id, title FROM {$tableName} WHERE scene_id = 3 AND cate_id = 4 AND publish = 1 ORDER BY publish_time DESC  LIMIT 0,8");
//        return $this->json($articles->fetchAll());
//    }

    /**
     * @Route("/faq/show", name="reseller_faq_show")
     */
    public function showAction() {
        return $this->json("NO DONE YET");
    }
}
