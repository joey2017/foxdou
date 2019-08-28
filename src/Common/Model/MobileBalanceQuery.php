<?php
namespace App\Common\Model;

class MobileBalanceQuery extends BaseModel {

    static $table_name = 'yzb_mobile_balance_query_log';

    // 状态
    const STATUS_FAIL    = '0';
    const STATUS_SUCCESS = '1';
    const STATUSES       = [
        self::STATUS_FAIL    => '失败',
        self::STATUS_SUCCESS => '成功',
    ];
}