# CartsFront

Free, GPLv2-or-later WordPress block theme for product-focused stores.

## Install
Use the packaged `cartsfront-1.2.0.zip`, not GitHub’s source archive. Upload it under Appearance → Themes → Add New. See [setup](docs/SETUP.md).

## Included
- Responsive native block templates for pages, posts, archives, search, and 404.
- Storefront/editorial layouts and wide commerce/minimal checkout templates.
- About, contact, FAQ, shipping, digital collection, newsletter, and service patterns.
- Default, Sand, Sage, and Midnight global style choices.
- Original locally bundled SVG artwork and CSS illustrations; system fonts.
- Optional FluentCart presentation and Fluent Forms styles. No bundled plugins.
- Translation template and GPL resource credits in readme.txt.

## Build
Run `python tools/check.py` then `python tools/package.py`. The output has the correct `cartsfront/` root and excludes development files. Review [validation](docs/VALIDATION-1.2.0.md) for evidence and limits. WordPress.org approval is a separate human review.

## 1.1.0 editorial review build

Five additional homepages and matching FluentCart product templates are included in this repository. See [installation instructions](docs/INSTALL-DESIGNS.md). The repository and current package use original CartsFront SVG placeholders. The user-supplied UX Pilot photographs are excluded pending redistribution clearance. Version 1.1.0 code is published for review at the owner’s request. It is not yet the WordPress.org submission release. The 1.0.0 source remains available in Git history.

## 1.2.0 digital storefronts

Stack (software) and Academy (courses) add two responsive homepages, matching product templates, editable pricing sections, and global style variations. See [digital setup](docs/DIGITAL-STOREFRONTS.md). Pricing cards are illustrative and must be connected to real products by the merchant. Recurring billing, licensing, and course access remain plugin responsibilities. All new artwork is original GPL-compatible SVG source.
