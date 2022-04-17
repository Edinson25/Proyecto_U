<?php

$templateFinal = implode("", file("../templates/home-olvida-contra.html"));
$body = implode("",file("../templates/body-olvida-contra.html"));
$errorCorreo = implode("",file("../templates/mensaje-error-correo.html"));


//  $templateFinal = str_replace("[OLVIDAC]", $body,$templateFinal);
   
//  echo $templateFinal;

 if(isset($_GET["message"])){
    if($_GET["message"] == "errorEmail1"){
        $body = str_replace("[BODY-MESSAGE]", $errorCorreo, $body);
        $templateFinal = str_replace("[OLVIDAC]", $body,$templateFinal);
        echo $templateFinal;
    }
}
else{
    $body = str_replace("[BODY-MESSAGE]", "",$body);
    $templateFinal = str_replace("[OLVIDAC]", $body,$templateFinal);
    echo $templateFinal;

}


?>