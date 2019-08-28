<?php
namespace App\Common\Bundle\SimplePay\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $treeBuilder
            ->root('simple_pay')
//            ->children()
//                ->arrayNode('alipay')
//                    ->prototype('array')->end()
//                ->end()
//                ->arrayNode('wechat')
//                    ->prototype('array')->end()
//                ->end()
            ->end();

        return $treeBuilder;
    }
}
