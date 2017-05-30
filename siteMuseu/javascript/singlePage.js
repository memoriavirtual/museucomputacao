$(document).ready(function() {

	$(document).on("click", "a#oMuseu", function() {
		$("section#centralSection").load("inicio/o_museu.html");
	});
	$(document).on("click", "a#oFundador", function() {
		$("section#centralSection").load("inicio/o-fundador.html");
	});
});
