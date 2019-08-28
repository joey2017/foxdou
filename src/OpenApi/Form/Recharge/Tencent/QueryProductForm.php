<?php
namespace App\OpenApi\Form\Recharge\Tencent;

use App\OpenApi\Form\GenericApiForm;
use Symfony\Component\HttpFoundation\Request;

class QueryProductForm extends GenericApiForm {

    public function getFields(Request $request) {

        // mobile
        // amount
        // speed 充值速度[1：快充(默认)，2：慢充]
        return array_merge(parent::getFields($request), [
            'mobile' => ['required, mobile'],
            'amount' => ['required, numeric'],
            'speed'  => ['enum[1|2]'],
        ]);
    }
}
