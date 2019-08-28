<?php
namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MiscController extends AdminBaseController {
    /**
     * @Route("/system-administration/misc/php-info", name="admin_system_administration_misc_php_info")
     */
    public function php_infoAction(Request $request) {
        ob_start();
        phpinfo();
        $info = ob_end_clean();

        return $info;
    }

    /**   opcache缓存
     * @Route("/system-administration/misc/opcache-info", name="admin_system_administration_misc_opcache_info")
     */
    public function opcache_infoAction(Request $request) {
        return $this->render("Admin/SystemAdministration/Misc/opcache_info.twig");
    }

    /**
     * @Route("/system-administration/misc/inspector", name="admin_system_administration_misc_inspector")
     */
    public function inspectorAction(Request $request) {
        return $this->render("Admin/SystemAdministration/Misc/inspector.twig");
    }
}
