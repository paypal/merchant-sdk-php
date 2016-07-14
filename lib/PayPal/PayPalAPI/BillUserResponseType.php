<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\FMFDetailsType;
use PayPal\EBLBaseComponents\MerchantPullPaymentResponseType;

class BillUserResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var MerchantPullPaymentResponseType
     */
    public $BillUserResponseDetails;

    /**
     * @access    public
     * @namespace ns
     * @var FMFDetailsType
     */
    public $FMFDetails;
}
