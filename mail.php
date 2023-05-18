<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//***************************VALIDACIONES************************
// if(empty($nombre) || empty($email) || empty($asunto) || empty($mensaje)){
//   echo "Error: Todos los campos son obligatorios";
//   die();
// }
// if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//   echo "Error: Email inválido";
//   die();
// }

if (empty(trim($nombre))) $nombre = "Anónimo";
if (empty(trim($asunto))) $asunto = "Sin asunto";

$body = <<< HTML
<h1>Consulta desde la Web</h1>
<p>De: $nombre / $email</p>
<h1>Mensaje:</h1>
$mensaje
HTML;

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $nombre <$email>\r\n";
$headers .= "To: Sitio  <consultas@loneraelporteño.com>\r\n";

// $headers.= "Cc: copia@email.com\r\n";
// $headers.= "Bcc: copiaoculta@loneraelporteño.com\r\n";

// REMITENTE
// ASUNTO
// MENSAJE
$respuesta = ini_set(mail('consultas@loneraelporteño.com', "Mensaje Web: $asunto", $body), 'From: consultas@loneraelporteño.com');

var_dump($respuesta);


header('Location: gracias.html');
