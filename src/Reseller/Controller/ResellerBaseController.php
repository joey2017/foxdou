<?php
namespace App\Reseller\Controller;

use App\Common\Controller\BaseController;
class ResellerBaseController extends BaseController
{
    /**
     * 此方法纯粹是为了方便使用 IDE 代码提示
     * @return User|null
     */
    public function getResellerUser() {
        return parent::getUser();
    }
}
