<?php

namespace Lotriss\RecursiveInherit;

use Lotriss\RecursiveInherit\DependencyInjection\LotrissRecursiveInheritExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LotrissRecursiveInheritBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new LotrissRecursiveInheritExtension();
        }

        return $this->extension;
    }
}
