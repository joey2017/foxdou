<?php
namespace App\Common\Bundle\SimplePay\Service;

use App\Common\Bundle\SimplePay\AdapterInterface\PaymentAdapterInterface;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\HttpClient;
use Psr\Log\LoggerInterface;
use Yansongda\Pay\Gateways\Wechat;
use Yansongda\Supports\Config;

class WechatService extends Wechat implements PaymentAdapterInterface  {
    /** @var LoggerInterface */
    protected $logger;

    /**
     * AlipayService constructor.
     * @param HttpClient $client
     * @param Config $config
     */
    public function __construct(LoggerInterface $logger, Config $config) {
        parent::__construct($config);

        $this->logger     = $logger;
    }

    public function getName() {
        return "WECHAT";
    }

    function queryTransactions(array $params) {
        // TODO: Implement query() method.
    }
}