<?php
namespace App\Passport\Controller;

use App\Common\Controller\BaseController;

class PassportBaseController extends BaseController
{
    /**
     * 此方法纯粹是为了方便使用 IDE 代码提示
     * @return tUser|null
     */
    public function getPassportUser() {
        return parent::getUser();
    }
}
