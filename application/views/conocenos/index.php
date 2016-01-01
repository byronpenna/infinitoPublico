<!DOCTYPE html>
<html>
<head>
	<title>Conocenos</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- Resources -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Conocenos/style.css") ?>> 
</head>
<body>
	<header>
		<?php 
			// menu universal 
			$this->load->view("parts/menu.php");
		?>
	</header>
	<div class="cuerpo row marginNull">
		<div class="divIntroGlobal">
			<h2 class="tituloPrincipal">Conocenos</h2>
			<div class="introConocenos">
				<p>
					Infinito es una organización de origen salvadoreño, 
					creada debido a las condiciones desesperantes que predominan en la mayoría de países de américa latina donde usualmente creemos que no podemos lograr nada, 
					porque lo caótico de nuestra sociedad nos los impide sea esta la corrupción, falta de oportunidades, empleo, educación, etc. 
				</p>
				<p>
					Por eso queremos enfocarnos principalmente en el desarrollo humano y el acompañamiento de proyectos personales de cada una de las personas que nos visita para que puedan tener éxito 
					en cada emprendimiento que se propongan mostrándoles que siempre existen alternativas viables para la 
					resolución de cualquier problema económico social.
				</p>
				<p>
					Contamos con un equipo altamente capacitado dispuesto a ayudarte y potenciar todas tus habilidades al máximo además de material de apoyo de calidad y acompañamiento personalizado.
				</p>
				<p>
					Hacemos esto porque creemos que podemos potenciar tus habilidades al máximo, crear la mejor versión de ti y darte los recursos necesarios para que puedas ser lo que siempre deseaste.
				</p>
			</div>	
		</div>
		<div class="row marginNull divValores">
			<div class="col-lg-offset-1 col-lg-10">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="divValor">
						<div class="imgValor">
							<img src=<?php echo base_url("Content/img/paginas/conocenos/trofeo.png") ?> >
						</div>
						<h3>Misión</h3>
						<p>
							Traer inspiración y motivar a nuestra comunidad a ser mejores cada día.
						</p>	
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="divValor">
						<div class="imgValor">
							<img src=<?php echo base_url("Content/img/paginas/conocenos/rocket.png") ?> >
						</div>
						<h3>Visión</h3>
						<p>
							Formar a las más grandes personas que la sociedad haya tenido potenciando sus habilidades al máximo y acompañándolas en todo su  proceso de crecimiento
						</p>	
					</div>
					
				</div>	
			</div>
			
		</div>
	</div>
	<footer class='footerRight row marginNull'>
		<?php 
			// footer universal
			$this->load->view("parts/footer.php");
		?>
	</footer>
	<?php 
		// scripts universales
		$this->load->view("parts/scripts.php")
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/Conocenos/functions.js") ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/Conocenos/script.js") ?> ></script>
</body>
</html>