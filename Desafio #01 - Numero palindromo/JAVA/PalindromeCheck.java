public class PalindromeCheck {

    public static boolean isPalindrome(int x) {
        // Convierte el número a una cadena de caracteres
        String str = String.valueOf(x);
        
        // Utiliza dos índices para comparar los caracteres desde el principio y el final
        int i = 0;
        int j = str.length() - 1;
        
        while (i < j) {
            // Si los caracteres en los índices i y j no son iguales, no es un palíndromo
            if (str.charAt(i) != str.charAt(j)) {
                return false;
            }
            
            // Incrementa el índice i y decrementa el índice j para comparar los siguientes caracteres
            i++;
            j--;
        }
        
        // Si llega hasta aquí, significa que todos los caracteres coincidieron, es un palíndromo
        return true;
    }

    public static void main(String[] args) {
        // Prueba la función con un ejemplo
        int numero = 121;
        System.out.println("¿El número " + numero + " es un palíndromo? " + isPalindrome(numero));
    }
}
