<?php
namespace App\Common\Bundle\SimplePay\Factory;

use App\Common\Bundle\SimplePay\AdapterInterface\PaymentAdapterInterface;
use App\Common\Bundle\SimplePay\Service\AlipayService;
use App\Common\Bundle\SimplePay\Service\WechatService;
use Http\Client\HttpClient;
use Psr\Log\LoggerInterface;
use Yansongda\Supports\Config;
use Yansongda\Supports\Log;

class PaymentGatewayFactory {
    const GATEWAY_ALIPAY = 'alipay';
    const GATEWAY_WECHAT = 'wechat';

    public static function create(LoggerInterface $logger, string $gateway, array $config): PaymentAdapterInterface {
        if ($gateway === self::GATEWAY_ALIPAY && isset($config[$gateway])) {
            $gatewayConfig = new Config($config[$gateway]);
            self::registerLog($gatewayConfig);
            $adapter = new AlipayService($logger, $gatewayConfig);

            return $adapter;
        } elseif ($gateway === self::GATEWAY_WECHAT && isset($config[$gateway])) {
            $gatewayConfig = new Config($config[$gateway]);
            self::registerLog($gatewayConfig);
            $adapter = new WechatService($logger, $gatewayConfig);

            return $adapter;
        } else {
            throw new \InvalidArgumentException("未知的支付方式：{$gateway}");
        }
    }


    /**
     * Register log service.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @throws \Exception
     */
    protected function registerLog(Config $config) {
        $logger = Log::createLogger(
            $config->get('log.file'),
            'simple_pay',
            $config->get('log.level', 'warning'),
            $config->get('log.type', 'daily'),
            $config->get('log.max_file', 30)
        );

        Log::setLogger($logger);
    }
}
