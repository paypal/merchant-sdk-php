<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class CompleteRecoupRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ed
     * @var \PayPal\Merchant\EnhancedDataTypes\EnhancedCompleteRecoupRequestDetailsType
     */
    public $EnhancedCompleteRecoupRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($EnhancedCompleteRecoupRequestDetails = null)
    {
        $this->EnhancedCompleteRecoupRequestDetails = $EnhancedCompleteRecoupRequestDetails;
    }

}
