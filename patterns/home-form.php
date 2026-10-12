<?php
/**
 * Title: Form homepage
 * Slug: cartsfront/home-form
 * Categories: cartsfront
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"className":"cf-design cf-form cf-home","layout":{"type":"default"}} --><div class="wp-block-group cf-design cf-form cf-home"><!-- wp:group {"className":"cf-section cf-cover cf-form-hero","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-cover cf-form-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"cf-backdrop"} --><figure class="wp-block-image size-full cf-backdrop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/digital.svg' ) ); ?>" alt="" width="1024" height="1024" loading="eager" fetchpriority="high"/></figure><!-- /wp:image -->
<!-- wp:group {"className":"cf-hero-copy","layout":{"type":"default"}} --><div class="wp-block-group cf-hero-copy"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'CORE // COLLECTION', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"cf-display"} --><h1 class="wp-block-heading cf-display"><?php esc_html_e( 'FORM.', 'cartsfront' ); ?></h1><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Minimalist architecture. A fresh perspective on the tools we use every day.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Initialize shop', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section ","layout":{"type":"default"}} --><div class="wp-block-group cf-section "><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '// AVAILABLE_MODULES', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'The Series 01', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:group {"className":"cf-cards cf-two","layout":{"type":"default"}} --><div class="wp-block-group cf-cards cf-two"><!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/digital.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Core Module', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Explore the core collection.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-editorial-card","layout":{"type":"default"}} --><div class="wp-block-group cf-editorial-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/digital.svg' ) ); ?>" alt="" width="1024" height="1024" loading="lazy"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Expansion Port', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Make space for what comes next.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#collection"><?php esc_html_e( 'Explore the collection', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-catalog","layout":{"type":"default"},"anchor":"collection"} --><div id="collection" class="wp-block-group cf-section cf-catalog"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading "><?php esc_html_e( 'Explore the hardware', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Explore the latest additions to the collection.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode -->
<?php else : ?>
<!-- wp:paragraph --><p><?php esc_html_e( 'Our collection is taking shape. Please visit again soon.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php endif; ?>
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-principles","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-principles"><!-- wp:group {"className":"cf-principle","layout":{"type":"default"}} --><div class="wp-block-group cf-principle"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '01 // FORM', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Consider the shape of your everyday tools.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-principle","layout":{"type":"default"}} --><div class="wp-block-group cf-principle"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '02 // DETAIL', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Look closer at finishes and materials.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-principle","layout":{"type":"default"}} --><div class="wp-block-group cf-principle"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '03 // SPACE', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Find a place for every component.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-principle","layout":{"type":"default"}} --><div class="wp-block-group cf-principle"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( '04 // CONNECT', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Build a setup that works for you.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
