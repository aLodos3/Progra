import java.util.Scanner;
public class Test {
    public class Main {
        public static void main(String[] args) {
            Scanner scanner = new Scanner(System.in);
            Tienda tienda = new Tienda();

            int opcion;
            do {
                System.out.println("----- MENÚ -----");
                System.out.println("1. Registrar usuario");
                System.out.println("2. Agregar producto");
                System.out.println("3. Realizar pedido");
                System.out.println("4. Salir");
                System.out.print("Ingrese una opción: ");
                opcion = scanner.nextInt();

                switch (opcion) {
                    case 1:
                        registrarUsuario(scanner, tienda);
                        break;
                    case 2:
                        agregarProducto(scanner, tienda);
                        break;
                    case 3:
                        realizarPedido(scanner, tienda);
                        break;
                    case 4:
                        System.out.println("¡Hasta luego!");
                        break;
                    default:
                        System.out.println("Opción inválida. Por favor, intente nuevamente.");
                        break;
                }
            } while (opcion != 4);
        }

        private static void registrarUsuario(Scanner scanner, Tienda tienda) {
            System.out.print("Ingrese el nombre del usuario: ");
            String nombre = scanner.next();
            System.out.print("Ingrese el correo electrónico del usuario: ");
            String correo = scanner.next();
            System.out.print("Ingrese la dirección del usuario: ");
            String direccion = scanner.next();

            Usuario usuario = new Usuario(nombre, correo, direccion);
            tienda.agregarUsuario(usuario);

            System.out.println("Usuario registrado exitosamente.");
        }

        private static void agregarProducto(Scanner scanner, Tienda tienda) {
            System.out.print("Ingrese el nombre del producto: ");
            String nombre = scanner.next();
            System.out.print("Ingrese la descripción del producto: ");
            String descripcion = scanner.next();
            System.out.print("Ingrese el precio del producto: ");
            double precio = scanner.nextDouble();

            Producto producto = new Producto(nombre, descripcion, precio) {
                @Override
                public double calcularDescuento() {
                    return 0;
                }
            };
            tienda.agregarProducto(producto);

            System.out.println("Producto agregado exitosamente.");
        }

        private static void realizarPedido(Scanner scanner, Tienda tienda) {
            // Aquí puedes implementar la lógica para realizar un pedido
            System.out.println("Realizando pedido...");
        }
    }
}
