<?php

namespace CL\Bundle\DocDataOrderApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cl_docdata_orderapi');

        $rootNode
            ->children()
                ->scalarNode('merchant_username')->isRequired()->end()
                ->scalarNode('merchant_password')->isRequired()->end()
                ->booleanNode('test')->defaultFalse()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
