<?php
namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

class UserService extends BaseModel {
    static $table_name = 'yzb_user_service';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'service_id', 'limit_app_num', 'status', 'add_time'], 'integer'],
            [['service_id'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'ID',
            'user_id'       => '用户的服务状态（1正常，0暂停）',
            'service_id'    => 'Service ID',
            'limit_app_num' => '用户最多可申请应用的数量',
            'status'        => '用户服务的使用状态，1正常，0暂停',
            'add_time'      => 'Add Time',
        ];
    }
}
