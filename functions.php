<?php
/** Theme presentation setup. @package CartsFront */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function cartsfront_setup() {
    load_theme_textdomain( 'cartsfront', get_template_directory() . '/languages' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/base.css' );
}
add_action( 'after_setup_theme', 'cartsfront_setup' );
function cartsfront_assets() {
    $version = wp_get_theme( get_template() )->get( 'Version' );
    wp_enqueue_style( 'cartsfront-style', get_stylesheet_uri(), array(), $version );
    wp_enqueue_style( 'cartsfront-base', get_template_directory_uri() . '/assets/css/base.css', array( 'cartsfront-style' ), $version );
}
add_action( 'wp_enqueue_scripts', 'cartsfront_assets' );
function cartsfront_pattern_categories() {
    register_block_pattern_category( 'cartsfront', array( 'label' => __( 'CartsFront layouts', 'cartsfront' ) ) );
}
add_action( 'init', 'cartsfront_pattern_categories' );
