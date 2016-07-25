<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class DoNonReferencedCreditRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\DoNonReferencedCreditRequestDetailsType
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
