<?php
include('constantes.php');
include('/modulos/PHPMailer/PHPMailerAutoload.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
	$mail->Username = GUSR;  
	$mail->Password = GPWD;   
	        
	$mail->SetFrom(GMAIL, GNAME);
	$mail->Subject = $_POST['asunto'];
	$mail->Body = $_POST['cuerpo'];
	$mail->AddAddress($_POST['para']);
	if(!$mail->Send()) {
		echo 'Error: '.$mail->ErrorInfo;
	} else {
		echo 'Mensaje enviado!';
	}
?>
