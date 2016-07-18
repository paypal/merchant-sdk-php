<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * This element contains information that allows the merchant
 * to request to opt into external remember me on behalf of the
 * buyer or to request login bypass using external remember me.
 *
 */
class ExternalRememberMeOptInDetailsType
  extends PPXmlMessage
{

    /**
     * 1 = opt in to external remember me. 0 or omitted = no opt-in
     * Other values are invalid
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalRememberMeOptIn;

    /**
     * E-mail address or secure merchant account ID of merchant to
     * associate with new external remember-me. Currently, the
     * owner must be either the API actor or omitted/none. In the
     * future, we may allow the owner to be a 3rd party merchant
     * account.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\ExternalRememberMeOwnerDetailsType
     */
    public $ExternalRememberMeOwnerDetails;

}
