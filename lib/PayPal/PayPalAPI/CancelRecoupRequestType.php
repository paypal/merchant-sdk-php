<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EnhancedDataTypes\EnhancedCancelRecoupRequestDetailsType;

class CancelRecoupRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ed
     * @var EnhancedCancelRecoupRequestDetailsType
     */
    public $EnhancedCancelRecoupRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param EnhancedCancelRecoupRequestDetailsType $EnhancedCancelRecoupRequestDetails
     */
    public function __construct($EnhancedCancelRecoupRequestDetails = null)
    {
        $this->EnhancedCancelRecoupRequestDetails = $EnhancedCancelRecoupRequestDetails;
    }
}
