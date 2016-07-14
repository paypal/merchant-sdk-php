<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\CreateRecurringPaymentsProfileResponseDetailsType;

class CreateRecurringPaymentsProfileResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var CreateRecurringPaymentsProfileResponseDetailsType
     */
    public $CreateRecurringPaymentsProfileResponseDetails;
}
