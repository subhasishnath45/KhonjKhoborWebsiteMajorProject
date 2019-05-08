<?php

/**
 * Enqueue scripts and styles.
 */
function khonjkhobor_scripts() {
	wp_enqueue_style( 'khonjkhobor-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'khonjkhobor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'khonjkhobor-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// wp_register_style('khonjkhobor_smartmenus_bootstrap', get_template_directory_uri() .'/css/jquery.smartmenus.bootstrap.css',NULL,microtime(),true);

	// wp_register_style('khonjkhobor_bootstrap', get_template_directory_uri() .'/css/bootstrap.min-V3.css',NULL,'1.0',true);
	// wp_register_style('khonjkhobor_smartmenus_bootstrap', get_template_directory_uri() .'/css/jquery.smartmenus.bootstrap.css',NULL,'1.0',true);
	// wp_register_style('khonjkhobor-font-awesome', get_template_directory_uri() .'/font-awesome-4.7.0/css/font-awesome.css',NULL,'1.0',true);
	// wp_register_style('khonjkhobor_owl_carousel', get_template_directory_uri() .'/css/owl.carousel.css',NULL,'1.0',true);
	// wp_register_style('khonjkhobor_owl_transitions', get_template_directory_uri() .'/css/owl.transitions.css',NULL,'1.0',true);
	// wp_register_style('khonjkhobor_fontstyle', get_template_directory_uri() .'/fonts/fontstyle.css',NULL,'1.0',true);
	// wp_register_style('khonjkhobor_main', get_template_directory_uri() .'/css/main.css',NULL,'1.0',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// function my_scripts_two() {
	//     if( !is_page( array( 'Photogallery' ) ) ){
	//     	$plugindir = plugin_dir_path( __DIR__ );
	//         wp_enqueue_script( 'script-wpFeatherlight', $plugindir . '/wp-featherlight/js/wpFeatherlight.pkgd.min.js', array('jquery'), '1.0.0', true );
	//     }
	// }
	// add_action( 'wp_enqueue_scripts', 'my_scripts_two' );

	// wp_enqueue_style( 'khonjkhobor_bootstrap' );
	// wp_enqueue_style( 'khonjkhobor_smartmenus_bootstrap' );
	// wp_enqueue_style( 'khonjkhobor-font-awesome' );
	// wp_enqueue_style( 'khonjkhobor_owl_carousel' );
	// wp_enqueue_style( 'khonjkhobor_owl_transitions' );
	// wp_enqueue_style( 'khonjkhobor_fontstyle' );
	// wp_enqueue_style( 'khonjkhobor_main' );


	// wp_register_script('khonjkhobor_jqueryjs', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js',array(),'1.0',true);
	// // wp_register_script('khonjkhobor_bootstrapjs', get_template_directory_uri() . '/js/vendor/bootstrap.min-V3.js',array('jquery'),'1.0',true);
	// wp_register_script('khonjkhobor_bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',array('jquery'),'1.0',true);
	// wp_register_script('khonjkhobor_jquery_smartmenusjs', get_template_directory_uri() . '/js/vendor/jquery.smartmenus.js',array('jquery'),'1.0',true);
	// wp_register_script('khonjkhobor_jquery_smartmenus_bootstrapjs', get_template_directory_uri() . '/js/vendor/jquery.smartmenus.bootstrap.js',array('jquery'),'1.0',true);
	// wp_register_script('khonjkhobor_owlcarouseljs', get_template_directory_uri() . '/js/vendor/owl.carousel.js',array('jquery'),'1.0',true);
	// wp_register_script('khonjkhobor_mainjs', get_template_directory_uri() . '/js/main.js',array('jquery'),'1.0',true);

	// wp_enqueue_script('khonjkhobor_jqueryjs');
	// wp_enqueue_script('khonjkhobor_bootstrapjs');
	// wp_enqueue_script('khonjkhobor_jquery_smartmenusjs');
	// wp_enqueue_script('khonjkhobor_jquery_smartmenus_bootstrapjs');
	// wp_enqueue_script('khonjkhobor_owlcarouseljs');
	// wp_enqueue_script('khonjkhobor_mainjs');
}

?>