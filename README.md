# Recursive / Inherit Bundle
[![Build Status](https://app.travis-ci.com/Lotriss/recursive-inherit-bundle.svg?branch=main)](https://app.travis-ci.com/Lotriss/recursive-inherit-bundle)

## Requirements

|   Name  	| Version 	|
|:-------:	|:-------:	|
|   PHP   	|  \>=8.0  	|
| Symfony 	|  \>=5.0  	|

## Installation

```console
composer require lotriss/recursive-inherit-bundle
```

## Usage

To build nested structure you need structure array where itemId is in array keys and parentId is in value. For root item value is **NULL** For example:

```php
<?php
use Lotriss\RecursiveInherit\Service\StructureDataHandler;

$structureMap = [
    'parent_1' => null, //Root element
    'child_1' => 'parent_1', // Child that is under parent_1 node
    'child_parent_2' => 'parent_1', //Another child that is under parent_1 node 
    'child_3' => 'child_parent_2', // Child that is under child_parent_2 which is under parent_1 node
];

$structureMapHandler = new StructureDataHandler();
$builtStructure = $structureMapHandler->buildStructure($structureMap); 
```

You can define more than one root element by adding element with **NULL** value.

```php
$structureMap['parent_2'] = null;
$structureMap['child_for_parent_2'] = 'parent_2';
```

## Running tests

To run tests you can use `./run-tests.sh` or docker based environment by running `./run-tests-docker.sh`

In `build/coverage-html` you can find test coverage for this bundle after test run.
