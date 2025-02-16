# Frank Verhoeven Coding Standard

Set of PHP CS Fixer rules.

## Install
Install the package with composer:
```bash
composer require frankverhoeven/coding-standard --dev
```

## Configure
Include the rules in your [.php-cs-fixer.dist.php](.php-cs-fixer.dist.php) configuration:
```php
<?php
declare(strict_types=1);

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__)
;

return (new PhpCsFixer\Config())
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules(require __DIR__ . '/vendor/frankverhoeven/coding-standard/rules.php')
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '.php_cs.cache')
    ;
```
