<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 * Option Name. Optional
 */
class OptionDetailsType
  extends PPXmlMessage
{

    /**
     * Option Name. Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $OptionName;

    /**
     *
     * @array
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\OptionSelectionDetailsType
     */
    public $OptionSelectionDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($OptionName = null)
    {
        $this->OptionName = $OptionName;
    }

}
