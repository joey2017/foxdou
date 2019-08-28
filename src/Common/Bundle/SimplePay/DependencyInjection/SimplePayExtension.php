<?php
namespace App\Common\Bundle\SimplePay\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SimplePayExtension extends Extension
{
    public function getConfiguration(array $config, ContainerBuilder $container)
    {
        return new Configuration();
    }

    public function load(array $configs, ContainerBuilder $container) {
//        $config = $this->processConfiguration($this->getConfiguration($configs, $container), $configs);
//
//        $config = $container->getParameter('simple_pay');
//
//        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
//        $loader->load('services.yaml');
//
//        if(isset($config['alipay'])) {
//            $alipayServiceDef = $container->getDefinition('simple_pay.alipay');
//            $alipayServiceDef->setArgument(0, $config);
//        }
//
//        if(isset($config['wechat'])) {
//            $wechatServiceDef = $container->getDefinition('simple_pay.wechat');
//            $wechatServiceDef->setArgument(0, $config);
//        }

    }
}