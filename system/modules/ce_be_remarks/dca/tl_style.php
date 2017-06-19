<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Softleister 2010-2013
 * @author     Hagen Klemp <info@softleister.de>
 * @package    ce_BE_Remarks
 * @license    LGPL
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
	'default'                 => 'info',
	'inputType'               => 'select',
	'options'                 => array('info', 'comment', 'warning', 'question', 'edit', 'accepted', 'add', 'cancel', 'camera', 'clock', 'lightbulb', 'lock', 'mail', 'search'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_style']['be_remark'],
	'sql'                     => "varchar(255) NOT NULL default 'info'"
);

$GLOBALS['TL_DCA']['tl_style']['fields']['remark_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_style']['remark_text'],
	'inputType'               => 'textarea',
	'eval'                    => array('decodeEntities'=>true, 'style'=>'height:120px;'),
	'sql'                     => "text NULL"
);
