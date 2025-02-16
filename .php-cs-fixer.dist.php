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
    ->setRules(require __DIR__ . '/rules.php')
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/.php_cs.cache')
    ;
