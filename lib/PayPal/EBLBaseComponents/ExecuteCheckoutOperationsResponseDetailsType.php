<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

class ExecuteCheckoutOperationsResponseDetailsType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var SetDataResponseType
     */
    public $SetDataResponse;

    /**
     * @access    public
     * @namespace ebl
     * @var AuthorizationResponseType
     */
    public $AuthorizationResponse;
}
