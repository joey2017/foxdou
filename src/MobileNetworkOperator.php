<?php
namespace App;

use App\Common\Model\AutoGenerated\mobile_network_operators;

class MobileNetworkOperator extends mobile_network_operators {
    const TYPE_ALL          = 'ALL';
    const TYPE_TOP_OPERATOR = 'NORMAL';
    const TYPE_VIRTUAL      = 'VIRTUAL';

    const MAINTENANCE_STATUSES = [0 => '维护', 1 => '正常'];

    const TOP_OPERATORS = [1 => '移动', 2 => '联通', 3 => '电信'];

    const VIRTUAL_OPERATORS =[
        101 => '阿里通信',
        102 => '中麦通信',
        103 => '迪信通',
        104 => '国美极信',
        105 => '蜗牛移动',
        106 => '爱施德U.友',
        107 => '天音移动',
        108 => '京东通信',
        109 => '苏宁互联',
        110=> '话机通信',
        111=> '分享通信',
        112=> '三五财富卡',
        113=> '蜂巢互联',
        114=> '朗玛移动',
        115=> '用友通信',
        116=> '远特信时空',
        117=> '乐语妙more',
        118=> '长江移动',
        119=> '无限互联',
        120=> '华翔联信',
        121=> '中期移动',
        122=> '酷信170中兴',
        123=> '普泰移动',
        124=> '世纪互联',
        125=> '银盛通信',
        126=> '红豆电信',
        127=> '星美生活',
        128=> '日日顺通信',
        129=> '优酷移动',
        130=> '青牛软件',
        131=> '郑州讯捷',
        132=> '263网络通信',
        133=> '小米移动',
        134=> '民生通讯',
        135=> '海航通信',
        136=> '懂的通信',
        137=> '全民优打',
        138=> '海信通信',
        139=> '网信移动',
        140=> '平安通信',
        141=> '长城移动',
    ];

    public static function getOperatorByName($name){
        foreach (self::VIRTUAL_OPERATORS as $id=> $operatorName){
            if($operatorName === trim($name)){
                return $id;
            }
        }

        return false;
    }

    public static function getOperatorNameById($key){
        if(empty(self::VIRTUAL_OPERATORS[$key])){
            return '';
        }
        return self::VIRTUAL_OPERATORS[$key];
    }

    public static function getOperators($type = self::TYPE_ALL, $keyValueList = false) {
        if($type === self::TYPE_ALL) {
            $operators = array_merge(self::TOP_OPERATORS, self::VIRTUAL_OPERATORS);
        } elseif($type === self::TYPE_TOP_OPERATOR) {
            $operators = self::TOP_OPERATORS;
        } else {
            $operators = self::VIRTUAL_OPERATORS;
        }

        if($keyValueList) {
            foreach ($operators as $id => $name) {
                $operators[$id] = ['id' => $id, 'name' => $name];
            }
        }

        return $operators;
    }
}