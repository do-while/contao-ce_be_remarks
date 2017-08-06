<?php

/**
 * @copyright  Softleister 2010-2017
 * @author     Softleister <info@softleister.de>
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see        https://github.com/do-while/contao-ce_be_remarks
 *
 */

$GLOBALS['TL_DCA']['tl_style']['palettes']['__selector__'][] = 'beremark';

$GLOBALS['TL_DCA']['tl_style']['palettes']['default'] .= ';{remark_legend:hide},beremark';

$GLOBALS['TL_DCA']['tl_style']['subpalettes']['beremark'] = 'remark_icon,remark_text';


$GLOBALS['TL_DCA']['tl_style']['fields']['beremark'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_style']['beremark'],
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_style']['fields']['remark_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_style']['remark_icon'],
    'default'                 => 'show',
    'exclude'                 => true,
    'inputType'               => 'radioTable',
    'options'                 => array('show', 'help', 'important', 'stop', 'error', 'edit', 'ok', 'delete', 'new', 'visible', 'featured', 'lock-locked'),
    'eval'                    => array('cols'=>12),
    'reference'               => &$GLOBALS['TL_LANG']['tl_style']['be_remark'],
    'sql'                     => "varchar(16) NOT NULL default 'show'"
);

$GLOBALS['TL_DCA']['tl_style']['fields']['remark_text'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_style']['remark_text'],
    'inputType'               => 'textarea',
    'eval'                    => array('decodeEntities'=>true, 'style'=>'height:120px;'),
    'sql'                     => "text NULL"
);
