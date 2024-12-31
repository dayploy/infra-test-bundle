<?php

namespace Dayploy\InfraTestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(
    ): TreeBuilder {
        $treeBuilder = new TreeBuilder('infra_test');

        return $treeBuilder;
    }
}
