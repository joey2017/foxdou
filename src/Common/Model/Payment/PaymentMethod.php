<?php
namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;
use App\PaymentConstants;

class PaymentMethod extends BaseModel {
    static $table_name = 'yzb_payment_methods';

    const STATUS_DISABLED = 0;
    const STATUS_ENABLED  = 1;

//    /** 根据付款方式、场景等计算实际付款金额，计算正确返回实际付款金额，计算失败返回 false
//     * @param $paymentMethedId int 付款方式
//     * @param $sceneId int 付款场景
//     * @param $sceneId int 付款场景子类型
//     * @param $orderAmount float 订单金额
//     * @return bool|float
//     */
//    public static function calcPaymentAmount($paymentMethedId, $sceneId, $sceneId, $orderAmount) {
//        $poundage = self::calcPoundage($paymentMethedId, $sceneId, $sceneId, $orderAmount);
//        if($poundage === false) {
//            return false;
//        } else {
//            return $orderAmount + $poundage;
//        }
//    }
//
//    public static function getPaymentMethod($paymentMethedId) {
//
//    }

    public function calcPoundage($orderAmount) {
        return self::calcPoundageById($this->id, $this->platform_id, $this->scene_id, $orderAmount);
    }

        /**
     * 计算手续费，计算正确返回手续费金额，计算失败抛出异常
     * @param $classId int 付款方式
     * @param $sceneId int 付款场景
     * @param $sceneId int 付款场景子类型
     * @param $orderAmount float 订单金额
     * @return bool|float
     */
    public static function calcPoundageById($classId, $platformId, $sceneId, $orderAmount) {
        $setting  = PaymentMethodSetting::first(['class_id' => $classId, 'platform_id' => $platformId, 'scene_id' => $sceneId]);
        if (!$setting) {
            $poundageInfo = PaymentConstants::PAYMENT_METHOD_CLASS_INFOS[$classId]['poundage'] ?? null;
            if(!$poundageInfo) {
                return 0;
            }

            $setting = new PaymentMethodSetting();
            $setting->rate               = $poundageInfo['rate'];
            $setting->rate_unit          = $poundageInfo['rate_unit'];
            $setting->if_deduct_poundage = false;
        }

        return $setting->calcPoundage($orderAmount);
    }
}
