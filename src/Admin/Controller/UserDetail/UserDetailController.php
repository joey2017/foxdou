<?php

namespace App\Admin\Controller\UserDetail;

use App\Admin\Controller\AdminBaseController;
use App\Common\Model\User\User;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserDetailController extends AdminBaseController {
    use MenuTraits;

    /**
     * @Route("/user-details", name="admin_user_details_index")
     */
    public function indexAction(Request $request) {
        $userId = $request->query->getInt('id', 0);
        if(!$userId || !($user = User::first(['id' => $userId],['hydrate' => true]))) {
            throw new \InvalidArgumentException("非法参数");
        }

        $data = ['user_info' => $user, 'menu' => $this->getMenu()];

        return $this->render("Admin/UserDetail/index.twig", $data);
    }
}
