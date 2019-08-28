<?php
namespace App\OpenApi\Service;

use App\Common\Model\User\User;
use App\Common\Service\UserManager;
use App\OpenApi\ApiSystemError;
use App\OpenApi\Security\ApiAuthenticationException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class UserProvider implements UserProviderInterface, ServiceSubscriberInterface {
    use ServiceSubscriberTrait;
    protected function userManager(): UserManager {
        return $this->container->get(__METHOD__);
    }

    public function loadUserByUsername($userId) {
        return $this->fetchUser($userId);
    }

    public function refreshUser(UserInterface $user) {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        $username = $user->getUsername();

        return $this->fetchUser($username);
    }

    public function supportsClass($class) {
        return User::class === $class;
    }

    private function fetchUser($userId) {
        $user = $this->userManager()->getUserById($userId, true);

        if (!$user) {
            $errorCode = ApiSystemError::ACCESS_DENIED;
            $errorMsg = ApiSystemError::ERROR_CODES[$errorCode];

            $response = ['msg' => $errorMsg, 'code' => $errorCode, 'error_code' => $errorCode, 'time' => date('Y-m-d H:i:s')];

            throw new ApiAuthenticationException('加载用户失败：找不到用户或者用户不在正常状态', $response);
        }

        return $user;
    }
}