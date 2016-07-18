<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class IncentiveRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RequestId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RequestType;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RequestDetailLevel;

}
