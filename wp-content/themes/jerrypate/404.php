<?php

include('partials/header-pages.php'); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
				<div class="container clearfix text-center">
					<div class="content-wrap">
						<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
						<h2>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Go to Homepage', 'html5blank' ); ?></a>
						</h2>
					</div>
				</div>
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>



<?php include('partials/footer.php'); ?>
