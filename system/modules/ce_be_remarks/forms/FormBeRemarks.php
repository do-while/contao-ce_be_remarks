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
 * @copyright  Softleister 2010-2016
 * @author     Hagen Klemp <info@softleister.de>
 * @package    ce_BE_Remarks
 * @license    LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Softleister;


/**
 * Class FormBeRemarks
 *
 * 
 * @copyright  Softleister 2010-2013
 * @author     Hagen Klemp <info@softleister.de>
 * @package    ce_BE_Remarks
 */
class FormBeRemarks extends \Widget
{
	/**
	 * Template
	 *
	 * @var string
	 */
	protected $strTemplate = 'form_remarks';

	/**
	 * Do not validate
	 */
	public function validate()
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
	public function parse($arrAttributes=null)
	{
		if (TL_MODE == 'BE')
		{
			$this->html = htmlspecialchars($this->html);
		}

		return parent::parse($arrAttributes);
	}


	/**
	 * Generate the widget and return it as string
	 *
	 * @return string The widget markup
	 */
    public function generate()
    {
        $strBuffer = '';    // kein Output im Frontend äöü

        if( TL_MODE == 'BE' ) {
            $headline = unserialize( $this->headline );
            
            $strBuffer = "\n\n" . '<!--- ce_be_remarks -->' . "\n"
                       . '<div class="' . $this->class . ' block"' . $this->cssID . ' style="' . $this->style . ' border:1px solid #8ab858; padding:5px; background-color:#fffeef;">' . "\n\n"
                       . '<div class="image_container float_left" style="padding-right:20px; float:left;">' . "\n"
                       . '<img src="system/modules/ce_be_remarks/html/' . $this->remark_icon . '.png" width="48" height="48" title="' . $GLOBALS['TL_LANG']['tl_form_field']['be_remark'][$this->remark_icon] . '" alt="" />' . "\n"
                       . '</div>' . "\n\n";
                       
            if( $headline['value'] ) {
              $strBuffer .= '<' . $headline['unit'] . '>' . $headline['value'] . '</' . $headline['unit'] . '>';
            }
            $strBuffer .= $this->text . "\n"
                       . '</div>' . "\n\n"
                       . '<!--- END OF ce_be_remarks -->' . "\n\n";       
        }
        return $strBuffer;
    }
    
}
