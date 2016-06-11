<?php
	$idOcorrencia = $_GET["id"];
	// $ocorrencia = new Ocorrencia($_GET["id"]);
	// // $ocorrencia->select_ocorrencia();
	$lat = -29.959500;
	$long = -51.623750;	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ocorrência - saida[i][nome_usuario]</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/ocorrencia.js'></script>
		<link rel='stylesheet' href='css/style.css'>
		<link rel='stylesheet' href='css/ocorrencia.css'>
	</head>
	<body>
		<nav class='navbar navbar-inverse'>
			<div class='container-fluid'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>                        
					</button>
				</div>
				<div class='collapse navbar-collapse' id='myNavbar'>
					<ul class='nav navbar-nav'>
						<li class=''><a href='index.php'><- Voltar</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class='container'>    
			<div class='row'>
				<div id='center' class='col-md-7'>
					<p id='status'>
					</p>
					<div class='ocorrencia'>
						<h3>saida[i]['nome_usuario']</h3>
						<ul class='list-group'>
							<li class='list-group-item'>Cidade: saida[i]['cidade']</li>
							<li class='list-group-item'>Estado: saida[i]['estado']</li>
							<li class='list-group-item'>Referência de Localização: saida[i]['referencia_localizacao']</li>
							<li class='list-group-item'>
								<h4>Descrição:</h4>
								<p>saida[i]['descricao']</p>
							</li>
							<li class='list-group-item'>
								<h4>Registro Fotográfico da ocorrencia:</h4>
								<img width='200' height='300' class='img-responsive img-thumbnail' src=''</img>
							</li>
							<li class='list-group-item'>
								<div id='map'></div>
							</li>
						</ul>
						<h2>Publicar</h2>
						<form method='POST' id='form_comentario' action='controller/publicar_comentario.controller.php?idOcorrencia=<?php echo $idOcorrencia ?>'>
							<textarea name='conteudo' required='true' rows='5' style='width:100%'></textarea>
						   	<button id='bt_comentar' type='submit'>Comentar</button>
						</form>
					</div>
					<div id='comentarios'>
						<!-- COMENTÁRIOS AQUI OU -->
					</div>
				</div>
				<div id='comentarios' class='col-md-5'>	
					<!-- AQUI -->
					Hello
				</div>
			</div>
		</div>
		<footer class='container-fluid'>
			<a rel='license' href='http://creativecommons.org/licenses/by-nc-nd/4.0/'><img alt='Licença Creative Commons' style='border-width:0' src='https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png' /></a><br /><span xmlns:dct='http://purl.org/dc/terms/' property='dct:title'><!-- Ambiento</span> de <span xmlns:cc='http://creativecommons.org/ns#' property='cc:attributionName'>Igor Phelype Guimarães</span> está licenciado com uma Licença <a rel='license' href='http://creativecommons.org/licenses/by-nc-nd/4.0/'>Creative Commons - Atribuição-NãoComercial-SemDerivações 4.0 Internacional --></a>
		</footer>
	</body>
	<script src='http://maps.google.com/maps/api/js'></script><script type='text/javascript' src='js/gmap/gmap.js'></script><script type='text/javascript'>$(document).ready(function() {map = new GMaps({div: '#map',lat: -21.7058,lng: -43.4188});map.addMarker({lat: -21.7058,lng: -43.4188,title: 'Local',infoWindow: {content : 'bzbzb'}});});</script>
</html>
