<?php

$templateFinal = implode("", file("../templates/home-contra-update.html"));
$body = implode("",file("../templates/body-contra-update.html"));

$templateFinal = str_replace("[CONTRAU]", $body,$templateFinal);
   
 echo $templateFinal;


?>