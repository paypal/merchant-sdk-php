<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class InitiateRecoupRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ed
     * @var \PayPal\Merchant\EnhancedDataTypes\EnhancedInitiateRecoupRequestDetailsType
     */
    public $EnhancedInitiateRecoupRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($EnhancedInitiateRecoupRequestDetails = null)
    {
        $this->EnhancedInitiateRecoupRequestDetails = $EnhancedInitiateRecoupRequestDetails;
    }

}
