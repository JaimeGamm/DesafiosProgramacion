def entero_a_romano(numero):
    if numero <= 0:
        raise ValueError("El número debe ser mayor que 0")

    valores = [
        1000, 900, 500, 400,
        100, 90, 50, 40,
        10, 9, 5, 4,
        1
    ]
    simbolos = [
        "M", "CM", "D", "CD",
        "C", "XC", "L", "XL",
        "X", "IX", "V", "IV",
        "I"
    ]

    resultado = ""
    i = 0

    while numero > 0:
        if numero >= valores[i]:
            resultado += simbolos[i]
            numero -= valores[i]
        else:
            i += 1

    return resultado

while True:
    try:
        numero_entero = int(input("Ingrese un número entero (o ingrese 0 para salir): "))
        if numero_entero == 0:
            break
        resultado_romano = entero_a_romano(numero_entero)
        print(f"La representación romana de {numero_entero} es: {resultado_romano}")
    except ValueError as e:
        print(e)
