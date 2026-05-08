<?php

if (!function_exists('h')) {
    function h(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('section_config')) {
    function section_config(array $defaults, ?array $overrides = null): array
    {
        if ($overrides === null) {
            return $defaults;
        }

        return array_replace_recursive($defaults, $overrides);
    }
}
