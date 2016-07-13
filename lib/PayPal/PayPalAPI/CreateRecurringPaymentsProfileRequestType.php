<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\CreateRecurringPaymentsProfileRequestDetailsType;

class CreateRecurringPaymentsProfileRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var CreateRecurringPaymentsProfileRequestDetailsType
     */
    public $CreateRecurringPaymentsProfileRequestDetails;
}
