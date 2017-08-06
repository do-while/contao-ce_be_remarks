<?php

/**
 * @copyright  Softleister 2010-2017
 * @author     Softleister <info@softleister.de>
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-ce_be_remarks
 *
 */

/**
 * Add beckend style sheet
 *
 */
if( TL_MODE == 'BE' ) {
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

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['compileDefinition'][] = array('Softleister\Ce_be_remarks\CssBeRemarks', 'myCompileDefinition');
