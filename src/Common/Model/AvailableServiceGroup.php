<?php

namespace App\Common\Model;

class AvailableServiceGroup extends BaseModel
{
    static $table_name = 'yzb_agent_users_available_service_group';

    const DEFAULT_YES = 'Y';    // 是
    const DEFAULT_NO  = 'N';    // 否

    const IS_DEFAULT = [
        self::DEFAULT_YES => '是',
        self::DEFAULT_NO  => '否'
    ];
}
