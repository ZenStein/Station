<?php
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('data')
    ->notName('autoload_classmap.php')
    ->notName('autoload_function.php')
    ->notName('LICENSE')
    ->notName('*.md')
    ->notName('.php_cs')
    ->notName('composer.*')
    ->notName('*.js')
    ->notName('*.css')
    ->notName('*.scss')
    ->notName('*.ico')
    ->notName('*.phar')
    ->notName('*.png')
    ->notName('*.jpg')
    ->notName('*.gif')
    ->notName('*.xml')
    ->notName('*.txt')
    ->notName('*.swf')
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::NONE_LEVEL)
    ->fixers([
        'psr0',
        'encoding',
        'short_tag',
        'braces',
        'elseif',
        'eof_ending',
        'function_call_space',
        'function_declaration',
        'indentation',
        'line_after_namespace',
        'linefeed',
        'lowercase_constants',
        'lowercase_keywords',
        'method_arugument_space',
        'multiple_use',
        'parenthesis',
        'php_closing_tag',
        'trailing_spaces',
        'visibility',
        'align_equals',
        'concat_with_spaces'
    ])
    ->finder($finder)
;
