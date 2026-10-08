<?php
/**
 * Title: Product catalog
 * Slug: cartsfront/catalog
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:group {"align":"wide","className":"cartsfront-plugin-surface","layout":{"type":"default"}} --><div class="wp-block-group alignwide cartsfront-plugin-surface"><!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode --></div><!-- /wp:group -->
<?php endif; ?>
