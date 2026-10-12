<?php
/**
 * Title: Academy courses homepage
 * Slug: cartsfront/home-academy
 * Categories: cartsfront
 * Description: Editable digital storefront. Replace example prices, plan terms, and links before publishing.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"className":"cf-design cf-digital cf-academy cf-home","layout":{"type":"default"}} --><div class="wp-block-group cf-design cf-digital cf-academy cf-home"><!-- wp:group {"className":"cf-section cf-academy-hero","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-academy-hero"><!-- wp:group {"className":"cf-split","layout":{"type":"default"}} --><div class="wp-block-group cf-split"><!-- wp:group {"className":"","layout":{"type":"default"}} --><div class="wp-block-group "><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'Make room for possibility', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"cf-display"} --><h1 class="wp-block-heading cf-display"><?php esc_html_e( 'Master your craft with expert-led education.', 'cartsfront' ); ?></h1><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Explore new ideas, develop practical skills, and take the next step in your creative journey.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#digital-products"><?php esc_html_e( 'Explore courses', 'cartsfront' ); ?></a></div><!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#membership"><?php esc_html_e( 'View membership', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-academy-composition","layout":{"type":"default"}} --><div class="wp-block-group cf-academy-composition"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"cf-academy-portrait"} --><figure class="wp-block-image size-full cf-academy-portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/academy-studio.svg' ) ); ?>" alt=""/></figure><!-- /wp:image -->
<!-- wp:group {"className":"cf-academy-float","layout":{"type":"default"}} --><div class="wp-block-group cf-academy-float"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/academy-course.svg' ) ); ?>" alt=""/></figure><!-- /wp:image -->
<!-- wp:paragraph {"className":"cf-course-caption"} --><p class="cf-course-caption"><?php esc_html_e( 'Advanced web design', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:paragraph {"className":"cf-academy-sticker"} --><p class="cf-academy-sticker"><?php esc_html_e( 'Learn. Practice. Create.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-digital-surface","layout":{"type":"default"},"anchor":"topics"} --><div id="topics" class="wp-block-group cf-section cf-digital-surface"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Browse by topic', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Find the right path for your professional growth.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:group {"className":"cf-topic-grid","layout":{"type":"default"}} --><div class="wp-block-group cf-topic-grid"><!-- wp:group {"className":"cf-topic","layout":{"type":"default"}} --><div class="wp-block-group cf-topic"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'WordPress', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-topic","layout":{"type":"default"}} --><div class="wp-block-group cf-topic"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Web design', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-topic","layout":{"type":"default"}} --><div class="wp-block-group cf-topic"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Marketing', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-topic","layout":{"type":"default"}} --><div class="wp-block-group cf-topic"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Automation', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-topic","layout":{"type":"default"}} --><div class="wp-block-group cf-topic"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Freelancing', 'cartsfront' ); ?></h3><!-- /wp:heading -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-catalog","layout":{"type":"default"},"anchor":"digital-products"} --><div id="digital-products" class="wp-block-group cf-section cf-catalog"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Featured courses', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Explore available products and see current prices.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php if ( shortcode_exists( 'fluent_cart_products' ) ) : ?>
<!-- wp:shortcode -->[fluent_cart_products]<!-- /wp:shortcode -->
<?php else : ?>
<!-- wp:paragraph --><p><?php esc_html_e( 'Our collection is taking shape. Please visit again soon.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<?php endif; ?>
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-digital-surface","layout":{"type":"default"},"anchor":"learning-paths"} --><div id="learning-paths" class="wp-block-group cf-section cf-digital-surface"><!-- wp:group {"className":"cf-split","layout":{"type":"default"}} --><div class="wp-block-group cf-split"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/academy-course.svg' ) ); ?>" alt=""/></figure><!-- /wp:image -->
<!-- wp:group {"className":"","layout":{"type":"default"}} --><div class="wp-block-group "><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'Learning path', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'The modern freelance designer', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Build a foundation in design, develop your portfolio, and explore the business of creative work.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:group {"className":"cf-learning-step","layout":{"type":"default"}} --><div class="wp-block-group cf-learning-step"><!-- wp:paragraph {"className":"cf-digital-number"} --><p class="cf-digital-number"><?php esc_html_e( '1', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:group {"className":"","layout":{"type":"default"}} --><div class="wp-block-group "><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Fundamentals of visual design', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Explore color, typography, and layout.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-learning-step","layout":{"type":"default"}} --><div class="wp-block-group cf-learning-step"><!-- wp:paragraph {"className":"cf-digital-number"} --><p class="cf-digital-number"><?php esc_html_e( '2', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:group {"className":"","layout":{"type":"default"}} --><div class="wp-block-group "><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Building a thoughtful portfolio', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Tell the story behind your work.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-learning-step","layout":{"type":"default"}} --><div class="wp-block-group cf-learning-step"><!-- wp:paragraph {"className":"cf-digital-number"} --><p class="cf-digital-number"><?php esc_html_e( '3', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:group {"className":"","layout":{"type":"default"}} --><div class="wp-block-group "><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Growing your freelance business', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Make a plan for your next chapter.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-digital-pricing","layout":{"type":"default"},"anchor":"membership"} --><div id="membership" class="wp-block-group cf-section cf-digital-pricing"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Join the membership', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Explore a focused course or a broader learning path. These example plans can be adapted to your course offering.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:group {"className":"cf-cards cf-plans","layout":{"type":"default"}} --><div class="wp-block-group cf-cards cf-plans"><!-- wp:group {"className":"cf-plan","layout":{"type":"default"}} --><div class="wp-block-group cf-plan"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'Plan', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Single course', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-plan-price"} --><p class="cf-plan-price"><?php esc_html_e( 'From $49', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cf-plan-period"} --><p class="cf-plan-period"><?php esc_html_e( 'one-time payment · example price', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li><?php esc_html_e( 'One course', 'cartsfront' ); ?></li><!-- /wp:list-item -->
<!-- wp:list-item --><li><?php esc_html_e( 'Learning resources', 'cartsfront' ); ?></li><!-- /wp:list-item -->
<!-- wp:list-item --><li><?php esc_html_e( 'Study at your own pace', 'cartsfront' ); ?></li><!-- /wp:list-item -->
</ul><!-- /wp:list -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#digital-products"><?php esc_html_e( 'Browse courses', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-plan","layout":{"type":"default"}} --><div class="wp-block-group cf-plan"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'Plan', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Monthly Pro', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-plan-price"} --><p class="cf-plan-price"><?php esc_html_e( '$19', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cf-plan-period"} --><p class="cf-plan-period"><?php esc_html_e( 'per month, recurring · example price', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li><?php esc_html_e( 'Course library', 'cartsfront' ); ?></li><!-- /wp:list-item -->
<!-- wp:list-item --><li><?php esc_html_e( 'Learning resources', 'cartsfront' ); ?></li><!-- /wp:list-item -->
<!-- wp:list-item --><li><?php esc_html_e( 'Community access', 'cartsfront' ); ?></li><!-- /wp:list-item -->
</ul><!-- /wp:list -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#digital-products"><?php esc_html_e( 'Explore monthly', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-plan cf-plan-featured","layout":{"type":"default"}} --><div class="wp-block-group cf-plan cf-plan-featured"><!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php esc_html_e( 'Featured plan', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Annual Elite', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-plan-price"} --><p class="cf-plan-price"><?php esc_html_e( '$190', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cf-plan-period"} --><p class="cf-plan-period"><?php esc_html_e( 'per year, recurring · example price', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li><?php esc_html_e( 'Course library', 'cartsfront' ); ?></li><!-- /wp:list-item -->
<!-- wp:list-item --><li><?php esc_html_e( 'Learning resources', 'cartsfront' ); ?></li><!-- /wp:list-item -->
<!-- wp:list-item --><li><?php esc_html_e( 'Community access', 'cartsfront' ); ?></li><!-- /wp:list-item -->
</ul><!-- /wp:list -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#digital-products"><?php esc_html_e( 'Explore annual', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:paragraph {"className":"cf-muted"} --><p class="cf-muted"><?php esc_html_e( 'Review each product for current prices, included courses, access duration, renewal terms, and cancellation details.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section ","layout":{"type":"default"}} --><div class="wp-block-group cf-section "><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'How learning works', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:group {"className":"cf-cards","layout":{"type":"default"}} --><div class="wp-block-group cf-cards"><!-- wp:group {"className":"cf-digital-card","layout":{"type":"default"}} --><div class="wp-block-group cf-digital-card"><!-- wp:paragraph {"className":"cf-digital-number"} --><p class="cf-digital-number"><?php esc_html_e( '01', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Choose your path', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Explore the course details and find the right fit.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-digital-card","layout":{"type":"default"}} --><div class="wp-block-group cf-digital-card"><!-- wp:paragraph {"className":"cf-digital-number"} --><p class="cf-digital-number"><?php esc_html_e( '02', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Complete your purchase', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Review your selection and follow the checkout steps.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-digital-card","layout":{"type":"default"}} --><div class="wp-block-group cf-digital-card"><!-- wp:paragraph {"className":"cf-digital-number"} --><p class="cf-digital-number"><?php esc_html_e( '03', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Start learning', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Follow the access instructions supplied with your course.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-digital-surface","layout":{"type":"default"},"anchor":"instructors"} --><div id="instructors" class="wp-block-group cf-section cf-digital-surface"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Learn from people who love their craft', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Meet the educators behind your next learning experience.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:group {"className":"cf-cards","layout":{"type":"default"}} --><div class="wp-block-group cf-cards"><!-- wp:group {"className":"cf-instructor","layout":{"type":"default"}} --><div class="wp-block-group cf-instructor"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/academy-studio.svg' ) ); ?>" alt=""/></figure><!-- /wp:image -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Your design instructor', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Introduce your educator and their approach to visual design.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-instructor","layout":{"type":"default"}} --><div class="wp-block-group cf-instructor"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/academy-studio.svg' ) ); ?>" alt=""/></figure><!-- /wp:image -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Your WordPress instructor', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Share the experience behind your WordPress courses.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-instructor","layout":{"type":"default"}} --><div class="wp-block-group cf-instructor"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} --><figure class="wp-block-image size-full "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/academy-studio.svg' ) ); ?>" alt=""/></figure><!-- /wp:image -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Your automation instructor', 'cartsfront' ); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'Introduce the person guiding your automation lessons.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-lesson-preview","layout":{"type":"default"},"anchor":"preview"} --><div id="preview" class="wp-block-group cf-section cf-lesson-preview"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Experience the Academy style', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Take a look inside your next learning experience.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:video --><figure class="wp-block-video"></figure><!-- /wp:video -->
<!-- wp:paragraph {"className":"cf-editor-instruction"} --><p class="cf-editor-instruction"><?php esc_html_e( 'Add your own sample lesson using the Video block. This section appears when a video is supplied.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section ","layout":{"type":"default"},"anchor":"faq"} --><div id="faq" class="wp-block-group cf-section "><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Your questions, answered', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:group {"className":"cf-digital-faq","layout":{"type":"default"}} --><div class="wp-block-group cf-digital-faq"><!-- wp:details --><details class="wp-block-details"><summary><?php esc_html_e( 'Can I buy a single course?', 'cartsfront' ); ?></summary><!-- wp:paragraph --><p><?php esc_html_e( 'Explore the available courses to see which can be purchased individually.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</details><!-- /wp:details -->
<!-- wp:details --><details class="wp-block-details"><summary><?php esc_html_e( 'What is included in membership?', 'cartsfront' ); ?></summary><!-- wp:paragraph --><p><?php esc_html_e( 'Read the membership description for the included courses, resources, and access period.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</details><!-- /wp:details -->
<!-- wp:details --><details class="wp-block-details"><summary><?php esc_html_e( 'How do recurring payments work?', 'cartsfront' ); ?></summary><!-- wp:paragraph --><p><?php esc_html_e( 'Check the billing interval and renewal terms for your chosen membership before purchasing.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</details><!-- /wp:details -->
<!-- wp:details --><details class="wp-block-details"><summary><?php esc_html_e( 'What happens if I cancel?', 'cartsfront' ); ?></summary><!-- wp:paragraph --><p><?php esc_html_e( 'Review the membership cancellation policy for details about access after your subscription ends.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
</details><!-- /wp:details -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
<!-- wp:group {"className":"cf-section cf-digital-cta","layout":{"type":"default"}} --><div class="wp-block-group cf-section cf-digital-cta"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Ready to start your journey?', 'cartsfront' ); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"cf-lead"} --><p class="cf-lead"><?php esc_html_e( 'Make time for the skills you want to build.', 'cartsfront' ); ?></p><!-- /wp:paragraph -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#digital-products"><?php esc_html_e( 'Find your next course', 'cartsfront' ); ?></a></div><!-- /wp:button -->
</div><!-- /wp:buttons -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->
