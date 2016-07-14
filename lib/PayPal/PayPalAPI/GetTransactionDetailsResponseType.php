<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\PaymentTransactionType;
use PayPal\EBLBaseComponents\ThreeDSecureInfoType;

class GetTransactionDetailsResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var PaymentTransactionType
     */
    public $PaymentTransactionDetails;

    /**
     * @access    public
     * @namespace ebl
     * @var ThreeDSecureInfoType
     */
    public $ThreeDSecureDetails;
}
