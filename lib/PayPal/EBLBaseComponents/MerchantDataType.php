<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * This holds all key-value pairs which merchants wants to pass
 * it to the open wallet(PLCC) processor.
 */
class MerchantDataType
  extends PPXmlMessage
{

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\TupleType
     */
    public $MerchantDataTuple;

}
