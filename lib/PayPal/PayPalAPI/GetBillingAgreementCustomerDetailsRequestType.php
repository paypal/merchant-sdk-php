<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

class GetBillingAgreementCustomerDetailsRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Token;

    /**
     * Constructor with arguments
     *
     * @param string $Token
     */
    public function __construct($Token = null)
    {
        $this->Token = $Token;
    }
}
