<?php
namespace App\Passport\Controller;

use App\Common\Model\AutoGenerated\user_safe_question;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ToolController extends PassportBaseController {

    /**
     * 密保工具
     * @Route("/tool", name="passport_tool_index")
     */
    public function indexAction(Request $request) {
        $tool_type = $request->query->get('type');
        if ($tool_type == 'email') {
            return $this->render('/Passport/Tool/safe_tool_email.twig', ['user' => $this->getPassportUser()]);
        } elseif ($tool_type == 'question') {
            return $this->render('/Passport/Tool/safe_tool_question.twig', ['user' => $this->getPassportUser(), 'safe_question' => (new user_safe_question())->first(['user_id' => $this->getPassportUser()])]);
        }
        return $this->render('/Passport/Tool/safe_tool_mobile.twig', ['user' => $this->getPassportUser()]);
    }

}
