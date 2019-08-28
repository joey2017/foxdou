<?php
namespace App\Common\Service;

use App\Common\Model\User\User;

/**
 * @Bean()
 */
class WebAuthenticationManager extends BaseService
{
    /**
     * @Inject("sessionManager")
     * @var SessionManager
     */
    private $sessionManager;


//    /**
//     * @return User|null
//     */
//    public function getCurrentUser()
//    {
//        return RequestContext::getContextDataByKey("CURRENT_USER");
//    }
//
//    /**
//     * @return bool
//     */
//    public function isLoggedIn(): bool {
//        $user = $this->getCurrentUser();
//
//        return $user !== null;
//    }
//
//    public function logout(): array {
//        $session = $this->sessionManager->getSession();
//        if($session) {
//            $session->remove("user_id");
//        }
//
//        return ['url' => '/'];
//    }
}