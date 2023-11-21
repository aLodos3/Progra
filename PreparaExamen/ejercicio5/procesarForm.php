<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre de usuario del formulario
    $nombreUsuario = $_POST["usuario"];

    // Validar que el nombre de usuario solo contiene letras y números
    if (!preg_match('/^[A-Za-z0-9]+$/', $nombreUsuario)) {
        die("Error: El nombre de usuario debe contener solo letras y números.");
    }

    // Obtener la fecha actual
    $fechaActual = date("d/m/Y H:i:s");

    // Concatenar la entrada en un formato deseado
    $entrada = "$fechaActual;$nombreUsuario\n";

    // Abrir el archivo en modo de escritura
    $archivo = fopen("registro_entrada.txt", "a");

    // Escribir la entrada en el archivo
    fwrite($archivo, $entrada);

    // Cerrar el archivo
    fclose($archivo);
}

// Redirigir de nuevo al formulario
header("Location: index.html");
?>