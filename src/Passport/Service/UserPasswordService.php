<?php

namespace App\Passport\Service;

use App\Common\Model\User\User;
use App\Common\Service\BaseService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class UserPasswordService extends BaseService {

    private $session;

    public function __construct(SessionInterface $session) {
        $this->session = $session;
    }

    /**
     * 验证用户密码
     * 待完善
     */
    public function verifyUserPassword($type, $user_name_or_user_id, $password, $by_id = false, $return_user_object = false) {
        if (!$user_name_or_user_id) {
            return ['status' => false, 'msg' => '用户名不能为空'];
        }
        if (!$password) {
            return ['status' => false, 'msg' => '密码不能为空'];
        }

        switch ($type) {
        case 'login':
            $passwordfied             = 'password';
            $password_error_num_filed = 'password_error_num';
            break;
        case 'pay':
            $passwordfied             = 'pay_password';
            $password_error_num_filed = 'pay_password_error_num';
            break;
        default :
            return ['status' => false, 'msg' => '非法类型'];
        }
        $user = null;
        if ($by_id == true) {
            $user = User::find($user_name_or_user_id, ['hydrate' => false]);
        } else {
            $user = User::query('SELECT * FROM ' . User::table_name() . ' WHERE user_name = ? OR mobile = ? OR email = ? LIMIT 1', [$user_name_or_user_id, $user_name_or_user_id, $user_name_or_user_id])->fetch();
        }
        if (!$user) {
            return ['status' => false, 'msg' => '用户不存在'];
        }

        $password_error_num = $user[$password_error_num_filed];
        if ($password_error_num >= 20) {
            User::query("UPDATE ".User::table_name()." SET {$password_error_num_filed}={$password_error_num_filed}+1,status=".User::STATUS_ACTIVE." WHERE id = ?",[$user['id']]);
            $this->session->remove('user');
            return ['status' => false, 'msg' => '密码连续错误超过3次,账户已被锁定，请先解锁后再操作！如需帮助可联系客服。'];
        }

        //$check=self::verifyUserPasswordByDatabase($type,$password,$user[$passwordfied]);
        $check['status'] = true;//测试用
        if ($check['status']) {
            User::query("UPDATE ".User::table_name()." SET {$password_error_num_filed}=0 WHERE id = ?",[$user['id']]);

            if ($return_user_object == true) {
                return ['status' => true, 'msg' => '验证通过', 'user_object' => $user];
            }
            return ['status' => true, 'msg' => '验证通过', 'user_object' => []];
        }
        User::query("UPDATE ".User::table_name()." SET {$password_error_num_filed}={$password_error_num_filed}+1 WHERE id = ?",[$user['id']]);

        return ['status' => false, 'msg' => $check['msg']];
    }

    /**
     * 生成用户密码
     */
    public function setUserPassword($password) {
        return password_hash($password,PASSWORD_BCRYPT);
    }

    public function verifyUserPasswordByDatabase($plain_password, $hashed_password) {
        try {
            if (password_verify($plain_password, $hashed_password)) {
                return ['status' => true, 'msg' => '验证通过'];
            }
        } catch (\Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
        return ['status' => false, 'msg' => '密码错误'];
    }

}