<?php

namespace PayPal\Merchant\API;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class CancelRecoupRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ed
     * @var \PayPal\Merchant\EnhancedDataTypes\EnhancedCancelRecoupRequestDetailsType
     */
    public $EnhancedCancelRecoupRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($EnhancedCancelRecoupRequestDetails = null)
    {
        $this->EnhancedCancelRecoupRequestDetails = $EnhancedCancelRecoupRequestDetails;
    }

}
