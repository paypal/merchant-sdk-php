<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class IncentiveItemType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemId;

    /**
     * @access    public
     * @namespace ebl
     * @var string ISO8601
     */
    public $PurchaseTime;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemCategoryList;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $ItemPrice;

    /**
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $ItemQuantity;
}
