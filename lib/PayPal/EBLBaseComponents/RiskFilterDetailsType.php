<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Details of Risk Filter.
 */
class RiskFilterDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $Id;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Name;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

}
