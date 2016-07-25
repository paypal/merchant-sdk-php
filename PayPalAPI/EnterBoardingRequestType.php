<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class EnterBoardingRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\EnterBoardingRequestDetailsType
     */
    public $EnterBoardingRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($EnterBoardingRequestDetails = null)
    {
        $this->EnterBoardingRequestDetails = $EnterBoardingRequestDetails;
    }

}
