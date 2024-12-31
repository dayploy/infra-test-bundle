<?php

declare(strict_types=1);

namespace Dayploy\InfraTestBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class InfraTestExtension extends Extension implements PrependExtensionInterface
{
    public function prepend(
        ContainerBuilder $container,
    ): void {
    }

    public function load(
        array $configs,
        ContainerBuilder $container,
    ): void {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
