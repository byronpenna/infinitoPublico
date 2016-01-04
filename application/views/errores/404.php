<!DOCTYPE html>
<html>
<head>
	<title>Pagina solicitada no encontrada</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- Resources -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Errores/404/style.css") ?>> 
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Errores/404/media.css") ?>> 
</head>
<body>
	<header>
		<?php 
			// menu universal 
			$this->load->view("parts/menu.php");
		?>
	</header>
	<div class="row cuerpo marginNull">
		<div class="divImageWarning">
			<img src=<?php echo base_url("Content/img/paginas/404/warning.png"); ?> >
			<div class="row marginNull">
				<h3>Parece ser que no encontramos lo que buscabas</h3>
				<h4>utiliza nuestro menu para volver a intentarlo</h4>
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