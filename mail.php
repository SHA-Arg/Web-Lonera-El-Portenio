<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


// REMITENTE (NOMBRE Y CORREO)
// ASUNTO DEL CORREO
//CUERP0 DEL CORREO
var_dump($nombre);

$respuesta = mail('wildevsoluciones@gmail.com', "Mensje web: $asunto ", $mensaje);

var_dump($respuesta);
