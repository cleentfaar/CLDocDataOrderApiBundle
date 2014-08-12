<?php

namespace CL\Bundle\DocDataOrderApiBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class CLDocDataOrderApiExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $this->setParameters($container, $config);
    }

    /**
     * @param ContainerBuilder $container
     * @param string[]         $config
     */
    protected function setParameters(ContainerBuilder $container, array $config)
    {
        $container->setParameter('cl_doc_data_order_api.merchant_name', $config['merchant_name']);
        $container->setParameter('cl_doc_data_order_api.merchant_password', $config['merchant_password']);
        $container->setParameter('cl_doc_data_order_api.test', $config['test']);
    }
}
