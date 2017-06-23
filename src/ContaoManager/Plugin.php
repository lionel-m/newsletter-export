<?php

/**
 * Newsletter export
 * CSV export button for newsletter recipients.
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   newsletterExport
 * @license   LGPL-3.0
 */

namespace LionelM\NewsletterExportBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * @inheritdoc
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            (new BundleConfig('LionelM\NewsletterExportBundle\LionelMNewsletterExportBundle'))
                ->setReplace(['newsletter-export'])
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
        ];
    }
}
