def es_palindromo(numero):
    # Convierte el número a cadena para facilitar la manipulación de caracteres

    str_numero = str(numero)
    if(str_numero == str_numero[::-1]):

        print(f" El {numero} es un palíndromo")

    else:

         print(f" El {numero} no es un palíndromo")

es_palindromo("23322")  
es_palindromo("212")  