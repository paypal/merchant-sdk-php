<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * 3DSecureInfoType Information about 3D Secure parameters.
 */
class ThreeDSecureInfoType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ThreeDSecureRequestType
     */
    public $ThreeDSecureRequest;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ThreeDSecureResponseType
     */
    public $ThreeDSecureResponse;

}
