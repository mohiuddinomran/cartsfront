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

/**
 * Render the plain FluentCart shortcode blocks used by theme patterns.
 * Template blocks do not always pass through the_content's shortcode filter.
 * Leave other shortcodes, escaped examples, and already-rendered output alone.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Parsed block.
 * @return string
 */
function cartsfront_render_commerce_shortcode( $block_content, $block ) {
    $source = trim( isset( $block['innerHTML'] ) ? $block['innerHTML'] : '' );
    $supported = array(
        '[fluent_cart_products]'         => 'fluent_cart_products',
        '[fluent_cart_mini_cart]'        => 'fluent_cart_mini_cart',
        '[fluent_cart_cart]'             => 'fluent_cart_cart',
        '[fluent_cart_checkout]'         => 'fluent_cart_checkout',
        '[fluent_cart_receipt]'          => 'fluent_cart_receipt',
        '[fluent_cart_customer_profile]' => 'fluent_cart_customer_profile',
    );
    if ( ! isset( $supported[ $source ] ) ) {
        return $block_content;
    }
    // Respect output already rendered or modified by WordPress or a plugin.
    $rendered = trim( $block_content );
    if ( $rendered !== $source && $rendered !== trim( wpautop( $source ) ) ) {
        return $block_content;
    }
    if ( ! shortcode_exists( $supported[ $source ] ) ) {
        return '';
    }
    return do_shortcode( $source );
}
add_filter( 'render_block_core/shortcode', 'cartsfront_render_commerce_shortcode', 10, 2 );
