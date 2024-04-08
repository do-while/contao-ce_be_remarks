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
use Contao\Widget;


/**
 * Class FormBeRemarks
 */
class FormBeRemarks extends Widget
{
    /**
     * Template
     */
    protected $strTemplate = 'form_remarks';
    protected $isBackend;


    /**
     * Import the Config instance
     */
    public function __construct( $arrAttributes = null )
    {
        parent::__construct( $arrAttributes );

        $request = System::getContainer( )->get( 'request_stack' )->getCurrentRequest( );
        $this->isBackend = $request && System::getContainer( )->get( 'contao.routing.scope_matcher' )->isBackendRequest( $request );
    }


    /**
     * Do not validate
     */
    public function validate( )
    {
        return;
    }


    /**
     * Parse the template file and return it as string
     *
     * @param array $arrAttributes An optional attributes array
     *
     * @return string The template markup
     */
    public function parse( $arrAttributes = null )
    {
        if( $this->isBackend ) {
            $this->html = htmlspecialchars( $this->html );
        }

        return parent::parse( $arrAttributes );
    }


    /**
     * Generate the widget and return it as string
     *
     * @return string The widget markup
     */
    public function generate( )
    {
        return '';          // kein Output im Frontend
    }


}
