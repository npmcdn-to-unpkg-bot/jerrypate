<?php 

include('partials/header-pages.php'); ?>


<?php 

/*********************************************/
/*         
    Projects
*/
/*********************************************/

if (have_posts()): while (have_posts()) : the_post();
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $post_id = get_the_ID();
        ?>




<!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-center">
            <div class="container clearfix">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </section><!-- #page-title end -->


<section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Portfolio Single Gallery
                    ============================================= -->
                    <div class="col_full portfolio-single-image" style="margin-bottom:0px;">
                        <div class="fslider" data-arrows="true" data-animation="slide">
                            <div class="flexslider nomarginbottom">
                                <div class="slider-wrap">
                                    <?php 
                            $images = get_field('gallery');

                            if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                                 <div class="slide"><img src="<?php echo $image['sizes']['large']; ?>" alt=""></div>
                                    <?php endforeach; ?>
                            <?php endif; ?>         
                                </div>
                            </div>
                        </div>
                    </div><!-- .portfolio-single-image end -->

                </div><!-- .portfolio-carousel end -->

            </div>

        </section><!-- #content end -->
<!-- Content============================================= -->


        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                   

                    <!-- Portfolio Single Content
                    ============================================= -->
                    <div class="col_two_third portfolio-single-content nobottommargin">

                        <!-- Portfolio Single - Description
                        ============================================= -->
                        <div class="fancy-title title-dotted-border">
                            <h2>Project Info:</h2>
                        </div>
                            <p><?php echo get_field('content',$post_id); ?></p>
        
                      
                        <!-- Portfolio Single - Description End -->

                    </div><!-- .portfolio-single-content end -->

                     <div class="col_one_third col_last nobottommargin">

                        <!-- Portfolio Single - Meta
                        ============================================= -->
                        <div class="panel panel-default events-meta">
                            <div class="panel-body">
                                <ul class="portfolio-meta nobottommargin">
                                    <li><span><i class="icon-location"></i>Location:</span><?php echo get_field('location',$post_id); ?></li>
                                    <li><span><i class="icon-th"></i>Type:</span><?php echo get_field('type',$post_id); ?></li>
                                    <li><span><i class="icon-dollar"></i>Cost:</span><?php echo get_field('cost',$post_id); ?></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Portfolio Single - Meta End -->

                    </div>

                    <div class="clear"></div>

    <?php endwhile;
endif;

?>

            </div>

        </section><!-- #content end -->

<!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>



        <?php include('partials/footer.php'); ?>