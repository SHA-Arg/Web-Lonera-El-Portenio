<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $errors = array();

    if (empty($nombre)) {
        $errors['nombre'] = "Por favor debe ingresar su nombre";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Por favor ingrese un email valido";
    }

    if (empty($mensaje)) {
        $errors['mensaje'] = "Por favor ingrese su mensaje";
    }

    if (count($errors) == 0) {
    }
}


// CUERPO DEL MAIL
$mensaje = "Este Mensaje fue enviado por:" . $nombre . ",/r/n";
$mensaje .= "Su e-mail es:" . $email . "/r/n";
$mensaje .= "Mensaje:" . $_POST['mensaje'] . "/r/n";
$mensaje .= "Enviado el:" . date('d/m/Y', time());

$destinatario = "hereniu.amaral.sebastian@gmail.com";
$asunto = "Contacto desde la web";

// FUNCION EMAIL
mail($destinatario, $asunto, $mensaje, $header);

// REDIRECCIONAR
header("Location:gracias.html");
