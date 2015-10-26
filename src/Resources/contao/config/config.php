<?php

/**
 * Newsletter export
 * CSV export button for newsletter recipients.
 *
 * @author    John Brand, http://www.brandbrilliance.co.za
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   newsletterExport
 * @license   LGPL
 */

use Contao\CoreBundle\ContaoCoreBundle;

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['newsletter']['export'] = array('NewsletterExportBundle\NewsletterExport', 'exportRecipients');

$isBackEnd  = \System::getContainer()->isScopeActive(ContaoCoreBundle::SCOPE_BACKEND);

if ($isBackEnd && strlen($GLOBALS['BE_MOD']['content']['newsletter']['stylesheet'])) {
    $GLOBALS['TL_CSS'][] = 'bundles/lionelmnewsletterexport/style.css';
}
