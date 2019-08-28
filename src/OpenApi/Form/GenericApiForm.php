<?php
namespace App\OpenApi\Form;

use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

class GenericApiForm extends Form {
    public function getFields(Request $request) {
        return [
            'app_id'     => ['required, integer, min[1]'],
            'method'     => ['required'],
            'timestamp'  => ['required'],
            'request_id' => ['required'],
            'format'     => ['required, enum[json]'],
            'version'    => ['enum[1.0|2.0]'],
            'sign'       => ['required, regex[/[0-9a-f]+/i]'],
        ];
    }
}
