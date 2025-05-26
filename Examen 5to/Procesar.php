<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ticket de Entrada</title>
</head>
<body>
  <h2>Fresita Cinema - Ticket</h2>
  <?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $tipo_funcion = $_POST['tipo_funcion'];//lA ETIQUETA POST RECOGE Y GUARDA LOS DATOS DEL USUARIO
    $es_estudiante = isset($_POST['estudiante']);

    // Precios
    switch ($tipo_funcion) {//Ayuda a elegir las opciones
      case '2d': $precio_base = 12; $nombre_funcion = "2D"; break;
      case '3d': $precio_base = 16; $nombre_funcion = "3D"; break;
      case 'imax': $precio_base = 20; $nombre_funcion = "IMAX"; break;
      case 'vip': $precio_base = 25; $nombre_funcion = "Sala VIP"; break;
      default: $precio_base = 0; $nombre_funcion = "Desconocida";
    }

    // Descuento
    $descuento = 0;
    $descripcion = "Sin descuento";

    if ($es_estudiante) {
      $descuento = 0.15;
      $descripcion = "15% Estudiante";
    } elseif ($edad <= 12) {
      $descuento = 0.20;
      $descripcion = "20% Niño";
    } elseif ($edad >= 65) {
      $descuento = 0.25;
      $descripcion = "25% Adulto Mayor";
    }
    $total = $precio_base - ($precio_base * $descuento);
  ?>
  <!-- div es un contenedor -->
  <div style="
  border: 2px dashed black; 
  padding: 20px; 
  width: 300px; 
  background-image: url('ticket2.jpg');
  background-size: cover;
  background-position: center;
  color: yellow;
  text-shadow: 1px 1px 3px black;
">
  <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
  <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
  <p><strong>Función:</strong> <?php echo $nombre_funcion; ?></p>
  <p><strong>Precio Base:</strong> $<?php echo number_format($precio_base, 2); ?></p>
  <p><strong>Descuento Aplicado:</strong> <?php echo $descripcion; ?></p>
  <hr>
  <h3>Total a Pagar: $<?php echo number_format($total, 2); ?></h3>
</div>
</body>
</html>