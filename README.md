# CartsFront

Free, open-source WordPress storefront theme. Built from scratch for Mohiuddin Omran; licensed GPL-2.0-or-later. No activation key, trial, or paid theme feature unlocks.

## Status: 0.1.0 development foundation

This is a fresh start, not a continuation of the earlier theme code. It establishes the theme structure and design system. It is not yet a complete reproduction of the supplied UX Pilot wireframe, a tested FluentCart integration, or a WordPress.org-ready release.

### Included
- Native block theme, editable in the WordPress Site Editor; no page builder or build-time CSS dependency.
- Grayscale style system, responsive navigation, visible search, and reusable header/footer.
- Index, blog, archive, search, page, single post, and 404 templates.
- Storefront, wide commerce, and minimal-header checkout page templates.
- Storefront hero, homepage, and store-story patterns.
- Optional catalog, mini-cart, cart, checkout, receipt, and customer-account patterns using FluentCart's documented shortcodes.
- No hardcoded vendor cards, invented merchant contact details, remote fonts, analytics, or automated plugin installation.

FluentCart owns commerce. FluentCRM integration is configured through the plugins; no CRM data or business logic is implemented by this theme.

## Install
Run `python3 tools/package.py` from the repository root. Upload `dist/cartsfront.zip` through WordPress > Appearance > Themes > Add New > Upload Theme.

Requirements: WordPress 6.6+, PHP 7.4+. These are declared targets; the compatibility matrix still needs runtime testing.

Read [setup](docs/SETUP.md) and [release checklist](docs/RELEASE-CHECKLIST.md).

## Checks
`python3 tools/check.py` checks required files, JSON, template-part/pattern references, and prohibited external assets. Run PHP lint and WordPress/FluentCart runtime testing separately before release.

## Development policy
Keep changes in this repository. Preserve merchant content and settings. Never put payments, contact storage, custom blocks, or automation logic in theme code. Include only original or GPL-compatible assets. Do not claim directory approval before review.
