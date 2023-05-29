/**
 * La clase Usuario es una clase normal que representa a un usuario de la tienda en línea. Incluye una
 * propiedad estática contadorUsuarios que cuenta el número de usuarios que se han registrado en la
 * tienda.
 */
public class Usuario {

    private String nombre;
    private String email;
    private String password;
    private static int contadorUsuarios=0;

    public Usuario(String nombre, String email, String password) {
        this.nombre = nombre;
        this.email= email;
        this.password = password;
        contadorUsuarios++;
    }

    public static int getContadorUsuarios() {
        return contadorUsuarios;
    }
}
