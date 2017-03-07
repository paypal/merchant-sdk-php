<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * Unique PayPal customer account number, the value of which
 * was returned by GetAuthDetails Response. Required Character
 * length and limitations: 20 single-byte characters
 */
class UpdateAccessPermissionsRequestType extends AbstractRequestType
{

    /**
     * Unique PayPal customer account number, the value of which
     * was returned by GetAuthDetails Response. Required Character
     * length and limitations: 20 single-byte characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $PayerID;

    /**
     * Constructor with arguments
     */
    public function __construct($PayerID = null)
    {
        $this->PayerID = $PayerID;
    }

}
