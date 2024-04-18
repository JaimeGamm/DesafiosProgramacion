def es_palindromo(numero):
    
    str_numero = str(numero)
    if(str_numero == str_numero[::-1]):

        print(f" El {numero} es un palíndromo")

    else:

         print(f"  El {numero} no es un palíndromo")

es_palindromo("233322")  
es_palindromo("212")  