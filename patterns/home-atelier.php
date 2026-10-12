<?php
/**
 * Title: Atelier homepage
 * Slug: cartsfront/home-atelier
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"className":"cf-design cf-atelier cf-home","layout":{"type":"default"}} --><div class="wp-block-group cf-design cf-atelier cf-home"><!-- wp:group {"className":"cf-section cf-atelier-hero","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-atelier-hero"><!-- wp:heading {"level":1,"className":"cf-display"} --><h1 class="wp-block-heading cf-display"><?php esc_html_e( 'THE ATELIER', 'cartsfront' ); ?></h1><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'A quiet study in form and fabric. Timeless silhouettes for everyday living.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"cf-hero-image"} --><figure class="wp-block-image size-full cf-hero-image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="eager" fetchpriority="high"/></figure><!-- /wp:image -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section ","layout":{"type":"default"}} --><div class="wp-block-group cf-section "><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Featured Collection', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:group {"className":"cf-cards ","layout":{"type":"default"}} --><div class="wp-block-group cf-cards "><!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Outerwear', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Tailored shapes and considered layers.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Knitwear', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Soft textures for the everyday.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Accessories', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'The details that make it yours.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-catalog","layout":{"type":"default"},"anchor":"collection"} --><div id="collection" class="wp-block-group cf-section cf-catalog"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Shop the atelier', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Explore the latest additions to the collection.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode -->
<?php else : ?>
<!-- wp:paragraph --><p><?php esc_html_e( 'Our collection is taking shape. Please visit again soon.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php endif; ?>
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-craft","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-craft"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'About the Craft', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:group {"className":"cf-craft-row","layout":{"type":"default"}} --><div class="wp-block-group cf-craft-row"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '01 / Form', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading "><?php esc_html_e( 'Thoughtful silhouettes', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-craft-row","layout":{"type":"default"}} --><div class="wp-block-group cf-craft-row"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '02 / Texture', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading "><?php esc_html_e( 'A closer look at the details', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-craft-row","layout":{"type":"default"}} --><div class="wp-block-group cf-craft-row"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '03 / Perspective', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading "><?php esc_html_e( 'Fewer pieces, more possibilities', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-newsletter","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-newsletter"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Stay in the frame', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'New releases and stories from the atelier.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:pattern {"slug":"cartsfront/newsletter-slot"} /-->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
