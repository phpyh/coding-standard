<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PHPyh\CodingStandard\PhpCsFixerCodingStandard;

$finder = Finder::create()
    ->in([
        __DIR__ . '/src',
    ])
    ->append([
        __FILE__,
    ]);

$config = (new Config())
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/var/.php-cs-fixer.cache');

(new PhpCsFixerCodingStandard())->applyTo($config);

return $config;
