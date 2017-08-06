<?php

/**
 * @copyright  Softleister 2010-2017
 * @author     Softleister <info@softleister.de>
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see        https://github.com/do-while/contao-ce_be_remarks
 *
 */


$GLOBALS['TL_DCA']['tl_form_field']['palettes']['be_remarks'] = '{type_legend},type,headline;{text_legend},remark_icon,text;';

$GLOBALS['TL_DCA']['tl_form_field']['fields']['remark_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['remark_icon'],
    'default'                 => 'info',
    'inputType'               => 'select',
    'options'                 => array('info', 'comment', 'warning', 'question', 'edit', 'accepted', 'add', 'cancel', 'camera', 'clock', 'lightbulb', 'lock', 'mail', 'search'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['be_remark'],
    'sql'                     => "varchar(255) NOT NULL default 'info'"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['headline'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['headline'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
    'eval'                    => array('maxlength'=>255),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
