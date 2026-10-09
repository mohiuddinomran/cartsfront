# CartsFront 1.0.0 — validation, 2026-10-09

## Automated and runtime evidence

- Distribution ZIP: 54 files, all under `cartsfront/`; no plugins, development tools, node_modules, demo imports, or nested archives.
- Theme Check: PASS (only informational confirmation of the cartsfront text domain).
- WordPress 6.6.10 / PHP 7.4.33: activation, navigation fallback, inactive catalog, template shortcode execution and output preservation checks pass.
- WordPress 7.1.3 / PHP 8.3.33: the same checks pass; metadata Tested up to 7.1.
- Official Theme Unit Test Data imported without remote attachments; 79 published posts/pages passed through content rendering, and all 24 CartsFront patterns rendered without unresolved block comments. This is a content smoke test, not a visual review of every fixture.
- Browser checks: Home, About, FAQ, Contact, Shipping/Returns, Digital Collection, and Newsletter at 1440px and 390px. Each has one main landmark, one h1, no horizontal overflow, and no WCAG A/AA violations detected by axe. No browser page errors.
- Keyboard: skip link is first focusable element; native mobile menu closes with Escape; native FAQ details open with Enter.
- Sand, Sage, Midnight, and RTL homepage at 390px: no overflow or axe violations. RTL direction verified in computed styles.
- FluentCart 1.7.0 activated in isolated WordPress: assigned-page navigation resolves, catalog handler exists, catalog output renders without a literal shortcode.
- Current WordPress.org theme API returned Theme not found for cartsfront. This does not reserve a name or pre-approve it.

Machine-readable evidence: qa-1.0.0.json. Theme structural validation and ZIP build are reproducible with tools/check.py and tools/package.py.

## Existing owner verification

On installed 0.3.0, the owner confirmed all 13 products, navigation, variations, cart quantity/totals/removal, mobile layout, successful checkout, order confirmation, saved FluentCart order, customer-account purchase, and inventory decrement. Version 1.0.0 does not modify commerce logic. These are owner-reported results, not new payment tests performed in the isolated runtime.

## Scope and limitations

The packaged theme is prepared for upload and human review; WordPress.org approval is not guaranteed. This release does not claim the accessibility-ready tag. Automated accessibility checks do not replace full screen-reader testing. WordPress Coding Standards lint and full manual editor parity testing were not run. Minimum WordPress testing used the 6.6 maintenance release, not the original 6.6.0 build.

The isolated runtime uses SQLite and has no real mail service or payment-provider connection. Email delivery, consent, marketing automation, payment decline/recovery, and digital delivery configuration still require site-specific plugin testing. FluentCRM and FluentSMTP are documented integrations, not configured services. No email or automation has been enabled by this release.

Starter copy is editable. Store owners must replace contact information, shipping terms, signup guidance, and collection descriptions before publishing those patterns. No policy promises or real contact addresses are fabricated.
