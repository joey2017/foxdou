<?php
namespace App\OpenApi\Form\Recharge\Tencent;

use App\OpenApi\Form\GenericApiForm;
use Symfony\Component\HttpFoundation\Request;

class RechargeForm extends GenericApiForm {
    public function getFields(Request $request) {
        return array_merge(parent::getFields($request), [
            'outer_sn'   => ['required'],
            'amount'     => ['required, numeric'],
            'mobile'     => ['required, mobile'],
            'product_id' => ['integer'],
        ]);
    }
}
