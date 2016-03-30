<?php 

/* 
Template Name: News
*/


include('partials/header-pages.php'); ?>

<!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>News</h1>
                <span>Our Latest News</span>
            </div>

        </section><!-- #page-title end -->

  <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Posts
                    ============================================= -->

                        <div id="posts" class="small-thumbs">

                                        <?php 
                        
                                        $args = array( 'posts_per_page' => -1 );

                                        $wp_query = new WP_Query($args);

                                        ?>
                                        
                                        <?php if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                                            <!-- article -->
                                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                <div class="entry clearfix">
                                                    <div class="entry-image">
                                                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                                        
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> by <?php the_author_meta('first_name'); ?>">
                                                                <?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
                                                                </a>
                                                                <?php endif; ?>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                        </div>
                                                        <ul class="entry-meta clearfix">
                                                            <li><i class="icon-calendar3"></i><?php the_date(); ?></li>
                                                        </ul>
                                                        <div class="entry-content">
                                                            <p><?php the_excerpt(); ?></p>
                                                            <a href="<?php the_permalink(); ?>"class="more-link">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </article>
                                            <!-- /article -->

                                        <?php endwhile; ?>

                                        <?php else: ?>

                                        <?php endif; ?>

                            </div><!-- #posts end -->

                </div>

            </div>

        </section><!-- #content end -->

        
<?php include('partials/footer.php'); ?>