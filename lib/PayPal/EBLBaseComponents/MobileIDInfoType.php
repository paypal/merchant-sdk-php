<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * The Session token returned during buyer authentication.
 */
class MobileIDInfoType
  extends PPXmlMessage
{

    /**
     * The Session token returned during buyer authentication.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SessionToken;

}
