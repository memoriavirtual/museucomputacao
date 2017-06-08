var idAnterior = "#mainMuseu"// nenhum id no inicio

$(document).ready(function() {

	$(document).on("click", "a#oMuseu", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("museu/oMuseu.html");
		$("#mainMuseu").removeClass("voltaMenuBranco");
		$("#mainMuseu").addClass("active");
		idAnterior = "#mainMuseu";

	});
	$(document).on("click", "a#museuMidia", function() {

		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load(" ");
		$("#mainMuseu").removeClass("voltaMenuBranco");
		$("#mainMuseu").addClass("active");
		idAnterior = "#mainMuseu";

	});
	$(document).on("click", "a#oFundador", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("museu/o-fundador.html");
		$("#mainMuseu").removeClass("voltaMenuBranco");
		$("#mainMuseu").addClass("active");
		idAnterior = "#mainMuseu";

	});

	/*institucional*/

	$(document).on("click", "a#missaoEObjetivo", function() {

		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("institucional/missao-e-objetivos.html");
		$("#institucionalMain").removeClass("voltaMenuBranco");
		$("#institucionalMain").addClass("active");
		idAnterior = "#institucionalMain";

	});
	$(document).on("click", "a#conselhoDeliberativo", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("institucional/conselho-deliberativo.html");
		$("#institucionalMain").removeClass("voltaMenuBranco");
		$("#institucionalMain").addClass("active");
		idAnterior = "#institucionalMain";
	});

	/*exposicao*/
	$(document).on("click", "a#exposicoes", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("exposicoes/exposicoes.html");
		$("#exposicoesMain").removeClass("voltaMenuBranco");
		$("#exposicoesMain").addClass("active");
		idAnterior = "#exposicoesMain";
	});
	$(document).on("click", "a#visitas", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("exposicoes/visitas.html");
		$("#exposicoesMain").removeClass("voltaMenuBranco");
		$("#exposicoesMain").addClass("active");
		idAnterior = "#exposicoesMain";
	});
	/*Educativo*/
	$(document).on("click", "a#videos", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("educativo/videos.html");
		$("#educativoMain").removeClass("voltaMenuBranco");
		$("#educativoMain").addClass("active");
		idAnterior = "#educativoMain";
	});

	/*Doacoes*/
	$(document).on("click", "a#doacoes", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("doacoes/politica-de-doacoes.html");
		$("#doacoesMain").removeClass("voltaMenuBranco");
		$("#doacoesMain").addClass("active");
		idAnterior = "#doacoesMain";
	});
	$(document).on("click", "a#paraDoar", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("doacoes/para-doar.html");
		$("#doacoesMain").removeClass("voltaMenuBranco");
		$("#doacoesMain").addClass("active");
		idAnterior = "#doacoesMain";
	});
	/*Contatos*/
	$(document).on("click", "a#atendimento", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("contatos/atendimento.html");
		$("#contatosMain").removeClass("voltaMenuBranco");
		$("#contatosMain").addClass("active");
		idAnterior = "#contatosMain";
	});
	$(document).on("click", "a#localizacaoEHorarios", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("contatos/localizacao-e-horarios.html");
		$("#contatosMain").removeClass("voltaMenuBranco");
		$("#contatosMain").addClass("active");
		idAnterior = "#contatosMain";
	});

	/*Acervo*/
	$(document).on("click", "a#acervoMain", function() {
		$(idAnterior).addClass("voltaMenuBranco");
		$("section#centralSection").load("acervo/acervo.html");
		$("#acervoMain").removeClass("voltaMenuBranco");
		$("#acervoMain").addClass("active");
		idAnterior = "#acervoMain";
		
	});
	
	

});
