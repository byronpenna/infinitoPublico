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
					Lorem Ipsum es simplemente el texto de relleno de las imprentas y
					archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las 
					industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) 
					desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
				</p>
			</div>	
		</div>
		<div class="divValores">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="divValor">
					<div class="imgValor">
						<img src=<?php echo base_url("Content/img/paginas/conocenos/trofeo.png") ?> >
					</div>
					<h3>Misión</h3>
					<p>
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y
						archivos de texto.
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
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y
						archivos de texto.
					</p>	
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