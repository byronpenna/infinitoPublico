<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- Resources -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Welcome/style.css") ?>> 
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Welcome/media.css") ?> >
</head>
<body>
	<header>
		<?php 
			// menu universal 
			$this->load->view("parts/menu.php");
		?>
		<div class="divSlider row marginNull">
			<img src=<?php echo base_url("Content/img/generales/slider/paisajeCor2.png") ?> >
		</div>
	</header>
	<?php 
		//print_r($noticias);
	?>
	<div class="cuerpo row marginNull">
		<?php 
			foreach ($noticias as $key => $noticia) {
				if($noticia->miniatura != ""){
					$urlImage = $noticia->miniatura;
				}else{
					$urlImage = base_url("Content/img/generales/image.png");	
				}
		?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 colNoticia">
				<a class="aNoticia" href=<?php echo site_url("noticias/noticia/".$noticia->idNoticia) ?> >
					<div class="divNoticia">
						<h2><?php echo $noticia->titulo ?></h2>
						<div class="row marginNull">
							<div class="row marginNull containerImgNoticia">
								<img class='imgNoticia' src=<?php echo $urlImage  ?> >	
							</div>
							<p>
								<?php
									echo $noticia->breve_descripcion;
								?>
							</p>
						</div>
					</div>
				</a>
			</div>
		<?php 
			}
		?>
		<!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 colNoticia">
			<div class="divNoticia">
				<h2>Tomar fotografias ayuda al autoestima</h2>
				<div class="row marginNull">
					<div class="row marginNull containerImgNoticia">
						<img class='imgNoticia' src=<?php echo base_url("Content/img/generales/noticias/prueba.png") ?> >	
					</div>
					<p>
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto 
					</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 colNoticia">
			<div class="divNoticia">
				<h2>Tomar fotografias ayuda al autoestima</h2>
				<div class="row marginNull">
					<div class="row marginNull containerImgNoticia">
						<img class='imgNoticia' src=<?php echo base_url("Content/img/generales/noticias/prueba.png") ?> >	
					</div>
					<p>
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto 
					</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 colNoticia">
			<div class="divNoticia">
				<h2>Tomar fotografias ayuda al autoestima</h2>
				<div class="row marginNull">
					<div class="row marginNull containerImgNoticia">
						<img class='imgNoticia' src=<?php echo base_url("Content/img/generales/noticias/prueba.png") ?> >	
					</div>
					<p>
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto 
					</p>
				</div>
			</div>
		</div> -->

	</div>
	<footer class='footerRight row marginNull'>
		<?php 
			// footer universal
			$this->load->view("parts/footer.php");
		?>
	</footer>
	<!-- Otra carga -->
		<?php 
			// scripts universales
			$this->load->view("parts/scripts.php")
		?>
		<script type="text/javascript" src=<?php echo base_url("Content/js/Welcome/functions.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("Content/js/Welcome/script.js") ?> ></script>
</body>
</html>