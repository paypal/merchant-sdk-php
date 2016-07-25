<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class SetAccessPermissionsRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\SetAccessPermissionsRequestDetailsType
     */
    public $SetAccessPermissionsRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($SetAccessPermissionsRequestDetails = null)
    {
        $this->SetAccessPermissionsRequestDetails = $SetAccessPermissionsRequestDetails;
    }

}
