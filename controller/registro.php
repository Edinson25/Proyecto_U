<?php
 require "bd.php";

    $nombre = $_POST['Name'];
    $email = $_POST['Email'];
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];


if (isset($email) && !empty($email)) {
     
  $dato =  mysqli_query($conexion, "SELECT email FROM usuarios WHERE email = '".$email."'");

  $dato_repetido = mysqli_num_rows($dato);

      if($dato_repetido==0){
           
            $insertar = "INSERT INTO usuarios (nombre,email,usuario,contraseña) VALUES ('$nombre','$email','$usuario',md5('$contraseña'))";
            $query = mysqli_query($conexion,$insertar);
            
            if ($query){ 

                //   echo "<script> document.location.href = \"../../CORREO/Signup/send-email.php?email=$email&contra=$contraseña\" </script>";

                echo "<script> 
                  location.href= '../views/registro-completo.php?e=$email';
                  </script>";
            }
              
              else{
                  echo "<script> 
                  location.href= '../views/login.php';
                  </script>";
              }


      }else{
      
      header("Location: ../../views/signup.php?message=erroremail");

      }   
} else {

      echo "<script> alert('Error!! No se han podido ingresar datos a  la base de datos') </script>";
}


?>