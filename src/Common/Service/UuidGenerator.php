<?php
namespace App\Common\Service;

use Psr\Log\LoggerInterface;
use Ramsey\Uuid\Uuid;

class UuidGenerator extends BaseService
{
    public static function newUuid() {
        $uuidv4 = Uuid::uuid4();
        $uuidv5 = Uuid::uuid5($uuidv4, "foxdou");
        return $uuidv5->getHex();
    }
}