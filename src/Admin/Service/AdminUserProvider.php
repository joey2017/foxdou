<?php
namespace App\Admin\Service;

use App\Admin\Model\AdminUser;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class AdminUserProvider implements UserProviderInterface
{
    public function __construct() {
    }

    public function loadUserByUsername($username)
    {
        return $this->fetchUser($username);
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof AdminUser) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        $username = $user->getUsername();

        return $this->fetchUser($username);
    }

    public function supportsClass($class)
    {
        return AdminUser::class === $class;
    }

    private function fetchUser($username)
    {
        $key = preg_match('/^\d{11}$/', $username) ? "mobile" : "user_name";
        $user = AdminUser::first([$key => $username]);

        if(!$user) {
            throw new UsernameNotFoundException(sprintf('用户 "%s" 不存在', $username));
        }

        if($user->status === AdminUser::STATUS_LOCKED) {
            throw new CustomUserMessageAuthenticationException('你的账号已经锁定，请联系管理员解锁');
        }
        if(!$user->isValid()) {
            throw new CustomUserMessageAuthenticationException(sprintf('你的账号状态异常，请联系管理员解决', $username));
        }

        return $user;
    }
}