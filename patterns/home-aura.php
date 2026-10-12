<?php
/**
 * Title: Aura homepage
 * Slug: cartsfront/home-aura
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"className":"cf-design cf-aura cf-home","layout":{"type":"default"}} --><div class="wp-block-group cf-design cf-aura cf-home"><!-- wp:group {"className":"cf-section cf-cover cf-aura-hero","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-cover cf-aura-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"cf-backdrop"} --><figure class="wp-block-image size-full cf-backdrop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="eager" fetchpriority="high"/></figure><!-- /wp:image -->
<!-- wp:group {"className":"cf-hero-copy","layout":{"type":"default"}} --><div class="wp-block-group cf-hero-copy"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'THE ART OF SCENT', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"cf-display"} --><h1 class="wp-block-heading cf-display"><?php esc_html_e( 'aura.', 'cartsfront' ); ?></h1><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Invisible, yet ever-present. A collection of essences designed to linger in the memory.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Discover', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-aura-collection","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-aura-collection"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Current Essences', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:group {"className":"cf-cards cf-two cf-staggered","layout":{"type":"default"}} --><div class="wp-block-group cf-cards cf-two cf-staggered"><!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Cedar & White Tea', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Calm. Grounded. Ethereal.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Midnight Rose', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Shadowed. Intense. Floral.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-catalog","layout":{"type":"default"},"anchor":"collection"} --><div id="collection" class="wp-block-group cf-section cf-catalog"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Find your essence', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Explore the latest additions to the collection.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode -->
<?php else : ?>
<!-- wp:paragraph --><p><?php esc_html_e( 'Our collection is taking shape. Please visit again soon.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php endif; ?>
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-centered-story","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-centered-story"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'The invisible signature.', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'A quiet expression of who you are. Explore a different mood, a familiar memory, or a new everyday ritual.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the essences', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
