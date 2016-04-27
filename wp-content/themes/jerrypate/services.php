<?php

/* 
Template Name: Services
*/

include('partials/header-pages.php'); ?>



  <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Services</h1>
                <span>Jerry Pate Design is a professional services firm with particular focus on Landscape Architecture, Golf Course Architecture, Irrigation Design, Site Planning, and Project Management.</span>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Posts
                    ============================================= -->

                    <div class="container clearfix">
                        
                        <?php

                        $count = 0;

                        $args = array(
                            'post_type' => 'services',
                            'order' => 'ASC',
                            'posts_per_page' => -1
                        );

                        $services = new WP_Query($args);

                        if ($services->have_posts()) {
                            while ($services->have_posts()) {
                                $services->the_post(); 
                                $count++;
                                $title = get_the_title();
                                $content = get_field('content',$post->ID);
                                $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                $url = get_field('view_projects_link',$post->ID);
                                ?>
                                    <?php

                                    // if this is odd numbered
                                    if ($count % 2 != 0) { ?>
                                        <div class="col_two_fifth nobottommargin">
                                            <a href="<?php echo $url ?>"><img class="image_fade" src="<?php echo $img ?>" alt="<?php echo $title ?>"></a>
                                        </div>

                                        <div class="col_three_fifth nobottommargin col_last">
                                            <div class="heading-block nobottommargin">
                                                <h2><a href="<?php echo $url ?>"><?php echo $title ?></a></h2>
                                            </div>
                                            <?php echo $content; ?>

                                            <a href="<?php echo $url ?>"class="more-link">View Projects</a>
                                        </div>

                                    <?php   } 
                                            else // if even numbered
                                            { 
                                    ?>

                                        <div class="col_three_fifth">
                                            <div class="heading-block nobottommargin">
                                                <h2><a href="<?php echo $url ?>"><?php echo $title ?></a></h2>
                                            </div>
                                            <?php echo $content ?>
                                            <a href="<?php echo $url ?>"class="more-link">View Projects</a>
                                        </div>
                                        
                                        <div class="col_two_fifth col_last">
                                            <a href="<?php echo $url ?>"><img class="image_fade" src="<?php echo $img ?>" alt="<?php echo $title ?>"></a>
                                        </div>
                                    <?php } ?>
                                    
                                <div class="clear"></div><div class="line"></div>
                        <?php 
                                
                            } 
                        } 

                        ?>

                    </div>


                </div>

            </div>

        </section><!-- #content end -->




<?php include('partials/footer.php'); ?>


