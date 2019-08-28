<?php
namespace App\Common\Service;

use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Model\User\OperationLog;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\SubAccountLevel;
use App\Common\Model\User\SupplierAccount;
use App\Common\Model\User\User;
use App\Common\Model\User\RealNameAuthenticationInfo;
use App\ErrorCodes;

class UserManager extends BaseService
{
    public function getUserById($id, $checkStatus = false) {
        return $this->getUserBy('id', $id, $checkStatus);
    }

    public function getUserByUserName($username, $checkStatus = false): ?User {
        $field = preg_match('/^\d{11}$/', $username) ? "mobile" : "user_name";
        return $this->getUserBy($field, $username, $checkStatus);
    }

    public function verifyPassword(User $user, $password, $platformId = null) {
        if($user->password_error_num >= User::MAX_LOGIN_FAIL_NUM) {
            return [false, '您的密码错误次数已经达到次数限制，请联系客服解决。'];
        }

        $succeed = password_verify($password, $user->password);
        if(!$succeed) {
            $user->password_error_num = $user->password_error_num + 1;
            $user->save();

            $countLeft = User::MAX_LOGIN_FAIL_NUM - $user->password_error_num;
            if($countLeft <= 0) {
                $msg = '您的密码错误次数已经达到次数限制，账号已经锁定，请联系客服解决。';
            } elseif($countLeft <= User::PASSWORD_FAIL_WARN_NUM) {
                $msg = "密码错误，还剩 {$countLeft} 次机会，请小心输入。";
            } else {
                $msg = '密码错误，请重新输入。';
            }

            return [false, $msg];
        }

        return  [true, ''];
    }

    public function verifyPayPassword(User $user, $payPassword, $platformId = null) {
        if($user->pay_password_error_num >= User::MAX_PAY_FAIL_NUM) {
            return [false, '您的支付密码错误次数已经达到次数限制，请联系客服解决。'];
        }

        $succeed = password_verify($payPassword, $user->pay_password);
        if(!$succeed) {
            $user->pay_password_error_num = $user->pay_password_error_num + 1;
            $user->save();

            $countLeft = User::MAX_PAY_FAIL_NUM - $user->pay_password_error_num;
            if($countLeft <= 0) {
                $msg = '您的支付密码错误次数已经达到次数限制，请联系客服解决。';
            } elseif($countLeft <= User::PAY_PASSWORD_FAIL_WARN_NUM) {
                $msg = "支付密码错误，还剩 {$countLeft} 次机会，请小心输入。";
            } else {
                $msg = '支付密码错误，请重新输入。';
            }

            return [false, $msg];
        }

        return  [true, ''];
    }


    private function addUserOperationLog(User $user, $authType, $platformId, $error, $clientIp) {
        if(!$user) {
            return;
        }

        $this->logger->debug("adding user operation log for user: " . $user->id);

        $log                    = new OperationLog();
        $log->user_id           = $user->id;
        $log->platform_id       = $platformId;
        $log->ip                = $clientIp;
        $log->add_time          = time();
        $log->log_type          = 1;//登录
        $log->info              = "登录 {$authType}, status={$error}";

        $log->save();
    }


    private function getUserBy($fieldName, $value, $checkStatus = false): ?User {
        if(!$value) {
            return null;
        }

        $user = User::first([$fieldName => $value]);

        if(!$user) {
            $this->logger->debug("Authenticating user: {$fieldName}={$value}, error=".ErrorCodes::USER_USERNAME_NOT_EXISTS);
            return null;
        }

        if($checkStatus && !$user->isValid()) {
            return null;
        }

        return $user;
    }



    public function getAllUsers($conds, $params, $page, $pageSize) {
        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];

        $usersTable        = User::table_name();
        $realNameInfoTable = RealNameAuthenticationInfo::table_name();

        $options = [
            'select'     => "U.id, U.user_name, if(U.type='I',U.mobile,U.email) as pass, U.bind_mobile, U.bind_email, U.type, U.is_entry_identity_info, U.is_open_platform, U.is_agent_platform, U.is_supplier_platform, from_unixtime(U.add_time, '%Y-%m-%d %h:%i:%s') as add_time, U.real_name_status, U.status, U.referrer_id, R.business_name, SU.user_name as referrer_name, PA.account",
            'from'       => "{$usersTable} U",
            'joins'      => "LEFT JOIN {$realNameInfoTable} R ON(U.id = R.user_id) LEFT JOIN {$usersTable} SU ON(U.referrer_id = SU.id) LEFT JOIN `yzb_users_premium_account` PA ON(PA.user_id = U.id)",
            'order'      => 'U.id DESC',
        ];

        list($users, $total) = User::paginate($conditions, $options, $page, $pageSize);

        return [$users, $total];
    }

    public function getOpenPlatformUsers($conds, $params, $page, $pageSize) {
        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];

        $openPlatformTable = OpenPlatformAccount::table_name();
        $usersTable        = User::table_name();
        $realNameInfoTable = RealNameAuthenticationInfo::table_name();
        $accountLevelTable = SubAccountLevel::table_name();

        $joins   = "LEFT JOIN {$usersTable} U ON(U.id = P.user_id)  " .
            "LEFT JOIN {$realNameInfoTable} R ON(U.id = R.user_id) " .
            "LEFT JOIN {$accountLevelTable} L ON(L.id = P.level) ";
        $options = [
            'select'     => "U.id, U.user_name, U.nick_name, U.bind_mobile, U.type, U.mobile, from_unixtime(U.add_time, '%Y-%m-%d %h:%i:%s') as add_time, U.real_name_status, U.info, R.business_name, P.level, P.balance, P.status",
            'from'       => "{$openPlatformTable} P",
            'joins'      => $joins,
            'order'      => 'U.id DESC',
        ];

        list($users, $total) = User::paginate($conditions, $options, $page, $pageSize);

        return [$users, $total];
    }

    public function getResellersUsers($conds, $params, $page, $pageSize) {
        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];


        $resellerPlatformTable = ResellerAccount::table_name();
        $usersTable            = User::table_name();
        $realNameInfoTable     = RealNameAuthenticationInfo::table_name();
        $accountLevelTable     = SubAccountLevel::table_name();

        $joins   = "LEFT JOIN {$usersTable} U ON(U.id = P.user_id)  " .
            "LEFT JOIN {$realNameInfoTable} R ON(U.id = R.user_id) " .
            "LEFT JOIN {$accountLevelTable} L ON(L.id = P.level) ";

        $options = [
            'select'     => "U.id, U.user_name, U.nick_name, U.bind_mobile, U.type, U.mobile, from_unixtime(U.add_time, '%Y-%m-%d %h:%i:%s') as add_time, U.real_name_status, U.info, R.business_name, P.level, P.balance, P.status",
            'from'       => "{$resellerPlatformTable} P",
            'joins'      => $joins,
            'order'      => 'U.id DESC',
        ];

        list($users, $total) = User::paginate($conditions, $options, $page, $pageSize);

        return [$users, $total];
    }

    public function getSupplierUsers($conds, $params, $page, $pageSize) {
        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];

        $supplierPlatformTable = SupplierAccount::table_name();
        $usersTable            = User::table_name();
        $realNameInfoTable     = RealNameAuthenticationInfo::table_name();
        $accountLevelTable     = SubAccountLevel::table_name();

        $joins   = "LEFT JOIN {$usersTable} U ON(U.id = P.user_id)  " .
            "LEFT JOIN {$realNameInfoTable} R ON(U.id = R.user_id) " .
            "LEFT JOIN {$accountLevelTable} L ON(L.id = P.level) ";

        $options = [
            'select'     => "U.id, U.user_name, U.nick_name, U.bind_mobile, U.type, U.mobile, U.add_time, U.real_name_status, U.info, R.business_name, P.level, P.balance, P.status",
            'from'       => "{$supplierPlatformTable} P",
            'joins'      => $joins,
            'order'      => 'U.id DESC',
        ];

        list($users, $total) = User::paginate($conditions, $options, $page, $pageSize);

        return [$users, $total];
    }

}