<?php

/**
 * Newsletter export
 * CSV export button for newsletter recipients.
 *
 * @author    John Brand, http://www.brandbrilliance.co.za
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   newsletterExport
 * @license   LGPL-3.0-or-later
 */

/**
 * Table tl_newsletter_recipients
 */
array_insert($GLOBALS['TL_DCA']['tl_newsletter_recipients']['list']['global_operations'], 1, array
(
    'export' => array
        (
            'label'      => &$GLOBALS['TL_LANG']['tl_newsletter_recipients']['export'],
            'href'       => 'key=export',
            'class'      => 'header_css_export',
            'attributes' => 'onclick="Backend.getScrollOffset();"'
        )
    )
);
