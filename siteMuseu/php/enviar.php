<?php

include ("PHPMailer/class.phpmailer.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];
$telefone = $_POST["telefone"];
$file = $_FILES['file'];

$body = "<h3 style='color: rgb(158, 34, 54)'>Mensagem do site do museu</h3><br>" . $msg . "<br><br>Nome: $nome <br> E-mail: " . $email . "<br>Telefone: " . $telefone . "<br><br>----------------------------<br>" . date("h:m:i d/m/Y") . "<br>----------------------------";

$mail = new PHPMailer();
$mail -> SetLanguage("br");
$mail -> SMTPDebug = 1;
$mail -> IsSMTP();
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = "tls";
$mail -> SMTPAuth = true;
$mail -> Host = "smtp.gmail.com";
$mail -> Port = "587";
$mail -> Username = 'museudecomputacaoicmc@gmail.com';
$mail -> Password = '###';
$mail -> From = " museudecomputacaoicmc@gmail.com";
$mail -> FromName = "Doação";
$mail -> AddAddress('rogiel2009@gmail.com', $nome);
$mail -> IsHTML(true);
$mail -> CharSet = 'utf-8';
$mail -> Subject = "Mensagem do Site Museu";
$mail -> Body = $body;
$mail -> AltBody = "Este é o corpo da mensagem de teste, em Texto Plano!";

$mail -> AddAttachment($file);
if ($mail -> Send()) {
	//echo "E-mail enviado com sucesso!";
} else {
	$mail -> ErrorInfo;
}

$body = $mail -> Body = "<h3 style='color: rgb(158, 34, 54)'>Mensagem automática</h3><br><h4>Obrigado pelo interesse em doar para o museu de computação, em breve retornaremos o contato. ";
$mail -> AddAddress($email, $nome);
// colocar aqui o email do museu

if ($mail -> Send()) {

} else {
	$mail -> ErrorInfo;
}

$mail -> ClearAllRecipients();
$mail -> ClearAttachments();
?>