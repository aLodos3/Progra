<!--EJERCICIO F1
Dado el siguiente array:
$animales = array(
    "perro" => array(
        "tipo" => "mamífero",
        "patas" => 4,
        "sonido" => "ladrido"
    ),
    "gato" => array(
        "tipo" => "mamífero",
        "patas" => 4,
        "sonido" => "maullido"
    ),
    "pájaro" => array(
        "tipo" => "ave",
        "patas" => 2,
        "sonido" => "canto"
    ),
    "serpiente" => array(
        "tipo" => "reptil",
        "patas" => 0,
        "sonido" => "siseo"
    )
);

Se pide:

- Crear un fichero txt en formato de frases de la siguiente forma:
Perro: tipo mamífero, 4 patas, sonido ladrido
Gato: tipo mamífero, 4 patas, sonido maullido
Siendo cada línea un animal.
- Resolver el ejercicio con fwrite-->
<?php
$archivo = fopen("animales.txt", "w");

foreach ($animales as $animal => $propiedades) {
    $tipo = $propiedades["tipo"];
    $patas = $propiedades["patas"];
    $sonido = $propiedades["sonido"];
    
    fwrite($archivo, "$animal: tipo $tipo, $patas patas, sonido $sonido\n");
}

fclose($archivo);
?>