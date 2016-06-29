<?php

include('constantes.php');
include('modulos/PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = GUSR;
$mail->Password = GPWD;
//$mail->SMTPDebug = 3;

$mail->SetFrom($_POST['remitente'], $_POST['nombre']);
$mail->Subject = $_POST['asunto'];
$mail->Body = $_POST['cuerpo'];
$mail->AddAddress(GMAIL);
$mail->addReplyTo($_POST['remitente'], $_POST['nombre']);
if (!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado!';
    ?> <html> <head><meta http-equiv="Refresh" content="3;url=http://localhost:81/CSA/index.php"></head></html> <?php
}
?>
