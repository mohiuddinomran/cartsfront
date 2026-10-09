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
    add_editor_style( 'assets/css/commerce.css' );
}
add_action( 'after_setup_theme', 'cartsfront_setup' );
function cartsfront_assets() {
    $version = wp_get_theme( get_template() )->get( 'Version' );
    wp_enqueue_style( 'cartsfront-style', get_stylesheet_uri(), array(), $version );
    wp_enqueue_style( 'cartsfront-commerce', get_template_directory_uri() . '/assets/css/commerce.css', array( 'cartsfront-base' ), $version );
    wp_enqueue_style( 'cartsfront-base', get_template_directory_uri() . '/assets/css/base.css', array( 'cartsfront-style' ), $version );
}
add_action( 'wp_enqueue_scripts', 'cartsfront_assets', 100 );
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

/**
 * Read published storefront destinations without assuming merchant page slugs.
 *
 * @return array
 */
function cartsfront_store_pages() {
    $pages = array();
    if ( class_exists( '\FluentCart\Api\StoreSettings' ) ) {
        $settings = new \FluentCart\Api\StoreSettings();
        if ( method_exists( $settings, 'getPagesSettings' ) ) {
            foreach ( $settings->getPagesSettings() as $key => $id ) {
                if ( is_numeric( $id ) && 'publish' === get_post_status( (int) $id ) ) {
                    $pages[ $key ] = (int) $id;
                }
            }
        }
    }
    return $pages;
}

/**
 * Starter navigation uses native links and stays editable in the Site Editor.
 *
 * @return string Serialized core navigation-link blocks.
 */
function cartsfront_navigation_links() {
    $links = array( array( 'label' => __( 'Home', 'cartsfront' ), 'url' => home_url( '/' ) ) );
    $pages = cartsfront_store_pages();
    $labels = array(
        'shop_page_id'             => __( 'Shop', 'cartsfront' ),
        'customer_profile_page_id' => __( 'Account', 'cartsfront' ),
        'cart_page_id'             => __( 'Cart', 'cartsfront' ),
    );
    foreach ( $labels as $key => $label ) {
        if ( ! empty( $pages[ $key ] ) ) {
            $links[] = array( 'label' => $label, 'url' => get_permalink( $pages[ $key ] ), 'id' => $pages[ $key ], 'kind' => 'post-type', 'type' => 'page' );
        }
    }
    $blog = (int) get_option( 'page_for_posts' );
    if ( $blog && 'publish' === get_post_status( $blog ) ) {
        $links[] = array( 'label' => __( 'Journal', 'cartsfront' ), 'url' => get_permalink( $blog ), 'id' => $blog, 'kind' => 'post-type', 'type' => 'page' );
    }
    $markup = '';
    foreach ( $links as $link ) {
        $link['url'] = esc_url_raw( $link['url'] );
        $markup .= serialize_block( array( 'blockName' => 'core/navigation-link', 'attrs' => $link, 'innerBlocks' => array(), 'innerHTML' => '', 'innerContent' => array() ) );
    }
    return $markup;
}

/** Add presentation classes to configured commerce pages. */
function cartsfront_body_classes( $classes ) {
    foreach ( cartsfront_store_pages() as $key => $id ) {
        if ( is_page( $id ) ) {
            $classes[] = 'cartsfront-store-page';
            $classes[] = 'cartsfront-' . sanitize_html_class( str_replace( '_page_id', '', $key ) );
        }
    }
    return array_unique( $classes );
}
add_filter( 'body_class', 'cartsfront_body_classes' );
