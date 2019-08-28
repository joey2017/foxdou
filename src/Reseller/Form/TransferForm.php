<?php
namespace App\Reseller\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class TransferForm extends Form {

    protected function getFields(Request $request) {
        return [
            'recipient_id'   => ['required, min_length[2], max_length[20], regex[/^[a-z0-9_-]+$/]'],
            'recipient_name' => ['required, min_length[2], max_length[20]'],
            'amount'         => ['required, decimal, min[0.01], max[10000]'],
            'amount_confirm' => ['matches[amount]'],
            'pay_password'   => ['required'],
            'note'           => [''],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'reseller_transfer';
    }
}