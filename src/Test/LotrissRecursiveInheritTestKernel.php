<?php

namespace Lotriss\RecursiveInherit\Test;

use Lotriss\RecursiveInherit\LotrissRecursiveInheritBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * @codeCoverageIgnore
 */
class LotrissRecursiveInheritTestKernel extends Kernel
{
    public function registerBundles(): array
    {
        return [
            new LotrissRecursiveInheritBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }
}
