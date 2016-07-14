<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EnhancedDataTypes\EnhancedCompleteRecoupRequestDetailsType;

class CompleteRecoupRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ed
     * @var EnhancedCompleteRecoupRequestDetailsType
     */
    public $EnhancedCompleteRecoupRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param EnhancedCompleteRecoupRequestDetailsType $EnhancedCompleteRecoupRequestDetails
     */
    public function __construct($EnhancedCompleteRecoupRequestDetails = null)
    {
        $this->EnhancedCompleteRecoupRequestDetails = $EnhancedCompleteRecoupRequestDetails;
    }
}
