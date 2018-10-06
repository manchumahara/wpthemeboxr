<?php
/**
 * DownloadClub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DownloadClub
 */

if ( ! function_exists( 'downloadclub_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function downloadclub_setup() {

		load_theme_textdomain( 'downloadclub', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'topmenu' => esc_html__( 'Main Menu', 'downloadclub' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'downloadclub_custom_background_args', array(
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
			'height'      => 400,
			'width'       => 133,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'downloadclub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function downloadclub_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'downloadclub_content_width', 640 );
}
add_action( 'after_setup_theme', 'downloadclub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function downloadclub_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Right', 'downloadclub' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widget in sidebar Right', 'downloadclub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'downloadclub' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widget in sidebar Left', 'downloadclub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Blog', 'downloadclub' ),
		'id'            => 'sidebar-blog',
		'description'   => esc_html__( 'Add widget in Blog sidebar', 'downloadclub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'downloadclub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function downloadclub_scripts() {

	$my_theme = wp_get_theme();
	$version  = $my_theme->get( 'Version' );


	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';



	wp_enqueue_style( 'downloadclub-style', get_stylesheet_uri() );
	wp_enqueue_style( 'downloadclub-core', get_template_directory_uri() . '/assets/css/downloadclub.css', array(), $version, 'all' );



	//wp_enqueue_script( 'downloadclub-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	$downloadclub_js_vars = apply_filters( 'downloadclub_js_vars', array(
		'debug'                => array(
			'WP_DEBUG'         => WP_DEBUG,
			'WP_DEBUG_DISPLAY' => WP_DEBUG_DISPLAY,
			'WP_DEBUG_LOG'     => WP_DEBUG_LOG,
			'SCRIPT_DEBUG'     => SCRIPT_DEBUG,
		),
		'is_admin_bar_showing' => is_admin_bar_showing() ? 1 : 0,
		//currently this value is not used anymore in frontend js
	) );
	wp_enqueue_script( 'downloadclub-core', get_template_directory_uri() . '/assets/js/downloadclub.js', array('jquery'), $version, true );
	wp_localize_script( 'downloadclub-core', 'downloadclub', $downloadclub_js_vars );

	wp_add_inline_style( 'downloadclub-core', $inline_font );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'downloadclub_scripts' );

if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'downloadclub' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
