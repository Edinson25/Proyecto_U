<?php

$templateFinal = implode("", file("../templates/home.html"));
$body = implode("",file("../templates/body.html"));

$templateFinal = str_replace("[INDEX1]", $body,$templateFinal);
   
 echo $templateFinal;


?>