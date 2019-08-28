<?php
namespace App\Common\Model\Payment;

use App\Common\Model\BaseModel;

class ThirdPartyPayLog extends BaseModel {
    static $table_name = 'yzb_third_party_pay_log';

    const PAY_STATUS_UNPAID = 0;
    const PAY_STATUS_PAID   = 1;
}
