<?php
namespace App\Admin\Service;

use App\Admin\Model\AdminUser;
use App\Common\Service\BaseService;
use Psr\Log\LoggerInterface;

class AdminUserManager extends BaseService {
    /**
     * @var AdminOperatonLogManager
     */
    private $adminOperatonLogManager;

    public function __construct(LoggerInterface $logger, AdminOperatonLogManager $adminOperatonLogManager) {
        parent::__construct($logger);
        $this->adminOperatonLogManager = $adminOperatonLogManager;
    }

    public function createAdmin($username, $password, $roles): AdminUser {
        $admin            = new AdminUser();
        $admin->user_name = $username;
        $admin->password  = $password;
        $admin->roles     = $roles;
        $admin->status    = AdminUser::STATUS_ACTIVE;
        $admin->add_time  = time();

        return $admin;
    }

    public function verifyPassword(AdminUser $user, $password) {
        if ($user->password_error_num >= AdminUser::MAX_LOGIN_FAIL_NUM) {
            return [false, '您的密码错误次数已经达到次数限制，请联系客服解决。'];
        }

        $succeed = password_verify($password, $user->password);
        if ($succeed) {
            return [true, ''];
        }

        $user->password_error_num = $user->password_error_num + 1;

        $countLeft = AdminUser::MAX_LOGIN_FAIL_NUM - $user->password_error_num;
        if ($countLeft <= 0) {
            $user->status = AdminUser::STATUS_LOCKED;
            $msg          = '您的密码错误次数已经达到次数限制，账号已经锁定，请联系管理员解决。';
        } elseif ($countLeft <= AdminUser::PASSWORD_FAIL_WARN_NUM) {
            $msg = "密码错误，还剩 {$countLeft} 次机会，请小心输入。";
        } else {
            $msg = '密码错误，请重新输入。';
        }

        try {
            $user->save();
        } catch (\Exception $e) {
            $this->logger->error('无法保存后台用户', ['user_id' => $user->id, 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
        }

        return [false, $msg];
    }

}