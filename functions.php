<?php
/**
 * Core theme file.
 *
 * @package  Slushless
 * @author   slushman
 * @license  GPL-2.0+
 * @link     https://developer.wordpress.org/themes/basics/theme-functions/
 */
add_action( 'after_setup_theme', 'slushless_theme_setup' );
add_action( 'after_setup_theme', 'slushless_text_domain' );
add_action( 'after_setup_theme', 'slushless_register_menus' );
add_filter( 'use_default_gallery_style', '__return_false' );


/**
 * Registers Menus
 *
 * @hooked 		after_setup_theme
 */
function slushless_register_menus() {

	register_nav_menus( array(
		'main' 		=> esc_html__( 'Main', 'slushless' ),
		'social' 	=> esc_html__( 'Social', 'slushless' ),
		'footer' 	=> esc_html__( 'Footer', 'slushless' )
	) );

} // slushless_register_menus()

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 *
 * @hooked 		after_setup_theme
 */
function slushless_text_domain() {

	load_theme_textdomain( 'slushless', get_template_directory() . '/languages' );

} // slushless_text_domain()

/**
 * Sets up basic items needed for the theme to work.
 */
function slushless_theme_setup() {

	add_theme_support( 'post-thumbnails' );

} // slushless_theme_setup()