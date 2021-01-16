<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" 			content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" 	content="telephone=no">
	<meta name="description" 		content="Olá, me chamo Cássio! Sou graduado no curso de Informática Biomédica pela USP campus de Ribeirão Preto (2016). Gosto de desenvolvimento web e de jogos. Atualmente estou trabalhando na empresa Vespera Tecnologia (2017 - presente). Comecei minha carreira profissional dentro da universidade, onde desenvolvi 2 projetos de iniciação científica. O primeiro, cujo título era Classificação de tumores malignos em subgrupos definidos pelos perfis de expressão gênica e metilação do DNA, utilizei a linguagem R para analisar dados genômicos em larga escala. O segundo projeto foi voltado para o desenvolvimento de uma plataforma web para auxílio ao diagnóstico do autismo. Neste momento estou inserido no mercado, trabalhando com ferramentas web como: PHP, HTML, Javascript, SASS e Wordpress." />
	<title>Meu portfólio</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>
	<div class="container">
		<div class="Card">
			<div class="top">
				<nav>
					<ul class="links">
						<li><a href="index.php">Home</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="interesses.php">Interesses</a></li>
					</ul>
				</nav>

				<div class="right">
					<span class="exp">EXP: 1565421p</span>
					
					<ul class="redes _unstyled">
						<li><a href="" target="_blank"><i class="icon-facebook"></i></a></li>
						<li><a href="" target="_blank"><i class="icon-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/cássio-daltoé-b72757145" target="_blank"><i class="icon-linkedin"></i></a></li>	
						<li><a href="https://api.whatsapp.com/send?phone=5516997076701" target="_blank"><i class="icon-whatsapp"></i></a></li>	
					</ul>
				</div>
			</div>

			<div class="foto" style="background-image: url(assets/images/perfil.jpeg)"></div>
			<div class="infos">
				<h1 class="_h6">Cássio Daltoé</h1>
				<span class="_small">Programador</span>
				<span><b>LV:</b> 45</span>
				<span class="bar _hp"><b>HP:</b> 6800/6800</span>
				<span class="bar _mp"><b>MP:</b> 450/450</span>
			</div>

			<h2 class="_h6">Habilidades</h2>

			<div class="atributos">
				<ul class="Row _gutters _unstyled">
					<li class="col _col-6">
						<img src="assets/images/attr4.png">
						<span>HTML</span>
					</li>
					<li class="col _col-6">
						<img src="assets/images/attr10.png">
						<span>SASS</span>
					</li>
					<li class="col _col-6">
						<img src="assets/images/attr2.png">
						<span>Javascript</span>
					</li>
					<li class="col _col-6">
						<img src="assets/images/attr1.png">
						<span>VueJS</span>
					</li>
					<li class="col _col-6">
						<img src="assets/images/attr5.png">
						<span>PHP</span>
					</li>
					<li class="col _col-6">
						<img src="assets/images/attr6.png">
						<span>Codeigniter</span>
					</li>
					<li class="col _col-6">
						<img src="assets/images/attr8.png">
						<span>Laravel</span>
					</li>
					<li class="col _col-6">
						<img src="assets/images/attr3.png">
						<span>R</span>
					</li>
				</ul>
			</div>

			<h2 class="_h6 pointer" data-component="toggle" data-target=".parametros">Status +</h2>

			<div class="parametros _hide">
				<ul class="_unstyled">
					<li><img src="assets/images/status-forca.png"><b>Força</b> <span>210</span></li>
					<li><img src="assets/images/status-destreza.png"><b>Destreza</b> <span>200</span></li>
					<li><img src="assets/images/status-vitalidade.png"><b>Vitalidade</b> <span>230</span></li>
					<li><img src="assets/images/status-magia.png" class="_ester"><b>Magia</b> <span>180</span></li>
					<li><img src="assets/images/status-espirito.png"><b>Espírito</b> <span>255</span></li>
					<li><img src="assets/images/status-ataque.png"><b>Ataque</b> <span>220</span></li>
					<li><img src="assets/images/status-defesa.png"><b>Defesa</b> <span>165</span></li>
				</ul>
			</div>

			<div class="_tac">
				<a href="assets/images/curriculo.pdf" class="Button _outline" target="_blank"><img src="assets/images/pergaminho.png">Baixar currículo</a>
			</div>
		</div>
	</div>

	<footer class="Footer">
		<div class="container">
			<p>Copyright &copy; <?= date('Y', strtotime('now')); ?> por Cássio Daltoé. Todos os direitos reservados.</p>
		</div>
	</footer>

	<script type="text/javascript" src="assets/js/app.min.js"></script>
</body>
</html>