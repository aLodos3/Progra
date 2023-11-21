<!--Dado el csv de provincias de España:
Provincias de España
Se pide crear un formulario que pida un nombre, apellido y un selector de provincia 
(por defecto que no se seleccione ninguna) que se generará dinámicamente en base al csv anterior.
EL formulario tendrá un botón de añadir que al pulsarlo se enviará a sí mismo y:
- Comprobará que los valores están correctos
- Si no lo están mostrará un mensaje de error 
- Si es correcto, agregará el usuario al csv usuarios.csv con el formato nombre;apellido;id_provincia-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
</head>
<body>
    <h2>Formulario de Usuario</h2>
    
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="provincia">Provincia:</label>
        <select id="provincia" name="provincia">
            <option value="" disabled selected>Selecciona una provincia</option>
            <?php include 'cargar_provincias.php'; ?>
        </select><br>

        <button type="submit">Añadir Usuario</button>
    </form>
</body>
</html>