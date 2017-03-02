<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class GetMobileStatusRequestType extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\GetMobileStatusRequestDetailsType
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
