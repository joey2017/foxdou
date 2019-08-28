<?php
namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Form\AdminEditForm;
use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use App\Admin\Service\AdminOperatonLogManager;
use App\Admin\Service\AdminUserManager;
use App\Common\Model\User\User;
use Symfu\SimpleFormBundle\Form;
use SimpleRecord\Exception\ModelException;
use SimpleRecord\Exception\SimpleRecordException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;
use Symfony\Component\Translation\TranslatorInterface;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/", defaults={"group": "system-administration"})
 */
class AdministratorRoleController extends AdminBaseController {
    /**
     * @Route("/system-administration/roles", name="admin_system_administration_roles")
     */
    public function indexAction(Request $request) {
        return $this->render("Admin/SystemAdministration/AdministratorRole/index.twig", ['roles' => AdminUser::ADMIN_ROLES]);
    }
}
