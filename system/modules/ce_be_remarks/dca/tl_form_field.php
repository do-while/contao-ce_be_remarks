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
