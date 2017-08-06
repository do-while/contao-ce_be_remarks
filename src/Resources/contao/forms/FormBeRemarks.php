<?php

/**
 * @copyright  Softleister 2010-2017
 * @author     Softleister <info@softleister.de>
 * @package    ce_be_remarks - Backend Remarks
 * @license    LGPL
 * @see        https://github.com/do-while/contao-ce_be_remarks
 *
 */

namespace Softleister\Ce_be_remarks;


/**
 * Class FormBeRemarks
 */
class FormBeRemarks extends \Widget
{
    /**
     * Template
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
    public function parse( $arrAttributes = null )
    {
        if( TL_MODE == 'BE' ) {
            $this->html = htmlspecialchars( $this->html );
        }

        return parent::parse( $arrAttributes );
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
            $headline = deserialize( $this->headline );

            $strBuffer = "\n\n" . '<!--- ce_be_remarks -->' . "\n"
                       . '<div class="' . $this->class . ' block"' . $this->cssID . ' style="' . $this->style . ' border:1px solid #8ab858; padding:5px; background-color:#fffeef;">' . "\n\n"
                       . '<div class="image_container float_left" style="padding-right:20px; float:left;">' . "\n"
                       . '<img src="system/themes/flexible/icons/' . $this->remark_icon . '.svg" width="48" height="48" title="' . $GLOBALS['TL_LANG']['tl_form_field']['be_remark'][$this->remark_icon] . '" alt="" />' . "\n"
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
