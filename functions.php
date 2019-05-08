<?php
/**
 * khonjkhobor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package khonjkhobor
 */

// setup



// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include( get_template_directory() . '/includes/setup.php' );
// including the ajax files for all archive pages
include( get_template_directory() . '/includes/ajax-Allkitchen.php' );
include( get_template_directory() . '/includes/ajax-Allkolkata.php' );
include( get_template_directory() . '/includes/ajax-Alldesh.php' );
include( get_template_directory() . '/includes/ajax-Allbidesh.php' );
include( get_template_directory() . '/includes/ajax-Allkhala.php' );
include( get_template_directory() . '/includes/ajax-AllHealthposts.php' );
include( get_template_directory() . '/includes/ajax-AllBinodonPosts.php' );
include( get_template_directory() . '/includes/ajax-AllSouthBengalPosts.php' );
include( get_template_directory() . '/includes/ajax-AllNorthBengalPosts.php' );
include( get_template_directory() . '/includes/ajax-AllbabsabanijyoPosts.php' );
include( get_template_directory() . '/includes/ajax-AllTechPosts.php' );
include( get_template_directory() . '/includes/ajax-AllSampadokioPosts.php' );
include( get_template_directory() . '/includes/ajax-AllOffbeatPosts.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'khonjkhobor_scripts' );
add_action( 'after_setup_theme', 'ju_setup_theme' );

$tenposts_before_loadmore = array();

if ( ! function_exists( 'khonjkhobor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function khonjkhobor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on khonjkhobor, use a find and replace
		 * to change 'khonjkhobor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'khonjkhobor', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		// register_nav_menus( array(
		// 	'menu-1' => esc_html__( 'Primary', 'khonjkhobor' ),
		// ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'khonjkhobor_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'khonjkhobor_setup' );
// bootstrap navwalker
require_once('wp_bootstrap_navwalker.php');
/* Function which displays your post date in time ago format */
if ( ! function_exists( 'meks_time_ago' ) ) :
function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}
endif;
add_action('after_setup_theme','meks_time_ago');
 
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function khonjkhobor_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'khonjkhobor_content_width', 640 );
}
add_action( 'after_setup_theme', 'khonjkhobor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function khonjkhobor_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'khonjkhobor' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'khonjkhobor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-ad-1', 'khonjkhobor' ),
		'id'            => 'Sidebar-ad-1',
		'description'   => esc_html__( 'Add widgets here.', 'khonjkhobor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
	'name'          => esc_html__( 'Kolkata-default-ad', 'khonjkhobor' ),
	'id'            => 'Kolkata-default-ad',
	'description'   => esc_html__( 'Add widgets here.', 'khonjkhobor' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'khonjkhobor_widgets_init' );



// the following line for the widgets to support shortcode
add_filter( 'widget_text', 'do_shortcode' );
// adding single page template loading code
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(STYLESHEETPATH . "/single-category-{$cat->slug}.php") ) return STYLESHEETPATH . "/single-category-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(STYLESHEETPATH . "/single-category-{$cat->slug}.php") ) return STYLESHEETPATH . "/single-category-{$cat->slug}.php";
    }
  } 
  return $t;
}


add_action( 'rest_api_init', 'custom_api_get_all_posts' );   

function custom_api_get_all_posts() {
    register_rest_route( 'wp/v2', '/all-data/', array(
        'methods' => 'GET',
        'callback' => 'custom_api_get_all_posts_callback'
    ));
}

function custom_api_get_all_posts_callback( $request ) {
    // Initialize the array that will receive the posts' data. 
    $posts_data = array();
    // Receive and set the page parameter from the $request for pagination purposes
    $paged = $request->get_param( 'page' );
    $paged = ( isset( $paged ) || ! ( empty( $paged ) ) ) ? $paged : 1; 
    $no_of_posts_per_page = $request->get_param( 'per_page' );

    // $search_param =	$request->get_param( 'search' );
    $search_param = $request['search'];
    // Get the posts using the 'post' and 'news' post types
    $posts = get_posts( array(
            'paged' => $paged,
            'orderby' => 'date',
        	'order' => 'DESC',
            'post__not_in' => get_option( 'sticky_posts' ),
            'posts_per_page' => $no_of_posts_per_page, 
            'suppress_filters' => false,  
            's' => $search_param,         
            'post_type' => array( 'Allkitchenposts', 'AllHealthposts', 'AllbabsabanijyoPosts','AllOffbeatPosts','AllTechPosts','AllCrimePosts','AllantorjatikPosts','AllBreakingNews','AllKolkataPosts','AllRajyaPosts','AllDeshPosts','AllFashionPosts','AllSampadokioPosts','AllBinodonPosts','AllNorthBengalPosts','AllSouthBengalPosts','AllBardhamanPosts','AllKhalaPosts','AllOnnannoPosts' ) // This is the line that allows to fetch multiple post types. 
        )
    ); 
    // Loop through the posts and push the desired data to the array we've initialized earlier in the form of an object
     // $post_data = array();
    foreach( $posts as $post ) {
        $id = $post->ID; 
        $post_thumbnail = ( has_post_thumbnail( $id ) ) ? get_the_post_thumbnail_url( $id ) : null;
        $post_excerpt = apply_filters('the_excerpt', get_post_field('post_excerpt', $id));
        $post_publish_date = get_the_time('Y-m-d-Th:i:s', $id);
        $category_detail=get_the_category( $id );
		foreach($category_detail as $cd){
		$category_name = $cd->cat_name;
		}
        // $post_data[ $id][ 'categories' ] = $category_detail
        $posts_data[] = (object) array( 
            'id' => $id, 
            'slug' => $post->post_name, 
            'type' => $post->post_type,
            'title' => $post->post_title,
            'date' => $post_publish_date,
            'categories' => array($category_name),
            'content' => $post->post_content,
            'excerpt' => $post_excerpt,
            'featured_img_src' => $post_thumbnail
        );
    }                  
    return $posts_data;                   
} 

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

