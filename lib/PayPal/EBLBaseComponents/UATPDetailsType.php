<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * UATP Card Details Type
 */
class UATPDetailsType
  extends PPXmlMessage
{

    /**
     * UATP Card Number
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $UATPNumber;

    /**
     * UATP Card expirty month
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $ExpMonth;

    /**
     * UATP Card expirty year
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $ExpYear;

}
