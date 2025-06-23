<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Calificaciones</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        form, .resultado { max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        .resultado { margin-top: 20px; background-color: #f0fdf4; color: #1a3; }
        input[type=text], select { width: 100%; padding: 8px; margin: 5px 0; }
        input[type=radio] { margin-right: 5px; }
        button { background-color:rgb(204, 95, 73); color: white; padding: 10px; width: 100%; border: none; border-radius: 5px; }
    </style>
</head>
<body>
<div style="text-align:center; margin-bottom: 20px;">
    <img src="logo.jpg" alt="Logo de la Escuela" style="width: 120px;">
</div>

<h2 style="text-align:center">Formulario de Calificaciones</h2>



<form method="POST">
    <label>Nombre del Alumno:</label>
    <input type="text" name="nombre" required>

    <label>Materia:</label>
    <select name="materia" required>
        <option value="">Seleccione una materia</option>
        <option value="Programación">Programación</option>
        <option value="Base de Datos">Base de Datos</option>
        <option value="Redes">Redes</option>
    </select>

    <label>Género:</label><br>
    <input type="radio" name="genero" value="Hombre" required> Hombre
    <input type="radio" name="genero" value="Mujer" required> Mujer

    <br><br>
    <label>Calificaciones:</label>
    <input type="text" name="parcial1" placeholder="1er Parcial" required>
    <input type="text" name="parcial2" placeholder="2do Parcial" required>
    <input type="text" name="parcial3" placeholder="3er Parcial" required>

    <br><br>
    <button type="submit">Calcular Calificación Final</button>
</form>

<?php
// El formulario es enviado con el metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // RECIBE LOS DATOS DEL FORMULARIO
    $nombre = $_POST["nombre"];
    $materia = $_POST["materia"];
    $genero = $_POST["genero"];
    $p1 = $_POST["parcial1"];
    $p2 = $_POST["parcial2"];
    $p3 = $_POST["parcial3"];

    // Calcula el promedio de los 3 parciales
    $promedio = ($p1 + $p2 + $p3) / 3;

    // Determinar el promedio y muestra si el alumno esta reprobado,ordinario o excento.
    if ($promedio <= 69) {
        $estatus = "REPROBADO";
    } elseif ($promedio >= 70 && $promedio <= 95) {
        $estatus = "ORDINARIO";
    } elseif ($promedio >= 96) {
        $estatus = "EXENTO";
    }

    // Muestra al usuario el resultado debajo del formulario
    echo "<div class='resultado'>";
    echo "<h3>Resultado de Evaluación</h3>";
    echo "<strong>Nombre:</strong> $nombre<br>";
    echo "<strong>Género:</strong> $genero<br>";
    echo "<strong>Materia:</strong> $materia<br>";
    echo "<strong>Calificaciones:</strong> $p1, $p2, $p3<br>";
    echo "<strong>Calificación Final:</strong> " . round($promedio, 2) . "<br>";
    echo "<strong>Estado:</strong> <span style='color:green; font-weight:bold;'>$estatus</span>";
    echo "</div>";
}
?>

</body>
</html>

