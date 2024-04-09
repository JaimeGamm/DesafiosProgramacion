import java.util.ArrayList;
import java.util.List;

public class Main {
    public static List<Integer> procesarLista(List<Integer> numeros) {
        List<Integer> salida = new ArrayList<>();
        for (int num : numeros) {
            if (num > 1000) {
                return salida;
            }
            if (num % 5 == 0 && num <= 600) {
                salida.add(num);
            }
        }
        return salida;
    }

    public static void main(String[] args) {
        List<Integer> entrada = new ArrayList<>();
        entrada.add(24);
        entrada.add(150);
        entrada.add(300);
        entrada.add(660);
        entrada.add(295);
        entrada.add(1050);
        entrada.add(50);

        List<Integer> salida = procesarLista(entrada);
        System.out.println(salida); // Output: [150, 300, 295]
    }
}
