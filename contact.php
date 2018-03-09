<?php

$para = "info@rinxols.cat";
$asunto = "Mensaje desde rinxols.cat";

$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-to: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY = "\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY = "\n<br>Mensaje: ".nl2br($_POST["message"])."\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar Mensaje!");

header('Location: https://www.rinxols.cat')

?>