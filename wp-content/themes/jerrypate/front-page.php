<?php /* Template Name: Home */ include('partials/header.php'); ?>

<?php if (have_posts()): while (have_posts()) : the_post();

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


?>

 <section id="page-title" class="page-title-parallax page-title-dark force-full-screen full-screen dark" style="padding: 200px 0; background-image: url('<?php echo $url ?>'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div style="background: #000; opacity: .4; width: 100%; height: 100%; top: 0px; left: 0px; right: 0px; bottom: 0px; position:absolute; z-index: 0;"></div>
    <div class="container clearfix" style="position: relative; z-index: 2;">
        <?php the_content() ?>
        <div class="btn-play" data-animate="fadeInUp" data-delay="1000">
            <i onclick="activateVideo()" class="icon-play"></i>
         </div>
    </div>
</section><!-- #page-title end -->

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<div class="jp-modal hide">
    <div>
        <i class="icon-line-circle-cross" onclick="closeVideo()"></i>
        <iframe src="https://player.vimeo.com/video/166960903?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</div> 

<script>
jQuery(document).ready(function($) {

});

function activateVideo() {
    $('.jp-modal').removeClass('hide');
}

function closeVideo() {
    $('.jp-modal').addClass('hide');
}
</script>


    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

</body>
</html>