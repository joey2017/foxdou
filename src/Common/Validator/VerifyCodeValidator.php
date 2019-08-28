<?php
namespace App\Common\Validator;

use App\Common\Service\SmsService;
use Lianz\SimpleFormBundle\Validation\Validators\BaseValidator;
use Symfu\SimpleValidation\ValidatorInterface;

class VerifyCodeValidator implements ValidatorInterface {
    /**
     * @var SmsService
     */
    private $smsService;

    public function __construct(SmsService $smsService) {
        $this->smsService = $smsService;
    }

    public function validate($value, $argument = null, $fieldName = null, $formValues = []) {
        $valid = $this->smsService->verifySmsCode($value, $errorMessage);
        return [$valid, $errorMessage];
    }

    public function toJQueryValidateRule($argument) {
        // TODO: Implement toJQueryValidateRule() method.
    }
}
