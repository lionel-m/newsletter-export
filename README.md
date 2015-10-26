## Newsletter export extension for the Contao CMS

Contao repository : https://contao.org/en/extension-list/view/newsletter_export.html

Originally created by John Brand (http://www.brandbrilliance.co.za).

License : LGPL

### Contao 4.x beta

Add `"lionel/newsletter-export": "~4.0@beta"` in the `composer.json` file.

Add `new LionelM\NewsletterExportBundle\LionelMNewsletterExportBundle(),` in the `app/AppKernel.php` file.

Create the symlink in `web/bundles` with `php app/console assets:install web --symlink`.
