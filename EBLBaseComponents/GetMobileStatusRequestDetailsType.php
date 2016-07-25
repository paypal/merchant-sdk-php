<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Phone number for status inquiry
 */
class GetMobileStatusRequestDetailsType
  extends PPXmlMessage
{

    /**
     * Phone number for status inquiry
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\PhoneNumberType
     */
    public $Phone;

}
