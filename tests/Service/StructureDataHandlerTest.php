<?php

namespace Lotriss\RecursiveInherit\Tests\Service;

use Lotriss\RecursiveInherit\Service\StructureDataHandler;
use Lotriss\RecursiveInherit\Structure\Item;
use PHPUnit\Framework\TestCase;

class StructureDataHandlerTest extends TestCase
{
    /**
     * @dataProvider structureProvider
     *
     * @param Item[] $expectedOutput
     */
    public function testCreateStructure(array $insertStructure, array $expectedOutput): void
    {
        $structureDataHandler = new StructureDataHandler();
        $result = $structureDataHandler->buildStructure($insertStructure);
        $this->assertEquals(json_encode($expectedOutput), json_encode($result));
    }

    public function structureProvider(): array
    {
        return [
            [
                ['parent_1' => null, 'children_1' => 'parent_1', 'children_parent_2' => 'parent_1', 'children_3' => 'children_parent_2', 'children_4' => 'children_parent_2'],
                [
                    new Item(
                        'parent_1',
                        [
                            new Item('children_1'),
                            new Item('children_parent_2', [new Item('children_3'), new Item('children_4')]),
                        ]
                    ),
                ],
            ],
        ];
    }
}
