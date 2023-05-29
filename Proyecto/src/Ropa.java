/**
 * La clase Ropa tiene propiedades de talla y descuento.
 * Las clases Electronica y Ropa son clases normales que extienden de Producto y proporcionan su
 * propia implementación del método calcularDescuento() para ofrecer descuentos específicos para
 * cada tipo de producto.
 */
public class Ropa extends Producto{

    public Ropa(String nombre, String descripcion, double precio) {
        super(nombre, descripcion, precio);
    }

    @Override
    public double calcularDescuento() {
        return 0;
    }
}
