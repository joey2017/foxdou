<?php
namespace App\Supplier\Controller;

use App\Common\Controller\BaseController;
use App\Common\Model\User\User;

class SupplierBaseController extends BaseController
{
    /**
     * 此方法纯粹是为了方便使用 IDE 代码提示
     * @return User|null
     */
    public function getSupplierUser() {
        return parent::getUser();
    }
}
