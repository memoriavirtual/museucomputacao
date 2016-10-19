<?php
	include_once("Mail.php");

	//INFO DE CONEXÃO
	$host = "smtp.icmc.usp.br";
	$port = "587";
	$username = "museu@icmc.usp.br";
	$password = "k01za!0ld";
	
	// Destinatário
	$para = "renato.jose93@gmail.com";
	
	// Nome do remetente
	$nome = $_POST['Nome'];
	
	// Assunto do e-mail
	$assunto = $_POST['Assunto'];
	
	//Mensagem
	$mensagem = $_POST['Mensagem'];
	
	//Email do remetente
	$email = $_POST['Email'];
	
	//Concatena todas as informações do formulário
	$mensagem = "<font color='black'><b>Nome do remetente:</b> $nome <br><br><b>Email do remetente:</b> $email <br><br><b>Mensagem do Remetente:</b><br>$mensagem </font>";
	/*$mensagem = "
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
	<html xmlns=\"http://www.w3.org/1999/xhtml\">
	<head>
	<title>Contato do museuuuuuu</title>
	</head>
	<body>
	<strong>Nome do remetente:</strong> $nome<br>
	<strong>Email do remetente:</strong> $email<br>
	<strong>Mensagem do Remetente:</strong> $mensagem
	</body>
	</html>";*/
	
	//Parâmetros do cabeçalho
	$headers['To'] = $para; 
	$headers['From'] = $username;
	$headers['Subject'] = $assunto;
	$headers['Reply-To'] = $email;
	$headers["Content-Type"] = 'text/html; charset=UTF-8';
	$headers["Content-Transfer-Encoding"]= "8bit";
	
	//Dados para utilização do Mail::factory
	$smtp = Mail::factory('smtp', array(
	'host' => $host,
    'port' => $port,
	'debug' => FALSE,    
	'auth' => TRUE,
    'username' => $username,
    'password' => $password));

	//Enviar email
	$mail = $smtp->send($headers['To'], $headers, $mensagem);
	
	if (PEAR::isError($mail)) {
		echo("<p>" . $mail->getMessage() . "</p>");
		GeraMsgErro(sprintf("Erro ao enviar a mensagem para %s.", $headers['To']));
	} else {
		echo "Mensagem Enviada com Sucesso.";
	}
?>
