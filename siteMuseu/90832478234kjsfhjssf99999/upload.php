<?php
   if (isset($_FILES['image'])) {

	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

	$expensions = array("jpeg", "jpg", "png");

	if (in_array($file_ext, $expensions) == false) {
		$errors[] = "A extensão do arquivo anexado não é valida, por favor escolha um formato JPEG, JPG ou PNG.";
	}

	if ($file_size == 0) { // se file_size for zero, é sinal que o arquivo é maior que o suportado pelo servidor
		  //configura o tamanho no servidor, para 5MB.
		$errors[] = "Tamanho máximo permitido 5MB";
	}

	if (empty($errors) == true) {
		
		$file_name = "tmp.jpg";
		move_uploaded_file($file_tmp, "../TmpImagens/" . $file_name);
		//caminho do arquivo no servidor

	} else {

		echo "$errors[0]";

	}

} else {
	echo "Ops! Erro inesperado.";
}
   
?>