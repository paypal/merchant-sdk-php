<?php
namespace PayPal\Merchant\CoreComponentTypes;

use PayPal\Core\PPXmlMessage;

/**
 * @hasAttribute
 *
 */
class MeasureType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace cc
     * @attribute
     * @var string
     */
    public $unit;

    /**
     *
     * @access    public
     * @namespace cc
     * @value
     * @var double
     */
    public $value;

    /**
     * Constructor with arguments
     */
    public function __construct($unit = null, $value = null)
    {
        $this->unit  = $unit;
        $this->value = $value;
    }

}
