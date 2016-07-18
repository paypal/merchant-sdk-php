<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class IncentiveItemType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $PurchaseTime;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemCategoryList;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ItemPrice;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $ItemQuantity;

}
