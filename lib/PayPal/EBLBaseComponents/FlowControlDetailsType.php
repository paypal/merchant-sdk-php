<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * An optional set of values related to flow-specific details.
 */
class FlowControlDetailsType
  extends PPXmlMessage
{

    /**
     * The URL to redirect to for an unpayable transaction. This
     * field is currently used only for the inline checkout flow.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ErrorURL;

    /**
     * The URL to redirect to after a user clicks the "Pay" or
     * "Continue" button on the merchant's site. This field is
     * currently used only for the inline checkout flow.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $InContextReturnURL;

}
