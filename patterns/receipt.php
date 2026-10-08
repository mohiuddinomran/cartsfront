<?php
/**
 * Title: Order receipt
 * Slug: cartsfront/receipt
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<?php if ( shortcode_exists( 'fluent_cart_receipt' ) ) : ?>
<!-- wp:group {"align":"wide","className":"cartsfront-plugin-surface","layout":{"type":"default"}} --><div class="wp-block-group alignwide cartsfront-plugin-surface"><!-- wp:shortcode -->[fluent_cart_receipt]<!-- /wp:shortcode --></div><!-- /wp:group -->
<?php endif; ?>
