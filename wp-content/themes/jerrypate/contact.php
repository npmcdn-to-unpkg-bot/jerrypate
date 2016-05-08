<?php 

/* 
Template Name: Contact
*/

include('partials/header-pages.php'); ?>


  <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-mini">

            <div class="container clearfix">
                <h1><?php the_title(); ?></h1>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        	<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					
			<?php endif; ?>

<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Google Map
					============================================= -->
					<div class="col-md-6 bottommargin">

						<img class="image_fade" src="<?php the_post_thumbnail(); // Fullsize image for the single post ?>">

					</div><!-- Google Map End -->

					<div class="col-md-6">
					<div class="responsive-center">
					<h3 class="font-body t400 ls1">Contact</h3>
						<div class="col_half">
							<abbr title="Phone Number"><strong>Phone: </strong><br></abbr><a href="tel:+18007007001"> (800) 700-7001</a> <br> <a href="tel:+18504794653"> (850) 479-4653</a><br>
						</div><!-- Contact Info End -->
						<div class="col_half col_last">
							<abbr title="Email Address"><strong>Email: </strong><br></abbr><a href="mailto:jdp@jerrypate.com"> jdp@jerrypate.com</a>
						</div>
						<div class="clear"></div>
					<h3 class="font-body t400 ls1">Locations</h3>

						<!-- Contact Info
						============================================= -->
						<div class="col_half">
							<address>
								<strong>Pensacola, FL</strong><br>
								<a href="https://www.google.com/maps/place/301+Schubert+Dr,+Pensacola,+FL+32504/@30.4908381,-87.2315907,17z/data=!3m1!4b1!4m2!3m1!1s0x8890bffba7a23bb7:0x6720429809d6f25a" target="_blank">301 Schubert Drive <br>Pensacola, FL 32504</a>
							</address>
							<address>
								<strong>Birmingham, AL</strong><br>
								<a href="https://www.google.com/maps/place/604+28th+St+N,+Birmingham,+AL+35203/@33.5244948,-86.8001485,17z/data=!3m1!4b1!4m2!3m1!1s0x88891ba3ea8dcd8f:0xcf16a002752fb9a9" target="_blank">604 28th Street North <br>	Birmingham, AL 35203</a>
							</address>
						</div><!-- Contact Info End -->

						<div class="col_half col_last">
							<address>
								<strong>Memphis, TN</strong><br>
								<a href="https://www.google.com/maps/place/3850+Old+Getwell+Rd,+Memphis,+TN+38118/data=!4m2!3m1!1s0x887f861c8fcc2847:0xea7bcf364afdcb49?sa=X&ved=0ahUKEwiH_7m6wsnMAhWEJCYKHRMQCTAQ8gEIHDAA" target="_blank">3850 Old Getwell Rd <br> Memphis, TN 38118</a>
							</address>
							<address>
								<strong>Atlanta, GA</strong><br>
								<a href="https://www.google.com/maps?q=5350+Tulane+Dr+SW,+Atlanta,+GA+30336&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiksMfawsnMAhXGbiYKHYqSA8kQ_AUIBygB" target="_blank">5350 Tulane Dr SW <br>Atlanta, GA 30336</a>
							</address>
						</div>
						<div class="clear"></div>
					</div>
					</div>
				</div>
			</div>
		</section>


						<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
<?php include('partials/footer.php'); ?>
