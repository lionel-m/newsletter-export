## Newsletter export extension for the Contao CMS

Contao repository : https://contao.org/en/extension-list/view/newsletter_export.html

Originally created by John Brand (http://www.brandbrilliance.co.za).

License : LGPL-3.0

### Contao 4

Add `"lionel/newsletter-export": "~4.0"` in the `composer.json` file.

Add `new LionelM\NewsletterExportBundle\LionelMNewsletterExportBundle(),` in the `app/AppKernel.php` file.

Run the command `php composer.phar update newsletter-export`.

If needed, create the symlink in `web/bundles` with `php app/console assets:install web --symlink`.
