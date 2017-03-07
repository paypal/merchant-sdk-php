<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class DoNonReferencedCreditRequestType extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\DoNonReferencedCreditRequestDetailsType
     */
    public $DoNonReferencedCreditRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($DoNonReferencedCreditRequestDetails = null)
    {
        $this->DoNonReferencedCreditRequestDetails = $DoNonReferencedCreditRequestDetails;
    }

}
