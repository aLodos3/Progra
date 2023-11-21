<?php

// Ruta al archivo CSV de provincias
$rutaProvincias = 'provincias_espana.csv';

// Leer el archivo CSV de provincias
$provincias = array_map('str_getcsv', file($rutaProvincias));

// Crear las opciones del selector dinámicamente
foreach ($provincias as $provincia) {
    echo "<option value=\"{$provincia[0]}\">{$provincia[1]}</option>";
}

?>