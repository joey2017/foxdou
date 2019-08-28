<?php
namespace App\Common\Service;

use SimpleRecord\ConnectionManager;
use Symfony\Contracts\Service\ResetInterface;

class SimpleRecordResetter implements ResetInterface {
    public function __construct() {
        $a=1;
    }

    public function reset() {
        ConnectionManager::drop_all_connections();
    }
}