<!--Se pide crear un formulario para subir un csv cualquiera que al enviarlo cree otro
 csv con el mismo nombre añadiendo _nuevo a su nombre (es decir, que si se llamaba nombres.csv,
el nuevo que se generará se llamará nombres_nuevo.csv)y lo guardará en la carpeta mis_ficheros de nuestro proyecto.
Este nuevo csv quitará las filas duplicadas, dejando la más reciente.
Se considerará una fila está duplicada si existe al menos otra fila cuya primera columna tiene el mismo valor.-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar CSV</title>
</head>
<body>
    <h2>Subir CSV y Procesar</h2>
    
    <form action="procesar_csv.php" method="post" enctype="multipart/form-data">
        <label for="csvFile">Seleccionar archivo CSV:</label>
        <input type="file" id="csvFile" name="csvFile" accept=".csv" required>
        <button type="submit">Procesar CSV</button>
    </form>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Carpeta donde se guardarán los archivos
    $carpetaDestino = 'mis_ficheros/';

    // Obtener la información del archivo subido
    $nombreArchivo = $_FILES["csvFile"]["name"];
    $archivoTmp = $_FILES["csvFile"]["tmp_name"];

    // Validar que sea un archivo CSV
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    if (strtolower($extension) !== 'csv') {
        die("Error: El archivo debe tener extensión CSV.");
    }

    // Crear un nombre para el nuevo archivo con _nuevo
    $nuevoNombreArchivo = pathinfo($nombreArchivo, PATHINFO_FILENAME) . '_nuevo.csv';

    // Ruta completa del nuevo archivo
    $rutaNuevoArchivo = $carpetaDestino . $nuevoNombreArchivo;

    // Mover el archivo subido a la carpeta destino
    move_uploaded_file($archivoTmp, $carpetaDestino . $nombreArchivo);

    // Leer el archivo CSV
    $contenidoCSV = array_map('str_getcsv', file($carpetaDestino . $nombreArchivo));

    // Eliminar filas duplicadas, conservando la más reciente
    $sinDuplicados = array();
    foreach ($contenidoCSV as $fila) {
        $sinDuplicados[$fila[0]] = $fila;
    }

    // Abrir el nuevo archivo en modo de escritura
    $archivoNuevo = fopen($rutaNuevoArchivo, 'w');

    // Escribir las filas sin duplicados en el nuevo archivo
    foreach ($sinDuplicados as $fila) {
        fputcsv($archivoNuevo, $fila);
    }

    // Cerrar el nuevo archivo
    fclose($archivoNuevo);

    echo "Proceso completado. Nuevo archivo CSV creado: $nuevoNombreArchivo";
} else {
    // Redirigir al formulario si no se accede mediante POST
    header("Location: index.html");
}
?>