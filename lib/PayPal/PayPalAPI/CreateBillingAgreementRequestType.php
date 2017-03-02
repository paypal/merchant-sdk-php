<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class CreateBillingAgreementRequestType extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Token;

    /**
     * Constructor with arguments
     */
    public function __construct($Token = null)
    {
        $this->Token = $Token;
    }

}
