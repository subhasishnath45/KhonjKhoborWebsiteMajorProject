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

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min-V3.css">
		<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.smartmenus.bootstrap.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.7.0/css/font-awesome.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
		<!-- <link rel="stylesheet" href="css/owl.theme.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/fontstyle.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

      <div class="header-site">
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <section class="logowriteup">khonj <span>khobor</span></section>
                </a>
              </div>
            </div>
          </div>
      </div>

      <div class="nav-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
    <!-- Left nav -->
    <ul class="nav navbar-nav">
            <li><a href="#">Live TV</a></li>
            <li><a href="#">Latest</a></li>
            <li><a href="#">India</a></li>
            <!-- <li><a href="#">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">A long sub menu <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
                        <li><a href="#">One more link</a></li>
                        <li><a href="#">Menu item 1</a></li>
                        <li><a href="#">Menu item 2</a></li>
                        <li><a href="#">Menu item 3</a></li>
                        <li><a href="#">Menu item 4</a></li>
                        <li><a href="#">Menu item 5</a></li>
                        <li><a href="#">Menu item 6</a></li>
                        <li><a href="#">Menu item 7</a></li>
                        <li><a href="#">Menu item 8</a></li>
                        <li><a href="#">Menu item 9</a></li>
                        <li><a href="#">Menu item 10</a></li>
                        <li><a href="#">Menu item 11</a></li>
                        <li><a href="#">Menu item 12</a></li>
                        <li><a href="#">Menu item 13</a></li>
                        <li><a href="#">Menu item 14</a></li>
                        <li><a href="#">Menu item 15</a></li>
                        <li><a href="#">Menu item 16</a></li>
                        <li><a href="#">Menu item 17</a></li>
                        <li><a href="#">Menu item 18</a></li>
                        <li><a href="#">Menu item 19</a></li>
                        <li><a href="#">Menu item 20</a></li>
                        <li><a href="#">Menu item 21</a></li>
                        <li><a href="#">Menu item 22</a></li>
                        <li><a href="#">Menu item 23</a></li>
                        <li><a href="#">Menu item 24</a></li>
                        <li><a href="#">Menu item 25</a></li>
                        <li><a href="#">Menu item 26</a></li>
                        <li><a href="#">Menu item 27</a></li>
                        <li><a href="#">Menu item 28</a></li>
                        <li><a href="#">Menu item 29</a></li>
                        <li><a href="#">Menu item 30</a></li>
                        <li><a href="#">Menu item 31</a></li>
                        <li><a href="#">Menu item 32</a></li>
                        <li><a href="#">Menu item 33</a></li>
                        <li><a href="#">Menu item 34</a></li>
                        <li><a href="#">Menu item 35</a></li>
                        <li><a href="#">Menu item 36</a></li>
                        <li><a href="#">Menu item 37</a></li>
                        <li><a href="#">Menu item 38</a></li>
                        <li><a href="#">Menu item 39</a></li>
                        <li><a href="#">Menu item 40</a></li>
                        <li><a href="#">Menu item 41</a></li>
                        <li><a href="#">Menu item 42</a></li>
                        <li><a href="#">Menu item 43</a></li>
                        <li><a href="#">Menu item 44</a></li>
                        <li><a href="#">Menu item 45</a></li>
                        <li><a href="#">Menu item 46</a></li>
                        <li><a href="#">Menu item 47</a></li>
                        <li><a href="#">Menu item 48</a></li>
                        <li><a href="#">Menu item 49</a></li>
                        <li><a href="#">Menu item 50</a></li>
                        <li><a href="#">Menu item 51</a></li>
                        <li><a href="#">Menu item 52</a></li>
                        <li><a href="#">Menu item 53</a></li>
                        <li><a href="#">Menu item 54</a></li>
                        <li><a href="#">Menu item 55</a></li>
                        <li><a href="#">Menu item 56</a></li>
                        <li><a href="#">Menu item 57</a></li>
                        <li><a href="#">Menu item 58</a></li>
                        <li><a href="#">Menu item 59</a></li>
                        <li><a href="#">Menu item 60</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Another link</a></li>
                    <li><a href="#">One more link</a></li>
                  </ul>
                </li>
              </ul>
            </li> -->
            <li><a href="#">India</a></li>
            <li><a href="#">Opinion</a></li>
            <li><a href="#">Cities</a></li>
            <li><a href="#">World</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Offbeat</a></li>
            <li><a href="#">Video</a></li>
            <li><a href="#">Trends</a></li>
            <li><a href="#">Schedule</a></li>
          </ul>

                    <!-- Right nav -->
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="bootstrap-navbar.html"><i class="fa fa-search"></i></a></li>
                            <li class="fa-navicon-li"><a href="#" class="direct-a"><i class="fa fa-navicon"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Action</a></li>
                                </ul>
                              </li>
                          </ul>
                                </div><!--/.nav-collapse -->
                        </div>
                </div>
            </div>
        </div>
      </div>
