# CartsFront 1.2.0 validation

Tested in isolated WordPress Playground with WordPress 7.1 and PHP 8.3 on 2026-10-12. Commerce checks use FluentCart 1.7.0 with two local digital product fixtures. No production store, payment gateway, customer, or email configuration was changed.

- Stack and Academy homepages: HTTP 200 at 1440px and 390px, one HTML main and H1, no horizontal overflow, no broken images, three pricing cards per page, no empty hash links.
- Both native FAQs toggle by keyboard. The unconfigured sample-video section is hidden on the public Academy homepage.
- Both homepage patterns parse successfully in the actual WordPress block editor with zero invalid blocks, including images, tables, lists, details, and the empty video placeholder.
- Without FluentCart, both homepages render a helpful empty catalog state and have zero axe violations at both widths.
- With FluentCart, the live catalog renders at both widths. Axe reports upstream catalog semantics: `aria-required-children`, `landmark-main-is-top-level`, `landmark-no-duplicate-main`, and `landmark-unique`. The plugin emits its own main role inside the theme's main and repeated pricing-region labels. The theme does not rewrite plugin HTML or claim the accessibility-ready tag.
- Structural checks cover required files, theme JSON, referenced templates/patterns, and absence of external scripts/font requests. New CSS is scoped to the digital designs.
- Original desktop and mobile export layouts were reviewed against the resulting WordPress screenshots. Artwork and starter copy were adapted; all new bundled illustrations are original editable SVGs. This is not a pixel-identical export import.

- Both new product templates: HTTP 200, one H1/main, no overflow or broken images, zero axe violations at 1440px and 390px after adding a product-details heading. Stack selected automatically from the front-page template; Academy used an explicit product assignment.
- Mobile Academy native Add to cart: HTTP 200 and `Cart updated successfully`, with the expected digital product, quantity 1, and fixture price $49. This did not place an order or charge a payment.

## Limits

Pricing cards are editable sample content, not synchronized commerce prices. Per-plan links must be assigned by the merchant. The catalog uses actual published products. Recurring payments, licensing, LMS enrollment, membership access, renewals/cancellation, and email delivery require configured plugins and were not tested as end-to-end business flows. Tests use SQLite, not a production MySQL database; fixture review-cache data avoids the plugin's MySQL-specific JSON backfill. Screen-reader review and WordPress.org human review remain outstanding.
