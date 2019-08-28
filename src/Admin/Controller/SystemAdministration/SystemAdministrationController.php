<?php
namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SystemAdministrationController extends AdminBaseController {
    /**
     * @Route("/system-administration/index", name="admin_system_administration_index")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/SystemAdministration/SystemAdministration/index.twig");
    }
}
