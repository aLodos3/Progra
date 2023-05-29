/**
 * La clase Electronica tiene una propiedad de descuento.
 * Las clases Electronica y Ropa son clases normales que extienden de Producto y proporcionan su
 * propia implementación del método calcularDescuento() para ofrecer descuentos específicos para
 * cada tipo de producto.
 */
public class Electronica extends Producto{

    public Electronica(String nombre, String descripcion, double precio) {
        super(nombre, descripcion, precio);
    }

    @Override
    public double calcularDescuento() {
        return 0;
    }
}
