<?php
/**
 * Title: Haven homepage
 * Slug: cartsfront/home-haven
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"className":"cf-design cf-haven cf-home","layout":{"type":"default"}} --><div class="wp-block-group cf-design cf-haven cf-home"><!-- wp:group {"className":"cf-section cf-split cf-haven-hero","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-split cf-haven-hero"><!-- wp:group {"className":"cf-hero-copy","layout":{"type":"default"}} --><div class="wp-block-group cf-hero-copy"><!-- wp:heading {"level":1,"className":"cf-display"} --><h1 class="wp-block-heading cf-display"><?php esc_html_e( 'HAVEN HOME.', 'cartsfront' ); ?></h1><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'A collection of considered objects for the sanctuary. Warm minimalism, natural textures, and timeless utility.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'View objects', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="eager" fetchpriority="high"/></figure><!-- /wp:image -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section ","layout":{"type":"default"}} --><div class="wp-block-group cf-section "><!-- wp:group {"className":"cf-cards ","layout":{"type":"default"}} --><div class="wp-block-group cf-cards "><!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Furniture', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Objects for everyday living.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Textiles', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Softness, texture, and warmth.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Lighting', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Set a different mood.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-catalog","layout":{"type":"default"},"anchor":"collection"} --><div id="collection" class="wp-block-group cf-section cf-catalog"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Considered objects', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Explore the latest additions to the collection.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode -->
<?php else : ?>
<!-- wp:paragraph --><p><?php esc_html_e( 'Our collection is taking shape. Please visit again soon.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php endif; ?>
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-split cf-spotlight","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-split cf-spotlight"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:group {"className":"cf-story-copy","layout":{"type":"default"}} --><div class="wp-block-group cf-story-copy"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'SPOTLIGHT', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'The beauty of natural form.', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Explore sculptural shapes, tactile finishes, and objects that bring a room together.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-newsletter","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-newsletter"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Join the Haven', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Considered living, delivered to your inbox.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:pattern {"slug":"cartsfront/newsletter-slot"} /-->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
