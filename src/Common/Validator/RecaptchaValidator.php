<?php
namespace App\Common\Validator;

use App\Common\Service\RecaptchaService;
use Lianz\SimpleFormBundle\Validation\Validators\BaseValidator;
use Symfu\SimpleValidation\ValidatorInterface;

class RecaptchaValidator implements ValidatorInterface {
    /**
     * @var RecaptchaService
     */
    private $recaptchaService;

    public function __construct(RecaptchaService $smsService) {
        $this->recaptchaService = $smsService;
    }

    public function validate($value, $argument = null, $fieldName = null, $formValues = []) {
        $valid = $this->recaptchaService->verifyRecaptcha($value, '_default');
        return [$valid, '验证码错误'];
    }

    public function toJQueryValidateRule($argument) {
        // TODO: Implement toJQueryValidateRule() method.
    }
}
