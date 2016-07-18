<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * @hasAttribute
 * Value of the application-specific error parameter.
 */
class ErrorParameterType
  extends PPXmlMessage
{

    /**
     * Value of the application-specific error parameter.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Value;

    /**
     *
     * @access    public
     * @namespace ebl
     * @attribute
     * @var string
     */
    public $ParamID;

}
