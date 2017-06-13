var quantImg = 26;
var i = 0;
// quantidade de imagem que deseja exibir;

function slidePrincipal() {

	document.getElementById('id').src = "images/ImagensSlides/" + i + ".jpg";
	setTimeout("slidePrincipal()", 2500);
	if (i >= quantImg)
		i = -1;
	i++;


}