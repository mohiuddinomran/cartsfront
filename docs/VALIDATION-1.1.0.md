> GitHub sync update, 2026-10-12: automatic approval review blocked publication of an unconfirmed UX Pilot reference photograph. The public 1.1.0 code and package exclude all 22 reference photographs and use original CartsFront SVG placeholders. The recorded October 9 screenshots and layout tests used the private photograph-based build. Product logic is unchanged; the substitution was structurally checked. Use cartsfront-1.1.0.zip for this public-source version.

# CartsFront 1.1.0 design review

## Scope

Five native homepage patterns/templates and five matching FluentCart product templates, based on the ten supplied UX Pilot exports. Fonts and artwork are served locally. Header/footer, content and navigation use native WordPress blocks. Product galleries, prices, quantity controls, purchase actions and reviews use FluentCart blocks.

## Validation

- WordPress 7.1 / PHP 8.3 isolated WordPress Playground, FluentCart 1.7.0.
- Theme Check passes, with only the text-domain information message.
- Desktop (1440px) and mobile (390px) checks cover all ten layouts.
- Each route returns HTTP 200, one h1, one main landmark, and no horizontal overflow.
- Product routes are asserted to use the actual product template, not a 404 page.
- Automatic product-template matching is exercised by the Atelier fixture; the other four fixtures have explicit per-product template assignments.
- Dark-mode catalog, quantity-label and review contrast defects found during testing were corrected.
- No JavaScript page errors in the checked routes.
- Add to Cart on the mobile Form product template returned HTTP 200, “Cart updated successfully”, with the correct fixture product and quantity 1. No order or payment was created.
- All local images loaded after resolving lazy-loaded images for screenshots.
- Native WordPress/FluentCart block markup is retained; no mock shopping interactions are distributed.

## Known upstream finding

FluentCart 1.7.0's catalog container exposes a list role whose article children lack the corresponding list-item role. Axe reports `aria-required-children` on `.fct-products-container` in each homepage's live catalog. The theme does not rewrite plugin-managed DOM semantics. This is not an accessibility-ready release claim.

## Test environment limits

The isolated environment uses SQLite. A FluentCart review-rating backfill invokes MySQL JSON_MERGE_PATCH, unavailable in that test database. The QA fixtures seed the expected empty rating cache, avoiding the unrelated database migration path. This fixture workaround is not shipped in the theme.

Fixture products use sample prices and local reference artwork solely to test real plugin rendering. They are never imported into the user's site. Full payment processing, real customer accounts, email delivery, advanced variations, review submission and live MySQL behavior were not retested in this session. Existing merchant content and saved Site Editor customizations can affect the result.

## Distribution gate

This is a local review package, not a WordPress.org submission ZIP. The supplied generated images have no explicit GPL-compatible redistribution grant in the exports. Confirm the appropriate rights or replace those images before WordPress.org submission. The 1.1.0 review source is now published at the owner’s request; 1.0.0 remains available in Git history. Source URLs are recorded in ASSET-CREDITS.txt and docs/design-assets.json.
