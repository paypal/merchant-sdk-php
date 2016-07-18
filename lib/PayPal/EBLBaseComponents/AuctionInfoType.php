<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * @hasAttribute
 * AuctionInfoType Basic information about an auction.
 */
class AuctionInfoType
  extends PPXmlMessage
{

    /**
     * Customer's auction ID
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BuyerID;

    /**
     * Auction's close date
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $ClosingDate;

    /**
     *
     * @access    public
     * @namespace ebl
     * @attribute
     * @var string
     */
    public $multiItem;

}
