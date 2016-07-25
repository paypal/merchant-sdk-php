<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class GetMobileStatusRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\GetMobileStatusRequestDetailsType
     */
    public $GetMobileStatusRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($GetMobileStatusRequestDetails = null)
    {
        $this->GetMobileStatusRequestDetails = $GetMobileStatusRequestDetails;
    }

}
