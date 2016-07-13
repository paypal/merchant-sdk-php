<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

class GetRecurringPaymentsProfileDetailsRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ProfileID;

    /**
     * Constructor with arguments
     *
     * @param string $ProfileID
     */
    public function __construct($ProfileID = null)
    {
        $this->ProfileID = $ProfileID;
    }
}
