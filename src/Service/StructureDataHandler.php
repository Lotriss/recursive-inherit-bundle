<?php

namespace Lotriss\RecursiveInherit\Service;

use Lotriss\RecursiveInherit\Structure\Item;

class StructureDataHandler
{
    /**
     * @return Item[]
     */
    public function buildStructure(array $structureMap): array
    {
        return $this->build($structureMap);
    }

    private function build(array $structureMap, $searchValue = null): array
    {
        $itemsToReturn = [];
        $items = array_keys($structureMap, $searchValue, true);
        foreach ($items as $itemId) {
            $itemsToReturn[] = new Item($itemId, $this->build($structureMap, $itemId));
        }

        return $itemsToReturn;
    }
}
