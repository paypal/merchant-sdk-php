<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Information that is used to indentify the Buyer. This is
 * used for auto authorization. Mandatory if Authorization is
 * requested.
 */
class BuyerDetailType
  extends PPXmlMessage
{

    /**
     * Information that is used to indentify the Buyer. This is
     * used for auto authorization. Mandatory if Authorization is
     * requested.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IdentificationInfoType
     */
    public $IdentificationInfo;

}
