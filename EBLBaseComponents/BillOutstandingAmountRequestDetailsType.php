<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BillOutstandingAmountRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProfileID;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Note;

    /**
     * Constructor with arguments
     */
    public function __construct($ProfileID = null)
    {
        $this->ProfileID = $ProfileID;
    }

}
