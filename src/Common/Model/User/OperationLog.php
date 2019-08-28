<?php
namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

class OperationLog extends BaseModel {

    static $table_name = 'yzb_user_operation_log';

    // 类型
    const OPERATION_CREATE            = 'CREATE';
    const OPERATION_EDIT              = 'EDIT';
    const OPERATION_DELETE            = 'DELETE';
    const OPERATION_UNDELETE          = 'UNDELETE';
    const OPERATION_ADMIN_LOGIN       = 'LOGIN';
    const OPERATION_SET_SUCCESS       = 'SET_SUCCESS';
    const OPERATION_SET_FAIL          = 'SET_FAIL';
    const OPERATION_SETTLEMENT        = 'SETTLEMENT';
    const OPERATION_RECHARGE          = 'RECHARGE';
    const OPERATION_RECHARGE_AGAIN    = 'RECHARGE_AGAIN';
    const OPERATION_REVIEW            = 'REVIEW';
    const OPERATION_SUSPICIOUS_ACTION = 'SUSPICIOUS_ACTION';
    const OPERATION_ENABLE            = 'ENABLE';
    const OPERATION_DISABLE           = 'DISABLE';
    const OPERATION_UPPER             = 'UPPER';
    const OPERATION_LOWER             = 'LOWER';
    const OPERATION_REMOVE            = 'REMOVE';
    const OPERATION_SYNCDOWN          = 'SYNCDOWN';
    const OPERATION_WITHDRAW          = 'WITHDRAW';
    const OPERATION_BIND              = 'BIND';
    const OPERATION_UNBIND            = 'UNBIND';
    const OPERATION_SETTING           = 'SETTING';

    const OPERATIONS = [
        self::OPERATION_CREATE            => '新增',
        self::OPERATION_EDIT              => '编辑',
        self::OPERATION_DELETE            => '删除',
        self::OPERATION_UNDELETE          => '恢复',
        self::OPERATION_ADMIN_LOGIN       => '登录',
        self::OPERATION_SET_SUCCESS       => '置成功',
        self::OPERATION_SET_FAIL          => '置失败',
        self::OPERATION_SETTLEMENT        => '结算',
        self::OPERATION_RECHARGE          => '充值',
        self::OPERATION_RECHARGE_AGAIN    => '重新充值',
        self::OPERATION_REVIEW            => '审核',
        self::OPERATION_SUSPICIOUS_ACTION => '可疑操作',
        self::OPERATION_ENABLE            => '启用',
        self::OPERATION_DISABLE           => '停用',
        self::OPERATION_UPPER             => '上架',
        self::OPERATION_LOWER             => '下架',
        self::OPERATION_REMOVE            => '移除',
        self::OPERATION_SYNCDOWN          => '向下同步比例',
        self::OPERATION_WITHDRAW          => '提现',
        self::OPERATION_BIND              => '绑定',
        self::OPERATION_UNBIND            => '解除绑定',
        self::OPERATION_SETTING           => '设置',
    ];

    const SUBJECT_DASHBOARD = 'DASHBOARD';
    const SUBJECT_USER      = 'USER';
    const SUBJECT_ORDER     = 'ORDER';
    const SUBJECT_SUPPLY    = 'SUPPLY';
    const SUBJECT_PRODUCT   = 'PRODUCT';
    const SUBJECT_ADUIT     = 'ADUIT';
    const SUBJECT_FINANCE   = 'FINANCE';

    const SUBJECT_TYPES = [
        self::SUBJECT_DASHBOARD => '面板',
        self::SUBJECT_USER      => '员工',
        self::SUBJECT_ORDER     => '订单',
        self::SUBJECT_SUPPLY    => '供货',
        self::SUBJECT_PRODUCT   => '商品',
        self::SUBJECT_ADUIT     => '审核',
        self::SUBJECT_FINANCE   => '财务'
    ];
}
