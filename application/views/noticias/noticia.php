
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $noticia->titulo ?></title>
	<?php
		if($noticia->miniatura != ""){
			$data = array('imgFb' => $noticia->miniatura );	
		}else{
			$data = array();
		}
		// estilos universales
			$this->load->view("parts/estilos.php",$data);
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
		<div class="col-lg-3">
			<div class="fb-share-button" data-href=<?php echo site_url("Noticias/noticia/".$noticia->idNoticia) ?> data-layout="button_count"></div>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>