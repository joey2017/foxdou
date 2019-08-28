<?php

namespace App\Common\Model;

/**
 *
 * @property integer $id
 * @property string $card
 * @property string $name
 * @property integer $status
 * @property integer $add_time
 * @property integer $edit_time
 */
class Identity extends BaseModel
{

    const ID_TYPE_IDENTITY_CARD = 1; // 身份证
    const ID_TYPE_HK_MACAU_EEP  = 2; // 港澳通行证
    const ID_TYPE_PASSPORT      = 3; // 护照

    static $table_name = 'yzb_idcard';
}
