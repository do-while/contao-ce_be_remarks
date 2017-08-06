<?php

/**
 * @copyright  Softleister 2010-2017
 * @author     Softleister <info@softleister.de>
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see        https://github.com/do-while/contao-ce_be_remarks
 *
 */


$GLOBALS['TL_DCA']['tl_content']['palettes']['be_remarks'] = '{type_legend},type,headline;{text_legend},remark_icon,text;';

$GLOBALS['TL_DCA']['tl_content']['fields']['remark_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['remark_icon'],
    'default'                 => 'show',
    'exclude'                 => true,
    'inputType'               => 'radioTable',
    'options'                 => array('show', 'help', 'important', 'stop', 'error', 'edit', 'ok', 'delete', 'new', 'visible', 'featured', 'lock-locked'),
    'eval'                    => array('cols'=>12),
    'reference'               => &$GLOBALS['TL_LANG']['tl_content']['be_remark'],
    'sql'                     => "varchar(16) NOT NULL default 'show'"
);
