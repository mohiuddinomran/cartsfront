<?php
/**
 * Title: Checkout
 * Slug: cartsfront/checkout
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<?php if ( shortcode_exists( 'fluent_cart_checkout' ) ) : ?>
<!-- wp:group {"align":"wide","className":"cartsfront-plugin-surface","layout":{"type":"default"}} --><div class="wp-block-group alignwide cartsfront-plugin-surface"><!-- wp:shortcode -->[fluent_cart_checkout]<!-- /wp:shortcode --></div><!-- /wp:group -->
<?php endif; ?>
