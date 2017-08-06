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
 * Class ContentBeRemarks
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
