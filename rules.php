<?php
declare(strict_types=1);

return [
    '@PHP80Migration:risky' => true,
    '@PHP81Migration' => true,
    '@PSR12' => true,
    '@PSR12:risky' => true,
    '@Symfony' => true,
    '@Symfony:risky' => true,
    'blank_line_after_opening_tag' => false,
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'compact_nullable_type_declaration' => true,
    'concat_space' => ['spacing' => 'one'],
    'global_namespace_import' => [
        'import_classes' => false,
        'import_constants' => false,
        'import_functions' => false,
    ],
    'heredoc_indentation' => ['indentation' => 'same_as_start'],
    'increment_style' => ['style' => 'post'],
    'list_syntax' => ['syntax' => 'short'],
    'mb_str_functions' => true,
    'native_function_invocation' => [
        'exclude' => [],
        'include' => ['@all'],
        'scope' => 'all',
    ],
    'no_useless_else' => true,
    'no_useless_return' => true,
    'nullable_type_declaration' => ['syntax' => 'union'],
    'nullable_type_declaration_for_default_null_value' => true,
    'phpdoc_order' => true,
    'phpdoc_summary' => false,
    'phpdoc_to_comment' => ['ignored_tags' => ['var', 'phpstan-var']],
    'single_line_throw' => false,
    'static_lambda' => true,
    'strict_comparison' => true,
    'strict_param' => true,
    'trailing_comma_in_multiline' => [
        'after_heredoc' => true,
        'elements' => ['arguments', 'array_destructuring', 'arrays', 'match', 'parameters'],
    ],
    'types_spaces' => [
        'space_multiple_catch' => 'single',
    ],
];
