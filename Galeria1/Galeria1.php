<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fresita Store</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-image: url('fondo.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            color: rgb(244, 82, 82);
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .galeria {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .galeria img {
            width: 300px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.3s;
        }

        .galeria img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="galeria">
        <a href="Galeria1.php?Fresita=Fresita1.jpg">
            <img src="Fresita1.jpg" alt="Imagen 1">
        </a>
        <a href="Galeria.php?Fresita=Fresitas2.jpg">
            <img src="Fresitas2.jpg" alt="Imagen 2">
        </a>
        <a href="Galeria.php?Fresita=Fresita3.jpg">
            <img src="Fresita3.jpg" alt="Imagen 3">
        </a>
    </div>

</body>
</html>
