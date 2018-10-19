<?php

namespace Krak\MoneyNormalizer\Bridge\Symfony\DependencyInjection;

use Krak\MoneyNormalizer\MoneyDenormalizer;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class MoneyNormalizerExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container) {
        $container->register(MoneyDenormalizer::class)->addTag('serializer.normalizer');
    }
}
