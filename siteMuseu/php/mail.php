<?php
	include_once("Mail.php");
	
	//INFO DE CONEXÃO
	$host = "smtp.icmc.usp.br";
	$port = "587";
	$username = "museu@icmc.usp.br";
	$password = "k01za!0ld";
	
	// Destinatário
	$para = "museu@icmc.usp.br";
	
	//Flag para indicar de qual página html veio o formulário (0 = contato.html ou 1 = paradoar.html)
	$flag = $_POST['Flag'];
	
	// Nome do remetente
	$nome = $_POST['Nome'];
	
	// Assunto do e-mail
	if($flag==1){
		$assunto = "DOAÇÃO - ";
		$assunto .= $_POST['Assunto'];	
	}else{
		$assunto = $_POST['Assunto'];
	}
	
	//Mensagem
	$mensagem = $_POST['Mensagem'];
	
	//Email do remetente
	$email = $_POST['Email'];
	
	//Concatena todas as informações do formulário
	$mensagem = "<font color='black'><b>Nome do remetente:</b> $nome <br><br><b>Email do remetente:</b> $email <br><br><b>Mensagem do Remetente:</b><br>$mensagem </font>";
	
	//Dados para utilização do Mail::factory
	$smtp = Mail::factory('smtp', array(
	'host' => $host,
    'port' => $port,
	'debug' => FALSE,    
	'auth' => TRUE,
    'username' => $username,
    'password' => $password));
	
	$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;
	if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
		$fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");
		$anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
		$anexo = base64_encode($anexo);
		fclose($fp);
		
		$anexo = chunk_split($anexo);
		$boundary = "XYZ-" . date("dmYis") . "-ZYX";
		$mens = "--$boundary\n";
		$mens .= "Content-Transfer-Encoding: 8bits\n";
		$mens .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n"; //plain
		$mens .= "$mensagem\n";
		$mens .= "--$boundary\n";
		$mens .= "Content-Type: ".$arquivo["type"]."\n";
		$mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
		$mens .= "Content-Transfer-Encoding: base64\n\n";
		$mens .= "$anexo\n";
		$mens .= "--$boundary--\r\n";

		$headers['To'] = $para; 
		$headers['From'] = $username;
		$headers['Subject'] = $assunto;
		$headers['Reply-To'] = $email;
		$headers["Content-Type"] = 'multipart/mixed; MIME-version: 1.0\r\n';

		//envio o email com o anexo
		$mail = $smtp->send($headers['To'], $headers, $mens);
		echo"Email enviado com Sucesso!";
	}
	//se não tiver anexo
	else{
		//Parâmetros do cabeçalho
		$headers['To'] = $para; 
		$headers['From'] = $username;
		$headers['Subject'] = $assunto;
		$headers['Reply-To'] = $email;
		$headers["Content-Type"] = 'text/html; charset=UTF-8';
		$headers["Content-Transfer-Encoding"]= "8bit";
		//envia o email sem anexo
		$mail = $smtp->send($headers['To'], $headers, $mensagem);
		echo"Email enviado com Sucesso!";
	}
	
?>
