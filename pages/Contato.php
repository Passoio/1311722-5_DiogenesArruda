<!DOCTYPE html>
<html lang="pt-br">
	<head><!--Conteudo da aba com icone-->
		<meta charset="utf-8">
		<link rel="shortcut icon" type="img/x-icon" href="img/Folha.ico">
		<title>Contato</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			*{
	box-sizing: border-box;
}

body {
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}

header {
	background-color: #b3f0ff;
	padding: 7px;
	text-align: left;
	font-size: 35px;
	color: #00a3cc;
}


article {
	float: left;
	padding: 465px;
	width: 100%;
	background-color: #e6faff;
	text-align: left;
	font-size: 25px;
	height: 300px;
}

section::after {
	content: "";
	display: table;
	clear: both;
}

footer {
	background-color: #b3f0ff;
	padding: 10px;
	text-align: center;
	color: #00a3cc;
}

@media (max-width: 600px) {
	article {
		width: 100%;
		height: auto;
	}
}
		</style>
	</head>
	<body><!--Corpo da pagina-->
		<header>
			<h2><img src="img/LogoDag.png" height="200" align="center">Contato</h2>	
		</header>
			<section>
				<article>
					<h1> Formuário</h1>
					<p><form action="enviar dados" method="post" enctype="formulário">
					<label>Nome:</label>
					<input type="text" name="Nome"/><br/>
					<label>E-mail:</label>
					<input type="text" name="E-mail"/>
					<button>ENVIAR</button>
				</form></p>
					<h6>Localização</h6>
					<img src="img/Mapa local.png" height="200" align="center">
				</article>
			</section>
				<footer><!--Rodapé da pagina-->
					<p>Dag RA-1311782-5</p>
				</footer>	
	</body>
</html>