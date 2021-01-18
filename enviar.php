<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/SMTP.php";

$email_envio = "contato@bikcraft.com";
$email_pass = "12345";

$site_name = "Bikcraft";
$site_url = "www.bikcraft.com";

$host_smtp = "smtp.bikcraft.com";
$host_port = "465";

$email = $_POST["email"];
$nome = $_POST["nome"];

$body_content = "";
foreach( $_POST as $field => $value) {
  if( $field !== "leaveblank" && $field !== "dontchange" && $field !== "enviar") {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= "$field: $value \n";
  }
}

$notbot = ($_POST["leaveblank"] === "") || ($_POST["dontchange"] === "http://");

if ($notbot) {

$mail = new PHPMailer(true);

try {
  $mail->CharSet = "UTF-8";
  $mail->isSMTP();
  $mail->Host = $host_smtp;
  $mail->SMTPAuth = true;
  $mail->Username = $email_envio;
  $mail->Password = $email_pass;
  $mail->Port = $host_port;
  $mail->SMTPSecure = "tsl";

  $mail->setFrom($email_envio, "Formulário - ". $nome);
  $mail->addAddress($email_envio, $site_name);
  $mail->addReplyTo($email, $nome);

  $mail->WordWrap = 70;
  $mail->Subject = "Formulário - " . $site_name . " - " . $nome;
  $mail->Body = $body_content;

  $mail->send();
?>

  <html>
    <head>
      <title>Formulário enviado</title>
      <meta http-equiv="refresh" content="10;URL='./'">
    </head>
    <body>
      <div class="form-content" id="form-send">
        <h2>Formulário enviado!</h2>
        <p>Em breve eu entro em contato com você.</p>
      </div>
    </body>
  </html>

<?php } catch (Exception $e) { ?>

  <html>
    <head>
      <title>Erro no envio</title>
      <meta http-equiv="refresh" content="10;URL='./'">
    </head>
    <body>
      <div class="form-content" id="form-erro">
        <h2>Um erro ocorreu!</h2>
        <p>Você pode tentar novamente ou enviar direto para <?php echo $email_envio; ?></p>
      </div>
    </body>
  </html>

<?php
  }}
