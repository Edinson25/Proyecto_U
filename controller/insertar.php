<?php

require "bd.php";


$Id = $_POST['id'];
$Nombre = $_POST['nombre'];
$Fecha = $_POST['fecha'];
$Tipo = $_POST['tipo'];
$Encargado = $_POST['encargado'];

$sql = "INSERT INTO documentos VALUES('$Id','$Nombre',$Fecha,'$Tipo','$Encargado')";
$query = mysqli_query($conexion, $sql);

if ($query) {
    header("Location:../views/crud.php");
}
