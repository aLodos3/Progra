<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Entrada</title>
</head>
<body>
    <h2>Registro de Entrada</h2>
    
    <form action="procesar_formulario.php" method="post">
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" id="usuario" name="usuario" pattern="[A-Za-z0-9]+" required>
        <button type="submit">Registrar Entrada</button>
    </form>
    
    <h3>Registros Actuales:</h3>
    <pre>
        <?php include 'mostrar_registros.php'; ?>
    </pre>
</body>
</html>