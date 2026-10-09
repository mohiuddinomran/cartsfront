# CartsFront

Free, GPLv2-or-later WordPress block theme for product-focused stores.

## Install
Use the packaged `cartsfront-1.0.0.zip`, not GitHub’s source archive. Upload it under Appearance → Themes → Add New. See [setup](docs/SETUP.md).

## Included
- Responsive native block templates for pages, posts, archives, search, and 404.
- Storefront/editorial layouts and wide commerce/minimal checkout templates.
- About, contact, FAQ, shipping, digital collection, newsletter, and service patterns.
- Default, Sand, Sage, and Midnight global style choices.
- Original locally bundled SVG artwork and CSS illustrations; system fonts.
- Optional FluentCart presentation and Fluent Forms styles. No bundled plugins.
- Translation template and GPL resource credits in readme.txt.

## Build
Run `python tools/check.py` then `python tools/package.py`. The output has the correct `cartsfront/` root and excludes development files. Review [validation](docs/VALIDATION-1.0.0.md) for evidence and limits. WordPress.org approval is a separate human review.
