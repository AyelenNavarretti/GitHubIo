
import java.util.Scanner;

public class BancosyAlumnos {

    static int aulaa113, bancosa113, alumnos, bancos;

    public static void main(String[] args) {
        alumnos();
        bancos();
    }

    public static void alumnos() {
        Scanner teclado = new Scanner(System.in);
        System.out.println("Bienvenidos al aula A113. La capacidad máxima del"
                + " recinto es de 20 alumnos. Esta aula cuenta con 13 bancos "
                + "disponibles. Ingrese cantidad de alumnos inscriptos");
        alumnos = teclado.nextInt();
        aulaa113 = 20;

        if (aulaa113 >= alumnos) {
            System.out.println("El aula A113 llegó a su máxima capacidad.");
        } else {
            System.out.println("El aula A113 excedió su capacidad. Por favor, "
                    + "abrir otra aula.");
        }
    }

    public static void bancos() {
        bancosa113 = 13;
        bancos = (alumnos - bancosa113);
        if (bancosa113 >= alumnos) {
            System.out.println("Los alumnos del aula A113 no necesitan traer bancos.");
        } else {
            System.out.println("Los bancos del aula A113 no alcanzan. Traer " + bancos + " bancos.");
        }
    }
}
