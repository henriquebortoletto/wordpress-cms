<?php

$emailenvio = 'contato@bikcraft.com';
$assunto = 'Formulário Bikcraft';
$url = 'https://bikcraft.com';

$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$mensagem = $_GET['mensagem'];

$body = "$mensagem\n\n--------------------\n\n$nome\n$telefone\n$email";

if ( !empty($_POST['leaveblank']) || $_POST['dontchange'] !== 'https://' ) {
	echo 'Não foi possível enviar o e-mail. Tente novamente ou entre em contato ' . $emailenvio;
	echo '<meta HTTP_EQUIV="Refresh" CONTENT="10; URL="' . $url . '">';
} else if ( isset($_POST['email']) ){
	require ('./PHPMailer/PHPMailerAutoload.php');

	$mail = new PHPMailer;
	$mail->Charset = 'UTF-8';
	$mail->WordWrap = 70;
	$mail->addAddress($emailenvio);

	$mail->From = $email;
	$mail->FromName = $nome;
	$mail->AddReplyTo($email, $nome);
	$mail->Subject = $assunto;

	$mail->Body = $body;

	if ( !$mail->send() ) {
		echo 'Não foi possível enviar o e-mail. Tente novamente ou entre em contato com ' . $emailenvio;
		echo '<meta HTTP_EQUIV="Refresh" CONTENT="10; URL="' . $url . '">';
	} else {
		echo 'E-mail enviado com sucesso!';
		echo '<meta HTTP_EQUIV="Refresh" CONTENT="10; URL="' . $url . '">';
	}
}
