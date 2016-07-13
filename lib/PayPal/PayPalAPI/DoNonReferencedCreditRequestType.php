<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\DoNonReferencedCreditRequestDetailsType;

class DoNonReferencedCreditRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoNonReferencedCreditRequestDetailsType
     */
    public $DoNonReferencedCreditRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param DoNonReferencedCreditRequestDetailsType $DoNonReferencedCreditRequestDetails
     */
    public function __construct($DoNonReferencedCreditRequestDetails = null)
    {
        $this->DoNonReferencedCreditRequestDetails = $DoNonReferencedCreditRequestDetails;
    }
}
