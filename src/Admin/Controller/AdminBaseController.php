<?php
namespace App\Admin\Controller;

use App\Admin\Model\AdminUser;
use App\Admin\Service\AdminOperatonLogManager;
use App\Common\Controller\BaseController;

class AdminBaseController extends BaseController {

    /**
     * 此方法纯粹是为了方便使用 IDE 代码提示
     * @return AdminUser|null
     */
    public function getAdminUser() {
        return parent::getUser();
    }

    protected function adminLogMgr(): AdminOperatonLogManager {
        return $this->container->get(__METHOD__);
    }
}
