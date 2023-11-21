<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $idProvincia = $_POST["provincia"];

    // Validar que los valores son correctos
    if (empty($nombre) || empty($apellido) || empty($idProvincia)) {
        die("Error: Todos los campos son obligatorios.");
    }

    // Crear una cadena con el formato nombre;apellido;id_provincia
    $nuevaEntrada = "$nombre;$apellido;$idProvincia\n";

    // Abrir el archivo usuarios.csv en modo de escritura
    $archivoUsuarios = fopen('usuarios.csv', 'a');

    // Escribir la nueva entrada en el archivo
    fwrite($archivoUsuarios, $nuevaEntrada);

    // Cerrar el archivo
    fclose($archivoUsuarios);

    echo "Usuario agregado correctamente.";
} else {
    // Redirigir al formulario si no se accede mediante POST
    header("Location: index.html");
}
?>