<?php

$templateFinal = implode("", file("../templates/home-login.html"));
$body = implode("",file("../templates/body-login.html"));
$errorPassword = implode("",file("../templates/mensaje-error-password.html"));
$errorUser = implode("",file("../templates/mensaje-error-user.html"));

if(isset($_GET["message"])){
    if($_GET["message"] == "errorpassword"){
    $body = str_replace("[BODY-MESSAGE]", $errorPassword, $body);
    $templateFinal = str_replace("[LOGIN]", $body, $templateFinal);
    echo $templateFinal;
    }
    if($_GET["message"] == "userfailed"){
        $body = str_replace("[BODY-MESSAGE]", $errorUser, $body);
        $templateFinal = str_replace("[LOGIN]", $body, $templateFinal);
        echo $templateFinal;
        }
    }
else{
        $body = str_replace("[BODY-MESSAGE]", "", $body);
        $templateFinal = str_replace("[LOGIN]", $body, $templateFinal);
        echo $templateFinal;
    }



//  $templateFinal = str_replace("[LOGIN]", $body,$templateFinal);
   
//  echo $templateFinal;


?>