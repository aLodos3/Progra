<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .titulo{
            background-color: greenyellow;
            border-radius: 10px;
            width: 100%;
            font-size: 30px;
            text-align: center;
            position: fixed;
            top: 0px;
        }
        legend{
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="titulo">Ejercicios de preparacion para Exámen</div>

    <br><br>

    <fieldset>
        <legend>Ejercicio 1: Sistema de Búsqueda de Pacientes en un Centro de Salud</legend>
            <p>Introduce el nombre o número de historial del paciente para buscar</p>
            <form action="resultadosHistorial.php" method="POST">
                <label for="nombre">Nombre del paciente:</label>
                <input type="text" name="nombre" id="nombre">
                
                <label for="historial">Número de historial médico:</label>
                <input type="text" name="historial" id="historial">
                
                <button type="submit">Buscar</button>
            </form>
    </fieldset>

    <br><br>

    <fieldset>
        <legend>Ejercicio 2: Horarios de Clase</legend>
            <!--Crea un sistema para registrar los horarios de clases de un grupo de estudiantes. Utiliza un array bidimensional 
            donde las filas representan los días de la semana y las columnas representan las horas. Muestra el horario semanal de clases.-->
    </fieldset>

    <br><br>

    <fieldset>
        <legend>Ejercicio 3: Registro de Libros de Texto</legend>
        <!--Crea un sistema que almacene una lista de libros de texto por materia. Utiliza un array bidimensional donde las 
        filas representan las materias y las columnas representan los libros de texto. Muestra la lista de libros de texto por materia.-->
    </fieldset>

    <br><br>

    <fieldset>
        <legend>Ejercicio 4</legend>

    </fieldset>

    <br><br>

    <fieldset>
        <legend>Ejercicio 5</legend>

    </fieldset>

    <br><br>

    <fieldset>
        <legend>Ejercicio 6</legend>

    </fieldset>

    <br><br>

    <fieldset>
        <legend>Ejercicio 7</legend>

    </fieldset>

    <br><br>

    <fieldset>
        <legend>Ejercicio 8</legend>

    </fieldset>
    <br><br>
</body>
</html>