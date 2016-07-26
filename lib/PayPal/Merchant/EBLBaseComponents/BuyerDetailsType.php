<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Details about the buyer's account passed in by the merchant
 * or partner. Optional.
 */
class BuyerDetailsType
  extends PPXmlMessage
{

    /**
     * The client's unique ID for this user.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BuyerId;

    /**
     * The user name of the user at the marketplaces site.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BuyerUserName;

    /**
     * Date when the user registered with the marketplace.
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $BuyerRegistrationDate;

    /**
     * Details about payer's tax info. Refer to the
     * TaxIdDetailsType for more details.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\TaxIdDetailsType
     */
    public $TaxIdDetails;

    /**
     * Contains information that identifies the buyer. e.g. email
     * address or the external remember me id.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IdentificationInfoType
     */
    public $IdentificationInfo;

}
