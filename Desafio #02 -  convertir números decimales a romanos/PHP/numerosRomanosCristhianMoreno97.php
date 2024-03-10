<?php

define('ROMAN_SYMBOLS', array(
    ['I' => 1],
    ['V' => 5],
    ['X' => 10],
    ['L' => 50],
    ['C' => 100],
    ['D' => 500],
    ['M' => 1000],
));

function get_nearest_type1_roman($index)
{
    if ($index == 0) return ROMAN_SYMBOLS[0];
    return $index % 2 == 0 ? ROMAN_SYMBOLS[$index - 2] : ROMAN_SYMBOLS[$index - 1];
}

function get_nearest_roman($index)
{
    if ($index == 0) return ROMAN_SYMBOLS[0];
    return ROMAN_SYMBOLS[$index - 1];
}

function get_roman_number($decimalNumber)
{
    if (gettype($decimalNumber) !== 'integer') {
        throw new InvalidArgumentException('El argumento debe ser entero');
    }

    $romanNumber = '';
    for ($i = 0; $i < count(ROMAN_SYMBOLS); $i++) {
        if ($decimalNumber == 0) break;

        $currentSymbol = array_keys(ROMAN_SYMBOLS[$i])[0];
        $currentValue = array_values(ROMAN_SYMBOLS[$i])[0];

        $nearestType1Obj = get_nearest_type1_roman($i);
        $nearestType1Symbol = array_keys($nearestType1Obj)[0];
        $nearestType1Value = array_values($nearestType1Obj)[0];

        $nearestObj = get_nearest_roman(($i));
        $nearestSymbol = array_keys($nearestObj)[0];
        $nearestValue = array_values($nearestObj)[0];

        if ($decimalNumber >= $currentValue) {
            continue;
        }

        if ($currentValue - $nearestType1Value > $decimalNumber) {
            $romanNumber .= $nearestSymbol;
            $decimalNumber -= $nearestValue;
        } else {
            $romanNumber .= $nearestType1Symbol . $currentSymbol;
            $decimalNumber -= ($currentValue - $nearestType1Value);
        }
        $i = 0;
    }
    return $romanNumber;
}

$numbers = [9, 31, 45, 880, 890, 900];
foreach ($numbers as $number) {
    echo $number . ': ' . get_roman_number($number) . "\n";
}