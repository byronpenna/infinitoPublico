<!DOCTYPE html>
<html>
<head>
	<title><?php echo $noticia->titulo ?></title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- Recursos -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/noticias/noticia/style.css") ?> >
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/noticias/noticia/media.css") ?> >
</head>
<body>
	<header>
		<?php 
			// menu universal 
			$this->load->view("parts/menu.php");
		?>
	</header>
	<div class="cuerpo row marginNull">
		<div class="col-lg-9">
			<h2 class="text-center"><?php echo $noticia->titulo ?></h2>
			<div class="contenido">
				<?php 
					echo $noticia->contenido;
				?>
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
</body>
</html>