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
        $rootNode = $treeBuilder->root('cl_doc_data_order_api');

        $rootNode
            ->children()
                ->scalarNode('merchant_name')->isRequired()->end()
                ->scalarNode('merchant_password')->isRequired()->end()
                ->booleanNode('test')->defaultFalse()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
