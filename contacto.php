<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Burger Club Brothers | Hamburguesas al carbón</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="assets/images/faviconbcbs.png" type="image/png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="https://kit.fontawesome.com/61ab49a963.js" crossorigin="anonymous"></script>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="bg-light">
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
						<li class="nav-item"><a class="nav-link text-white" href="menu.php">Menú</a></li>
						<li class="nav-item"><a class="nav-link text-white" href="nosotros.php">Nosotros</a></li>
						<li class="nav-item"><a class="nav-link text-white" href="galeria.php">Galería</a></li>
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>-->
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li>-->
						<li class="nav-item active"><a class="nav-link" href="contacto.php">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>No le mandes mensaje a tu ex, mejor a nosotros y aquí sí te responderemos</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Contact -->
	<div class="map-full">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d859.6492201372472!2d-98.93851687550081!3d19.382741560300815!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e32dc5a65137%3A0xb713d25d1e9d02b0!2sBurger%20Club%20Brothers!5e0!3m2!1ses!2smx!4v1620339719345!5m2!1ses!2smx" class="w-100" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Dudas o sugerencias</h2>
						<p>Envíanos un mensaje y te lo responderemos a la mayor brevedad posible</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Ingresa tu correo" id="email" class="form-control" name="name" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<!--<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" required data-error="Please Select Person">
										<option disabled selected>Please Select Person*</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
							</div>-->
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" id="message" placeholder="Ingresa tu mensaje" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Enviar</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container text-center">
			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-6 mr-5">
					<h3 class="text-center">Burger Club Brothers</h3>
					<p>Suscríbete a nuestro boletín o síguenos en nuestras redes sociales para conocer ofertas exclusivas y conoce nuestros horarios de apertura.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Suscríbete</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Dirección de e-mail..." type="email">
							<button type="submit" class="submit">Recibir ofertas exclusivas</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/BurgerClubBrothers/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/burgerclubbrothersoficial/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<!-- <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
						<!-- <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> -->
						<!-- <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 ml-5">
					<h3>Horario</h3>
					<p><span class="text-color">Viernes y sábados<br></span> 05:00 pm - 12:00 pm</p>
					<p><span class="text-color">Domingos de carnita asada<br>(Próximamente)<br></span> 03:00 pm a 08:00 pm</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Todos los derechos reservados. &copy; 2021 <a href="#">Burger Club Brothers</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<!-- ALL JS FILES -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->

	<script src="assets/js/jquery.superslides.min.js"></script>
	<script src="assets/js/images-loded.min.js"></script>
	<script src="assets/js/isotope.min.js"></script>
	<script src="assets/js/baguetteBox.min.js"></script>
	<script src="assets/js/jquery.mapify.js"></script>
	<script src="assets/js/form-validator.min.js"></script>
	<script src="assets/js/contact-form-script.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>