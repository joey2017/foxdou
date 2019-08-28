<?php
namespace App\Common\Bundle\SimpleRecord\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SimpleRecordExtension extends Extension
{
    // ...

    public function getConfiguration(array $config, ContainerBuilder $container)
    {
        return new Configuration();
    }

    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container) {
        $usedEnvs = null;
        $config = $configs[0];
//        $resolved = $container->resolveEnvPlaceholders($config["db_url"], 'string', $usedEnvs);
//        $url = $configs["db_url"];
//        $configuration = $this->getConfiguration($configs, $container);
//        $config        = $this->processConfiguration($configuration, $configs);
        return $config;
    }
}