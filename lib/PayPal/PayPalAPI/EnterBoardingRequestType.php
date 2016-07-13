<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\EnterBoardingRequestDetailsType;

class EnterBoardingRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var EnterBoardingRequestDetailsType
     */
    public $EnterBoardingRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param EnterBoardingRequestDetailsType $EnterBoardingRequestDetails
     */
    public function __construct($EnterBoardingRequestDetails = null)
    {
        $this->EnterBoardingRequestDetails = $EnterBoardingRequestDetails;
    }
}
