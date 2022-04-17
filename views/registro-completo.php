<?php
$correo= $_GET['e'];

$templateFinal = implode("", file("../templates/home-registro-completo.html"));
$body = implode("",file("../templates/body-registro-completo.html"));
$body = str_replace("[CORREO]", $correo,$body);
 $templateFinal = str_replace("[REGISTROC]", $body,$templateFinal);
   
 echo $templateFinal;


?>