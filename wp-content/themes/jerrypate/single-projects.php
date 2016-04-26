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

        <!-- Portfolio Single Gallery
        ============================================= -->
        <section id="slider" class="slider-parallax swiper_wrapper clearfix" style="height: 450px;">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">

                    <?php 

                    $images = get_field('gallery');

                    if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                                         <div class="swiper-slide" style="background-image: url('<?php echo $image['sizes']['large']; ?>')"></div>
                            <?php endforeach; ?>
                    <?php endif; ?>                    
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <script>
                jQuery(document).ready(function($){

                var spv = 1; 

                if ($(window).width()<800) spv=1; 

                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        autoplay: 2500,
                        slidesPerView: spv,
                        onSlideChangeEnd: function(swiper){
                            
                            $(window).resize(function(){ 
                                if ($(window).width()<800) {swiperSlider.params.slidesPerView = 1;} 
                                    else { swiperSlider.params.slidesPerView = 1; } 
                                });
                            $('#slider .swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                            });
                            $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                            });

                            if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                        }

                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });
                });
            </script>

        </section><!-- .portfolio-single-image end -->
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
                                    <li><span><i class="icon-th"></i>Size:</span><?php echo get_field('size',$post_id); ?></li>
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





        <?php include('partials/footer.php'); ?>