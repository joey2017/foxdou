<?php

namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;
use App\PaymentConstants;

class PaymentMethodSetting extends BaseModel {
    static $table_name = 'yzb_payment_method_settings';

    public function calcPoundage($orderAmount) {
        if ($this->if_deduct_poundage === PaymentConstants::POUNDAGE_DEDUCT_NO) {
            return 0;
        } elseif ($this->rate_unit === PaymentConstants::RATE_UNIT_VALUE_IF_EXCEED || $this->rate_unit === PaymentConstants::RATE_UNIT_VALUE_IF_EXCEED) {
            $rate     = self::calcManJianRate($this->overflow, $orderAmount);
            $rateUnit = $this->rate_unit;
        } else {
            $rate     = $this->rate;
            $rateUnit = $this->rate_unit;
        }

        $poundage = 0;
        if ($rateUnit === PaymentConstants::RATE_UNIT_EXTRA_PERCENTAGE) { //百分比
            $poundage = $rate * $orderAmount;
        } elseif ($rateUnit === PaymentConstants::RATE_UNIT_EXTRA_VALUE) { //元
            $poundage = $rate;
        } elseif ($rateUnit === PaymentConstants::RATE_UNIT_VALUE_IF_EXCEED) {//满扣百分比
            $poundage = $orderAmount * $rate;
        } elseif ($rateUnit === PaymentConstants::RATE_UNIT_VALUE_IF_EXCEED) {//满扣元
            $poundage = $rate;
        }

        $poundage = (float)number_format($poundage, 2);

        return $poundage;
    }


    private static function calcManJianRate($overflow, $orderAmount) {
        $overflow = @json_decode($overflow, true);
        $overflow = self::my_array_multisort($overflow, 'manyuan');
        if (!$overflow) {
            throw new \RuntimeException("计算订单满减失败：没有配置满减信息");
        }

        $rate = 0;
        foreach ($overflow as $v) {
            if ($orderAmount > $v['manyuan']) {
                $rate = $v['rate'];
            }
        }

        return $rate;
    }

    private static function my_array_multisort($data, $sort_order_field, $sort_order = SORT_ASC, $sort_type = SORT_NUMERIC) {
        if (!$data) {
            return false;
        }
        foreach ($data as $val) {
            $key_arrays[] = $val[$sort_order_field];
        }
        array_multisort($key_arrays, $sort_order, $sort_type, $data);

        return $data;
    }

}
