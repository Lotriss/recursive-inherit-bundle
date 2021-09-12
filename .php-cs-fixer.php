<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['var', 'vendor', 'src/swagger'])
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(false)
    ->setRules([
        '@Symfony' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => false,
    ])
    ->setFinder($finder)
;

return $config;
