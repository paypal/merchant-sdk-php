<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Allowable values: 0,1 The value 1 indicates that the
 * customer can accept push funding, and 0 means they cannot.
 * Optional Character length and limitations: One single-byte
 * numeric character.
 */
class FundingSourceDetailsType
  extends PPXmlMessage
{

    /**
     * Allowable values: 0,1 The value 1 indicates that the
     * customer can accept push funding, and 0 means they cannot.
     * Optional Character length and limitations: One single-byte
     * numeric character.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $AllowPushFunding;

    /**
     * Allowable values: ELV, CreditCard, ChinaUnionPay, BML,
     * Finance, Qiwi This element could be used to specify the
     * perered funding option for a guest users. It has effect only
     * if LandingPage element is set to Billing. Otherwise it will
     * be ignored.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $UserSelectedFundingSource;

}
