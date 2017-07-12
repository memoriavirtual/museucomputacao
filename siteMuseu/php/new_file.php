<?php

if (isset($_FILES['image'])) {

	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

	$expensions = array("jpeg", "jpg", "png");

	if (in_array($file_ext, $expensions) === false) {
		$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
	}

	if ($file_size > 2097152) {
		$errors[] = 'File size must be excately 2 MB';
	}

	if (empty($errors) == true) {
		if ($file_ext == "png")
			$file_name = "tmp.png";
		elseif ($file_ext == "jpeg") 
			$file_name = "tmp.jpeg";
		else
			$file_name = "tmp.jpg";
			
		
		move_uploaded_file($file_tmp, "../TmpImagens/" . $file_name);
		//caminho do arquivo no servidor
		echo "Success";
		echo $file_ext;
	} else {
		print_r($errors);
	}
}
?>
<html>
	

	<body>

		<form action = "" method = "POST" enctype = "multipart/form-data">
			<input type = "file" name = "image" />
			<input id= type = "button" value="enviar"/>
			

			<ul>
				<li>
					Sent file: <?php echo $_FILES['image']['name']; ?>
				<li>
					File size: <?php echo $_FILES['image']['size']; ?>
				<li>
					File type: <?php echo $_FILES['image']['type']
					?>
			</ul>

		</form>

	</body>
</html>