<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Anne Grundhoefer" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/jerry_favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fixins.css" type="text/css">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/canvas.slider.fade.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>Jerry Pate Designs</title>

</head>

<body class="stretched home">

<!-- google analtics goes here-->

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">


<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <div class="mobile-hide">
                            <a href="<?php echo site_url(); ?>" class="standard-logo" data-light-logo="<?php bloginfo('template_url'); ?>/images/white.svg"><img src="<?php bloginfo('template_url'); ?>/images/jerry_white.svg" alt="Jerry Pate Designs Logo"></a>
                            <a href="<?php echo site_url(); ?>" class="retina-logo" data-light-logo="<?php bloginfo('template_url'); ?>/images/white.svg"><img src="<?php bloginfo('template_url'); ?>/images/jerry_white.svg" alt="Jerry Pate Designs Logo"></a>
                        </div>
                    </div><!-- #logo end -->

                    <div class="mobile-logo">
                        <div class="mobile-show">
                            <a href="<?php echo site_url(); ?>" class="standard-logo"><img src="<?php bloginfo('template_url'); ?>/images/jerry_logo.svg" alt="Logo"></a>
                        </div>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="style-3">

                        <?php wp_nav_menu(); ?>

                        

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->