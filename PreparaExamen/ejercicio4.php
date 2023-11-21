<!--Se pide hacer lo mismo que el F3 pero con funciones propias para escribir cvs (trabajo de investigación)-->
<?php
// Tu array original
$animales = array(
    array("PERRO", "MAMÍFERO", 4, "LADRIDO"),
    array("GATO", "MAMÍFERO", 4, "MAULLIDO"),
    // ... Agrega más animales según sea necesario
);

// Nombre del archivo CSV
$nombreArchivo = 'animales.csv';

// Función para escribir una fila en el archivo CSV
function escribirFilaCSV($archivo, $datos) {
    $linea = sprintf("%s;%s;%d;%s\n", $datos[0], $datos[1], $datos[2], $datos[3]);
    fwrite($archivo, $linea);
}

// Función para crear el archivo CSV y escribir los datos
function crearArchivoCSV($nombreArchivo, $datos) {
    $archivo = fopen($nombreArchivo, 'w');
    
    // Encabezado opcional si lo necesitas
    // escribirFilaCSV($archivo, array("Nombre", "Tipo", "Patas", "Sonido"));

    foreach ($datos as $animal) {
        escribirFilaCSV($archivo, $animal);
    }

    fclose($archivo);
    echo "Archivo CSV creado exitosamente: $nombreArchivo";
}

// Llamada a la función para crear el archivo CSV
crearArchivoCSV($nombreArchivo, $animales);
?>