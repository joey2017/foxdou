<?php

namespace App\Common\Model;

class ResellerPriceGroup extends BaseModel
{
    static $table_name = 'yzb_agent_users_set_price_group';

    const DEFAULT_YES = 'Y';    // 是
    const DEFAULT_NO  = 'N';    // 否

    const IS_DEFAULT = [
        self::DEFAULT_YES => '是',
        self::DEFAULT_NO  => '否'
    ];


    public static function allGroups($platformId = null, $keyValueList = false) {
        $conditions = $platformId === null ? [] : ['platform_id' => $platformId];
        $rows = self::all($conditions);
        $groups = [];
        foreach ($rows as $row) {
            $name = $row['group_name'];
            if($keyValueList) {
                $groups[] = ['id' => $row['id'], 'name' => $name];
            } else {
                $groups[$row['id']] = $name;
            }
        }

        return $groups;
    }
}
