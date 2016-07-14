<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\ManageRecurringPaymentsProfileStatusRequestDetailsType;

class ManageRecurringPaymentsProfileStatusRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var ManageRecurringPaymentsProfileStatusRequestDetailsType
     */
    public $ManageRecurringPaymentsProfileStatusRequestDetails;
}
