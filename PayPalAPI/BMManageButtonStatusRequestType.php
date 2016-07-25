<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 * Button ID of Hosted button.  Required Character length and
 * limitations: 10 single-byte numeric characters
 */
class BMManageButtonStatusRequestType
  extends AbstractRequestType
{

    /**
     * Button ID of Hosted button.  Required Character length and
     * limitations: 10 single-byte numeric characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $HostedButtonID;

    /**
     * Requested Status change for hosted button.  Required
     * Character length and limitations: 1 single-byte alphanumeric
     * characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ButtonStatus;

}
