<?php
namespace App\Common\Handler;

use App\Admin\Model\AdminUser;
use App\Common\Model\User\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

class AuthenticationFailureListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            AuthenticationEvents::AUTHENTICATION_FAILURE => 'onAuthenticationFailure',
        );
    }

    public function onAuthenticationFailure(AuthenticationFailureEvent $event)
    {
        $exception = $event->getAuthenticationException();
        $token = $event->getAuthenticationToken();
        if(!($token instanceof UsernamePasswordToken)) {
            return;
        }

        // $username = $token->getUsername();
        // $providerKey = $token->getProviderKey();
        // if($providerKey === 'admin') {
        //     $this->handleAdminLoginFailure($username, $exception);
        // } else {
        //     $this->handleUserLoginFailure($username, $exception);
        // }

    }

    private function handleAdminLoginFailure($adminUsername, AuthenticationException $ex) {
        // if($ex instanceof BadCredentialsException) {
        //     $table = AdminUser::table_name();
        //     AdminUser::query("UPDATE `{$table}` SET `password_error_num` = `password_error_num` + 1 WHERE `user_name`=?", [$adminUsername]);
        //     $stmt = AdminUser::query("SELECT `password_error_num` FROM `{$table}` WHERE `user_name`=?", [$adminUsername]);
        //     $currentErrorNum = $stmt->fetchColumn(0);
        //
        //     $countLeft = User::MAX_LOGIN_FAIL_NUM - $currentErrorNum;
        //     if($countLeft <= 0) {
        //         $msg = '您的密码错误次数已经达到次数限制，账号已经锁定，请联系客服解决。';
        //     } elseif($countLeft <= User::PASSWORD_FAIL_WARN_NUM) {
        //         $msg = "账号或密码错误，还剩 {$countLeft} 次机会，请小心输入。";
        //     } else {
        //         $msg = '密码错误，请重新输入。';
        //     }
        // }
    }

    private function handleUserLoginFailure($username, AuthenticationException $ex) {
        if($ex instanceof BadCredentialsException) {
            $table = User::table_name();
            User::query("UPDATE `{$table}` SET `password_error_num` = `password_error_num` + 1 WHERE `user_name`=?", [$username]);
        }
    }
}