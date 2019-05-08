<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khonjkhobor
 */

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <!-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->

		<!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/bootstrap.min-V3.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.smartmenus.bootstrap.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.7.0/css/font-awesome.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
		<!-- <link rel="stylesheet" href="css/owl.theme.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/fontstyle.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/salvattore.css">
        <!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/style.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-123456789",
        enable_page_level_ads: true
        });
        </script>        

		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

      <div class="header-site">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="logo-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/khonjkhobor-new-logo.jpg" class="img-responsive" />
                    </div>
                </a>
              </div>
            </div>
          </div>
      </div>

      <div class="nav-wrapper">
        <div class="container-fluid">
            <div class="row no-padding-left-right">
                <div class="col">
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
     <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 4,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse navbar-collapse-1',
            'container_id'      => 'navbar',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
    ?>

    <?php 

        wp_nav_menu( array(
            'menu'              => 'secondary',
            'theme_location'    => 'secondary',
            'depth'             => 4,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse navbar-collapse-2',
        'container_id'      => 'navbar',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );

    ?>
                        </div>
                </div>
            </div>
        </div>
      </div>
