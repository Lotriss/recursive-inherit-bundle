<?php

namespace Lotriss\RecursiveInherit\Tests;

use Lotriss\RecursiveInherit\Service\StructureDataHandler;
use Lotriss\RecursiveInherit\Test\LotrissRecursiveInheritTestKernel;
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
    private const SERVICE_MAPPING = [
        'lotriss_recursive_inherit.structure_data_handler' => StructureDataHandler::class,
    ];

    public function testServiceWiring()
    {
        $kernel = new LotrissRecursiveInheritTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        foreach (static::SERVICE_MAPPING as $serviceId => $classType) {
            $service = $container->get($serviceId);
            $this->assertInstanceOf($classType, $service);
        }
    }
}
