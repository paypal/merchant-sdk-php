<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class GetTransactionDetailsResponseType extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentTransactionType
     */
    public $PaymentTransactionDetails;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\ThreeDSecureInfoType
     */
    public $ThreeDSecureDetails;

}
