<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class GetTransactionDetailsResponseType
  extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\PaymentTransactionType
     */
    public $PaymentTransactionDetails;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ThreeDSecureInfoType
     */
    public $ThreeDSecureDetails;

}
