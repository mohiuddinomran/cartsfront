<?php
/**
 * Title: Storefront editorial homepage
 * Slug: cartsfront/editorial-home
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:pattern {"slug":"cartsfront/editorial-hero"} /-->
<!-- wp:pattern {"slug":"cartsfront/collection-panels"} /-->
<!-- wp:group {"align": "wide", "anchor": "collection", "className": "cartsfront-editorial-catalog cartsfront-section", "layout": {"type": "default"}} --><div id="collection" class="wp-block-group alignwide cartsfront-editorial-catalog cartsfront-section"><!-- wp:heading {"level": 2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph {"className": "cartsfront-intro"} --><p class="cartsfront-intro"><?php esc_html_e( 'Find your next everyday favorite.', 'cartsfront' ); ?></p><!-- /wp:paragraph --><?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode -->
<?php else : ?>
<!-- wp:paragraph {"className": ""} --><p class=""><?php esc_html_e( 'Our collection is taking shape. Please visit again soon.', 'cartsfront' ); ?></p><!-- /wp:paragraph --><?php endif; ?></div><!-- /wp:group -->
<!-- wp:group {"align": "wide", "anchor": "our-story", "className": "cartsfront-editorial-story cartsfront-section", "layout": {"type": "default"}} --><div id="our-story" class="wp-block-group alignwide cartsfront-editorial-story cartsfront-section"><!-- wp:group {"align": "wide", "className": "cartsfront-editorial-story-copy", "layout": {"type": "default"}} --><div class="wp-block-group alignwide cartsfront-editorial-story-copy"><!-- wp:paragraph {"className": "cartsfront-eyebrow"} --><p class="cartsfront-eyebrow"><?php esc_html_e( 'LESS, BUT BETTER', 'cartsfront' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level": 2} --><h2 class="wp-block-heading"><?php esc_html_e( 'A place for everyday favorites.', 'cartsfront' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph {"className": ""} --><p class=""><?php esc_html_e( 'Discover useful things, simple details, and a fresh perspective on the everyday. Choose the pieces that feel right for you.', 'cartsfront' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"align": "wide", "className": "cartsfront-editorial-story-art", "layout": {"type": "default"}} --><div class="wp-block-group alignwide cartsfront-editorial-story-art"></div><!-- /wp:group --></div><!-- /wp:group -->
