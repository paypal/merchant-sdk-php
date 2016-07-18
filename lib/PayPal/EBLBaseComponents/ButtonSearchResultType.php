<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class ButtonSearchResultType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $HostedButtonID;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ButtonType;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemName;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $ModifyDate;

}
