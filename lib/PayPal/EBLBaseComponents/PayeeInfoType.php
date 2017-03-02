<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * PayeeInfoType Payee Information
 */
class PayeeInfoType
  extends PPXmlMessage
{

    /**
     * Email address of payee/agreement owner Character length and
     * limitations: 127 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PayeeEmail;

    /**
     * Unique Merchant ID Character length and limitations: 17
     * single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PayeeID;

}
