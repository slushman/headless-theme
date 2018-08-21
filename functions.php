<?php
/**
 * Core theme file.
 *
 * @package  Headless
 * @author   slushman
 * @license  GPL-2.0+
 * @link     https://developer.wordpress.org/themes/basics/theme-functions/
 */
add_action( 'after_setup_theme', 'headless_theme_setup' );
add_action( 'after_setup_theme', 'headless_text_domain' );
add_action( 'after_setup_theme', 'headless_register_menus' );

add_filter( 'use_default_gallery_style', '__return_false' );
add_filter( 'the_content', 'headless_remove_brs_from_galleries', 11, 2 );


/**
 * Registers Menus
 *
 * @hooked 		after_setup_theme
 * @since 		1.0.0
 */
function headless_register_menus() {

	register_nav_menus( array(
		'main' 		=> esc_html__( 'Main', 'slushless' ),
		'social' 	=> esc_html__( 'Social', 'slushless' ),
		'footer' 	=> esc_html__( 'Footer', 'slushless' )
	) );

} // headless_register_menus()

/**
 * Removes the random br tags from WordPress galleries.
 * 
 * @hooked 		the_content
 * @since 		1.0.2
 * @param 		mixed 		$output 		The post content.
 * @param 		mixed 						The modified post content.
 */
function headless_remove_brs_from_galleries( $output ) {

	return preg_replace( '/\<br[^\>]*\>/', '', $output );

} // headless_remove_brs_from_galleries()

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 *
 * @hooked 		after_setup_theme
 * @since 		1.0.0
 */
function headless_text_domain() {

	load_theme_textdomain( 'headless', get_template_directory() . '/languages' );

} // headless_text_domain()

/**
 * Sets up basic items needed for the theme to work.
 * 
 * @hooked 		after_setup_theme
 * @since 		1.0.0
 */
function headless_theme_setup() {

	add_theme_support( 'post-thumbnails' );

} // headless_theme_setup()