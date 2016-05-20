<?php 

include('partials/header-pages.php'); ?>

 <section id="content">

    <div class="content-wrap nobottompadding">

        <div class="container clearfix" style="text-align: center;">
            <?php
            //list terms in a given taxonomy (useful as a widget for twentyten)
            $taxonomy = 'category';
            $tax_terms = get_terms($taxonomy);
            ?>
            <ul id="portfolio-filter">
            <li class="activeFilter"><a href="#" data-filter="*">All</a></li>
            <?php
            foreach ($tax_terms as $tax_term) {
            echo '<li><a href="#" data-filter=".pf-' . $tax_term->slug .'">' . $tax_term->name . '</a></li>';
            }
            ?>
            </ul>

        </div>


        <?php 

        /*********************************************/
        /*         
            Projects
        */
        /*********************************************/

        $args = array(
            'post_type' => 'projects',
            'posts_per_page' => 10
        );

        $count_posts = wp_count_posts('projects')->publish;

        echo '<input type="hidden" id="totalProjects" value="' . $count_posts . '">';

        $panels = new WP_Query($args); ?>

        <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry grid-container clearfix">
        <?php


        if ($panels->have_posts()) {
            while ($panels->have_posts()) {
                $panels->the_post(); 
                $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'portfolio' );
                $post_id = get_the_ID();
                $cat = get_the_terms($post_id,'category');
                ?>

                <!-- Portfolio Items
                ============================================= -->
                

                    <article class="portfolio-item pf-<?php echo $cat[0]->slug ?>">
                        <div class="portfolio-image">
                            <a href="<?php echo get_the_permalink(); ?>">

                                <?php the_post_thumbnail('portfolio'); ?>
                            </a>
                        </div>
                        <a href="<?php echo get_the_permalink(); ?>">
                        <div class="portfolio-overlay">
                            <div class="portfolio-desc">
                                <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            </div>
                        </div>
                        </a>
                    </article>

                        <?php }
                    }

                    ?>
                </div><!-- #portfolio end -->
                

                <!-- Portfolio Script
                ============================================= -->
                <script type="text/javascript">


                    jQuery(window).load(function(){

                        var $container = $('#portfolio');

                        $container.isotope({ transitionDuration: '0.65s' });

                        $('#portfolio-filter a').click(function(){
                            $('#portfolio-filter li').removeClass('activeFilter');
                            $(this).parent('li').addClass('activeFilter');
                            var selector = $(this).attr('data-filter');
                            $container.isotope({ filter: selector });
                            return false;
                        });

                        $('#portfolio-shuffle').click(function(){
                            $container.isotope('updateSortData').isotope({
                                sortBy: 'random'
                            });
                        });

                        $(window).resize(function() {
                            $container.isotope('layout');
                        });

                        var src= window.location.href;
                        var query = src.substring(src.indexOf("?"));

                        var query_vals = query.split("&");
                        var queries = {};

                        var count = 1;

                        for (var i = 0; i < query_vals.length; i++) {
                        var name_val = query_vals[i].split('=');

                        if (name_val[0].indexOf('?') == -1) {
                            var query_name = name_val[0];
                        } else {
                            var query_name = name_val[0].replace('?','');
                        }

                        queries[query_name] = name_val[1];
                          count++;
                        }



                        if (src.indexOf("?") != -1) {
                            $('#portfolio-filter li').removeClass('activeFilter');
                            $('#portfolio-filter').find('[data-filter=".pf-' + query_name + '"]').parent().addClass('activeFilter');
                            var $container = $('#portfolio');
                            $container.isotope({ filter: '.pf-' + query_name });
                            return false;
                        }

                    });

                </script><!-- Portfolio Script End -->

        </div>
        <a href="javascript://" id="loadMore">Load more</a>
        </section><!-- #content end -->

    <style type="text/css">
        #portfolio {
            opacity: 1;
             transition: all .2s ease-in-out;
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
        }
        #portfolio.loading {
            opacity: .7;
           
        }
    </style>
    <input type="hidden" id="paged" value="1">
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script type='text/javascript'>
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

    

    jQuery(document).ready(function($){

        $('#loadMore').click(function(){
            var paged = parseInt($('#paged').val()) + 1;
            $('#paged').val(paged);

            $('#portfolio').addClass('loading');
            var filter = $('.activeFilter').find('a').attr('data-filter');
            
            // Limit to 10 posts per pull unless all is selected, then do 16
            if (filter == '*') {
                var count = 16;
            } else {
                var count = 10;
                var original = filter;
                filter = filter.substr(4);
            }

            var data = {
                action: 'ajax_pagination',
                count: count,
                filter: filter,
                paged: paged
            }

            $.post(ajaxurl, data, function(response) {

                var $container = $('#portfolio');
                $container.isotope('destroy');

                $('#portfolio').append(response);
                
                $container.isotope({ transitionDuration: '0.65s' });
                $container.imagesLoaded(function(){
                    $container.isotope({ //triggering isotope
                        itemSelector: '.portfolio-item'
                    });
                    var $portfolioOverlayEl = $('.portfolio-overlay');
                    
                    if( $portfolioOverlayEl.length > 0 ){
                        $portfolioOverlayEl.each(function() {
                            var element = $(this);
                            if( element.find('.portfolio-desc').length > 0 ) {
                                var portfolioOverlayHeight = element.outerHeight();
                                var portfolioOverlayDescHeight = element.find('.portfolio-desc').outerHeight();
                                var portfolioOverlayIconHeight = 0;
                                var portfolioOverlayMiddleAlign = ( portfolioOverlayHeight - portfolioOverlayDescHeight - portfolioOverlayIconHeight ) / 2
                                element.find('.portfolio-desc').css({ 'margin-top': portfolioOverlayMiddleAlign });
                            }
                        });
                    }

                    $container.isotope('layout');

                    $('#portfolio').removeClass('loading');
                });
            });
            

        });

        $('#portfolio-filter li a').click(function(){
            $('#loadMore').fadeOut();
            $('#paged').val(1);
            $('#portfolio').addClass('loading');
            var filter = $(this).attr('data-filter');
            var paged = $('#paged').val();

            
            // Limit to 10 posts per pull unless all is selected, then do 16
            if (filter == '*') {
                var count = 10;

            } else {
                var count = 10;
                var original = filter;
                filter = filter.substr(4);
            }

            var data = {
                action: 'ajax_pagination',
                count: count,
                filter: filter,
                paged: paged
            }



            $.post(ajaxurl, data, function(response) {

                var $container = $('#portfolio');
                $container.isotope('destroy');

                
                $('#portfolio').html(response);

                
                $container.isotope({ transitionDuration: '0.65s' });
                    $container.imagesLoaded(function(){
                        $container.isotope({ //triggering isotope
                            itemSelector: '.portfolio-item'
                        });
                        var $portfolioOverlayEl = $('.portfolio-overlay');
                        
                        if( $portfolioOverlayEl.length > 0 ){
                            $portfolioOverlayEl.each(function() {
                                var element = $(this);
                                if( element.find('.portfolio-desc').length > 0 ) {
                                    var portfolioOverlayHeight = element.outerHeight();
                                    var portfolioOverlayDescHeight = element.find('.portfolio-desc').outerHeight();
                                    var portfolioOverlayIconHeight = 0;
                                    var portfolioOverlayMiddleAlign = ( portfolioOverlayHeight - portfolioOverlayDescHeight - portfolioOverlayIconHeight ) / 2
                                    element.find('.portfolio-desc').css({ 'margin-top': portfolioOverlayMiddleAlign });
                                }
                            });
                        }

                        $container.isotope('layout');

                        $('#portfolio').removeClass('loading');
                    });

                    $('#loadMore').fadeIn();
                // $container.isotope('layout')
            });
            

        })
    });

    </script>


<?php include('partials/footer.php'); ?>