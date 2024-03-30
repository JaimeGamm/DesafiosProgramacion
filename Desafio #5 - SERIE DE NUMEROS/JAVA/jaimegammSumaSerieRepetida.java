public class jaimegammSumaSerieRepetida {
    public static int calcularSuma(int numero, int terminos) {
        int suma = 0;
        int terminoActual = 0;
        
        
        for (int i = 0; i < terminos; i++) {
            terminoActual = terminoActual * 10 + numero; // Construye el término actual
            suma += terminoActual; // Agrega el término actual a la suma
        }
        
        return suma;
    }

    public static void main(String[] args) {
        int numero = 5;
        int terminos = 3;
        int resultado = calcularSuma(numero, terminos);
        System.out.println("La suma de la serie es: " + resultado);
    }
}
