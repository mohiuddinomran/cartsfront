# CartsFront 0.3.0 validation

## Completed

- Packaged ZIP: 40 theme files including original 1200 × 900 screenshot; development tools, docs, and dependencies excluded.
- Structural checks: required files, theme.json, referenced patterns/parts, absence of external script/font dependencies.
- PHP syntax: previous development pass parsed all 18 PHP files for PHP 7.4 syntax; functions.php passed PHP runtime lint. No PHP changes since that pass.
- Isolated WordPress Playground runtime: WordPress 6.8.11 / PHP 8.3.33.
- Theme Check: PASS. No required errors; only the informational single-text-domain notice for `cartsfront`.
- Plugin-inactive checks: theme activation, navigation fallback, homepage fallback, no literal commerce shortcode.
- Shortcode regression checks in WordPress: registered handler executes in template block; pre-rendered output stays unchanged; inactive handler is hidden; unrelated shortcode is preserved. The handler fixture tests integration behavior, not payments.
- FluentCart 1.7.0 active: plugin activated, four configured page IDs resolved, Shop/Account navigation links generated, catalog handler registered and produced output without a literal shortcode. This test used an empty catalog on SQLite; it is not a populated-catalog or MySQL checkout test.
- Previous development pass: real WordPress homepage rendered at 1440px and 390px with no horizontal overflow, with commerce plugins inactive. Screenshot was captured from that WordPress rendering.
- User's v0.2.1 store screenshots confirmed 13 products, product variations, cart, and checkout summary rendering. Those screenshots do not validate the new v0.3.0 commerce CSS.

## Still required before WordPress.org submission

- Validate v0.3.0 product/cart/checkout styles with the user's 13 products on desktop and mobile.
- Complete sandbox purchase success/failure, validation, cart updates/removal, receipt, account orders/downloads, and configured FluentCRM consent/integration tests.
- Test declared minimum WordPress/PHP versions and current WordPress release; `Tested up to: 6.8` intentionally does not claim untested versions.
- Theme Unit Test Data, WordPress Coding Standards, editor parity, keyboard/focus/skip link, screen reader, RTL and translation checks.
- Complete remaining approved wireframe layouts. Collection illustrations remain editable demo placeholders.
- Recheck directory name availability, licensing/design provenance, and current review rules immediately before submission.

Passing Theme Check is a technical checkpoint, not WordPress.org approval.
