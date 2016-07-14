<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\DoReferenceTransactionRequestDetailsType;

/**
 * This flag indicates that the response should include
 * FMFDetails
 */
class DoReferenceTransactionRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoReferenceTransactionRequestDetailsType
     */
    public $DoReferenceTransactionRequestDetails;

    /**
     * This flag indicates that the response should include
     * FMFDetails
     * @access    public
     * @namespace ns
     * @var integer
     */
    public $ReturnFMFDetails;

    /**
     * Constructor with arguments
     *
     * @param DoReferenceTransactionRequestDetailsType $DoReferenceTransactionRequestDetails
     */
    public function __construct($DoReferenceTransactionRequestDetails = null)
    {
        $this->DoReferenceTransactionRequestDetails = $DoReferenceTransactionRequestDetails;
    }
}
