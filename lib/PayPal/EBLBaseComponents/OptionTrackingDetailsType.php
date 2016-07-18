<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Option Number. Optional
 */
class OptionTrackingDetailsType
  extends PPXmlMessage
{

    /**
     * Option Number. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OptionNumber;

    /**
     * Option Quantity. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OptionQty;

    /**
     * Option Select Name. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OptionSelect;

    /**
     * Option Quantity Delta. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OptionQtyDelta;

    /**
     * Option Alert. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OptionAlert;

    /**
     * Option Cost. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OptionCost;

}
