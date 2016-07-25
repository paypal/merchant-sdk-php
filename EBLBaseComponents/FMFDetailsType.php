<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Thes are filters that could result in accept/deny/pending
 * action.
 */
class FMFDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\RiskFilterListType
     */
    public $AcceptFilters;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\RiskFilterListType
     */
    public $PendingFilters;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\RiskFilterListType
     */
    public $DenyFilters;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\RiskFilterListType
     */
    public $ReportFilters;

}
