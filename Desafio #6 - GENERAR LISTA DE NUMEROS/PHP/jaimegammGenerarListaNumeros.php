<?php
function filter_numbers(array $input): array {
    $output = [];
    foreach ($input as $number) {
        if ($number % 5 === 0 && $number <= 1000) {
            if ($number > 600) {
                continue;
            }
            $output[] = $number;
        }
        if ($number > 1000) {
            break;
        }
    }
    return $output;
}

// Ejemplo de uso:
$input = [24, 150, 300, 660, 295, 1050, 50];
$output = filter_numbers($input);
print_r($output);
