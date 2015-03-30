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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;

/**
 * Class NewsletterExport
 *
 * Provide methods to handle subscriber export.
 * @copyright  Thyon Design
 * @author     John Brand <john.brand@thyon.com>
 * @package    Controller
 */
class NewsletterExport extends \Backend
{
    /**
     * Return a form to choose a CSV file and import it
     * @param object
     * @return string
     */
    public function exportRecipients(DataContainer $dc)
    {
        if ($this->Input->get('key') != 'export') {
            return '';
        }

        // get records
        $query = "SELECT m.firstname, m.lastname, m.gender, r.email, r.active
                    FROM tl_newsletter_recipients AS r
                    LEFT JOIN tl_member AS m ON m.email = r.email
                   WHERE r.pid = ?
                ORDER BY r.email ASC";
        $objRow = $this->Database->prepare($query)->execute($dc->id);

        // start output
        $exportFile =  'newsletter_recipients_export_' . date("Ymd-Hi");

        header('Content-Type: application/csv');
        header('Content-Transfer-Encoding: binary');
        header('Content-Disposition: attachment; filename="' . $exportFile .'.csv"');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Expires: 0');

        $output = '';
        $output .= '"Firstname", "Lastname", "Gender", "E-mail", "Active"'. "\n" ;

        while ($objRow->next()) {
            $output .= '"' . join('","', $objRow->row()).'"' . "\n";
        }

        echo $output;
        exit;
    }
}
