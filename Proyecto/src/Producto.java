/**
 * La clase Producto es una clase abstracta que define los atributos básicos de cualquier producto
 * (nombre, descripción y precio), así como un método abstracto calcularDescuento() que debe ser
 * implementado por cualquier subclase para determinar el descuento aplicable al producto.
 */
public abstract class Producto {

    private String nombre;
    private String descripcion;
    private double precio;

    public Producto(String nombre, String descripcion, double precio) {
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.precio = precio;
    }

    public abstract double calcularDescuento();
}
