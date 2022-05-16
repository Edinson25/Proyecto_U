<?php

require "bd.php";

$Id = $_GET['id'];

$sql = "DELETE FROM documentos WHERE id='$Id'";
$query = mysqli_query($conexion, $sql);

if ($query) {
    header("Location:../views/crud.php");
}
