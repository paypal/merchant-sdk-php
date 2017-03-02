<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Details about an Item stored in the PayPal Wallet.
 */
class WalletItemsType
  extends PPXmlMessage
{

    /**
     * (Optional)Identifies a wallet item of a given type. The
     * format varies depending on the type.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Type;

    /**
     * (Optional)Uniquely identifies a wallet item of given type.
     * Format varies depending on the type. Character length and
     * limitations: 64 single-byte characters maximum.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Id;

    /**
     * (Optional)Description of wallet item. Character length and
     * limitations: 512 single-byte characters maximum.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

}
