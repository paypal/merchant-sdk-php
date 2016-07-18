<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * E-mail address or secure merchant account ID of merchant to
 * associate with new external remember-me.
 */
class ExternalRememberMeOwnerDetailsType
  extends PPXmlMessage
{

    /**
     * A discriminant that tells SetEC what kind of data the
     * ExternalRememberMeOwnerID parameter contains. Currently, the
     * owner must be either the API actor or omitted/none. In the
     * future, we may allow the owner to be a 3rd party merchant
     * account. Possible values are: None, ignore the
     * ExternalRememberMeOwnerID. An empty value for this field
     * also signifies None. Email, the owner ID is an email address
     * SecureMerchantAccountID, the owner id is a string
     * representing the secure merchant account ID
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalRememberMeOwnerIDType;

    /**
     * When opting in to bypass login via remember me, this
     * parameter specifies the merchant account associated with the
     * remembered login. Currentl, the owner must be either the API
     * actor or omitted/none. In the future, we may allow the owner
     * to be a 3rd party merchant account. If the Owner ID Type
     * field is not present or "None", this parameter is ignored.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalRememberMeOwnerID;

}
