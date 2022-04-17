<?php

require "bd.php";

$email = $_POST['email22'];
      
// echo ($email);

if (isset($email) && !empty($email)) {
     
  $dato =  mysqli_query($conexion, "SELECT email FROM usuarios WHERE email = '".$email."'");

  $dato_repetido = mysqli_num_rows($dato);

      if($dato_repetido==0){

            header("Location: ../views/olvidar-contra.php?message=errorEmail1");

      }else{
            
        header("Location: ../views/update-password.php?e=$email");
    //   $dato =  mysqli_query($conexion, "UPDATE usuarios SET contraseña='$contraseña1' WHERE email = '".$email."'");

    //   echo "<script> document.location.href = \"../../CORREO/Password/send-email.php?email=$email&contra=$contraseña\" </script>";
      // echo "<script> document.location.href = \"../../views/verify-password.php?email=$email&contra=$contraseña\" </script>";
      }   
} else {

      echo "<script> alert('Error!! No se han podido ingresar datos a  la base de datos') </script>";
}


?>