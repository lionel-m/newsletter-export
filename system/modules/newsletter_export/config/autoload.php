<?php

/**
 * Newsletter export
 * CSV export button for newsletter recipients.
 *
 * @author    John Brand (thyon), http://www.thyon.com
 * @author    Lionel Maccaud
 * @copyright John Brand (thyon), http://www.thyon.com
 * @package   newsletterExport
 * @license   LGPL
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Contao\NewsletterExport' => 'system/modules/newsletter_export/classes/NewsletterExport.php',
));
