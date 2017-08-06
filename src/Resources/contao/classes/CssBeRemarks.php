<?php

/**
 * @copyright  Softleister 2010-2017
 * @author     Softleister <info@softleister.de>   äöü
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-ce_be_remarks
 *
 */

namespace Softleister\Ce_be_remarks;

/**
 * Class CssBeRemarks
 */
class CssBeRemarks extends \Backend
{
    public function myCompileDefinition( $row, $blnWriteToFile=true, $vars=array() )
    {
        if( !$blnWriteToFile && $row['beremark'] ) {
    
            return "\n" . '<!--- ce_be_remarks -->'
                  .'<div class="ce_be_remarks block" style=" border:1px solid #8ab858; padding:5px; background-color:#fffeef;">'
                  .'<div class="image_container float_left" style="padding-right:20px; float:left;">'
                  .'<img src="system/themes/flexible/icons/' . $row['remark_icon'] . '.svg" width="48" height="48" title="' . $GLOBALS['TL_LANG']['tl_style']['be_remark'][$row['remark_icon']] . '" alt="">'
                  .'</div>'
                  . $row['remark_text']
                  .'<div class="clear"></div>'
                  . '</div>'
                  .'<!--- END OF ce_be_remarks -->';
        }
        return '';
    }
}
