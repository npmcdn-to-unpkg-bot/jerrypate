<?php 

/*
Template Name: Projects
*/

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
                    <li class="activeFilter"><a href="#" data-filer="*">All</a></li>
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
            'post_type' => 'projects'
        );

        $panels = new WP_Query($args);

        echo '<div id="portfolio" class="portfolio-nomargin portfolio-notitle portfolio-full clearfix">';


        if ($panels->have_posts()) {
            while ($panels->have_posts()) {
                $panels->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                $post_id = get_the_ID();
                $cat = get_the_terms($post_id,'category');
                ?>

                <!-- Portfolio Items
                ============================================= -->
                

                    <article class="portfolio-item pf-<?php echo $cat[0]->slug ?>">
                        <a href="<?php echo get_the_permalink(); ?>"></a>
                        <div class="portfolio-image">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <img src="<?php echo $url ?>">
                            </a>
                             <div class="portfolio-overlay">
                                 <a href="<?php echo get_the_permalink(); ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        </div>
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

                    });

                </script><!-- Portfolio Script End -->

        </div>
        </section><!-- #content end -->


<?php include('partials/footer.php'); ?>