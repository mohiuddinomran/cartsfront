<?php
/**
 * Title: Newsletter introduction
 * Slug: cartsfront/newsletter
 * Categories: cartsfront
 * Description: Editable introduction for your own subscription form. Does not collect data by itself.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"className": "cartsfront-newsletter", "layout": {"type": "constrained"}, "align": "wide"} --><div class="wp-block-group alignwide cartsfront-newsletter"><!-- wp:heading {"level": 2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Good things, occasionally.', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'New arrivals, stories, and inspiration from the store.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Insert your Fluent Forms subscription form here. Configure consent and your FluentCRM list in the plugins before publishing.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
