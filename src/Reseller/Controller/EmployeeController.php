<?php
namespace App\Reseller\Controller;

use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\User;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "employee"})
 */
class EmployeeController extends ResellerBaseController {

    /**
     * @Route("/employee", name="reseller_employee_index")
     */
    public function indexAction() {
        return '待开发';
        return $this->render("Reseller/Employee/index.twig");
    }

}
