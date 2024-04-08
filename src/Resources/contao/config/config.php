<?php

/**
 * @copyright  Softleister 2010-2024
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-ce_be_remarks
 *
 */

use Contao\System;

/**
 * Add beckend style sheet
 *
 */
$request = System::getContainer( )->get( 'request_stack' )->getCurrentRequest( );
$isBackend = $request && System::getContainer( )->get( 'contao.routing.scope_matcher' )->isBackendRequest( $request );

if( $isBackend ) {
    $GLOBALS['TL_CSS'][] = 'bundles/softleisterce_be_remarks/remarkstyles.css';
}

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['texts']['be_remarks'] = 'Softleister\Ce_be_remarks\ContentBeRemarks';

/**
 * Form fields
 */
$GLOBALS['TL_FFL']['be_remarks'] = 'Softleister\Ce_be_remarks\FormBeRemarks';
