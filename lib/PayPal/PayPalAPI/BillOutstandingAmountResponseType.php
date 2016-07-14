<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\BillOutstandingAmountResponseDetailsType;

class BillOutstandingAmountResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var BillOutstandingAmountResponseDetailsType
     */
    public $BillOutstandingAmountResponseDetails;
}
