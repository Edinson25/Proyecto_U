<?php
	 require "bd.php";
	
	session_start();
	
	if($_POST){
		
		$email= $_POST['Email'];
		$password = $_POST['contraseña'];
		
		$sql = "SELECT nombre,email,usuario,contraseña  FROM usuarios WHERE email='$email'";
	// echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			
			$password_bd = $row['contraseña'];
			
			$pass_c = md5($password);
			
			if($password_bd == $pass_c){
			
				$_SESSION['usuario'] = $row['usuario'];
				
				header("Location: ../views/vista-usuario.php");
			 }			
			else{
				header("Location: ../views/login.php?message=errorpassword");
                    
					}
			} else {
				header("Location: ../views/login.php?message=userfailed");
			}		
		}

		
	
	// if(empty($_SESSION["usuario"])){
	// 	$templateFinal = implode("", file("../templates/home-login.html"));
	// $body = implode("",file("../templates/body-login.html"));

	// $templateFinal = str_replace("[Login]", $body, $templateFinal);
	// echo $templateFinal;
	// }


?>