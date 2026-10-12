> GitHub sync update, 2026-10-12: automatic approval review blocked publication of an unconfirmed UX Pilot reference photograph. The public 1.1.0 code and package exclude all 22 reference photographs and use original CartsFront SVG placeholders. The recorded October 9 screenshots and layout tests used the private photograph-based build. Product logic is unchanged; the substitution was structurally checked. Use cartsfront-1.1.0.zip for this public-source version.

# Review the five homepage designs

This is an installable local-review build, version 1.1.0. Keep the existing 1.0.0 ZIP as a rollback package. Image redistribution rights must be resolved before uploading 1.1.0 to WordPress.org .

1. Upload `cartsfront-1.1.0-design-review.zip` under Appearance → Themes → Add New → Upload Theme and replace the existing CartsFront version.
2. Create a new, empty page. In the page settings, choose **Atelier homepage**, **Haven homepage**, **Form homepage**, **Aura homepage**, or **Luxe homepage** as its template. Save the page.
3. Preview the page. To use it as the store homepage, select it in Settings → Reading → A static page.
4. Customize sections in Appearance → Editor → Templates. Each layout uses editable core WordPress blocks.
5. Select the matching global style under Appearance → Editor → Styles if you want the same fonts and colors on ordinary pages too.

## Products

FluentCart product pages with no custom template automatically follow the design selected for the static homepage. The theme respects individually assigned product templates. To customize a design, find its product template in the Site Editor.

The product title, gallery, price, stock, SKU, variants, purchase buttons, description and reviews come from FluentCart. The five demo products in the test screenshots exist only in an isolated QA installation and are not imported into your store.

## Merchandising

Editorial cards link to the collection on the same page. They do not pretend to filter a product category. Replace images and copy with your own collection information and set real category links if needed. Live catalog cards display your actual products and prices.

The homepages can also be inserted as patterns into page content, using the existing Storefront landing page template. Do not insert a homepage pattern inside its corresponding homepage template, because both contain the full layout.

## Newsletter

In the Site Editor, find the Newsletter form placement group and insert your published Fluent Forms block. Configure list mapping and consent in Fluent Forms/FluentCRM, and delivery in your mail plugin. The section is hidden on the front end until a form exists. The theme never activates marketing automations or sends an email.

## What is not included

The supplied files contain five homepage designs and five product-detail designs. No author-page designs were included. There are no fake cart counts, fake review scores, hardcoded product prices, remote font calls, CDN JavaScript dependencies, or auto-installed plugins.
