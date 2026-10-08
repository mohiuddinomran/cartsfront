<?php
/**
 * Title: Mini cart
 * Slug: cartsfront/mini-cart
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<?php if ( shortcode_exists( 'fluent_cart_mini_cart' ) ) : ?>
<!-- wp:group {"align":"wide","className":"cartsfront-plugin-surface","layout":{"type":"default"}} --><div class="wp-block-group alignwide cartsfront-plugin-surface"><!-- wp:shortcode -->[fluent_cart_mini_cart]<!-- /wp:shortcode --></div><!-- /wp:group -->
<?php endif; ?>
