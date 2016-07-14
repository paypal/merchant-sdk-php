<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\BillOutstandingAmountRequestDetailsType;

class BillOutstandingAmountRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var BillOutstandingAmountRequestDetailsType
     */
    public $BillOutstandingAmountRequestDetails;
}
