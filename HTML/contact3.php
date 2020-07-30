<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php require_once("partials/head.php"); ?>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<?php require_once("partials/header.php"); ?>
							<div class="col-xs-12 col-sm-9 col-lg-4 text-center text-sm-right page_breadcrumbs">
								<h1 class="highlight2">Contacto</h1>
								
							</div>
						</div>
					</div>
				</header>
			</div>
			<section class="ls section_padding_top_130 section_padding_bottom_130">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-phone5"></i> </div>
								<p> <span class="grey">Teléfono:</span> 2706-4443<br> <span class="grey">Fax:</span> +12 345 678 9123 </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-location2"></i> </div>
								<p> Av. 18 de Julio 841 Of. 102<br> Montevido, Uruguay </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-world"></i> </div>
								<p>info@mvdasesores.com</p>
								<p> <a href="#" class="social-icon color-icon socicon-twitter"></a> <a href="#" class="social-icon color-icon socicon-facebook"></a> <a href="#" class="social-icon color-icon socicon-google"></a> <a href="#" class="social-icon color-icon socicon-pinterest"></a>									</p>
							</div>
						</div>
					</div>
					<div class="row topmargin_60">
						<div class="col-sm-12 to_animate">
							<form class="contact-form ds parallax overlay_color with_padding big-padding columns_padding_10" method="post" action="./">
								<div class="row">
									<div class="col-sm-6">
										<p class="form-group"> <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nombre Completo">											</p>
										<p class="form-group"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">											</p>
										<p class="form-group"> <label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-phone highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Teléfono">											</p>
									</div>
									<div class="col-sm-6">
										<p class="contact-form-message form-group"> <label for="message">Message</label> <i class="fa fa-comment highlight" aria-hidden="true"></i> <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Mensaje"></textarea> </p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<p class="contact-form-submit text-center topmargin_30"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button min_width_button">Enviar Mensaje</button> </p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<section class="ls page_map" data-address="93 Spring St New York, NY 10012 USA" data-markers='[
    {
        "markerAddress": "120 Madison St, Brooklyn, NY 11216, USA",
        "markerTitle": "Second Marker",
        "markerDescription": "Second Marker Description",
        "markerIconSrc": "images/map_marker_icon.png"
    },
    {
        "markerAddress": "111 Bright St Jersey City, NJ 07302 USA",
        "markerTitle": "Third Marker",
        "markerDescription": "Third Marker Description",
        "markerIconSrc": "images/map_marker_icon.png"
    }
    ]'>
				<!-- marker description and marker icon goes here -->
				<div class="map_marker_description">
					<h3>Map Title</h3>
					<p>Map description text</p> <img class="map_marker_icon" src="images/map_marker_icon.png" alt=""> </div>
			</section>
			<section id="footer-subscribe" class="ds section_padding_top_90 section_padding_bottom_90">
				<div class="container">
					<div class="row flex-wrap v-center">
						<div class="col-xs-12 col-md-6 text-center text-md-left">
							<h2 class="section_header">Stay In Touch</h2>
						</div>
						<div class="col-xs-12 col-md-6 text-center">
							<div class="widget widget_mailchimp">
								<form class="signup" action="./" method="get">
									<div class="form-group"> <input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address"> <button type="submit" class="theme_button">Subscribe</button> </div>
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php require_once("partials/footer.php"); ?>
</body>

</html>