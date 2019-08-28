<?php
namespace App\Reseller\Controller;

use App\Common\Service\ArticleManager;
use App\Platform;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends ResellerBaseController {

    /**
     * @Route("/", name="reseller_home")
     */
    public function indexAction(AuthenticationUtils $helper, Request $request, ArticleManager $articleManager) {
        $limit = 4;
        list($announcements, $total) = $this->getArticles($request, $articleManager, 6, $limit);
        $data = ['error' => $helper->getLastAuthenticationError(), 'last_username' => $helper->getLastUsername(), 'data' => $announcements];

        return $this->render("/Reseller/Home/index.twig", $data);
    }

    /**
     * @Route("/home/announcements", name="reseller_home_announcements")
     */
    public function announcementsAction(Request $request, ArticleManager $articleManager) {
        $limit = 2;
        list($announcements, $total) = $this->getArticles($request, $articleManager, 6, $limit);
        $data = ['data' => $announcements, 'total' => $total, 'limit' => $limit];

        return $this->render("/Reseller/Home/announcements.twig", $data);
    }

    /**
     * @Route("/home/recruitment", name="reseller_home_recruitment")
     */
    public function recruitmentAction(Request $request, ArticleManager $articleManager) {
        $limit = 12;
        list($announcements, $total) = $this->getArticles($request, $articleManager, 6, $limit);
        $data = ['data' => $announcements, 'total' => $total, 'limit' => $limit];

        return $this->render("/Reseller/Home/recruitment.twig", $data);
    }

    /**
     * @Route("/home/faqs", name="reseller_home_faqs")
     */
    public function faqsAction(Request $request, ArticleManager $articleManager) {
        $limit = 12;
        list($announcements, $total) = $this->getArticles($request, $articleManager, 6, $limit);
        $data = ['data' => $announcements, 'total' => $total, 'limit' => $limit];

        return $this->render("/Reseller/Home/faqs.twig", $data);
    }

    private function getArticles(Request $request, ArticleManager $articleManager, $cateId, $limit) {
        $page = $request->query->getInt('page', 1);
        $page = min(max($page, 1), 100);

        return $articleManager->getArticles(Platform::RESELLER, $cateId, $page, $limit);
    }
}
