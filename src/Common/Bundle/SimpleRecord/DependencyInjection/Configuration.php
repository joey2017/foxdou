<?php
namespace App\Common\Bundle\SimpleRecord\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('simple_record');

        $rootNode
            ->children()
            ->scalarNode('db_url')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
