<?php
namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CacheController extends AdminBaseController {
    /**
     * @Route("/system-administration/caches", name="admin_system_administration_caches")
     */
    public function cachesAction(Request $request) {
        return $this->render("Admin/SystemAdministration/Cache/caches.twig");
    }

    /**
     * @Route("/system-administration/other-caches", name="admin_system_administration_other_caches")
     */
    public function other_cachesAction(Request $request) {
        return $this->render("Admin/SystemAdministration/Cache/other_caches.twig");
    }
}
