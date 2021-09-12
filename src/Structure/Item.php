<?php

namespace Lotriss\RecursiveInherit\Structure;

use JsonSerializable;

class Item implements JsonSerializable
{
    private $id;

    private array $children = [];

    public function __construct($id, array $childrenCollection = [])
    {
        $this->id = $id;
        $this->setChildren($childrenCollection);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function setChildren(array $children): self
    {
        foreach ($children as $child) {
            $this->addChild($child);
        }

        return $this;
    }

    public function addChild(Item $child): self
    {
        $this->children[$child->getId()] = $child;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return ['id' => $this->getId(), 'children' => array_values($this->getChildren())];
    }
}
