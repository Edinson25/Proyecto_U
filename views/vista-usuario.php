<?php
session_start(); 
$usuario = $_SESSION ['usuario'];

$templateFinal = implode("", file("../templates/home-vista-usuario.html"));

$body = implode("",file("../templates/body-vista-usuario.html"));

    $body = str_replace("[USER]", $usuario,$body);
 $templateFinal = str_replace("[BODY]", $body,$templateFinal);
   
 echo $templateFinal;


?>