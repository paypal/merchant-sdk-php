<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Store IDOptional Character length and limits: 50 single-byte
 * characters
 */
class MerchantStoreDetailsType
  extends PPXmlMessage
{

    /**
     * Store IDOptional Character length and limits: 50 single-byte
     * characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $StoreID;

    /**
     * Terminal IDOptional Character length and limits: 50
     * single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $TerminalID;

    /**
     * Constructor with arguments
     */
    public function __construct($StoreID = null)
    {
        $this->StoreID = $StoreID;
    }

}
