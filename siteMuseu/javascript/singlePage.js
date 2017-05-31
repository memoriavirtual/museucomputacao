$(document).ready(function() {

	$(document).on("click", "a#oMuseu", function() {
		$("section#centralSection").load("museu/o_museu.html");
	});
	$(document).on("click", "a#oFundador", function() {
		$("section#centralSection").load("museu/o-fundador.html");
	});

	/*institucional*/
	$(document).on("click", "a#institucionalMain", function() {
		$("section#centralSection").load("institucional.html");
	});
	$(document).on("click", "a#missaoEObjetivo", function() {
		$("section#centralSection").load("institucional/missao-e-objetivos.html");
	});
	$(document).on("click", "a#conselhoDeliberativo", function() {
		$("section#centralSection").load("institucional/conselho-deliberativo.html");
	});
	/*exposicao*/
	$(document).on("click", "a#exposicoes", function() {

		$("section#centralSection").load("exposicoes/exposicoes.html");
	});
	$(document).on("click","a#visitas", function()
	{
		$("section#centralSection").load("exposicoes/visitas.html");
	} );
	/*Educativo*/
	$(document).on("click","a#videos", function()
	{
		$("section#centralSection").load("educativo/videos.html");
	} );
	
	/*Doacoes*/	
	$(document).on("click","a#doacoes", function()
	{
		$("section#centralSection").load("doacoes/politica-de-doacoes.html");
	} );
	$(document).on("click","a#paraDoar", function()
	{
		$("section#centralSection").load("doacoes/para-doar.html");
	} );
	/*Contatos*/
	$(document).on("click","a#atendimento", function()
	{
		$("section#centralSection").load("contatos/atendimento.html");
	} );
	$(document).on("click","a#localizacaoEHorarios", function()
	{
		$("section#centralSection").load("contatos/localizacao-e-horarios.html");
	} );
	
	/*Acervo*/
	$(document).on("click","a#acervo", function()
	{
		$("section#centralSection").load("acervo.html");
	} );
	
});
