<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pago de Salarios</title>
    <style>
        body {
            background-color: #555;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }

        .contenedor {
            width: 600px;
            margin: 0 auto;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            margin-bottom: 10px;
        }

        .imagen {
            background-color: #996600;
            padding: 10px;
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 140px;
            text-align: right;
            margin-right: 10px;
        }

        input, select {
            padding: 5px;
            width: 200px;
            margin-bottom: 10px;
        }

        input[type="submit"], input[type="reset"] {
            width: 100px;
            margin: 10px 5px;
            cursor: pointer;
        }

        .resultado {
            margin-top: 20px;
            background-color: #222;
            padding: 15px;
            border-radius: 8px;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }

        .pie {
            font-size: 0.7em;
            color: #aaa;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>PAGO DE SALARIOS</h2>
    <div class="imagen">
        <img src="https://cdn-icons-png.flaticon.com/512/1040/1040230.png" alt="Pago" width="100">
    </div>

    <form method="post">
        <div>
            <label>Empleado:</label>
            <input type="text" name="empleado" required>
            <?php if (isset($_POST['procesar']) && empty($_POST['empleado'])) echo '<span class="error">Debe registrar el nombre del empleado</span>'; ?>
        </div>

        <div>
            <label>Horas Trabajadas:</label>
            <input type="number" name="horas" min="1" required>
            <?php if (isset($_POST['procesar']) && empty($_POST['horas'])) echo '<span class="error">Debe registrar la cantidad de horas trabajadas</span>'; ?>
        </div>

        <div>
            <label>Categoría:</label>
            <select name="categoria" required>
                <option value="">--Elija una Categoría--</option>
                <option value="jefe">Jefe - $450/h</option>
                <option value="admin">Administrativo - $350/h</option>
                <option value="operador">Operador - $275/h</option>
                <option value="practicante">Practicante - $150/h</option>
            </select>
        </div>

        <div>
            <input type="submit" name="procesar" value="Procesar">
            <input type="reset" value="Limpiar">
        </div>
    </form>

    <?php
    if (isset($_POST['procesar']) && !empty($_POST['empleado']) && !empty($_POST['horas'])) {
        $empleado = $_POST['empleado'];
        $horas = $_POST['horas'];
        $categoria = $_POST['categoria'];
        $pagoHora = 0;

        if ($categoria == "jefe") {
            $pagoHora = 450;
        } elseif ($categoria == "admin") {
            $pagoHora = 350;
        } elseif ($categoria == "operador") {
            $pagoHora = 275;
        } elseif ($categoria == "practicante") {
            $pagoHora = 150;
        }

        $salarioBruto = $horas * $pagoHora;
        $descuento = $salarioBruto * 0.10;
        $salarioNeto = $salarioBruto - $descuento;

        echo "<div class='resultado'>";
        echo "<h3>Resumen del Pago</h3>";
        echo "Empleado: <strong>$empleado</strong><br>";
        echo "Horas Trabajadas: <strong>$horas</strong><br>";
        echo "Salario Bruto: <strong>$$salarioBruto</strong><br>";
        echo "Descuento (10%): <strong>$$descuento</strong><br>";
        echo "Salario Neto: <strong>$$salarioNeto</strong>";
        echo "</div>";
    }
    ?>

    <div class="pie">Todos los Derechos Reservados</div>
</div>

</body>
</html>