<?php
namespace App\OpenApi\Form\Recharge\Mobile;

use App\OpenApi\Form\GenericApiForm;
use Symfony\Component\HttpFoundation\Request;

class BalanceQueryForm extends GenericApiForm {

    public function getFields(Request $request) {
        return array_merge(parent::getFields($request), [
            'mobile' => ['required, mobile'],
        ]);
    }
}
