<?php
    session_start();

	if(!isset($_COOKIE["Moema"])) {
		setcookie("Moema", "", time() - 86400);
        session_unset();
        session_destroy();
		header("Location: ../_login/login-entrar.php");
	}
	else {
		if(count($_COOKIE) <= 0) {
			setcookie("Moema", "", time() - 86400);
			session_unset();
			session_destroy();
			header("Location: ../_login/login-entrar.php");
		}
	}
	/*------------------------------------------------------------*/

	if ((!isset($_SESSION["usuarioAtivo"])) ||
		($_SESSION["usuarioAtivo"] == NULL) ||
		($_SESSION["usuarioAtivo"] != "S")) {
		 $_SESSION['mensagem'] = "Usuário saiu !!!";
		header("Location: ../_login/login-entrar.php");
	}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Moema Times Square - Atas</title>

	<link rel="stylesheet" type="text/css" href="../../_css/w3.css"/>
    <link rel="stylesheet" type="text/css" href="../../_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="../../_css/informacoes.css"/>
</head>

<body class="imagem-fundo">
<div id="interface">
	<div id="titulo01">
		<span>TIMES SQUARE INFORME</span>

		<div id="idSidepanel" class="sidepanel">
			<a href="../_captcha/captcha-usar.php?tipo=2" class="item">LOGIN</a>
			<a href="../_informacoes/informacoes.php" class="item">INFORMAÇÕES</a>
			<a href="../_negocios/negocios.php" class="item">NEGÓCIOS E OPORTUNIDADES</a>
			<a href="../_servicos/servicos.php" class="item">SERVIÇOS</a>
			<a href="../_captcha/captcha-usar.php?tipo=1" class="item last-item">FALE CONOSCO</a>
		</div>

		<button id="btnOpenNav" onclick="openNav()">☰</button> 
	</div>

	<div id="titulo02">	<span>INFORMAÇÕES</span> </div>

	<span class="panel-2">Atas das Assembléias</span>
	<div class="inf-panel-2">
		<div class="inf-navbar">
			<a href="../../__cliente/_documentos/_atas/AtaAGO-2019-03-26.pdf" target="_blank"
				class="w3-button w3-ripple">AGO 26/03/2019</a>
			<a href="../../__cliente/_documentos/_atas/AtaAGO-2018-03-21.pdf" target="_blank"
				class="w3-button w3-ripple">AGO 21/03/2018</a>
			<a href="../../__cliente/_documentos/_atas/AtaAGO-2017-03-28.pdf" target="_blank"
				class="w3-button w3-ripple">AGO 28/03/2017</a>
			<a href="../../__cliente/_documentos/_atas/AtaAGO-2016-03-22.pdf" target="_blank"
				class="w3-button w3-ripple">AGO 22/03/2016</a>
			<a href="../../__cliente/_documentos/_atas/AtaAGO-2015-03-26.pdf" target="_blank"
				class="w3-button w3-ripple">AGO 26/03/2015</a>
		</div>
	</div>

	<p> </p>

	<a href="../_informacoes/informacoes.php" class="w3-ripple button-voltar">&laquo; Anterior</a>

	<script src="../../_funcoes/_javascript/funcoes-nav-vertical.js"></script>
	<script src="../../_funcoes/_javascript/funcoes-accordion.js"></script>

</div>
</body>

</html>