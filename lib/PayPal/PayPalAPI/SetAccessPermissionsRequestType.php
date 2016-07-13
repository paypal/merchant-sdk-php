<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\SetAccessPermissionsRequestDetailsType;

class SetAccessPermissionsRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var SetAccessPermissionsRequestDetailsType
     */
    public $SetAccessPermissionsRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param SetAccessPermissionsRequestDetailsType $SetAccessPermissionsRequestDetails
     */
    public function __construct($SetAccessPermissionsRequestDetails = null)
    {
        $this->SetAccessPermissionsRequestDetails = $SetAccessPermissionsRequestDetails;
    }
}
