<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function site_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on site, use a find and replace
	 * to change 'site' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'site', get_template_directory() . '/languages' );


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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'site' ),
	) );

	add_image_size('home-thumb',780,780,true);
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function site_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'site_content_width', 640 );
}
add_action( 'after_setup_theme', 'site_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'site-style-bootstrap', get_template_directory_uri() ."/css/bootstrap.css" );
	wp_enqueue_style( 'site-style-carousel', get_template_directory_uri() ."/css/owl.carousel.css" );
	wp_enqueue_style( 'site-style-icons', get_template_directory_uri() ."/css/icons.css" );
	wp_enqueue_style( 'site-style-select', get_template_directory_uri() ."/css/select2.min.css" );
	wp_enqueue_style( 'site-style-scrollbar', get_template_directory_uri() ."/css/perfect-scrollbar.css" );
	wp_enqueue_style( 'site-style-default', get_template_directory_uri() ."/css/style.css" );
	wp_enqueue_style( 'site-style-responsive', get_template_directory_uri() ."/css/responsive.css" );
	wp_enqueue_style( 'site-style-color', get_template_directory_uri() ."/css/colors/color.css" );
	wp_enqueue_style( 'site-style', get_template_directory_uri() ."/style.css" );

	wp_enqueue_script( 'site-script-modernizr', get_template_directory_uri() . '/js/modernizr-2.0.6.js',array(),false,true);
	wp_enqueue_script( 'site-script-jquery', get_template_directory_uri() . '/js/jquery-2.2.2.js',array(),false,true);
	wp_enqueue_script( 'site-script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-scrolltop', get_template_directory_uri() . '/js/scrolltopcontrol.js',array(),false,true);
	wp_enqueue_script( 'site-script-scrolly', get_template_directory_uri() . '/js/jquery.scrolly.js',array(),false,true);
	wp_enqueue_script( 'site-script-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-icheck', get_template_directory_uri() . '/js/icheck.js',array(),false,true);
	wp_enqueue_script( 'site-script-select2', get_template_directory_uri() . '/js/select2.full.js',array(),false,true);
	wp_enqueue_script( 'site-script-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-waypoints', get_template_directory_uri() . '/js/waypoints.js',array(),false,true);
	wp_enqueue_script( 'site-script-pscrollbar', get_template_directory_uri() . '/js/perfect-scrollbar.js',array(),false,true);
	wp_enqueue_script( 'site-script-pscrollbarjquery', get_template_directory_uri() . '/js/perfect-scrollbar.jquery.js',array(),false,true);
	wp_enqueue_script( 'site-script-mapsapi', 'https://maps.googleapis.com/maps/api/js',array(),false,true);
	wp_enqueue_script( 'site-script-plugin', get_template_directory_uri() . '/js/jquery.plugin.js',array(),false,true);
	wp_enqueue_script( 'site-script-datepick', get_template_directory_uri() . '/js/jquery.datepick.js',array(),false,true);
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}

function template_chooser($template)   
{    
	global $wp_query;   
	$post_type = get_query_var('post_type');   
	if( isset($_GET['s']) && $post_type == 'blog' )   
	{
		return locate_template('search-blog.php');  //  redirect to archive-search.php
	}   
	return $template;   
}
add_filter('template_include', 'template_chooser');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load bootstrap integration.
 */
require get_template_directory() . '/inc/bootstrap_integration.php';

