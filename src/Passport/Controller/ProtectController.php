<?php
namespace App\Passport\Controller;

use App\Common\Model\User\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProtectController extends PassportBaseController {

    /**
     * 账号保护
     * @Route("/protect", name="passport_protect_index")
     */
    public function indexAction(Request $request) {
        return $this->render('/Passport/Protect/index.twig');
    }

    /**
     * 账号保护
     * @Route("/protect/set-pay-status", name="passport_protect_set_pay_status")
     */
    public function setPayStatusAction(Request $request) {
        $status = $request->request->get('status');
        $result = User::update_all(['pay_status' => $status == 0 ? User::PAY_STATUS_DISABLED : User::PAY_STATUS_ENABLED, 'edit_time' => time()], ['id' => $this->getUserId()]);
        return ['status' => (boolean)$result, 'msg' => '操作'.($result ? '成功' : '失败')];
    }

}
