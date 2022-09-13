<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@Symfony' => true,
    'array_syntax' => ['syntax' => 'short'],
    'phpdoc_var_annotation_correct_order' => true,
    'return_assignment' => true,
    'phpdoc_summary' => false,
    'protected_to_private' => false,
    'single_line_throw' => false,
    'class_definition' => [
        'inline_constructor_arguments' => false,
        'multi_line_extends_each_single_line' => true,
    ],
    'concat_space' => [
        'spacing' => 'one',
    ],
    'operator_linebreak' => [
        'position' => 'beginning',
    ],
    'ordered_imports' => [
        'imports_order' => [
            'const',
            'class',
            'function',
        ],
    ],
    'align_multiline_comment' => true,
    'array_indentation' => true,
    'declare_strict_types' => true,
    'method_chaining_indentation' => true,
    'no_unreachable_default_argument_value' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ;
