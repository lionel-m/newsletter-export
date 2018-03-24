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
 * Run in a custom namespace, so the class can be replaced
 */
namespace LionelM\NewsletterExportBundle;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class NewsletterExport
 *
 * Provide methods to handle subscriber export.
 * @author  John Brand
 * @author  Lionel Maccaud
 * @author  fritzmg
 * @package Controller
 */
class NewsletterExport extends \Backend
{
  /**
     * Return a form to choose a CSV file and import it
     * Resource: http://www.andrew-kirkpatrick.com/2013/08/output-csv-straight-to-browser-using-php/
     * @param object
     * @return string
     */
  public function exportRecipients(\DataContainer $dc)
  {
    if ($this->Input->get('key') != 'export') {
      return '';
    }

    // Headings and rows
    $headings = array('Firstname', 'Lastname', 'Gender', 'E-mail', 'Active');

    // Open the output stream
    $handle = fopen('php://output', 'w');

    // Start output buffering (to capture stream contents)
    ob_start();

    fputcsv($handle, $headings, ';');

    // get records
    $query = "SELECT m.firstname, m.lastname, m.gender, r.email, r.active
              FROM tl_newsletter_recipients AS r
              LEFT JOIN tl_member AS m ON m.email = r.email
              WHERE r.pid = ?
              ORDER BY r.email ASC";

    $objRow = $this->Database->prepare($query)->execute($dc->id);

    // Add the data queried from database
    while ($objRow->next())
    {
      fputcsv($handle, array($objRow->firstname, $objRow->lastname, $objRow->gender, $objRow->email, $objRow->active), ';');
    }

    // Get the contents of the output buffer
    $string = ob_get_clean();

    $filename = 'newsletter_recipients_export_' . date("Y-m-d_Hi");

    $response = new Response();

    $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
    $response->headers->set('Content-Transfer-Encoding', 'binary');
    $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename .'.csv"');
    $response->headers->set('Cache-Control', 'must-revalidate, post-check=0, pre-check=0');
    $response->headers->set('Pragma', 'public');
    $response->headers->set('Expires', '0');

    $response->send();

    exit($string);
  }
}
