<?php
//exemple para chamar o método sendEmail("mg.matheusgarcia@gmail.com", "vendas.enjojei@gmail.com", 'Nome do Enviador', 'Assunto do Email', "mg.matheusgarcia@gmail.com")




function sendEmail($to, $from, $sender, $subject, $body) { 

	require_once("phpmailer/class.phpmailer.php");
	define('GUSER', 'vendas.enjojei@gmail.com');	// <-- Insira aqui o seu GMail
	define('GPWD', 'enjojei123');// <-- Insira aqui a senha do seu GMail

	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'TLS';	// TLS REQUERIDO pelo GMail
	$mail->Host = "ssl://smtp.googlemail.com";	// SMTP utilizado
	$mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($from, $sender);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		return true;
	}
}


?>
