
<html>

<head>
<meta charset="UTF-8">

<title>Museu de computa&ccedil&atildeo</title>

<!-- Abaixo segue o código para inserção da imagem no título do site -->
<link rel="icon" href="Imagens/favicon.png">

<link rel="stylesheet" type="text/css" href="estilo.css"  />

<script type="text/javascript" src="js/jquery-1.8.2.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js" ></script>
</head>

<?php

	error_reporting( error_reporting() & ~E_NOTICE );
	date_default_timezone_set('America/Sao_Paulo');
	
	include_once "functions.php";
	//include_once "dbhandler.php";
	
	$func = new Functions();
	//$banco = new DBhandler();

	//$vetor_pessoas = $banco->query("SELECT * FROM equipamento WHERE segmento='calculo'")->fetchAll();
	
	$res = $func->incrementaK($func->contaDados(1));
	
	/*$k=150;
	foreach ($vetor_pessoas as $pessoa) {
		$k+=50;	
	}
	$res = $k;*/
?>			

<!-- Esconde a barra de rolagem horizontal -->
<body style="overflow-x: hidden;">
	<div id="fundocabecalho"></div>
	<div id="pagina">
		<div id="conteudo">
		
			<!-- Itens do Cabeçalho -->
			<div class="logo"><img src="Imagens/logo2.png"></div>
			<div class="cabecalho" id="pri"><p>MUSEU DE COMPUTA&Ccedil&AtildeO</p></div>
			<div class="cabecalho" id="sec"><p>PROFESSOR ODELAR LEITE LINHARES</p></div>

			<!-- Formulário de busca
			<form role="search" method="get" id="searchform" class="searchform" action="#" _lpchecked="1">
				<div class="searchboxwrapper">		  
					<input class="searchbox" type="text" value="" name="s" placeholder="Buscar" id="s">		  
					<input class="searchsubmit" type="submit" id="searchsubmit" value="">		  
				</div>
			</form>
			-->
			
			<div class="logo_lateral"><img src="Imagens/logo_lateral.png"></div>			
			
			<!-- Configurações do Menu -->
			<nav>
			<ul class="menu">
				<li><a href="index.html">HOME</a></li><li><a href="">HISTÓRIA</a>
				<ul class="sub">
					<li><a href="museu.html">O Museu</a></li>
					<li><a href="fundador.html">O Fundador</a></li>
				</ul></li>
				<li><a href="">INSTITUCIONAL</a>
				<ul class="sub">
					<li><a href="missao.html">Missão e Objetivos</a></li>
					<li><a href="conselho.html">Conselho Deliberativo</a></li>
					<li><a href="localizacao.html">Localização e Horários</a></li>
					<li><a href="contato.html">Contato</a></li>
				</ul></li>
				<li><a href="">DOAÇÃO</a>
				<ul class="sub">
					<li><a href="politica.html">Política de Doação</a></li>
					<li><a href="paradoar.html">Para Doar</a></li>
					<!--<li><a href="calculo.html">Doações Recebidas</a></li>-->
				</ul></li>
				<!--<li><a href="">PALESTRA<br> E EVENTOS</a>
				<ul class="sub">
					<li><a href="academico.html">Acadêmico</a></li>
					<li><a href="extra_academico.html">Extra-Acadêmico</a></li>
				</ul></li>-->
				<!--<li><a href="">ACERVO</a>
				<ul class="sub">
					<li><a href="computacao.php">Computação</a></li>
					<li><a href="calculo.php">Cálculo Numérico</a></li>
				</ul></li>-->
				<li><a href="exposicoes.html">EXPOSIÇÕES</a></li>
			</ul>
			

			<div class="flexwrapperterc" style="height: <?php echo $res ; ?>; background: #EDEDEE; border-radius: 6px;">
				<section>
					<h1 style="	margin-left: 315px;">Acervo de Cálculo</h1>
					<img src="Imagens/linha.png" style="width: 700px; margin-top: 0px; margin-left: 0px;">
					<p>
						<table cellspacing='3' cellpadding='3' class='contenttable' style=" margin-top: 20px; margin-left: 20px;">
							<thead>
								<tr class="tr-even tr-0">
								  <th class="td-1">Pe&ccedila</th>
								  <th class="td-2">Doador</th>
								  <th class="td-3">Origem</th>
								</tr>
							</thead>  
							<tbody>
								<?php
									$func->insereDados(1);
								?>
							</tbody>
						</table>
					</p>
				</section>
			</div>
						
			
			<!-- div que limpa o conteúdo flutuante próximo -->
			<div class="clear"></div>
		</div>		
	</div>
	
	<!-- Configurações do Rodapé -->
	<div id="fundorodape">
		<p>© Copyright (c) 2015 Instituto de Ciências Matemáticas e de Computação - ICMC-USP <br /> Todo o conteúdo distribuído sob a licença <a href="http://creativecommons.org/licenses/by-sa/4.0/" style="color: #FCEC10">CC-BY-SA</p>
	</div>
	
</body >
</html>