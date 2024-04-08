<?php

/**
 * @copyright  Softleister 2010-2024
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see        https://github.com/do-while/contao-ce_be_remarks
 *
 */

namespace Softleister\Ce_be_remarks;

use Contao\System;
use Contao\ContentElement;
use Contao\FrontendTemplate;


/**
 * Class ContentBeRemarks
 */
class ContentBeRemarks extends ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_fe_remarks';     // Template für Frontend

    protected function compile()
    {
        $request = System::getContainer( )->get( 'request_stack' )->getCurrentRequest( );
        $isBackend = $request && System::getContainer( )->get( 'contao.routing.scope_matcher' )->isBackendRequest( $request );

        if( $isBackend ) {
            $this->strTemplate = 'ce_be_remarks';
            $this->Template = new FrontendTemplate( $this->strTemplate );
        }
        $this->Template->setData( $this->arrData );
    }
}
