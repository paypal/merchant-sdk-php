<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\ExecuteCheckoutOperationsResponseDetailsType;

class ExecuteCheckoutOperationsResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var ExecuteCheckoutOperationsResponseDetailsType
     */
    public $ExecuteCheckoutOperationsResponseDetails;
}
