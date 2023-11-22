# PHPyh Coding Standard

[![Latest Stable Version](https://poser.pugx.org/phpyh/coding-standard/v/stable.png)](https://packagist.org/packages/phpyh/coding-standard)
[![Total Downloads](https://poser.pugx.org/phpyh/coding-standard/downloads.png)](https://packagist.org/packages/phpyh/coding-standard)
[![psalm-level](https://shepherd.dev/github/phpyh/coding-standard/level.svg)](https://shepherd.dev/github/phpyh/coding-standard)
[![type-coverage](https://shepherd.dev/github/phpyh/coding-standard/coverage.svg)](https://shepherd.dev/github/phpyh/coding-standard)

## Installation

```shell
composer require --dev phpyh/coding-standard
```

## Usage with PHP CS Fixer

Update your `.php-cs-fixer.dist.php`:

```php
<?php

use PHPyh\CodingStandard\PhpCsFixerCodingStandard;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    // ...
;

$config = (new PhpCsFixer\Config())
    ->setFinder($finder)
    // ...
;

(new PhpCsFixerCodingStandard())->applyTo($config, [
    // overriding rules
]);

return $config;
```
