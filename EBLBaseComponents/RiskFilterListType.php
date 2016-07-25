<?php
namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Details of Risk Filter.
 */
class RiskFilterListType
  extends PPXmlMessage
{

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\RiskFilterDetailsType
     */
    public $Filters;

}
