<?php
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'From: '. $mail . " \r\n";
$header .= "X-Mailer: PHP/" .phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su correo es: " . $mail . " \r\n";
$message = "Mensaje: " . $_POST['message'] . " \r\n";
$message = "Enviado el: " . date('d/m/Y', time());

$para = 'harold.vargas7598@gmail.com'
$asunto = 'Solicitud Glambulancia'

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

?>


