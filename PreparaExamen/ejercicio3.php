<!--Crear un csv partiendo del mismo array con la siguiente estructura:
PERRO;MAMÍFERO;4;LADRIDO
GATO;MAMÍFERO;4;MAULLIDO
...
Utilizar las funciones fwrite y sprintf-->

<?php
// Tu array original
$animales = array(
    array("PERRO", "MAMÍFERO", 4, "LADRIDO"),
    array("GATO", "MAMÍFERO", 4, "MAULLIDO"),
    // ... Agrega más animales según sea necesario
);

// Nombre del archivo CSV
$nombreArchivo = 'animales.csv';

// Abre el archivo en modo de escritura
$archivo = fopen($nombreArchivo, 'w');

// Itera sobre el array y escribe cada fila en el archivo CSV
foreach ($animales as $animal) {
    // Crea una cadena formateada con los datos del animal
    $linea = sprintf("%s;%s;%d;%s\n", $animal[0], $animal[1], $animal[2], $animal[3]);
    
    // Escribe la línea en el archivo
    fwrite($archivo, $linea);
}

// Cierra el archivo
fclose($archivo);

echo "Archivo CSV creado exitosamente: $nombreArchivo";
?>