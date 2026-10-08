# Set up a development store

1. Install WordPress and upload the packaged theme ZIP. Activate CartsFront.
2. Set your store name/tagline under Settings > General; set the logo, navigation, colors, and footer in Appearance > Editor. Navigation uses actual pages; it does not assume page slugs.
3. Install and activate FluentCart through WordPress.org. Complete its setup wizard with test products and test payment settings.
4. Create the core pages, insert the matching CartsFront pattern or FluentCart shortcode, and assign the pages in FluentCart > Settings > Pages Setup:

| Page | Shortcode | Theme template |
| --- | --- | --- |
| Shop | `[fluent_cart_products]` | Commerce page (wide) |
| Cart | `[fluent_cart_cart]` | Commerce page (wide) |
| Checkout | `[fluent_cart_checkout]` | Checkout (minimal header) |
| Account | `[fluent_cart_customer_profile]` | Commerce page (wide) |
| Receipt | `[fluent_cart_receipt]` | Commerce page (wide) |

5. Create Home, select Storefront landing page, and insert the Storefront homepage pattern. Set Home as the static homepage under Settings > Reading. Insert the homepage pattern after activating FluentCart to include the catalog. If inserted earlier, replace the collection placeholder with the Product catalog pattern.
6. Create a Journal page and assign it as the posts page. Add real menu links to Home, Shop, Journal, Account, and Cart in the Site Editor. Insert the Mini cart pattern into the header if desired.
7. Add real About, Contact, Shipping, Returns, Privacy, and Terms content. Use a form plugin for contact/newsletter forms; no form processing belongs in the theme.
8. Install FluentCRM if needed. Configure its supported commerce integration and consent behavior separately. Do not automatically opt buyers into marketing.

## Integration boundaries
Product detail rendering and plugin-generated product URLs stay with FluentCart in this foundation. Dedicated product design adjustments require inspecting the installed plugin version first. This release does not recreate checkout inputs or payment handling.

The six integration patterns check shortcode availability while their PHP pattern is rendered. WordPress saves inserted shortcode blocks as page content; if FluentCart is later removed, remove those shortcode blocks from the affected pages. Standard theme templates remain usable.

## Sources consulted
- https://docs.fluentcart.com/guide/settings-configuration/pages-setup
- https://docs.fluentcart.com/guide/customization-and-themes/fluentcart-shortcode
- https://make.wordpress.org/themes/handbook/review/required/

Shortcode names are documentation-grounded, but compatibility is not runtime-verified yet.

## Updating from 0.1.0 to 0.2.0
Upload the new ZIP and replace the installed version. Edit Home and select **Storefront editorial (design preview)**, then save. This template contains the new homepage itself; the old Home content is preserved and can be displayed again by switching back to Storefront landing page. The new template can be edited in the Site Editor. Existing customized header/footer templates remain authoritative in WordPress.

Create a curated navigation menu in the Site Editor using actual Shop and Customer Profile pages. Omit Receipt, Checkout, and Sample Page from primary browsing navigation. No pages, products, menus, or plugin settings are changed automatically.
