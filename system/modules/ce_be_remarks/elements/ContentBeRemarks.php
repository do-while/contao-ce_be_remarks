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
 * @copyright  Softleister 2010-2017
 * @author     Hagen Klemp <info@softleister.de>
 * @package    ce_BE_Remarks
 * @license    LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Softleister;


/**
 * Class ContentBeRemarks
 *
 * 
 * @copyright  Softleister 2010-2017
 * @author     Hagen Klemp <info@softleister.de>
 * @package    ce_BE_Remarks
 */
class ContentBeRemarks extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_fe_remarks';     // leeres Template = keinen Code für das Frontend
	
	protected function compile()
	{
		if( TL_MODE == 'BE' ) {
		  $this->strTemplate = 'ce_be_remarks';
		  $this->Template = new \FrontendTemplate($this->strTemplate);
		  $this->Template->setData($this->arrData);
		}
	}
	
}
