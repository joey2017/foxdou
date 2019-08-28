<?php
namespace App\Admin\Service;

use App\Admin\Model\AdminUser;
use App\Common\Service\BaseService;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class AdminBaseService extends BaseService {
    use ServiceSubscriberTrait;

    protected function adminLogMgr() : AdminOperatonLogManager {
        return $this->container->get(__METHOD__);
    }

    // protected function adminLogMgr() : AdminOperatonLogManager {
    //     return parent::getService(__METHOD__);
    // }

}