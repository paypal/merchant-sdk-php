<?php
namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Mobile specific buyer identification.
 */
class IdentificationInfoType
  extends PPXmlMessage
{

    /**
     * Mobile specific buyer identification.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\MobileIDInfoType
     */
    public $MobileIDInfo;

    /**
     * Contains login bypass information.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\RememberMeIDInfoType
     */
    public $RememberMeIDInfo;

    /**
     * Identity Access Token.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IdentityTokenInfoType
     */
    public $IdentityTokenInfo;

}
