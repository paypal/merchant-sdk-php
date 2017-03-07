<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * The earliest transaction date at which to start the search.
 * No wildcards are allowed. Required
 */
class BMButtonSearchRequestType extends AbstractRequestType
{

    /**
     * The earliest transaction date at which to start the search.
     * No wildcards are allowed. Required
     * @access    public
     * @namespace ns
     * @var string DateTime in ISO8601
     */
    public $StartDate;

    /**
     * The latest transaction date to be included in the search
     * Optional
     * @access    public
     * @namespace ns
     * @var string DateTime in ISO8601
     */
    public $EndDate;

}
