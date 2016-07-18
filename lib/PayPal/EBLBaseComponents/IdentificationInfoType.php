<?php
namespace PayPal\EBLBaseComponents;

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
     * @var \PayPal\EBLBaseComponents\MobileIDInfoType
     */
    public $MobileIDInfo;

    /**
     * Contains login bypass information.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\RememberMeIDInfoType
     */
    public $RememberMeIDInfo;

    /**
     * Identity Access Token.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\IdentityTokenInfoType
     */
    public $IdentityTokenInfo;

}
