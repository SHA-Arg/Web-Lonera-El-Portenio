<?php

use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if (empty(trim($nombre))) $nombre = "Anónimo";
if (empty(trim($asunto))) $asunto = "Sin asunto";

$body = <<< HTML
<h1>Consulta desde la Web</h1>
<p>De: $nombre / $email</p>
<h1>Mensaje:</h1>
$mensaje
HTML;

$mailer = new PHPMailer();
$mailer->setFrom($email, "$nombre");
<<<<<<< HEAD
$mailer->addAddress('consultas@xn--loneraelporteo-2nb.com', 'Lonera El Porteño');
=======
$mailer->addAddress('consultas@loneraelporteño.com', 'Lonera El Porteño');
>>>>>>> 1f314f7cd764d9684709beec282c479a6824fe68
$mailer->Subject = "Mensaje Web: $asunto";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$rta = $mailer->send();

var_dump($rta);

header('Location: gracias.html');
