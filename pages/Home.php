<!DOCTYPE html>
<html lang="pt-br">
	<head><!--Conteudo da aba com icone-->
		<meta charset="utf-8">
		<link rel="shortcut icon" type="img/x-icon" href="img/Folha.ico">
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			*{
	box-sizing: border-box;
}

body {
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}

header {
	background-color: #00cc00;
	padding: 7px;
	text-align: left;
	font-size: 35px;
	color: white;
}


article {
	float: left;
	padding: 465px;
	width: 100%;
	background-color: #e6ffe6;
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
	background-color: #00cc00;
	padding: 10px;
	text-align: center;
	color: white;
}

@media (max-width: 600px) {
	article {
		width: 100%;
		height: auto;
	}
}
		</style>
	</head>
	<body> <!--Corpo da pagina-->
		<header>
			<h2><a href="index.php"><img src="img/LogoDag.png" height="200" align="center"></a>Home</h2>	
		</header>
			<section>
				<article>
					<h1> Progamador JR</h1>
					<p>Realiza manutenção nos códigos, mais voltado para front-end.</p>
				</article>
			</section>
				<footer><!--Rodapé da pagina-->
					<p>Dag RA-1311782-5</p>
				</footer>	
	</body>
</html>