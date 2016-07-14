<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\GetMobileStatusRequestDetailsType;

class GetMobileStatusRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var GetMobileStatusRequestDetailsType
     */
    public $GetMobileStatusRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param GetMobileStatusRequestDetailsType $GetMobileStatusRequestDetails
     */
    public function __construct($GetMobileStatusRequestDetails = null)
    {
        $this->GetMobileStatusRequestDetails = $GetMobileStatusRequestDetails;
    }
}
