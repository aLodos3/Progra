<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de Búsqueda - Centro de Salud</title>
</head>
<body>
    <h1>Resultados de Búsqueda - Centro de Salud</h1>
    
    <?php
    include 'pacientes.php';

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $historial = isset($_POST['historial']) ? $_POST['historial'] : "";

    if (empty($nombre) && empty($historial)) {
        echo "<p>No has introducido ningún valor. <a href='buscarPacientes.php'>Volver a buscar</a></p>";
    } else {
        foreach ($pacientes as $numHistorial => $infoPaciente) {
            if ((empty($nombre) || stripos($infoPaciente['nombre'], $nombre) !== false) &&
                (empty($historial) || stripos($numHistorial, $historial) !== false)) {
                echo "<p><strong>Nombre:</strong> {$infoPaciente['nombre']}, <br> <strong>Edad:</strong> {$infoPaciente['edad']}, <br> <strong>Historial:</strong> {$infoPaciente['historial']}</p>";
            }
        }
    }
    ?>
</body>
</html>