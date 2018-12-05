<?php header("Content-type: text/html; charset=utf-8");
require_once("email.php");

$sender		= $_POST["Nome"];	// Pega o valor do campo Nome
$subject	= $_POST["Assunto"];	// Pega o valor do campo Telefone
$from		= $_POST["Email"];	// Pega o valor do campo Email
$body		= $_POST["Mensagem"];	// Pega os valores do campo Mensagem

if(sendEmail($from, "vendas.enjojei@gmail.com", $sender, $subject, $body)){
	echo "Sucesso";
} else {
	echo "Erro";
}
?>
