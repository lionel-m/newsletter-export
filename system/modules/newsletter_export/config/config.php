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
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['newsletter']['export'] = array('NewsletterExport', 'exportRecipients');

if (TL_MODE == 'BE' && strlen($GLOBALS['BE_MOD']['content']['newsletter']['stylesheet']))	
{
	$GLOBALS['TL_CSS'][] = 'system/modules/newsletter_export/assets/style.css';
}
?>