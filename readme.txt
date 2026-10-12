=== CartsFront ===
Contributors: mohiuddinomran
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Version: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
This 1.1.0 build is for design review. The 1.0.0 submission package remains unchanged. All design instructions below apply to local review only. The unconfirmed UX Pilot photographs are excluded; original CartsFront SVG placeholders are used.
CartsFront is a free, open-source WordPress block theme designed for FluentCart storefronts. No theme license key or paid unlock is required. Third-party plugin features have their own terms.

== Installation ==
Upload the packaged cartsfront.zip in Appearance > Themes > Add New. Activate CartsFront. Edit headers, footers, colors, and templates in Appearance > Editor.
For a store homepage, create a page, insert the Storefront editorial homepage pattern, select Page without title, and choose it as the homepage in Settings > Reading.
Create About, Contact, FAQ, and Shipping pages with the CartsFront patterns. Replace the starter copy with your own information before publishing.
For a journal, create an empty page and select it as the posts page in Settings > Reading.
Choose a palette in Appearance > Editor > Styles > Browse styles. Default, Sand, Sage, and Midnight are included.
Edit navigation links and the site logo in the Site Editor. Use a merchant logo; no theme branding is forced.

== Store setup ==
Install FluentCart separately from Plugins > Add New. Use its setup to create or assign Shop, Cart, Checkout, Receipt, and Account pages. Add the matching CartsFront shortcode pattern only if the page is empty; do not add a second checkout or cart. Choose Commerce page (wide) for store pages and Checkout (minimal header) for checkout.
FluentCart owns physical and digital products, variations, filters, inventory, taxes, payment methods, orders, downloads, and customer accounts. Configure those in the plugin. This theme does not create products or alter payment behavior.
The default navigation reads published FluentCart page assignments. Saved navigation and template parts remain under your control.
Insert Fluent Forms using its own block on Contact or Newsletter layouts. Replace instructional text before publishing. Configure delivery with FluentSMTP and configure lists, consent, and automations in FluentCRM.
No emails, automations, forms, or customer data are created by the theme.
The Storefront editorial template includes its own starter sections and displays page content beneath them. To avoid duplicated sections, use Page without title when the homepage pattern is already in page content.
Existing Site Editor customizations override theme files. Reset an individual template or template part only if you want the packaged design back; this discards customizations to that item.

== Optional plugins ==
All integrations are optional and installed manually:
FluentCart: https://wordpress.org/plugins/fluent-cart/
FluentCRM: https://wordpress.org/plugins/fluent-crm/
Fluent Forms: https://wordpress.org/plugins/fluentform/
FluentSMTP: https://wordpress.org/plugins/fluent-smtp/
The theme includes presentation styles and layouts only. Availability of particular plugin features depends on the installed plugin version and edition. Ordinary pages and posts work without plugins.

== Privacy ==
The theme makes no external requests, tracks no visitors, and bundles no analytics. Plugin integrations have their own privacy behavior. The default design uses system fonts; editorial designs use locally bundled OFL fonts.

== Copyright and resources ==
CartsFront code and styles: Copyright 2026 Mohiuddin Omran. GPLv2 or later.
Original assets/images/studio.svg and assets/images/digital.svg: Copyright 2026 Mohiuddin Omran, GPLv2 or later. Source is the SVG itself, created for CartsFront.
Original CSS collection illustrations in assets/css/base.css: Copyright 2026 Mohiuddin Omran, GPLv2 or later.
The supplied UX Pilot reference photographs are not distributed in this package. Editorial designs use the original studio.svg and digital.svg artwork credited above. Replace decorative placeholders with your own licensed media in the Site Editor.
Space Grotesk: Copyright 2020 The Space Grotesk Project Authors, SIL Open Font License 1.1; https://github.com/floriankarsten/space-grotesk
IBM Plex Sans: Copyright 2017 IBM Corp., SIL Open Font License 1.1; https://github.com/IBM/plex
Font binaries are sourced from Fontsource; license copies are included beside the local WOFF2 files. No remote fonts, CDN scripts, or icon libraries are loaded.
System fonts are referenced, not distributed.
Screenshot: original capture of CartsFront with its own CSS illustrations, Copyright 2026 Mohiuddin Omran, GPLv2 or later.

== Editorial designs ==
Five homepage templates and patterns: Atelier, Haven, Form, Aura, and Luxe.
Create an empty page and select the matching homepage template. Set it as the front page in Settings > Reading. Edit its layout in Appearance > Editor > Templates.
Alternatively insert the matching homepage pattern into a page with the Storefront landing page template. Do not combine a full homepage pattern with a homepage template, as that duplicates the content.
When the selected static front page uses one of the five homepage templates, FluentCart product pages without an individually assigned template automatically use the matching product template. Existing per-product template assignments are respected.
Product templates use FluentCart's native blocks and require FluentCart. Optional global styles with the same names are available in the Site Editor.
Editorial collection cards are editable inspiration panels linking to the live catalog on the same page. Configure actual category destinations if you want category-specific filtering.
The newsletter section is hidden until a form is inserted. In the Site Editor, add your published Fluent Forms block inside the Newsletter form placement group; configure consent and email delivery in the plugins.

== Changelog ==
= 1.1.0 =
Design review build with five editable homepages, five native FluentCart product templates, matching global styles, local fonts, and original SVG placeholder artwork.
= 1.0.0 =
Complete starter page patterns, original local artwork, three additional style variations, optional Fluent Forms styling, accessible FAQ blocks, no-title page template, improved content styles, translation catalog, and expanded installation instructions.
= 0.3.0 =
Curated native storefront navigation, new footer layout, FluentCart 1.7.0 presentation styles, tighter commerce spacing, and a theme screenshot.
= 0.2.1 =
Render plain FluentCart shortcode blocks inside block templates; preserve already-rendered output and hide unavailable integration shortcodes.
= 0.2.0 =
Opt-in editorial homepage template with hero, collection illustration panels, live catalog shortcode, store-story section, and responsive styling. Existing page content is preserved.
= 0.1.0 =
Fresh block-theme foundation with content templates, storefront patterns, global styles, and optional FluentCart shortcode patterns.
