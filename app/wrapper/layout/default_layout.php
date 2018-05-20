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
		<!-- Home -->
			<div id="header">
				<div class="flexslider">
					<ul class="slides">
						<li class="slider-item" style="background-image: url('<?php echo URL; ?>/slider/item1/')">
							<div class="intro container">
								<div class="inner-intro">
									<h1 class="header-title">
										<span>Viajar</span> siempre "Que buena idea"
									</h1>
									<p class="header-sub-title">
										una experiencia que te deja sin palabras.
									</p>
									<button class="btn custom-btn">
										Ver ahora
									</button>
								</div>
							</div>
						</li> <!-- /.slider-item -->
						<li class="slider-item" style="background-image: url('<?php echo URL; ?>/slider/item2/')">
							<div class="intro">
								<div class="inner-intro">
									<h1 class="header-title">
										<span>Viajar</span> es una manera de <span>vivir</span>
									</h1>
								</div>
							</div>
						</li> <!-- /.slider-item -->
					</ul> <!-- /.slides -->
				</div> <!-- /.flexslider -->
			</div> <!-- /#header -->
		<!-- Find a Tour -->
			<section class="tour section-wrapper container">
				<h2 class="section-title">
					Encontrar un viaje por sitios de interes
				</h2>
				<p class="section-subtitle">
					¿A dónde quieres ir?
				</p>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<form role="form" class="form-dropdown">
							<div class="form-group">
								<label for="sel1">Selecciona un lugar de la lista:</label>
								<select class="form-control border-radius" id="sel1">
									<option>Mazunte</option>
									<option>Puerto Ángel</option>
									<option>Zipolite</option>
								</select>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="input-group">
							<input type="text" class="form-control border-radius border-right" placeholder="Día de llegada"/>
							<span class="input-group-addon border-radius custom-addon">
								<i class="ion-ios-calendar"></i>
							</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="input-group">
							<input type="text" class="form-control border-radius border-right" placeholder="Día de partida"/>
							<span class="input-group-addon border-radius custom-addon">
								<i class="ion-ios-calendar"></i>
							</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="btn btn-default border-radius custom-button">
							Buscar
						</div>
					</div>
				</div>
			</section> <!-- /.tour -->
			<?php
				if (file_exists($path_modulo)) {
					require_once $path_modulo;
				} else {
					die("<pre>Error al cargar el modulo <b>" . $modulo . "</b>. No existe el archivo <b>" .$conf[$modulo]['file'] . "</b></pre>");
				}
			?>
<!-- Our Blazzing offers -->
	<section class="offer section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Nuestras ofertas
			</h2>
			<p class="section-subtitle">
				Aprovecha estas ofertas de temporada baja.
			</p>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-social-euro"></i>
						</div>
						<h3>
							Precios económicos.
						</h3>
						<p>
							En esta "temporada baja" tenemos los mejores precios en hospedaje y comida.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-home"></i>
						</div>
						<h3>
							Comodidad.
						</h3>
						<p>
							A tan solo 20 mtrs. (Aprox.) de la playa.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-android-bus"></i>
						</div>
						<h3>
							Transporte.
						</h3>
						<p>
							Transporte seguro a solo metros de su habitación.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-locked"></i>
						</div>
						<h3>
							Seguridad.
						</h3>
						<p>
							Habitaciones seguras y confiables.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.offer -->
<!-- Top place to visit -->
	<section class="visit section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Lugares a visitar.
			</h2>
			<p class="section-subtitle">
				Visita las playas aledañas a nuestras habitaciones.
			</p>

			<div class="owl-carousel visit-carousel" id="">
				<div class="item">
					<img src="<?php echo URL; ?>/visitplace/item1/" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="<?php echo URL; ?>/visitplace/item2/" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="<?php echo URL; ?>/visitplace/item3/" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="<?php echo URL; ?>/visitplace/item1/" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="<?php echo URL; ?>/visitplace/item2/" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="<?php echo URL; ?>/visitplace/item3/" alt="visit-image" class="img-responsive visit-item">
				</div>
			</div>
		</div> <!-- /.container -->
	</section> <!-- /.visit -->

<div class="offer-cta">
	<div class="container">
		<div class="offering">
			<div class="percent">
				<span>15%</span> de descuento
			</div>
			<div class="FTour">
				en <strong>Viaje Familiar</strong>
			</div>
			<a class="btn btn-default price-btn" href="#">
				Consulta nuestros precios
			</a>
		</div> <!-- /.offering -->
	</div> <!-- /.container -->
</div> <!-- /.offer-cta -->

	<section class="additional-services section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Atractivos adicionales
			</h2>
			<p class="section-subtitle">
				<!-- Lorem Ipsum is simply dummy text of the industry. -->
			</p>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="<?php echo URL; ?>//atractives/item1/" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Fotografia
							</h4>
							<p class="add-srvc">
								Disfruta de los mejores amaneceres y puestas de sol.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->

				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="<?php echo URL; ?>/atractives/item2/" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Ciclismo
							</h4>
							<p class="add-srvc">
								Disfruta de los mejores paisajes haciendo un buen ejercicio .
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->
				
				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="<?php echo URL; ?>/atractives/item3/" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Senderismo
							</h4>
							<p class="add-srvc">
								Las mejores rutas de caminata con flora y fauna espectacular.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->

				<!-- <div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="<?php echo URL; ?>/atractives/item4/" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Skiing
							</h4>
							<p class="add-srvc">
								Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
							</p>
						</div>
					</div> 
				</div> -->

				<!-- <div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="<?php echo URL; ?>/atractives/item5/" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Sea beach
							</h4>
							<p class="add-srvc">
								Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
							</p>
						</div>  /.add-srvc-detail 
					</div> <!-- /.custom-table 
				</div> <!-- /.col-md-4 col-sm-6  -->

				<!-- <div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="<?php echo URL; ?>/atractives/item6/" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Hill tracking
							</h4>
							<p class="add-srvc">
								Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
							</p>
						</div> <!-- /.add-srvc-detail 
					</div> <!-- /.custom-table 
				</div> <!-- /.col-md-4 col-sm-6  -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.Additional-services -->


	<div class="section-wrapper sponsor">
		<div class="container">
			<div class="owl-carousel sponsor-carousel">
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="<?php echo URL; ?>/assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
			</div> <!-- /.owl-carousel -->
		</div> <!-- /.container -->
	</div> <!-- /.sponsor -->

	<div class="subscribe section-wrapper">
		<a class="brand-logo" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Euro <span>Travel</span></a>
		<p class="subscribe-now">
			Subscribe to our Newsletter
		</p>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
					<div class="input-group">
						<input type="email" class="form-control border-radius" placeholder="Email address">
						<span class="input-group-btn">
							<button class="btn btn-default border-radius custom-sub-btn" type="button">DONE</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div>
		</div>
					
	
	
		<ul class="social-icon">
			<li><a href="#"><i class="ion-social-twitter"></i></a></li>
			<li><a href="#"><i class="ion-social-facebook"></i></a></li>
			<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
			<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
		</ul>
	</div> <!-- /.subscribe -->

		
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						&copy; Copyright Euro Travels
					</div>
				</div>
				<div class="col-xs-4">
					Theme by <a href="http://www.themewagon.com">THEMEWAGON</a>
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






</body>
</html>