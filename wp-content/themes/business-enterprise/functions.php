<?php

/**
 * Business Enterprise functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Business Enterprise
 */

define( 'BUSINESS_ENTERPRISE_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'business_enterprise_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function business_enterprise_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'business-enterprise', get_template_directory() . '/languages' );

		// Add theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}
add_action( 'after_setup_theme', 'business_enterprise_setup' );

/**
 * Enqueue scripts and styles
 */
function business_enterprise_scripts() {
	$version = wp_get_theme( 'business-enterprise' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'business-enterprise-styles', get_theme_file_uri( '/style.css' ), array(), $version );
	wp_enqueue_style( 'business-enterprise-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $version, 'all' );

	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(),'2.3.4');

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'business-enterprise-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), $version );
	}

	$style_deps = array( 'business-enterprise-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$style_deps[] = 'wc-blocks-vendors-style';
	}

	if ( is_rtl() ) {
		wp_enqueue_style( 'business-enterprise-rtl', get_template_directory_uri() . '/assets/css/rtl.css', array( 'business-enterprise-styles' ), $version );
	}

	// Scripts
	$script_deps = array( 'jquery' );
	wp_enqueue_script( 'business-enterprise-animate', get_template_directory_uri() . '/assets/js/animate.js', $script_deps, $version, true );

	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '2.3.4', TRUE );

	wp_enqueue_script('business-enterprise-main-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), true);

}
add_action( 'wp_enqueue_scripts', 'business_enterprise_scripts' );

/**
 * Add editor styles
 */
function business_enterprise_editor_style() {
	$version = wp_get_theme( 'business-enterprise' )->get( 'Version' );
	wp_enqueue_style( 'business-enterprise-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), $version );
}
add_action( 'enqueue_block_editor_assets', 'business_enterprise_editor_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function business_enterprise_block_assets() {
	$version = wp_get_theme( 'business-enterprise' )->get( 'Version' );
	wp_enqueue_style( 'business-enterprise-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), $version );
}
add_action( 'enqueue_block_assets', 'business_enterprise_block_assets' );

/**
 * Load theme patterns and block styles
 */
function business_enterprise_enque_setup() {

	require_once get_template_directory() . '/block-patterns.php';
	require_once get_template_directory() . '/block-styles.php';

}
add_action( 'after_setup_theme', 'business_enterprise_enque_setup' );


/**
 * Block users not belonging to main site from logging in there
 */
add_filter('authenticate', 'block_non_mainsite_users', 30, 3);

function block_non_mainsite_users($user, $username, $password) {
    if (empty($username) || empty($password)) {
        return $user;
    }

    // Only apply restriction on the main site (blog_id = 1)
    if (get_current_blog_id() !== 1) {
        return $user; // Don't restrict on subsites
    }

    // Get user by login
    $user_obj = get_user_by('login', $username);
    if (!$user_obj) {
        return $user;
    }

    // Check if this user is a member of the main site
    if (!is_user_member_of_blog($user_obj->ID, 1)) {
        return new WP_Error(
            'not_main_site_member',
            __('<strong>Error:</strong> You are not authorized to login here. Please use your assigned site login.')
        );
    }

    return $user;
}