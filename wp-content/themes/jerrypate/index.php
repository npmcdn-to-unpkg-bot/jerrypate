
        <?php include('partials/header.php'); ?>

        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/redeemer.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Christ Our Redeemer</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/church3.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">St. Sylvester Catholic Church</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/building.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Global Learning Academy Elementary School</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/beach.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Sanders Beach</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/fire.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Pensacola Beach Fire Station</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

         <script>
                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        scroll: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        loop: true,
                        autoplay: 3500,
                        speed: 650,
                        progress: true,
                        onProgressChange: function(swiper){
                            for (var i = 0; i < swiper.slides.length; i++){
                                var slide = swiper.slides[i];
                                var progress = slide.progress;
                                var translate = progress*swiper.width;
                                var opacity = 1 - Math.min(Math.abs(progress),1);
                                slide.style.opacity = opacity;
                                swiper.setTransform(slide,'translate3d('+translate+'px,0,0)');
                            }
                        },
                        onTouchStart:function(swiper){
                            for (var i = 0; i < swiper.slides.length; i++){
                                swiper.setTransition(swiper.slides[i], 0);
                            }
                        },
                        onSetWrapperTransition: function(swiper, speed) {
                            for (var i = 0; i < swiper.slides.length; i++){
                                swiper.setTransition(swiper.slides[i], speed);
                            }
                        },
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeStart: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider').find('.swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                                if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                            });
                            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                                if($(this).find('.yt-bg-player').length > 0) {
                                    $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                                }
                            });
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
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

        </section>

     

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

</body>
</html>