<?php
/**
 * Title: Page not found
 * Slug: cartsfront/not-found
 * Categories: cartsfront
 * Inserter: no
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:heading {"level":1,"fontSize":"xx-large"} --><h1 class="wp-block-heading has-xx-large-font-size">404</h1><!-- /wp:heading --><!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Let’s find your way back.', 'cartsfront' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'This page could not be found. Search the site or return to the homepage.', 'cartsfront' ); ?></p><!-- /wp:paragraph --><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /--><!-- wp:paragraph --><p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return home', 'cartsfront' ); ?></a></p><!-- /wp:paragraph -->
