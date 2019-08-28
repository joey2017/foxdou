<?php
namespace App\OpenApi;

class ApiSystemError {
    use ApiErrorTrait;

    const SUCCEED              = '0';      // 成功

    const GENERIC_ERROR        = '100000'; // 其他系统错误
    const INVALID_PARAMS       = '100001'; // 参数格式错误，请按照开发文档传递正确的参数
    const INVALID_APP          = '100003'; // app不存在或者状态异常，或者所属的用户状态异常
    const INVALID_SIGNATURE    = '100005'; // 错误的签名，请检查签名是否正确
    const BAD_API_REQUEST      = '100007'; // 不存在该方法名（method）
    const API_SUSPENDED        = '100008'; // 抱歉，该接口暂停服务
    const ACCESS_DENIED        = '100009'; // 抱歉，您没有使用这个接口的权限，如需要使用，请先申请
    const THRESHOLD_EXCEED     = '100010'; // 流量超限
    const NOT_IN_WHITE_LIST    = '100011'; // 禁止非白名单IP请求
    const INVALID_SERVICE      = '100012'; // 服务不存在或已停止服务
    const SERVICE_SUSPENDED    = '100013'; // 该服务已暂停使用
    const INVALID_APP_STATUS   = '100014'; // 应用状态异常
    const TOO_MANY_ERRORS      = '100015'; // 30分钟内请求失败次数过多（30次），请30分钟后再试
    const APP_EXPIRED          = '100016'; // 应用已到期，请续费后再操作
    const RATE_LIMIT_EXCEED    = '100017'; // 请求频率超限
    const API_METHOD_ERROR     = '100018'; // 系统方法method异常
    const TIMESTAMP_EXPIRED    = '100019'; // 该请求已过期
    const DUPLICATED_REQUEST   = '100020'; // 请求重复
    const DEBUG_REQUEST_EXCEED = '100021'; // 调试次数达上限(50次|天)
    const INSUFFICIENT_BALANCE = '100022'; // APP余额或者账户余额不足
    // '100051' => '缺少必要参数',
    // '100052' => '参数取值范围不合法

    const ERROR_CODES = [
        self::SUCCEED              => '操作成功',

        self::GENERIC_ERROR        => '系统错误',
        self::INVALID_PARAMS       => '参数格式错误，请按照开发文档传递正确的参数',
        self::INVALID_APP          => 'app状态异常',
        self::INVALID_SIGNATURE    => '错误的签名，请检查签名是否正确',
        self::BAD_API_REQUEST      => '不存在该方法名（method）', //
        self::API_SUSPENDED        => '抱歉，该接口暂停服务',
        self::ACCESS_DENIED        => '抱歉，您没有使用这个接口的权限',
        self::THRESHOLD_EXCEED     => '流量超限',
        self::NOT_IN_WHITE_LIST    => '禁止非白名单IP请求',
        self::INVALID_SERVICE      => '服务不存在或已停止服务',
        self::SERVICE_SUSPENDED    => '该服务已暂停使用',
        self::INVALID_APP_STATUS   => '应用状态异常',
        self::TOO_MANY_ERRORS      => '30分钟内请求失败次数过多（30次），请30分钟后再试',
        self::APP_EXPIRED          => '应用已到期，请续费后再操作',
        self::RATE_LIMIT_EXCEED    => '请求频率超限',
        self::API_METHOD_ERROR     => 'API请求失败',
        self::TIMESTAMP_EXPIRED    => '该请求已过期',
        self::DUPLICATED_REQUEST   => '请求重复',
        self::DEBUG_REQUEST_EXCEED => '调试次数达上限(50次|天)',
        self::INSUFFICIENT_BALANCE => 'APP余额或者账户余额不足',
    ];
}
