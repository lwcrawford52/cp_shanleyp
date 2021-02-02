<?php
/**
 * Shanley_Price functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shanley_Price
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'shanley_price_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shanley_price_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shanley_Price, use a find and replace
		 * to change 'shanley_price' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shanley_price', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in multiple locations.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'shanley_price' ),
				'social' => esc_html__( 'Social', 'shanley_price' ),
				'mobile' => esc_html__( 'Mobile', 'shanley_price' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'shanley_price_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'shanley_price_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shanley_price_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shanley_price_content_width', 640 );
}
add_action( 'after_setup_theme', 'shanley_price_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shanley_price_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shanley_price' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shanley_price' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shanley_price_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shanley_price_scripts() {
	wp_enqueue_style( 'shanley_price-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'shanley_price-style', 'rtl', 'replace' );

	// loading custom css here
	wp_enqueue_style( 'shanley_price-custom', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_script( 'shanley_price-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shanley_price_scripts' );

// Slick Slider
// Load css & js scripts
function enqueue_custom_scripts() {
	//slick css to the header
	wp_enqueue_style( 'slick_css', get_stylesheet_directory_uri() . '/css/slick.css', array(), null, false ); 
	wp_enqueue_style( 'slick_theme_css', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), null, false ); 
	//slick js to the footer
	wp_register_script('slick_jquery', ( get_stylesheet_directory_uri() . '/js/slick.min.js'), array(), null, true);
	wp_enqueue_script('slick_jquery');
	//custom js to the footer
	wp_register_script('custom_jquery', ( get_stylesheet_directory_uri() . '/js/custom_script.js'), array(), null, true);
	wp_enqueue_script('custom_jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

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

// enqueue jQuery, GSAP,
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), false, true );
wp_enqueue_script( 'gsap-tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js', array(), false, true );
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/animation.js', array ( 'jquery' ), 1.1, true);

// Bios - custom post type function
function create_posttype() {
 
    register_post_type( 'Bios',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Bios' ),
                'singular_name' => __( 'Bio' )
			),
			'taxonomies' => array( 'category' ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'bios'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up function to theme setup
add_action( 'init', 'create_posttype' );

