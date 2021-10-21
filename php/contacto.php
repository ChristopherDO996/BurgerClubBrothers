<?php include 'views/mainPage/head.php'; ?>
<?php include 'views/mainPage/header.php'; ?>

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

<?php include 'views/mainPage/footer.php'; ?>
<?php include 'views/mainPage/endpage.php'; ?>