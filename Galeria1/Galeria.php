<?php
if (isset($_GET['Fresita'])) {
    $archivo = basename($_GET['Fresita']);
    $ruta = $archivo; // Las imágenes están en la misma carpeta

    if (file_exists($ruta)) {
        header("Content-Type: image/jpeg");
        readfile($ruta);
    } else {
        echo "El archivo no se encontró.";
    }
} else {
    echo "No se especificó ninguna imagen.";
}
?>



