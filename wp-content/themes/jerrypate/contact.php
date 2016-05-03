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
	<div class="content-wrap"
		<div id="section-contact" class="page-section notoppadding">
			<div class="container clearfix">
				<div class="row noleftmargin norightmargin bottommargin common-height">
					<div class="col-md-8 col-sm-6">
						<img class="image_fade" src="<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</div>
					<div class="col-md-4 col-sm-6" style="background-color: #fff;">
						<div class="max-height">
							<h3 class="font-body t400 ls1">Locations</h3>
							<div class="responsive-center">
							<?php the_content();?>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
	<div class="container clearfix"></div>
</section><!-- #content end -->

						<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
<?php include('partials/footer.php'); ?>
