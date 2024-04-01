<?php
function sumaSerieRepetida($numero, $terminos) {
    $suma = 0;
    $valor = 0;

    for ($i = 1; $i <= $terminos; $i++) {
        $valor = $valor * 10 + $numero; // Construir el número repetido
        $suma += $valor; // Sumar el número repetido a la suma total
    }

    return $suma;
}

// Ejemplo de uso
$numero = 3;
$terminos = 5;
echo "La suma de la serie repetida es: " . sumaSerieRepetida($numero, $terminos);
