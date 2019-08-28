<?php

namespace App\Passport\Model;

use App\Common\Model\BaseModel;

class SafeCenter extends BaseModel {

    // 安全问题
    const SAFE_QUESTION_EXAMPLE = [
        1 => '爸爸的名字是?',
        2 => '妈妈的名字是?',
        3 => '大学的名字是?',
        4 => '小学的名字是?',
    ];

    // 认证方式
    public static $verify_identity_way =
        [
            1 =>
                [
                    'name'           => '证件号',
                    'inspect_method' => 'verifyCardId',
                ],
            2 =>
                [
                    'name'           => '手机验证码',
                    'inspect_method' => 'verifyMobile',
                ],
            3 =>
                [
                    'name'           => '支付密码',
                    'inspect_method' => 'verifyPayPassword',
                ],
            4 =>
                [
                    'name'           => '登录密码',
                    'inspect_method' => 'verifyPassword',
                ],
            5 =>
                [
                    'name'           => '邮箱验证码',
                    'inspect_method' => 'verifyEmail',
                ],
            6 =>
                [
                    'name'           => '密保问题',
                    'inspect_method' => 'verifySafeQuestion',
                ],
        ];
    // 组合方式
    public static $operation           = [
        1  => [
            'name'                => '修改手机',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2, 1],//手机+证件号//注意值顺序，先写先验证
                    2 => [5, 1],//邮箱+证件号
                    3 => [2, 'xxx'],//手机+证件号存在就不出现
                    4 => [5, 'xxx'],//邮箱+证件号存在就不出现
                ],
            'operation_do_method' => 'updateMobile',
        ],
        2  => [
            'name'                => '修改邮箱',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2, 1],//证件号+手机
                    2 => [5, 1],//证件号+邮箱
                    3 => [2, 'xxx'],//手机+证件号存在就不出现
                    4 => [5, 'xxx'],//邮箱+证件号存在就不出现
                ],
            'operation_do_method' => 'updateEmail',
        ],
        3  => [
            'name'                => '修改密码',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2, 1],//证件号+手机
                    2 => [5, 1],//证件号+邮箱
                ],
            'operation_do_method' => 'updatePassword',
        ],
        4  => [
            'name'                => '修改支付密码',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2, 1],//证件号+手机
                    2 => [5, 1],//证件号+邮箱
                ],
            'common_view'         => 3,
            'operation_do_method' => 'updatePassword',

        ],
        5  => [
            'name'                => '找回密码',
            'need_login'          => false,
            'verify_way'          =>
                [
                    1 => [2, 1],//证件号+手机
                    2 => [5, 1],//证件号+邮箱
                    3 => [2, 'xxx'],//手机+证件号存在就不出现
                    4 => [5, 'xxx'],//邮箱+证件号存在就不出现
                    //   5=>[3],//邮箱+证件号存在就不出现
                ],
            'common_view'         => 3,
            'operation_do_method' => 'updatePassword',
        ],
        6  => [
            'name'                => '找回支付密码',
            'need_login'          => false,
            'verify_way'          =>
                [
                    1 => [1, 2],//证件号+手机
                    2 => [1, 5],//证件号+邮箱
                ],
            'common_view'         => 3,
            'operation_do_method' => 'updatePassword',
        ],
        7  => [
            'name'                => '绑定邮箱',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2],//手机
                ],
            'common_view'         => 2,
            'operation_do_method' => 'updateEmail',

        ],
        8  => [
            'name'                => '绑定手机',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [5],//邮箱
                ],
            'common_view'         => 1,
            'operation_do_method' => 'updateMobile',

        ],
        9  => [
            'name'                => '解除手机',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2],//手机
                ],
            'operation_do_method' => 'delBind',
        ],
        10 => [
            'name'                => '解除邮箱',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [5],//邮箱
                ],
            'common_view'         => 9,
            'operation_do_method' => 'delBind',
        ],
        11 => [
            'name'                => '设置绑定手机为登录帐号',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2],//手机
                ],
            'common_view'         => 9,
            'operation_do_method' => 'setLoginAccount',
        ],
        12 => [
            'name'                => '设置绑定邮箱为登录帐号',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [5],//邮箱
                ],
            'common_view'         => 9,
            'operation_do_method' => 'setLoginAccount',
        ],
        13 => [
            'name'                => '解除登录密码锁定',
            'need_login'          => false,
            'verify_way'          =>
                [
                    1 => [2, 1],//手机+证件号//注意顺序，先写先验证
                    2 => [5, 1],//邮箱+证件号
                    3 => [2, 'xxx'],//手机+证件号存在就不出现
                    4 => [5, 'xxx'],//邮箱+证件号存在就不出现
                ],
            'common_view'         => 9,
            'operation_do_method' => 'unlockPassword',
        ],
        14 => [
            'name'                => '解除支付密码锁定',
            'need_login'          => false,
            'verify_way'          =>
                [
                    1 => [2, 1],//手机+证件号//注意顺序，先写先验证
                    2 => [5, 1],//邮箱+证件号
                    3 => [2, 'xxx'],//手机+证件号存在就不出现
                    4 => [5, 'xxx'],//邮箱+证件号存在就不出现
                ],
            'common_view'         => 9,
            'operation_do_method' => 'unlockPassword',
        ],
        15 => [
            'name'                => '设置密保问题',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2, 1],//手机+证件号//注意顺序，先写先验证
                    2 => [5, 1],//邮箱+证件号
                    3 => [2, 'xxx'],//手机+证件号存在就不出现
                    4 => [5, 'xxx'],//邮箱+证件号存在就不出现
                ],
            'common_view'         => 15,
            'operation_do_method' => 'updateSafeQuestion',
        ],
        16 => [
            'name'                => '修改密保问题',
            'need_login'          => true,
            'verify_way'          =>
                [
                    1 => [2, 1],//手机+证件号//注意顺序，先写先验证
                    2 => [5, 1],//邮箱+证件号
                    3 => [2, 'xxx'],//手机+证件号存在就不出现
                    4 => [5, 'xxx'],//邮箱+证件号存在就不出现
                ],
            'common_view'         => 15,
            'operation_do_method' => 'updateSafeQuestion',
        ],
    ];

    // 验证码类型
    public static $verify_code_type =
        [
            'edit_pay_password_1'   => ['tid' => 'SMS_38800061', 'email_msg' => '修改支付密码'],
            'edit_login_password_2' => ['tid' => 'SMS_37595173', 'email_msg' => '修改登录密码'],
            'find_login_password_3' => ['tid' => 'SMS_37595179', 'email_msg' => '找回登录密码'],
            'find_pay_password'     => ['tid' => 'SMS_37595179', 'email_msg' => '找回支付密码'],
            'register_user'         => ['tid' => 'SMS_37595175', 'email_msg' => '注册成为狐豆用户'],
            'edit_important_info'   => ['tid' => 'SMS_37595172', 'email_msg' => '执行重要操作']
        ];

    /**
     * 获取验证组合中文名
     */
    public static function get_verify_ways_name($operation_id, $group_id, $joint_mark = '+') {
        $way_name = $way_ids = [];

        foreach ((self::$operation[$operation_id]['verify_way'][$group_id]) as $v) {
            $way_ids[] = $v;
            if (!is_numeric($v)) {
                continue;
            }
            $way_name[] = self::$verify_identity_way[$v]['name'];
        }
        $way_name = implode($joint_mark, $way_name);
        return ['ways_name' => $way_name, 'ways_ids' => $way_ids];
    }
}