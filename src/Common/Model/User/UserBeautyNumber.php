<?php
namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

class UserBeautyNumber extends BaseModel {

    public static $status = ['0' => '未注册', '1' => '已注册'];

    const TYPE_GENERAL  = 1;    // 普通注册
    const TYPE_FREE     = 2;      // 免费靓号
    const TYPE_CHARGED  = 3;   // 收费靓号
    const TYPE_RESERVED = 4;   // 未开放号码

    const TYPES = [
        self::TYPE_GENERAL  => '普通注册',
        self::TYPE_FREE     => '免费靓号',
        self::TYPE_CHARGED  => '收费靓号',
        self::TYPE_RESERVED => '未开放号码',
    ];

    const TARGET_INDIVIDUAL     = 1;   // 个人
    const TARGET_SMALL_BUSINESS = 2;   // 个体户
    const TARGET_ENTERPRISE     = 3;   //企业

    const TARGETS = [
        self::TARGET_INDIVIDUAL     => '个人',
        self::TARGET_SMALL_BUSINESS => '个体户',
        self::TARGET_ENTERPRISE     => '企业',
    ];

    // 账号状态
    const STATUS_AVAILABLE = '0';    // 未注册
    const STATUS_USED      = '1';      // 已注册

    const STATUSES = [
        self::STATUS_AVAILABLE => '未注册',
        self::STATUS_USED      => '已注册',
    ];


    /**
     * 查询获取一个号码
     * @param $userType
     */
    public static function findAvailableNumber($userType){
        $conditions = ['status'=>self::STATUS_AVAILABLE, 'price'=>0,'type'=>self::TYPE_GENERAL,'user_type'=>$userType];
        $number = UserBeautyNumber::first($conditions);
        return $number;
    }

    /**
     * 真正发放号码
     * @param $userType
     */
    public function issueToUser($userId, $throwExceptionOnFailure = true){
        $rowCount = static::update_all(['status' => self::STATUS_USED, 'reg_time' => time()], ['id' => $this->id, 'status' => $this->status]);
        $succeed = $rowCount !== 1;

        if(!$succeed && $throwExceptionOnFailure) {
            throw new \RuntimeException('给用户分配号码失败');
        }

        return $succeed;
    }

}
