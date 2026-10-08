<?php
/**
 * Title: Storefront homepage
 * Slug: cartsfront/storefront-home
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:pattern {"slug":"cartsfront/storefront-hero"} /-->
<!-- wp:group {"align":"wide","className":"cartsfront-section","anchor":"collection","layout":{"type":"default"}} --><div id="collection" class="wp-block-group alignwide cartsfront-section"><!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode -->
<?php else : ?>
<!-- wp:paragraph --><p><?php esc_html_e( 'Our collection is taking shape. Please visit again soon.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php endif; ?>
</div><!-- /wp:group --><!-- wp:pattern {"slug":"cartsfront/store-story"} /-->
