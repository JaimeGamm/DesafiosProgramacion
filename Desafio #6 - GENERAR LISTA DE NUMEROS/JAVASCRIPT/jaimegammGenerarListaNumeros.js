function filtrarNumeros(lista) {
  var salida = [];
  for (var i = 0; i < lista.length; i++) {
    if (lista[i] % 5 === 0 && lista[i] <= 1000) {
      if (lista[i] > 600) {
        continue;
      } else {
        salida.push(lista[i]);
      }
    } else if (lista[i] > 1000) {
      return salida;
    }
  }
  return salida;
}

// Ejemplo de uso
var entrada = [24, 150, 300, 660, 295, 1050, 50];
var salida = filtrarNumeros(entrada);
console.log(salida); // Salida: [150, 300, 295]
