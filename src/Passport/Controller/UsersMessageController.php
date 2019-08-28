<?php

namespace App\Passport\Controller;

use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use App\Common\Model\UsersMessage;
use Symfony\Component\Routing\Annotation\Route;

class UsersMessageController extends PassportBaseController {
    /**
     * @Route("/message/index", name="passport_message_index")
     */
    public function indexAction() {
        return $this->render("Common/Message/index.twig");
    }

    /**
     * @Route("/message/send-message", name="passport_message_send_message")
     */
    // 发送站内消息
    public function sendMessageAction(Request $request){

        $user_ids= $request->request->get('user_ids', '');
        $title   = $request->request->get('title', '');
        $content = $request->request->get('content', '');

        $title = htmlspecialchars($title,ENT_QUOTES,'UTF-8');
        $content = htmlspecialchars($content,ENT_QUOTES,'UTF-8');
        if (empty($user_ids))
            return ['status' => false, 'msg' => '请选择要发送的用户'];

        if (empty($title) || empty($content))
            return ['status' => false, 'msg' => '请填写标题或者内容'];

        is_array($user_ids) || $user_ids = [$user_ids];
        $systime = time();
        $user_ids = array_filter($user_ids);

        foreach($user_ids as $userid){
            $result = UsersMessage::create(array(
                'user_id'   => $userid,
                'type'      => 1,
                'title'     => $title,
                'status'    => 1,
                'content'   => $content,
                'add_time'  => $systime,
                'edit_time' => $systime
            ));
        }

        if ($result === false)
            return ['status' => false,'msg' => '发送失败'];

        return ['status' => true,'msg' => '发送成功'];

    }
}
