<?php

function intToRoman($num) {
    // Definir los valores y símbolos de los números romanos
    $valores = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    
    $resultado = '';
    
    // Iterar a través de los valores y construir el número romano
    foreach ($valores as $simbolo => $valor) {
        while ($num >= $valor) {
            $resultado .= $simbolo;
            $num -= $valor;
        }
    }
    
    return $resultado;
}

// Ejemplo de uso
$num = 58;
echo intToRoman($num); // Salida: "LVIII"
?>
