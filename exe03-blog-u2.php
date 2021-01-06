<!--
BLOG PESSOAL COM PHP
Autor: Wendel Damasceno Oliveira
Data:dd/mm/aaaa
-->
<?php
//Definição de constante
define("AUTOR_BLOG",'Wendel');
//definição de variáveis
$NPostagens = 0;
//Postagem 1
$PostTitl = "Sol nascente";
$PostSTitl = "Noite-Dia";
$PostData1 = "Janeiro 5, 2021";
$PostTexto1 = "Ver o sol nascente no cume de uma montanha não tem preço.";
$PostComent1 = "0";
//Postagem 2
$PostTit2 = "Sol poente";
$PostSTit2 = "Dia-Noite";
$PostData2 = "Janeiro 5, 2021";
$PostTexto2 = "Ver o sol poente não tem preço.";
$PostComent2 = "2";
?>
<html>
	<head>
		<meta charset="UTF-8">
		<!--Título da página da web -->
		<title>Meu blog pessoal</title>
		<!--link para que o navegador entenda as classes do W3.CSS-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	</head>
	<!--corpo da página da web-->
	<body class = "w3-light-grey">
		<!-- Cabeçalho do corpo da página Web-->
		<header class = "w3-container w3-center w3-padding-32">
			<h1><b>Meu blog pessoal</b></h1>
			<p>Seja bem vindo! Criado por <span class="w3-tag"><?php echo AUTOR_BLOG?></span></p>
		</header>
		<!-- Conteúdo da página web-->
		<div class ="w3-row">
		<!--Conteúdo da coluna esquerda-->
			<div class ="w3-col w3-container" style="width:65%">
				<div class="w3-margin">
					<img src="solnascente.jpeg" style="width:100%">
						<div class="w3-container w3-white">
							<h4><b>
								<?php 
								$NPostagens+=1;
								echo $NPostagens . " " . $PostTitl;
								?>
								</b>
							</h4>
							<p>
								<?php
									echo $PostSTitl . ". <span class='w3-opacity'>" . $PostData1 . "</span>";
								?>
							</p>
							<div class="w3-container">
								<?php
									echo "<p>" . $PostTexto1 . "</p>";
								?>
							</div>
							<button class="w3-button w3-padding-large w3-white w3-border"><b>Leia mais...</b></button>
							<span class="w3-right w3-padding-16"><b>Comentários</b>
								<span class="w3-tag">
									<?php echo $PostComent1; ?>
								</span>
							</span>
						</div>
				</div>
				<div class="w3-margin">
					<img src="solsepondo.jpeg" style="width:100%">
						<div class="w3-container w3-white">
							<h4><b><?php echo $NPostagens+=1 ?> - Sol poente</b></h4>
							<p>Ver o sol poente não tem preço.</p>
							<span class="w3-right w3-padding-16">Comentários: 10</span>
							<button class="w3-button w3-padding-16"><b>Leia mais...</b></button>
						</div>
				</div>
			</div>
		<!--Conteúdo da coluna direita-->
			<div class="w3-col w3-container w3-blue" style="width:35%">
		<!--Bloco apresentação-->
				<div class="w3-card w3-margin">
					<img src="perfil.png" style="width:100%">
						<div class="w3-container w3-white">
							<h4><b>Wendel Oliveira</b></h4>
							<p>Graduado em história (UECE) e mestrado interdisciplinar em humanidades(UNILAB-CE).</p>
						</div>
				</div>
				<hr>
				<!--Bloco top 5-->
				<div class="w3-card w3-margin">
					<div class="w3-container w3-padding">
						<h4>Postagens mais populares</h4>
					</div>
					<ul class="w3-ul w3-hoverable w3-white">
						<li class-="w3-padding-16">
							<img src="https://www.w3schools.com/w3images/workshop.jpg"
								class="w3-left w3-margin-right" style="width:50px">
							<span class="w3-large">Dez motivos para aprender HTML5 + W3.CSS</span>
							<br>
							<span>Comentários: 142</span>
						</li>
						<li class-="w3-padding-16">
							<img src="https://www.w3schools.com/w3images/workshop.jpg"
								class="w3-left w3-margin-right" style="width:50px">
							<span class="w3-large">Experiecia em gravidade</span>
							<br>
							<span>Comentários: 10</span>
						</li>
						<li class-="w3-padding-16">
							<img src="https://www.w3schools.com/w3images/gondol.jpg"
								class="w3-left w3-margin-right" style="width:50px">
							<span class="w3-large">Como morar sozinho</span>
							<br>
							<span>Comentários: 7</span>
						</li>
						<li class-="w3-padding-16">
							<img src="https://www.w3schools.com/w3images/skies.jpg"
								class="w3-left w3-margin-right" style="width:50px">
							<span class="w3-large">Melhores músicas anos 90</span>
							<br>
							<span>Comentários: 3</span>
						</li>
						<li class-="w3-padding-16">
							<img src="https://www.w3schools.com/w3images/rock.jpg"
								class="w3-left w3-margin-right" style="width:50px">
							<span class="w3-large">O que fazer num sábado chuvoso</span>
							<br>
							<span>Comentários: 2</span>
						</li>
					</ul>
				</div>
				<hr>
				<!--Bloco filtros-->
				<div class="w3-card w3-margin">
					<div class="w3-container w3-padding">
						<h4>Categorias</h4>
					</div>
					<div>
						<p>
						<span class="w3-tag w3-black w3-margin-bottom">Todas</span>
						<span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Viagens</span>
						<span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Esporte</span>
						<span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Política</span>
						<span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Família</span>
						<span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
						</p>
					</div>
				</div>
			</div>
		</div>		
		<!--Rodapé da página da web-->
		<footer class="w3-container w3-dark-grey w3-margin-top w3-cell-row">
			<div class="w3-container w3-cell w3-cell-top"> 
				<button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Anterior</button>
				<button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Próximo</button>
			</div>
			<div class="w3-container w3-cell w3-cell-bottom">
				<br><br><br>
				<p>Introdução ao coding web by luiz fernando corcini</p>
			</div>
			<div class="w3-container w3-cell w3-cell-top">
				<a href="#" class="w3-padding w3-xxlarge fa fa-facebook"></a>
				<a href="#" class="w3-padding w3-xxlarge fa fa-twitter"></a>
				<a href="#" class="w3-padding w3-xxlarge fa fa-instagram"></a>
			</div>
		</footer>
	</body>
</html>
