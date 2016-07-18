<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * External remember-me ID returned by
 * GetExpressCheckoutDetails on successful opt-in. The
 * ExternalRememberMeID is a 17-character alphanumeric
 * (encrypted) string that identifies the buyer's remembered
 * login with a merchant and has meaning only to the merchant.
 * If present, requests that the web flow attempt bypass of
 * login.
 */
class RememberMeIDInfoType
  extends PPXmlMessage
{

    /**
     * External remember-me ID returned by
     * GetExpressCheckoutDetails on successful opt-in. The
     * ExternalRememberMeID is a 17-character alphanumeric
     * (encrypted) string that identifies the buyer's remembered
     * login with a merchant and has meaning only to the merchant.
     * If present, requests that the web flow attempt bypass of
     * login.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalRememberMeID;

}
