<?php
namespace App\Common\Exception;

use Throwable;

class InvalidFormException extends \Exception {

    /**
     * @var array
     */
    private $errors;

    public function __construct(string $message = "", array $errors = [], Throwable $previous = null) {
        parent::__construct($message, 0, $previous);
        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function getErrors(): array {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors): void {
        $this->errors = $errors;
    }
}