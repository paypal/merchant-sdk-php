<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\MerchantPullPaymentType;

/**
 * This flag indicates that the response should include
 * FMFDetails
 */
class BillUserRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var MerchantPullPaymentType
     */
    public $MerchantPullPaymentDetails;

    /**
     * This flag indicates that the response should include
     * FMFDetails
     * @access    public
     * @namespace ns
     * @var integer
     */
    public $ReturnFMFDetails;
}
