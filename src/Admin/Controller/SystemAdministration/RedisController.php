<?php
namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RedisController extends AdminBaseController {
    /**
     * @Route("/system-administration/redis/databases", name="admin_system_administration_redis_databases")
     */
    public function databasesAction(Request $request) {
        return $this->render("Admin/SystemAdministration/Redis/databases.twig");
    }

    /**
     * @Route("/system-administration/redis/sessions", name="admin_system_administration_redis_sessions")
     */
    public function sessionsAction(Request $request) {
        return $this->render("Admin/SystemAdministration/Redis/sessions.twig");
    }

    /**
     * @Route("/system-administration/redis/caches", name="admin_system_administration_redis_caches")
     */
    public function cachesAction(Request $request) {
        return $this->render("Admin/SystemAdministration/Redis/caches.twig");
    }
}
