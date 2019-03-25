<?php
return PhpCsFixer\Config::create()
  ->setIndent("  ")
  ->setRules([
    'elseif' => true,
    'array_syntax' => [
      'syntax' => 'short'
    ],
    'braces' => [
      'allow_single_line_closure' => true, 
      'position_after_functions_and_oop_constructs' => 'same'
    ],
    'method_separation' => true,
    'whitespace_after_comma_in_array' => true,
    'no_unused_imports' => true,
    
  ])
;
