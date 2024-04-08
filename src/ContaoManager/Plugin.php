<?php

/**
 * @copyright  Softleister 2010-2024
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-ce_be_remarks
 *
 */

namespace Softleister\Ce_be_remarksBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


/**
 * Plugin for the Contao Manager.
 *
 * @author Softleister
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles( ParserInterface $parser )
    {
        return [
            BundleConfig::create( 'Softleister\Ce_be_remarksBundle\SoftleisterCe_be_remarksBundle' )
                ->setLoadAfter( ['Contao\CoreBundle\ContaoCoreBundle'] )
                ->setReplace( ['ce_be_remarks'] ),
        ];
    }
}
