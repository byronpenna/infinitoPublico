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
</head>
<body>
	<header>
		<?php 
			// menu universal 
			$this->load->view("parts/menu.php");
		?>
		<div class="divSlider row marginNull">
			<img src=<?php echo base_url("Content/img/generales/slider/paisajeCor.png") ?> >
		</div>
	</header>
	<!-- Otra carga -->
		<?php 
			// scripts universales
			$this->load->view("parts/scripts.php")
		?>
		<script type="text/javascript" src=<?php echo base_url("Content/js/Welcome/script.js") ?> ></script>
</body>
</html>