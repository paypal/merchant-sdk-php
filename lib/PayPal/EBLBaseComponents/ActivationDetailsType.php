<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class ActivationDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $InitialAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $FailedInitialAmountAction;

    /**
     * Constructor with arguments
     */
    public function __construct($InitialAmount = null)
    {
        $this->InitialAmount = $InitialAmount;
    }

}
