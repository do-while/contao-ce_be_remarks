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


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Softleister;


/**
 * Class CssBeRemarks
 *
 * 
 * @copyright  Softleister 2010-2013
 * @author     Hagen Klemp <info@softleister.de>
 * @package    ce_BE_Remarks
 */
class CssBeRemarks extends \Backend
{
  
  public function myCompileDefinition( $row, $blnWriteToFile=true, $vars=array() )
  {
    if( !$blnWriteToFile && $row['beremark'] ) {

      return "\n" . '<!--- ce_be_remarks -->'
            .'<div class="ce_be_remarks block" style=" border:1px solid #8ab858; padding:5px; background-color:#fffeef;">'
            .'<div class="image_container float_left" style="padding-right:20px; float:left;">'
            .'<img src="system/modules/ce_be_remarks/html/' . $row['remark_icon'] . '.png" width="48" height="48" title="' . $GLOBALS['TL_LANG']['tl_style']['be_remark'][$row['remark_icon']] . '" alt="" />'
            .'</div>'
            . $row['remark_text'] . '</div>'
            .'<!--- END OF ce_be_remarks -->';
    }
 
    return '';
  }

}
