# Phpyh Coding Standard

## Installation

```shell
composer require --dev phpyh/coding-standard
```

## Usage with PHP CS Fixer

Update your `.php-cs-fixer.dist.php`:

```php
<?php

use Phpyh\CodingStandard\PhpCsFixerCodingStandard;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    // ...
;

$config = (new PhpCsFixer\Config())
    ->setFinder($finder)
    // ...
;

(new PhpCsFixerCodingStandard())->applyTo($config);

return $config;
```
