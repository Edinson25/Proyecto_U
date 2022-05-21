<?php
$archivo = scandir("../Controlador/Rut/Documentos_Rut");
$nombre_archivo = '$archivo';
if (file_exists($nombre_archivo)) {
    echo "La última modificación de $nombre_archivo fue: " . date ("d  F  Y.", filemtime($nombre_archivo));
}

?>