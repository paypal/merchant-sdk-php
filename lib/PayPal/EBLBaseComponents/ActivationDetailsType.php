<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class ActivationDetailsType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $InitialAmount;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $FailedInitialAmountAction;

    /**
     * Constructor with arguments
     *
     * @param BasicAmountType $InitialAmount
     */
    public function __construct($InitialAmount = null)
    {
        $this->InitialAmount = $InitialAmount;
    }
}
