<?php

require "bd.php";

$Id = $_POST['id'];
$Nombre = $_POST['nombre'];
$Fecha = $_POST['fecha'];
$Encargado = $_POST['encargado'];

$sql = "UPDATE documentos SET nombre='$Nombre', fecha=$Fecha, encargado='$Encargado' WHERE id='$Id' ";
$query = mysqli_query($conexion, $sql);

if ($query) {
    header("Location:../views/crud.php");
}