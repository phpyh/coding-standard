# Phpyh Coding Standard For PHP CS Fixer

## Usage

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