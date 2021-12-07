<?php
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$empresa= $_POST['empresa'];
$ciudad = $_POST['ciudad'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $firstname . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Empresa: " . $empresa . " \r\n";
$message .= "de la Ciudad: " . $ciudad . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'gerencia@nexus-it.co';
$asunto = 'Cliente de la pagina de GenomaX';

mail($para, $asunto, utf8_decode($message), $header);
header("Location:index.html");
?>