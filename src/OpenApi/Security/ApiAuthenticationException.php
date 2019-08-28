<?php
namespace App\OpenApi\Security;

use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class ApiAuthenticationException extends CustomUserMessageAuthenticationException {
}