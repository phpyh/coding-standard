<?php

declare(strict_types=1);

namespace Phpyh\CodingStandard;

use PhpCsFixer\ConfigInterface;

final class PhpCsFixerCodingStandard
{
    public function applyTo(ConfigInterface $config): void
    {
        $config
            ->setRiskyAllowed(true)
            ->setRules([
                '@PHP80Migration:risky' => true,
                '@PHP81Migration' => true,
                '@PhpCsFixer' => true,
                '@PhpCsFixer:risky' => true,
                '@PHPUnit84Migration:risky' => true,
                '@PSR12' => true,
                '@PSR12:risky' => true,
                'blank_line_before_statement' => ['statements' => [
                    'continue',
                    'declare',
                    'default',
                    'return',
                    'throw',
                    'try',
                    'while',
                ]],
                'blank_line_between_import_groups' => false,
                'braces' => [
                    'allow_single_line_anonymous_class_with_empty_body' => true,
                    'allow_single_line_closure' => true,
                ],
                'date_time_immutable' => true,
                'final_class' => true,
                'final_public_method_for_abstract_class' => true,
                'global_namespace_import' => [
                    'import_constants' => false,
                    'import_functions' => false,
                    'import_classes' => false,
                ],
                'method_chaining_indentation' => false,
                'no_break_comment' => false,
                'no_superfluous_phpdoc_tags' => ['remove_inheritdoc' => true],
                'no_trailing_whitespace_in_string' => false,
                'nullable_type_declaration_for_default_null_value' => true,
                'ordered_class_elements' => ['order' => [
                    'use_trait',
                    'case',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public_static',
                    'property_protected_static',
                    'property_private_static',
                    'property_public',
                    'property_protected',
                    'property_private',
                    'construct',
                    'destruct',
                    'phpunit',
                    'method_public_static',
                    'method_public_abstract_static',
                    'method_protected_static',
                    'method_protected_abstract_static',
                    'method_private_static',
                    'method_public',
                    'method_public_abstract',
                    'method_protected',
                    'method_protected_abstract',
                    'method_private',
                ]],
                'ordered_imports' => ['imports_order' => ['class', 'function', 'const']],
                'php_unit_strict' => false,
                'phpdoc_add_missing_param_annotation' => false,
                'phpdoc_align' => false,
                'phpdoc_separation' => false,
                'phpdoc_to_comment' => false,
                'phpdoc_types_order' => false,
                'return_assignment' => false,
                'single_line_comment_style' => ['comment_types' => ['hash']],
                'trailing_comma_in_multiline' => ['after_heredoc' => true, 'elements' => ['arrays', 'arguments', 'parameters']],
                'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
            ])
        ;
    }
}
