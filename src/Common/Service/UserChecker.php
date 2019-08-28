<?php
namespace App\Common\Service;

use App\Common\Model\User\User;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\Exception\LockedException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface {

    public function checkPreAuth(UserInterface $user) {
        if (!$user instanceof User) {
            return;
        }

        // 被删除的用户只显示账号或密码错，不让登陆的人知道已经被删除
        if ($user->isDeleted()) {
            throw new UsernameNotFoundException('账号或密码错误');
        }

        if ($user->isBanned()) {
            $ex = new DisabledException('账号已经被封禁');
            $ex->setUser($user);
            throw $ex;
        }

        if ($user->isLocked()) {
            $ex = new LockedException('账号已经被暂时锁定');
            $ex->setUser($user);
            throw $ex;
        }
    }

    public function checkPostAuth(UserInterface $user) {
        if (!$user instanceof User) {
            return;
        }
    }
}