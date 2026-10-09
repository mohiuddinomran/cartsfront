<?php
/**
 * Title: Store navigation
 * Slug: cartsfront/store-navigation
 * Categories: cartsfront
 * Inserter: no
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:navigation {"overlayMenu":"mobile","className":"cartsfront-primary-nav","layout":{"type":"flex","justifyContent":"center"}} -->
<?php echo cartsfront_navigation_links(); // Native serialized blocks; URLs sanitized, labels translated. ?>
<!-- /wp:navigation -->
