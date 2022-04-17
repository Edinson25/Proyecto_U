<?php

$correo= $_GET['e'];

$templateFinal = implode("", file("../templates/home-update-password.html"));
$body = implode("",file("../templates/body-update-password.html"));
$body = str_replace("[CORREO]", $correo,$body);
$templateFinal = str_replace("[UPDATEP]", $body,$templateFinal);
   
 echo $templateFinal;


?>