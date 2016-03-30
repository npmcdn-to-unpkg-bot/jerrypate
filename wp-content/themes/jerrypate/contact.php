<?php 

/* 
Template Name: Contact
*/

include('partials/header-pages.php'); ?>


  <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Contact</h1>
                <span>Get in Touch with Us</span>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            
<div class="content-wrap"
                

<div id="section-contact" class="page-section notoppadding">
	<div class="container clearfix">
					<div class="row noleftmargin norightmargin  common-height">
						<div id="headquarters-map" class="col-md-8 col-sm-6 gmap hidden-xs"></div>
						<div class="col-md-4 col-sm-6" style="background-color: #fff;">
							<div class="col-padding max-height">
								<h3 class="font-body t400 ls1">Locations</h3>

								<div class="responsive-center">
								<div style="font-size: 16px; line-height: 1.7;">
									<address style="line-height: 1.7;">
										<strong>Pensacola, FL</strong><br>
										<a href="https://www.google.com/maps/place/301+Schubert+Dr,+Pensacola,+FL+32504/@30.4908381,-87.2315907,17z/data=!3m1!4b1!4m2!3m1!1s0x8890bffba7a23bb7:0x6720429809d6f25a" target="_blank">301 Schubert Drive<br>
										Pensacola, FL 32504</a><br>
									</address>

									<address style="line-height: 1.7;">
										<strong>Birmingham, AL</strong><br>
										<a href="https://www.google.com/maps/place/604+28th+St+N,+Birmingham,+AL+35203/@33.5244948,-86.8001485,17z/data=!3m1!4b1!4m2!3m1!1s0x88891ba3ea8dcd8f:0xcf16a002752fb9a9" target="_blank">604 28th Street North<br>
										Birmingham, AL 35203</a><br>
									</address>

									<abbr title="Phone Number"><strong>Phone:</strong></abbr> <a href="tel:+18007007001"> (800) 700-7001</a><br>
									<!-- <abbr title="Fax"><strong>Hours:</strong></abbr>  M-F 8am-5pm<br> -->
									<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:qg@qgarchitects.com"> qg@qgarchitects.com</a>
								</div>
								</div>
							</div>
						</div>
					</div>

					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
					<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/./js/jquery.gmap.js"></script>

					<script type="text/javascript">

						jQuery(window).load( function(){
							jQuery('#headquarters-map').gMap({
								address: 'PENSACOLA, FLORIDA',
								maptype: 'ROADMAP',
								zoom: 14,
								markers: [
									{
										address: "Pensacola, Florida",
										html: "Pensacola, Florida",
										icon: {
											image: "<?php bloginfo('template_url'); ?>/images/icons/map-icon-red.png",
											iconsize: [40, 40],
											iconanchor: [14,49]
										}
									}
								],
								doubleclickzoom: false,
								controls: {
									panControl: false,
									zoomControl: false,
									mapTypeControl: false,
									scaleControl: false,
									streetViewControl: false,
									overviewMapControl: false
								},
								styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
							});
						});

					</script>

					<div class="container clearfix">

            </div>

        </section><!-- #content end -->

        </section><!-- #content end -->


<?php include('partials/footer.php'); ?>
