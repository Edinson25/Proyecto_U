<?php

require "bd.php";
$correo= $_GET['e'];
$contraseña = $_POST['Contraseña'];
      

if (isset($contraseña) && !empty($contraseña)) {
     
      $dato =  mysqli_query($conexion, "UPDATE usuarios SET contraseña=md5('$contraseña') WHERE email = '".$correo."'");

      header("Location: ../views/contra-update.php");
       
} else {
      header("Location: ../views/update-password.php");
      echo "<script> alert('Error!! No se han podido ingresar datos a  la base de datos') </script>";
}


?>