<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Identity Access token from merchant
 */
class IdentityTokenInfoType
  extends PPXmlMessage
{

    /**
     * Identity Access token from merchant
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $AccessToken;

    /**
     * Constructor with arguments
     */
    public function __construct($AccessToken = null)
    {
        $this->AccessToken = $AccessToken;
    }

}
