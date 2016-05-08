<?php 

/* 
Template Name: Testimonials
*/


include('partials/header-pages.php'); ?>




  <!-- Content
        ============================================= -->

            <div class="section dark nobottommargin notopmargin" style="background-image: url('<?php echo bloginfo('template_url'); ?>/images/testimonial.jpg'); padding: 100px 0; background-size: cover; background-position: center center;">
                <div style="background: #000; opacity: .4; width: 100%; height: 100%; top: 0px; left: 0px; right: 0px; bottom: 0px; position:absolute; z-index: 0;"></div>
                <div class="heading-block center relative">
                    <h3>Hear from our clients</h3>
                </div>
                <div class="container clearfix">
                    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                        <div class="flexslider">
                             <div class="slider-wrap">
                    <!-- Posts
                    ============================================= -->

                        <?php 
        
                        $args = array( 'posts_per_page' => -1 );

                        $wp_query = new WP_Query($args);

                        ?>
                        
                        <?php if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                            <!-- article -->
                            
                                
                                             <div class="slide">
                                                <div class="testi-image">
                                                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                                        <?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="testi-content">
                                                        <p><?php echo get_the_excerpt(); ?></p>
                                                    <div class="testi-meta">
                                                        <?php the_title(); ?>
                                                        <span><?php echo get_field('position',$post_id); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        
                            
                            <!-- /article -->

                        <?php endwhile; ?>

                        <?php else: ?>

                        <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include('partials/footer.php'); ?>