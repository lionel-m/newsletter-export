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
 * Table tl_newsletter_recipients
 */
array_insert($GLOBALS['TL_DCA']['tl_newsletter_recipients']['list']['global_operations'], 1, array
(
    'export' => array
        (
            'label'               => &$GLOBALS['TL_LANG']['tl_newsletter_recipients']['export'],
            'href'                => 'key=export',
            'class'               => 'header_css_export',
            'attributes'          => 'onclick="Backend.getScrollOffset();"'
        )
    )
);
