<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tablas de Multiplicar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      margin: 0;
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .contenedor {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .formulario {
      background: white;
      padding: 15px;
      width: 300px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h3 {
      text-align: center;
      margin-bottom: 10px;
      color: #333;
    }

    input[type="number"], button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color:rgb(136, 217, 244);
      color: white;
      border: none;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color:rgb(102, 216, 233);
    }

    .resultado {
      margin-top: 15px;
      background:rgb(109, 182, 189);
      padding: 10px;
      border-radius: 5px;
      font-family: monospace;
    }
  </style>
</head>
<body>

  <h2>Tablas de Multiplicar (PHP)</h2>

  <div class="contenedor">
    <!-- FOR -->
    <div class="formulario">
      <h3>Tabla con FOR</h3>
      <form method="post">
        <input type="number" name="numero_for" placeholder="Número" required>
        <button type="submit">Generar con FOR</button>
      </form>

      <?php
      if (isset($_POST['numero_for'])) {
          $num = intval($_POST['numero_for']);
          echo "<div class='resultado'>";
          for ($i = 1; $i <= 10; $i++) {
              echo "$i x $num = " . ($i * $num) . "<br>";
          }
          echo "</div>";
      }
      ?>
    </div>

    <!-- WHILE -->
    <div class="formulario">
      <h3>Tabla con WHILE</h3>
      <form method="post">
        <input type="number" name="numero_while" placeholder="Número" required>
        <button type="submit">Generar con WHILE</button>
      </form>

      <?php
      if (isset($_POST['numero_while'])) {
          $num = intval($_POST['numero_while']);
          $i = 1;
          echo "<div class='resultado'>";
          while ($i <= 10) {
              echo "$i x $num = " . ($i * $num) . "<br>";
              $i++;
          }
          echo "</div>";
      }
      ?>
    </div>

    <!-- DO WHILE -->
    <div class="formulario">
      <h3>Tabla con DO WHILE</h3>
      <form method="post">
        <input type="number" name="numero_do" placeholder="Número" required>
        <button type="submit">Generar con DO WHILE</button>
      </form>

      <?php
      if (isset($_POST['numero_do'])) {
          $num = intval($_POST['numero_do']);
          $i = 1;
          echo "<div class='resultado'>";
          do {
              echo "$i x $num = " . ($i * $num) . "<br>";
              $i++;
          } while ($i <= 10);
          echo "</div>";
      }
      ?>
    </div>
  </div>

</body>
</html>