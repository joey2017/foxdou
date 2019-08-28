<?php
namespace App\Common\ExternalService\Exception;

use Throwable;

class ExternalServiceException extends \RuntimeException {

    /**
     * @var mixed
     */
    private $response;

    public function __construct(string $message = "", $response = null, Throwable $previous = null) {
        parent::__construct($message, 0, $previous);
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response): void {
        $this->response = $response;
    }
}
