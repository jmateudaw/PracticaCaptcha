<?php

require_once "recaptchalib.php";

// tu clave secreta
$secret = "";
 
// respuesta vacía
$response = null;
 
// comprueba la clave secreta
$reCaptcha = new ReCaptcha($secret);

// si se detecta la respuesta como enviada
if ($_POST["g-recaptcha-response"]) {
$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

 if ($response != null && $response->success) {
        echo "Hola " . $_POST["nombre"] . " (" . $_POST["email"] . "), Gracias por registrarte!";
 } else{
 	 echo "Error en el registro";
 }


?>