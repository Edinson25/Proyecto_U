<?php
require "bd.php";
$sql="SELECT * FROM documentos";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);


