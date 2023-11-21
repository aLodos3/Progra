<!--EJERCICIO F2
- Resolver el mismo ejercicio con file_put_contents
<?php
$frases = array();

foreach ($animales as $animal => $propiedades) {
    $tipo = $propiedades["tipo"];
    $patas = $propiedades["patas"];
    $sonido = $propiedades["sonido"];
    
    $frase = "$animal: tipo $tipo, $patas patas, sonido $sonido";
    $frases[] = $frase;
}

$contenido = implode("\n", $frases);
file_put_contents("animales.txt", $contenido);
?>