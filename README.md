## Newsletter export bundle for the [Contao CMS](https://contao.org/en)

Originally created by John Brand (http://www.brandbrilliance.co.za).

License : LGPL-3.0

### Installation

Add `"lionel/newsletter-export": "4.0.*"` in the `composer.json` file.

Add `new LionelM\NewsletterExportBundle\LionelMNewsletterExportBundle(),` in the `app/AppKernel.php` file.

Create the symlink in `web/bundles` with `php app/console assets:install web --symlink`.
