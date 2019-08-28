<?php
namespace App\Common\Service\Cache;

use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\RedisAdapter;

class AppCacheRedis extends RedisAdapter
{

}