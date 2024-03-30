function sumaSerie(numero, terminos) {
  let suma = 0;
  let numRepetido = 0;

  for (let i = 1; i <= terminos; i++) {
    numRepetido = numRepetido * 10 + numero; // Construir el número repetido
    suma += numRepetido; // Sumar el número repetido a la suma total
  }

  return suma;
}

// Ejemplo de uso:
const resultado = sumaSerie(5, 3);
console.log("Salida:", resultado); // Debería imprimir: Salida: 37035
