<?php

// Mostrar los registros actuales en el formulario
$archivo = fopen("registro_entrada.txt", "r");

if ($archivo) {
    while (($linea = fgets($archivo)) !== false) {
        echo $linea;
    }

    // Cerrar el archivo
    fclose($archivo);
} else {
    echo "No se pudo abrir el archivo de registros.";
}

?>