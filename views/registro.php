<?php

$templateFinal = implode("", file("../templates/home-registro.html"));
$body = implode("",file("../templates/body-registro.html"));

 $templateFinal = str_replace("[REGISTRO]", $body,$templateFinal);
   
 echo $templateFinal;


?>