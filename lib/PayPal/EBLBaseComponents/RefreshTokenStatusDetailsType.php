<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Response information resulting from opt-in operation or
 * current login bypass status.
 */
class RefreshTokenStatusDetailsType
  extends PPXmlMessage
{

    /**
     * Required field that reports status of opt-in or login bypass
     * attempt.  0 = Success, successful opt-in or RefreshToken
     * corresponding to AccessToken specified  in
     * SetExpressCheckout is valid (user is still opted in).  1 =
     * New RefreshToken was generated (user is still opted in).  2
     * = Invalid ID, RefreshToken corresponding to AccessToken
     * specified in SetExpressCheckout  is invalid (user is opted
     * out). -2 = Internal Error, system error or outage during
     * opt-in or login bypass. Can retry  opt-in or login bypass
     * next time. Flow will force full authentication and allow
     * buyer to complete transaction. -1 = None, the field does not
     * represent any valid value of the status.
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $RefreshTokenStatus;

    /**
     * Identifier returned on external-remember-me-opt-in to allow
     * the merchant to request bypass of PayPal login
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RefreshToken;

    /**
     * The immutable_id is the user's unique value per merchant
     * that should never ever change for that account. This would
     * be the key used to uniquely identify the user
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ImmutableID;

}
