<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class GetRecurringPaymentsProfileDetailsRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ProfileID;

    /**
     * Constructor with arguments
     */
    public function __construct($ProfileID = null)
    {
        $this->ProfileID = $ProfileID;
    }

}
