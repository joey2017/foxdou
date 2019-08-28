<?php
namespace App\Common\Service;

use App\Common\Model\User\OperationLog;
use App\Common\Model\User\RealNameAuthenticationInfo;
use App\Constants;
use App\ErrorCodes;
use App\Common\Model\User\User;

class AuthenticationService extends BaseService
{
    const MAX_LOGIN_FAIL_NUM = 10;
    const MAX_PAY_FAIL_NUM   = 10;

    /**
     * @param string $username
     * @param string $password
     * @param string $authType
     * @param string $realm
     *
     * @return array
     */
    public function authenticate(string $username, string $password, string $authType = "USER_LOGIN", string $realm = "USER", $clientIp = ''): array
    {
        switch ($realm) {
        case Constants::AUTH_REALM_ADMIN:
            $result = $this->authAdmin($username, $password, $authType, $clientIp);
            break;
        case Constants::AUTH_REALM_USER:
            list($error, $user) = $this->authUser($username, $password, $authType, $clientIp);
            $this->addUserOperationLog($user, $authType, $error, $clientIp);
            $result = [$error, $user ? $user->toArray() : null];
            break;
        default:
            $this->logger->error("用户尝试使用非法 realm 参数登录：realm=%s, username=%s, IP=%s", [$realm, $username, $clientIp]);
            $result = [ErrorCodes::USER_INVALID_ARGUMENTS, "非法参数：realm={$realm}"];
        }

        return $result;
    }

    /**
     * @Strings(name="username", min=4, max=20)
     * @Strings(name="password", min=5, max=50)
     *
     * @param string $username
     * @param string $payPassword
     *
     * @return array
     */
    private function verifyPayPassword(string $username, string $payPassword, $clientIp = ''): array
    {
        list($error, $user) = $this->loadUser($username);

        list($error, $user) = $this->authUser($username, $payPassword, "", $clientIp);
        $this->addUserOperationLog($user, "", $error, $clientIp);
        $result = [$error, $user ? $user->toArray() : null];

        return $result;
    }


    private function authAdmin($username, $password, $authType, $clientIp) {
        throw new \RuntimeException("待完成");
    }

    private function loadUser($username) {
        $key = preg_match('/\d{11}/', $username) ? "mobile" : "user_name";
        $user = User::first([$key => $username]);

        if(!$user) {
            $this->logger->debug("Authenticating user: username={$username}, error=".ErrorCodes::USER_USERNAME_NOT_EXISTS);
            return null;
        }

        return $user;
    }

    private function authUser($username, $password, $authType, $clientIp) {
        $this->logger->debug("Authenticating user: username={$username}, auth_type={$authType}");

        $validAuthTypes = [Constants::AUTH_TYPE_USER_LOGIN, Constants::AUTH_TYPE_USER_PAY];
        if(!in_array($authType, $validAuthTypes)) {
            $this->logger->error("用户尝试使用非法参数登录：realm=USER, username=%s, authType=%s IP=%s", [$username, $authType, $clientIp]);
            return [ErrorCodes::USER_INVALID_ARGUMENTS, ""];
        }

        $user = $this->loadUser($username);
        if(!$user) {
            $this->logger->debug("Authenticating user: username={$username}, auth_type={$authType}, error=".ErrorCodes::USER_USERNAME_NOT_EXISTS);
            return [ErrorCodes::USER_USERNAME_NOT_EXISTS, null];
        }

        // 验证账号状态
        $error = $this->verifyUserAccountStatus($user, $authType, $clientIp);
        if($error != ErrorCodes::SUCCEED) {
            $this->logger->debug("Authenticating user: username={$username}, auth_type={$authType}, user.status=".$error);
            return [$error, null];
        }

//        // TODO: 这个放到后面去做，做成没认证也可以登录，但是登陆后强制跳转到填写实名认证资料界面
//        // 验证实名认证状态
//        $status = $this->verifyUserIdentityStatus($user);
//        if($status != User::IDENTITY_STATUS_VERIFIED) {
//            $this->logger->debug("Authenticating user: username={$username}, auth_type={$authType}, user.identity_status=".$status);
//            return [ErrorCodes::USER_IDENTITY_NOT_VERIFIED, $user];
//        }

        // 验证密码
        $error = $this->verifyUserAccountPassword($user, $password, $authType, $clientIp);
        if($error != ErrorCodes::SUCCEED) {
            $this->logger->debug("Authenticating user: username={$username}, auth_type={$authType}, password_result=".$error);
            return [$error, $user];
        }

        // TODO: 平台账号验证过程
        $this->logger->debug("Authenticating user: username={$username}, auth_type={$authType}, status=".ErrorCodes::SUCCEED);
        return [ErrorCodes::SUCCEED, $user];
    }

    /**
     * @param $user
     * @param $password
     * @param $authType
     * @param $clientIp
     * @return string
     */
    private function verifyUserAccountStatus(User $user, $authType, $clientIp) {
        if ($authType == Constants::AUTH_TYPE_USER_LOGIN) {
            $passwordErrorNum = $user->password_error_num;
            if ($passwordErrorNum >= self::MAX_LOGIN_FAIL_NUM) {
                $this->logger->debug("Authenticating verifyUserAccountStatus: USER_MAX_LOGIN_FAIL_EXCEED, password_error_count={$passwordErrorNum}, MAX_LOGIN_FAIL_NUM=".self::MAX_LOGIN_FAIL_NUM);
                return ErrorCodes::USER_MAX_LOGIN_FAIL_EXCEED;
            }
        } elseif ($authType == Constants::AUTH_TYPE_USER_PAY) {
            $payPasswordErrorNum = $user->getPayPasswordErrorNum();
            if ($payPasswordErrorNum >= self::MAX_PAY_FAIL_NUM) {
                $this->logger->debug("Authenticating verifyUserAccountStatus: USER_MAX_LOGIN_FAIL_EXCEED, pay_password_error_count={$payPasswordErrorNum}, MAX_PAY_FAIL_NUM=".self::MAX_PAY_FAIL_NUM);
                return ErrorCodes::USER_MAX_PAY_FAIL_EXCEED;
            }
        }

        if($user->getStatus() != User::STATUS_ACTIVE) {
            $this->logger->debug("Authenticating verifyUserAccountStatus: user.status={$user->getStatus()}");
            return ErrorCodes::USER_USER_INACTIVE;
        }

        $this->logger->debug("Authenticating verifyUserAccountStatus: status=".ErrorCodes::SUCCEED);
        return ErrorCodes::SUCCEED;
    }

    /**
     * @param $user
     * @param $password
     * @param $authType
     * @param $clientIp
     * @return string
     */
    private function verifyUserAccountPassword(User $user, $password, $authType, $clientIp) {
        $result = ErrorCodes::USER_INVALID_USERNAME_OR_PASSWORD; // 默认认证错误

        if ($authType == Constants::AUTH_TYPE_USER_LOGIN) {
            if (password_verify($password, $user->getPassword())) {
                $user->password_error_num = 0;
                $result = ErrorCodes::SUCCEED;
            } else {
                $user->password_error_num = $user->password_error_num + 1;
                if($user->password_error_num  >= self::MAX_LOGIN_FAIL_NUM) {
                    $user->status = User::STATUS_LOCKED;
                }
                $result = ErrorCodes::USER_INVALID_PASSWORD;
            }
        } elseif ($authType == Constants::AUTH_TYPE_USER_PAY) {
            if (password_verify($password, $user->getPayPassword())) {
                $user->setPasswordErrorNum(0);
                $result = ErrorCodes::SUCCEED;
            } else {
                $payPasswordErrorNum = $user->getPayPasswordErrorNum() + 1;
                $user->setPasswordErrorNum($payPasswordErrorNum);

                if($payPasswordErrorNum >= self::MAX_PAY_FAIL_NUM) {
                    $user->setStatus(User::STATUS_LOCKED);
                }
                $result = ErrorCodes::USER_INVALID_PAY_PASSWORD;
            }
        }

        $user->update();

        return $result;
    }

    private function verifyUserIdentityStatus(User $user) {
        $result = RealNameAuthenticationInfo::findOne(['user_id' =>$user->getId(), 'user_type' =>$user->getType()]);
        /** @var $identifyInfo RealNameAuthenticationInfo */
        $identifyInfo = $result;
        $senfen_info = $identifyInfo ? $identifyInfo->toArray() : null;

        if (!$senfen_info || $senfen_info['status_info'] == User::IDENTITY_STATUS_INCOMPLETE || !$senfen_info['business_name'] || !$senfen_info['business_license_no']) {
            return User::IDENTITY_STATUS_INCOMPLETE;   //未填写
        } else {
            return $senfen_info['status_info'];
        }
    }

    private function addUserOperationLog($user, $authType, $error, $clientIp) {
        if(!$user) {
            return;
        }

        $this->logger->debug("adding user operation log for user: " . $user->getId());

        $log                    = new OperationLog();
        $log->user_id           = $user->id;
        $log->platform_id       = 5;
        $log->ip                = $clientIp;
        $log->add_time          = time();
        $log->log_type          = 1;//登录
        $log->info              = "登录 {$authType}, status={$error}";

        $log->save();
    }

}