<?php

/**
 * @copyright  Softleister 2010-2017
 * @author     Softleister <info@softleister.de>
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see        https://github.com/do-while/contao-ce_be_remarks
 *
 */


$GLOBALS['TL_DCA']['tl_content']['palettes']['be_remarks']     = '{type_legend},type,headline;{text_legend},remark_icon,text;';

$GLOBALS['TL_DCA']['tl_content']['fields']['remark_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['remark_icon'],
    'default'                 => 'info',
    'inputType'               => 'select',
    'options'                 => array('info', 'comment', 'warning', 'question', 'edit', 'accepted', 'add', 'cancel', 'camera', 'clock', 'lightbulb', 'lock', 'mail', 'search'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_content']['be_remark'],
    'sql'                     => "varchar(255) NOT NULL default 'info'"
);
