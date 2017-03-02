<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class ManageRecurringPaymentsProfileStatusRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProfileID;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Action;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Note;

    /**
     * Constructor with arguments
     */
    public function __construct($ProfileID = null, $Action = null)
    {
        $this->ProfileID = $ProfileID;
        $this->Action = $Action;
    }

}
