<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>Viajes Oaxaca con experiencia</title>
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/owl.theme.css">
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/flexslider.css" type="text/css">
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/main.css">
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/helperCss.css">
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/plugins/font-awesome/css/all.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo URL; ?>" title="Inicio"><i class="ion-paper-airplane"></i> Oaxaca <span>viajes con experiencia</span></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php echo URL;?>/inicio">Inicio</a></li>
						<li><a href="<?php echo URL; ?>/acerca-de-nosotros">Acerca de nosostros</a></li>
						<li><a href="<?php echo URL; ?>/servicios">Servicios</a></li>
						<li><a href="<?php echo URL; ?>/contacto">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>
			<?php
				if (file_exists($path_modulo)) {
					require_once $path_modulo;
				} else {
					die("<pre>Error al cargar el modulo <b>" . $modulo . "</b>. No existe el archivo <b>" .$conf[$modulo]['file'] . "</b></pre>");
				}
			?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						&copy; Copyright Oaxaca Viajes Con Experiencia
					</div>
				</div>
				<div class="col-xs-4">
					Sitio desarrollado por <a href="https://discozip.online" target="_blanck">DICOZIP</a>
				</div>
				<div class="col-xs-4">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</footer>


	<script src="<?php echo URL; ?>/assets/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo URL; ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo URL; ?>/assets/js/contact.js"></script>
	<script src="<?php echo URL; ?>/assets/js/jquery.flexslider.js"></script>
	<script src="<?php echo URL; ?>/assets/js/script.js"></script>
	<?php
		if (file_exists($path_footer)) {
			require_once $path_footer;
		} else {
			die("<pre>Error al cargar el footer <b>" . $conf[$modulo]['footer'] . "</b>. No existe el archivo <b>" .$conf[$modulo]['footer'] . "</b></pre>");
		}
	?>
</body>
</html>