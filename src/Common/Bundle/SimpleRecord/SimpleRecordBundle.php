<?php
namespace App\Common\Bundle\SimpleRecord;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bundle.
 *
 * @author LiangYi nxwd@edge.ac
 */
class SimpleRecordBundle extends Bundle
{
    public function boot()
    {
        \SimpleRecord\Config::initialize(function($cfg) {
//            db.url: "mysql://dev:devdev@192.168.1.11/foxdou_dev?charset=utf8mb4"

            $db = $this->container->getParameter('db');
            $conn = $db['master'];
            $dbUrl = "mysql://{$conn['user']}:{$conn['password']}@{$conn['host']}/{$conn['dbname']}?charset={$conn['charset']}";

            $cfg->set_connections(['default' => $dbUrl]);
            $cfg->set_default_connection('default');
        });
    }
}
