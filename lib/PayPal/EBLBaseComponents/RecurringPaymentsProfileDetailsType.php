<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Subscriber name - if missing, will use name in buyer's
 * account
 */
class RecurringPaymentsProfileDetailsType
  extends PPXmlMessage
{

    /**
     * Subscriber name - if missing, will use name in buyer's
     * account
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SubscriberName;

    /**
     * Subscriber address - if missing, will use address in buyer's
     * account
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AddressType
     */
    public $SubscriberShippingAddress;

    /**
     * When does this Profile begin billing?
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $BillingStartDate;

    /**
     * Your own unique invoice or tracking number. Optional
     * Character length and limitations: 127 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProfileReference;

    /**
     * Constructor with arguments
     */
    public function __construct($BillingStartDate = null)
    {
        $this->BillingStartDate = $BillingStartDate;
    }

}
