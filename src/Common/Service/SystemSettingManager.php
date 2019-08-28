<?php
namespace App\Common\Service;


use App\Common\Model\SystemSettingItem;
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;

class SystemSettingManager extends BaseService {

    /**
     * @var CacheInterface
     */
    private $cache;

    public function __construct(LoggerInterface $logger, CacheInterface $cache) {
        parent::__construct($logger);
        $this->cache = $cache;
    }

    protected $settings = null;

    public function get($key, $default = null) {
        if($this->settings === null) {
            $items = SystemSettingItem::all();
            foreach ($items as $item) {
                $this->settings[$item['name']] = $item['val'];
            }
        }

        return $this->settings[$key] ?? $default;
    }

    public function getInt($key, $default = 0) {
        return (int)$this->get($key, $default);
    }

    public function getBool($key, $default = false) {
        return (bool)$this->get($key, $default);
    }

    public function invalidateCache() {
        $this->settings = null;
    }

}