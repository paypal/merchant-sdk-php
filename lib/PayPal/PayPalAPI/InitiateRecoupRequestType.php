<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EnhancedDataTypes\EnhancedInitiateRecoupRequestDetailsType;

class InitiateRecoupRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ed
     * @var EnhancedInitiateRecoupRequestDetailsType
     */
    public $EnhancedInitiateRecoupRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param EnhancedInitiateRecoupRequestDetailsType $EnhancedInitiateRecoupRequestDetails
     */
    public function __construct($EnhancedInitiateRecoupRequestDetails = null)
    {
        $this->EnhancedInitiateRecoupRequestDetails = $EnhancedInitiateRecoupRequestDetails;
    }
}
