<?php 

/* 
Template Name: About
*/

include('partials/header-pages.php'); ?>

  <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo bloginfo('template_url'); ?>/images/golfCourse.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

            <div class="container clearfix">
                <h1>Creating beauty on the outside,</h1>
                <span>to live better on the inside</span>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="small-thumbs">

                        <div class=" clearfix" style="margin: 0px 0px 0px 0px;">
                            <div class="entry-image">
                                <img class="image_fade" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                            </div>
                            <div class="entry-c">
                                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                                    <h4>About<span> Us</span></h4>
                                 </div>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    </article>
                    <?php endwhile; ?>
                    <?php else: ?>
                <?php endif; ?>
                </div>

            </div>

        </section><!-- #content end -->


     <!-- Content
        ============================================= -->
        <!-- <section id="content">

            <div class="section nobottommargin">

                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h2>We understand the entire picture from </h2>
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-6 topmargin bottommargin">

                                <div class="col_full">

                                    <div class="feature-box fbox-plain fbox-small fbox-dark">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-key"></i></a>
                                        </div>
                                        <h3>Owned</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard</p>
                                    </div>

                                </div>

                                <div class="col_full">

                                    <div class="feature-box fbox-plain fbox-small fbox-dark">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-truck"></i></a>
                                        </div>
                                        <h3>Operated</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard</p>
                                    </div>

                                </div>

                                <div class="col_full bottommargin">

                                    <div class="feature-box fbox-plain fbox-small fbox-dark">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-note"></i></a>
                                        </div>
                                        <h3>Designed</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard</p>
                                    </div>

                                </div>

                                <div class="col_full nobottommargin">

                                    <div class="feature-box fbox-plain fbox-small fbox-dark">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-grid"></i></a>
                                        </div>
                                        <h3>Built</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 topmargin bottommargin">

                                <div class="col_full">

                                    <div class="feature-box fbox-plain fbox-small fbox-dark">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-wrench"></i></a>
                                        </div>
                                        <h3>Maintenance</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard</p>
                                    </div>

                                </div>

                                <div class="col_full">

                                    <div class="feature-box fbox-plain fbox-small fbox-dark">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-square-check"></i></a>
                                        </div>
                                        <h3>Equipment</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard</p>
                                    </div>

                                </div>

                                <div class="col_full nobottommargin">

                                    <div class="feature-box fbox-plain fbox-small fbox-dark">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-drop"></i></a>
                                        </div>
                                        <h3>Irrigation</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        </div>
                    </div>
                </section> -->
                         <!-- Content
        ============================================= -->

<section id="page-title">
    <div class="container clearfix">
        <h1>Our Team</h1>
        <span>Our employees.....etc.</span>
    </div>

</section><!-- #page-title end -->


 <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                  <?php

                        $args = array(
                            'post_type' => 'members',
                            'order' => 'ASC',
                        );

                        $members = new WP_Query($args);

                        if ($members->have_posts()) {
                            while ($members->have_posts()) {
                                $members->the_post(); 
                                $title = get_the_title();
                                $content = get_field('content',$post->ID);
                                $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                $position = get_field('position',$post->ID);
                                ?>

                    <! Posts
                    ============================================= -->
                <div id="posts" class="small-thumbs">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <img class="people" src="<?php echo $img ?>" alt="<?php echo $title ?>">
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <div class="team-title"><h4><?php echo $title ?></h4></div>
                                    <span class="before-heading color"><?php echo $position ?></span>
                                </div>
                                <div class="entry-content">
                                    <p><?php echo $content; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }
                    }

                    ?>
                </div> 

            </div>

        </section><!-- #content end -->




        <!-- </section> --><!-- #content end -->

<?php include('partials/footer.php'); ?>

