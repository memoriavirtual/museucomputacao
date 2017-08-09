<?php

include ("PHPMailer/class.phpmailer.php");

$nome = strip_tags(trim($_POST['nome']));
$email = strip_tags(trim($_POST['email']));
$msg = strip_tags(trim($_POST['mensagem']));
$telefone = strip_tags(trim($_POST["telefone"]));
$file = strip_tags(trim($_POST["file"]));



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
$mail -> Password = '*****'; // senha no drive
$mail -> From = " museudecomputacaoicmc@gmail.com";
$mail -> FromName = "Doação";
$mail -> AddAddress('rogiel2009@gmail.com', $nome);
$mail -> IsHTML(true);
$mail -> CharSet = 'utf-8';
$mail -> Subject = "Mensagem do Site Museu";
$mail -> Body = $body;
$mail -> AltBody = "Este é o corpo da mensagem de teste, em Texto Plano!";
if ($file != "")
	$mail -> AddAttachment("../TmpImagens/tmp.jpg");
//caminho e extensão do arquivo.

if ($mail -> Send()) {
	echo "E-mail enviado com sucesso!";

} else {
	$mail -> ErrorInfo;
	echo "Erro ao enviar o email, por favor verifique seus dados";
}
$body = $mail -> Body = "<h3 style='color: rgb(158, 34, 54)'>Mensagem automática</h3><br><h4>Obrigado, em breve retornaremos o contato. ";
$mail -> clearAddresses(); // apaga os email principal, para enviar somente para o cliente
$mail -> AddAddress($email, $nome);
if ($file != "") // apaga o anexo para não enviar para o usuario
	$mail -> clearAttachments();

// colocar aqui o email do museu
if ($mail -> Send()) {

}
$mail -> ClearAllRecipients();
$mail -> ClearAttachments();
?>

