<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class BillOutstandingAmountRequestDetailsType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProfileID;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $Amount;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Note;

    /**
     * Constructor with arguments
     *
     * @param string $ProfileID
     */
    public function __construct($ProfileID = null)
    {
        $this->ProfileID = $ProfileID;
    }
}
